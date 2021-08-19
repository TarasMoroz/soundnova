<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/CreatorJwt.php';
include APPPATH . 'third_party/Hybridauth/autoload.php';

use Hybridauth\Exception\Exception;
use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;
use Hybridauth\Storage\Session;


class User extends CI_Controller {

	private $device = 'desktop';
	private $viewfolder = 'desktop';

	private $configHybridauth = [

        'callback' => 'https://soundnova.net/soc_auth_callback',
        'providers' => [
            'Google' => [
                'enabled' => true,
                'keys' => [
                    'id' => '309301136744-th5lcvvm1jbka2f73922ra8hqtm8m0pq.apps.googleusercontent.com',
                    'secret' => '-9AclzW9mx3LJonDg5bn-Vas',
                ],
            ],
            'Facebook' => [
                'enabled' => true,
                'keys' => [
                    'id' => '357029112558904',
                    'secret' => '89514b26b84e57713d4c8b2d59a068c2',
                ],
            ],
        ],
    ];

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

 	public function logout()
 	{

 		// firstly kills all connected adapters!
 		$hybridauth = new Hybridauth($this->configHybridauth);
 		$adapters = $hybridauth->getConnectedAdapters();

		foreach ($adapters as $name => $adapter) {

            $adapter = $hybridauth->getAdapter($name);
            $adapter->disconnect();

        }

        // destroys internal users session variable
		$this->session->unset_userdata('aUser');
		redirect(base_url('/'));

	}

	public function get_soc_auth_adapters(){
		
	}


	// hybridauth callback
	public function soc_auth_callback(){

		$refStr = isset($_SERVER['HTTP_REFERER']) ? strtolower($_SERVER['HTTP_REFERER']) : '';

	    if(strpos($refStr, 'soundnova.net') !== false){
	        $_SESSION['soc_referer'] = $_SERVER['HTTP_REFERER'];
	    }

		try {

	          $hybridauth = new Hybridauth($this->configHybridauth);

	          $storage = new Session();

	          if (isset($_GET['provider'])) {
	              $storage->set('provider', $_GET['provider']);
	          }

	          if ($provider = $storage->get('provider')) {
	              $hybridauth->authenticate($provider);
	              $storage->set('provider', null);
	          }

	          if (isset($_GET['logout'])) {
	              $adapter = $hybridauth->getAdapter($_GET['logout']);
	              $adapter->disconnect();
	          }

	          // social login procedure
	          $adapters = $hybridauth->getConnectedAdapters();

	          foreach ($adapters as $name => $adapter) {

	          	// echo $name;

	          	// if($name == $_GET['provider']){

	          		$profileObj = $adapter->getUserProfile();

	          		// seems like all is good and we can retrieve user profile info
	          		$expectedSoc = $this->get_user_soc($name, $profileObj->email);

	          		$expectedUser = $this->get_user_data_by_email($profileObj->email);

	          		// die($profileObj->email);

	          		$id_logged_user = 0;

					if($expectedUser['id'])
					{

						$refreshUserData = [];

						if(!$expectedUser['firstname']) $refreshUserData['firstname'] = $profileObj->firstName;
						if(!$expectedUser['lastname']) $refreshUserData['lastname'] = $profileObj->lastName;
						if(!$expectedUser['picture']) $refreshUserData['picture'] = $profileObj->photoURL;

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

						$genPassword = rand(1000,9999);

						//insert data
						$this->db->simple_query("INSERT 
											INTO user (email,email_active,email_activation_code,password,picture,firstname,lastname,dt_register) 
											VALUES ('".$profileObj->email."',1,'','".$genPassword."','".$profileObj->photoURL."','".$profileObj->firstName."','".$profileObj->lastName."',NOW())");

						// here we may send email with GENERATED password !!!
						$id_logged_user = $this->db->insert_id();

						// confirmation mail
						$createdUser = $this->get_user_data_by_email($profileObj->email);

						if($createdUser['id'] && $createdUser['email']){
							$mailRes = send_html_mail([
									'createdUser' => $createdUser
								],
								'v_mail_signup_soc', 
								$createdUser['email'], 
								'Registration'
							);
						}
					}

					if(!$expectedSoc['id'] && $id_logged_user){

						// bind soc account data
						$this->db->simple_query("INSERT 
											INTO user_soc (id_user,provider,identity,email) 
											VALUES ('".$id_logged_user."','".$name."','".$profileObj->identifier."','".$profileObj->email."')");
					}

					// All is good! here we can login user and redirect to dashboard!
					if($id_logged_user){
						$this->user_login_handler($id_logged_user, true, $data['email']);
					}

	          	// }
	          }

	          // $redirectURI = isset($_SESSION['soc_referer']) ? $_SESSION['soc_referer'] : 'https://soundnova.net';

	          // HttpClient\Util::redirect($redirectURI);

	    } catch (Exception $e) {
	          echo $e->getMessage();
	    }

	}

 	public function login(){

 		// if already logged in
 		if($this->session->userdata('aUser')){
			redirect(base_url('dashboard/'));
			exit();
		}

		$data = get_common_page_data();

		// perform google button
		$data['g_login_url'] = $this->configHybridauth['callback'].'?provider=Google';
		$data['f_login_url'] = $this->configHybridauth['callback'].'?provider=Facebook';

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

		            $aUser = $this->get_user_data_by_id($jwtData['id']);

					if($aUser['id']){
						$this->session->set_userdata(['aUser' => $aUser]);
						$this->db->simple_query("UPDATE user SET dt_last_login = NOW() WHERE id = ".$aUser['id']);

						redirect($_SERVER['REQUEST_URI'], 'refresh'); 
					}

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

		return $this->db->query("SELECT email, firstname, lastname, displayname, picture FROM user WHERE id = ".$id)->row_array();
	}

	private function get_user_data_by_email($email){

		if(!$email) return false;

		return $this->db->query("SELECT * FROM user WHERE email = '".$email."'")->row_array();
	}


	private function get_user_soc($provider, $email){

		if(!$provider || !$email) return false;

		return $this->db->query("SELECT * FROM user_soc WHERE provider = '".$provider."' AND email = '".$email."'")->row_array();
	}
}
