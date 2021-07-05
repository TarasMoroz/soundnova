<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	private $viewfolder = 'desktop' ;

	public function __construct()
 	{
 		parent::__construct();
		$this->load->model('Settings_model', 'settings');
 	}

	public function index()
 	{
		$data = get_common_page_data();

 		$this->load->view($this->viewfolder.'/v_cart', $data);
 	}

	public function checkout()
	{
		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_checkout', $data);
	}

	public function purchase_success()
	{
		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_success_page', $data);
	}

}
