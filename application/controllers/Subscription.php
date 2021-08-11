<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

	private $viewfolder = 'desktop' ;

	public function __construct()
 	{
 		parent::__construct();
		$this->load->model('Settings_model', 'settings');
 	}

	public function index()
 	{
		$data = get_common_page_data();

 		$this->load->view($this->viewfolder.'/v_subscription', $data);
 	}

	public function show_page_stageone()
	{
		
		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_subscriptStage1', $data);
	}

	public function show_page_stageone_join()
	{
		
		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_subscriptPageJoinNow', $data);
	}

	public function show_page_stageone_free()
	{
		
		$data = get_common_page_data(); 

		$this->load->view($this->viewfolder.'/v_subscriptPageTryFree', $data);
	}

	public function show_page_stagetwo()
	{
		
		$data = get_common_page_data(); 

		$this->load->view($this->viewfolder.'/v_subscriptStage2', $data);
	}

	public function show_page_stagethree()
	{
		
		$data = get_common_page_data(); 

		$this->load->view($this->viewfolder.'/v_subscriptStage3', $data);
	}

}
