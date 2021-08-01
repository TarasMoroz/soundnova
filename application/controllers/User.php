<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	private $device = 'desktop';
	private $viewfolder = 'desktop';

	public function __construct()
 	{
 		
 		parent::__construct();
		$this->load->helper('url');

		if($this->agent->is_mobile()) $this->device =  'mobile';
 	}

	public function index()
 	{
		header("HTTP/1.0 404 Not Found");

		$data = get_common_page_data();
		$this->load->view($this->viewfolder.'/v_error-404', $data);
 	}


 	public function login(){

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_login', $data);
	}

 	public function signup(){

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_signup', $data);
	}

 	public function account(){

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_dashboard', $data);
	}
	public function orders(){

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_account_orders', $data);
	}
}
