<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/CreatorJwt.php';

class User extends CI_Controller {

	private $device = 'desktop';
	private $viewfolder = 'desktop';

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


 	public function login(){

 		// if already logged in

 		if($this->session->userdata('aUser')){
			redirect(base_url('dashboard/'));
			exit();
		}

		$data = get_common_page_data();

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
			$aUser = $this->get_user_data_by_id($expectedUser['id']);

			if($aUser) $this->session->set_userdata(['aUser' => $aUser]);

			$this->db->simple_query("UPDATE user SET dt_last_login = NOW() WHERE id = ".$expectedUser['id']);

			// If we need to store hash in cookies!
			if($remember){

				$tokenData = [
					'id' => $expectedUser['id'],
					'email' => $expectedUser['email'],
					'timeStamp' => Date('Y-m-d h:i:s')
				];

        		$jwtToken = $this->objOfJwt->GenerateToken($tokenData);
        
        		// die($jwtToken);

        		setcookie('jwt', $jwtToken, time() + (86400 * 30), "/", "", false, false); // 86400 = 1 day * 30
			}

			redirect(base_url('dashboard/'));

			exit();

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
		
		$hash = isset($_POST['hash']) ? $_POST['hash'] : '';
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

	private function get_user_data_by_id($id){
		
		$id = (int) $id;

		if(!$id) return [];

		return $this->db->query("SELECT email, firstname, lastname, displayname FROM user WHERE id = ".$id)->row_array();
	}
}
