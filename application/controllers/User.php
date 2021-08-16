<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/CreatorJwt.php';

class User extends CI_Controller {

	private $device = 'desktop';
	private $viewfolder = 'desktop';

	private $gClientId = '309301136744-th5lcvvm1jbka2f73922ra8hqtm8m0pq.apps.googleusercontent.com';
	private $gClientSecret = '-9AclzW9mx3LJonDg5bn-Vas';

	public function __construct()
 	{
 		
 		parent::__construct();
		$this->load->helper('url');

		$this->objOfJwt = new CreatorJwt();

		if($this->agent->is_mobile()) $this->device =  'mobile';
 	}

	public function index()
 	{
		header("HTTP/1.0 404 Not Found");

		$data = get_common_page_data();
		$this->load->view($this->viewfolder.'/v_error-404', $data);
 	}

 	public function logout(){

		$this->session->unset_userdata('aUser');
		redirect(base_url('/'));

	}



	public function g_login()
	{

		$google_client = $this->g_init_client();

		if(isset($_GET["code"]))
		{
			$token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

			if(!isset($token["error"]))
			{
				$google_client->setAccessToken($token['access_token']);

				$this->session->set_userdata('access_token', $token['access_token']);

				$google_service = new Google_Service_Oauth2($google_client);

				$data = $google_service->userinfo->get();

				$current_datetime = date('Y-m-d H:i:s');

				$expectedUser = $this->get_user_data_by_g_uid($data['id']);

				if(!$expectedUser['id']) $expectedUser = $this->get_user_data_by_email($data['email']);

				$id_logged_user = 0;

				if($expectedUser['id'])
				{

					// we found user that already existed with google uuid 
					// check for correct data

					$refreshUserData = [];

					if(!$expectedUser['g_email']) $refreshUserData['g_email'] = $data['email'];
					if(!$expectedUser['firstname']) $refreshUserData['firstname'] = $data['given_name'];
					if(!$expectedUser['lastname']) $refreshUserData['lastname'] = $data['family_name'];
					if(!$expectedUser['picture']) $refreshUserData['picture'] = $data['picture'];

					// updating
					if(!empty($refreshUserData)){

						$sUserUpdate = '';

						foreach($refreshUserData as $key => $value){
							$sUserUpdate .= ", ".$key." = '".$value."'";
						}

						$this->db->simple_query("UPDATE user SET dt_last_login = NOW() ".$sUserUpdate."  WHERE id = ".$expectedUser['id']);
					}

					$id_logged_user = $expectedUser['id'];
				}
				else
				{
					//insert data
					$this->db->simple_query("INSERT 
										INTO user (email,email_active,email_activation_code,password,picture,firstname,lastname,dt_register) 
										VALUES ('".$data['email']."',1,'','','".$data['picture']."','".$data['given_name']."','".$data['family_name']."',NOW())");

					$id_logged_user = $this->db->insert_id();
				}

				// All is good! here we can login user and redirect to dashboard!
				if($id_logged_user){

					$this->user_login_handler($id_logged_user, true, $data['email']);
				}
			} else {
				// Google login Error handle

				// $token["error"];
				// writes errors to ses and redir to signup page
				$this->session->set_userdata([
					'displayLoginErrors' => $token["error"]
					// 'loginEmail' => $email
				]);

				redirect(base_url('login/'));
				exit();
			}
		}
	}

	private function g_init_client(){

		include_once APPPATH . "third_party/google-api-php/src/Google/autoload.php";

		// $google_client = new Google\Client();

		// $client->setDeveloperKey($api_key);

		// $client->setAuthConfig('client_secret_309301136744-th5lcvvm1jbka2f73922ra8hqtm8m0pq.apps.googleusercontent.com.json');
		// $client->addScope(Google\Service\Drive::DRIVE_METADATA_READONLY);
		// $client->setRedirectUri('http://' . $_SERVER['HTTP_HOST'] . '/oauth2callback.php');
		// $client->setAccessType('offline');        // offline access
		// $client->setIncludeGrantedScopes(true);   // incremental auth

		$google_client = new Google_Client();

		$google_client->setClientId($this->gClientId); //Define your ClientID
		$google_client->setClientSecret($this->gClientSecret); //Define your Client Secret Key
		$google_client->setRedirectUri('https://soundnova.net/g_login'); //Define your Redirect Uri

		$google_client->addScope('email');
		$google_client->addScope('profile');

		return $google_client;
	}

 	public function login(){

 		// if already logged in
 		if($this->session->userdata('aUser')){
			redirect(base_url('dashboard/'));
			exit();
		}

		$google_client = $this->g_init_client();

		$data = get_common_page_data();

		// perform google button
		$data['g_login_url'] = $google_client->createAuthUrl();

		// Once user tryed to login
		$data['displayLoginErrors'] = $this->session->userdata('displayLoginErrors');
		$data['loginEmail'] = $this->session->userdata('loginEmail');

		$this->load->view($this->viewfolder.'/v_login', $data);
	}

	public function proceed_login(){

		$email = $_POST['user_email'];
		$pass = $_POST['user_pass'];
		$remember = (int) $_POST['remember'];

		$email = addslashes(htmlentities($email));
		$pass = addslashes(htmlentities($pass));

		// clearing session data
		$this->session->unset_userdata('displayLoginErrors');
		$this->session->unset_userdata('loginEmail');

		$validate = true;
		$displayLoginErrors = [];

		// 0. Check for both Email and Pass
		if(!$email || !$pass){
			$validate = false;
			$displayLoginErrors[] = 'Make sure you entered both email and password!';
		}

		// 1. Correct email
		if(!preg_match("/[0-9a-z]+@[a-z]/", $email)){
			$validate = false;
			$displayLoginErrors[] = 'Seems like your email wrong!';
		}

		// 2. Check if user exist and has activated email
		$expectedUser = $this->db->query("SELECT * FROM user WHERE email = '".$email."' and password = '".$pass."'")->row_array();

		if($expectedUser['id']){
			
			if(!$expectedUser['email_active']){

				$validate = false;
				$displayLoginErrors[] = 'You need to activate your email before!';


				$this->session->set_userdata([
					'needEmailActivation' => true,
					'activationEmail' => $email,
					'activationCode' => $expectedUser['email_activation_code']
				]);

				redirect(base_url('signup/'));

				exit();
			}

		} else {

			$validate = false;
			$displayLoginErrors[] = 'There no registered user with such email and password!';
		}

		if($validate){

			// All is good! here we can login user and redirect to dashboard!
			$this->user_login_handler($expectedUser['id'], $remember, $expectedUser['email']);

		} else {

			// writes errors to ses and redir to signup page
			$this->session->set_userdata([
				'displayLoginErrors' => $displayLoginErrors,
				'loginEmail' => $email
			]);

			redirect(base_url('login/'));
			exit();

		}

	}

	// how do we handle user login procedure
	private function user_login_handler($id, $remember = false, $email = ''){

		$id = (int) $id;

		if(!$id) return false;

		$aUser = $this->get_user_data_by_id($id);

		if($aUser) $this->session->set_userdata(['aUser' => $aUser]);

		$this->db->simple_query("UPDATE user SET dt_last_login = NOW() WHERE id = ".$id);

		// If we need to store hash in cookies!
		if($remember && $email){

			$tokenData = [
				'id' => $id,
				'email' => $email,
				'timeStamp' => Date('Y-m-d h:i:s')
			];

    		$jwtToken = $this->objOfJwt->GenerateToken($tokenData);
    
    		// die($jwtToken);

    		setcookie('jwt', $jwtToken, time() + (86400 * 30), "/", "", false, false); // 86400 = 1 day * 30
		}

		redirect(base_url('dashboard/'));

		exit();
	}

 	public function signup(){

 		// if already signed up
 		if($this->session->userdata('aUser')){
			redirect(base_url('dashboard/'));
			exit();
		}

		$data = get_common_page_data();

		// Once user tryed to signup
		$data['displaySignupErrors'] = $this->session->userdata('displaySignupErrors');
		$data['signupEmail'] = $this->session->userdata('signupEmail');

		// If user already registered but need to activate email
		$data['needEmailActivation'] = $this->session->userdata('needEmailActivation');
		$data['activationEmail'] = $this->session->userdata('activationEmail');
		$data['activationCode'] = $this->session->userdata('activationCode');

		$this->load->view($this->viewfolder.'/v_signup', $data);
	}

	public function email_activate(){
		
		$hash = isset($_GET['hash']) ? $_GET['hash'] : '';
		$code = isset($_POST['code']) ? $_POST['code'] : '';

		$hash = addslashes(htmlentities($hash));
		$code = addslashes(htmlentities($code));

		$activationEmail = $this->session->userdata('activationEmail');

		// recieved code from web form... generating hash and trying to find right user
		if($code && $activationEmail) $hash = md5($activationEmail.$code);

		if(!$hash){

			redirect(base_url('signup/'));
			exit();

		}

		// 1. Check for expected User
		$expectedUser = $this->db->query("SELECT * FROM user WHERE md5(CONCAT(email, email_activation_code)) = '".$hash."'")->row_array();

		if($expectedUser['id']){
			
			$this->session->unset_userdata('needEmailActivation');
			$this->session->unset_userdata('activationEmail');
			$this->session->unset_userdata('activationCode');

			// activates user
			$this->db->simple_query("UPDATE user SET email_active = 1 WHERE id = ".$expectedUser['id']);

			// All is good! here we can login user and redirect to dashboard!
			$aUser = $this->get_user_data_by_id($expectedUser['id']);

			if($aUser) $this->session->set_userdata(['aUser' => $aUser]);

			$this->db->simple_query("UPDATE user SET dt_last_login = NOW() WHERE id = ".$expectedUser['id']);

			redirect(base_url('dashboard/'));
			exit();

		} else {

			// wrong hash !!!
			redirect(base_url('signup/'));
			exit();
		}
	}

	public function proceed_signup(){

		$email = $_POST['user_email'];
		$pass = $_POST['user_pass'];

		$email = addslashes(htmlentities($email));
		$pass = addslashes(htmlentities($pass));

		// clearing session data
		$this->session->unset_userdata('displaySignupErrors');
		$this->session->unset_userdata('signupEmail');

		$validate = true;
		$displaySignupErrors = [];

		// 0. Check for both Email and Pass
		if(!$email || !$pass){
			$validate = false;
			$displaySignupErrors[] = 'Make sure you entered both email and password!';
		}

		// 1. Correct email
		if(!preg_match("/[0-9a-z]+@[a-z]/", $email)){
			$validate = false;
			$displaySignupErrors[] = 'Seems like your email wrong!';
		}

		// 2. Check if Email already in DB
		$expectedUser = $this->db->query("SELECT * FROM user WHERE email = '".$email."'")->row_array();

		if($expectedUser['id']){
			$validate = false;
			$displaySignupErrors[] = 'Email already registered, try to login!';
		}

		// 3. Pass longer than 5 chars
		if(strlen($pass) < 5){
			$validate = false;
			$displaySignupErrors[] = 'To short password, please make it longer rather 5 chars!';
		}

		if($validate){
				
			$activationCode = rand(1000, 9999);

			// create user
			$this->db->simple_query("INSERT 
										INTO user (email,email_active,email_activation_code,password,dt_register) 
										VALUES ('".$email."',0,".$activationCode.",'".$pass."',NOW())");

			// confirmation mail
			$mailRes = send_html_mail([
					'activationCode' => $activationCode,
					'email' => $email
				],
				'v_mail_signup', 
				$email, 
				'Email confirmation'
			);

			// create session
			$this->session->set_userdata([
				'needEmailActivation' => true,
				'activationEmail' => $email,
				'activationCode' => $activationCode
			]);
			
			// redirect to email confirmation
			redirect(base_url('signup/'));
			exit();

		} else {

			// writes errors to ses and redir to signup page
			$this->session->set_userdata([
				'displaySignupErrors' => $displaySignupErrors,
				'signupEmail' => $email
			]);

			redirect(base_url('signup/'));
			exit();
		}


	}

 	public function account(){

 		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_dashboard', $data);
	}
	
	public function orders(){

		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_orders', $data);
	}
	
	public function subscriptions(){

		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_subscriptions', $data);
	}
	
	public function downloads(){

		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_downloads', $data);
	}
	
	public function payments(){

		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_payments', $data);
	}

	public function details(){

		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_details', $data);
	}

	public function coupons(){

		$this->is_user_logged();

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_coupons', $data);
	}


	// private methods

	private function is_user_logged(){

		if(!$this->session->userdata('aUser')){

			// here we additionaly check for JWT, if user selected remember me while Login
			if(isset($_COOKIE['jwt'])){

        		$jwttoken = $_COOKIE['jwt']; // читаем куку, и дальше проверяем ее на валидность

        		try
		        {
		            $jwtData = $this->objOfJwt->DecodeToken($jwttoken);

		            // die(json_encode($jwtData));

		            $aUser = $this->get_user_data_by_id($jwtData['id']);

					if($aUser) $this->session->set_userdata(['aUser' => $aUser]);

					$this->db->simple_query("UPDATE user SET dt_last_login = NOW() WHERE id = ".$aUser['id']);

		        }
		        catch (Exception $e){

		        	// write to logs error... 
		        	// unset jwt cookie
		        	unset($_COOKIE['jwt']);

		        	redirect(base_url('login/'));
					exit();
		        }

        	} else {
        		redirect(base_url('login/'));
				exit();
        	}
		}
	}

	// MODEL

	private function get_user_data_by_id($id){
		
		$id = (int) $id;

		if(!$id) return [];

		return $this->db->query("SELECT email, firstname, lastname, displayname FROM user WHERE id = ".$id)->row_array();
	}

	private function get_user_data_by_g_uid($uid){

		if(!$uid) return false;

		return $this->db->query("SELECT * FROM user WHERE g_uid = '".$uid."'")->row_array();
	}

	private function get_user_data_by_email($email){

		if(!$email) return false;

		return $this->db->query("SELECT * FROM user WHERE email = '".$email."'")->row_array();
	}
}
