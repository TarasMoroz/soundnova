<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_Controller {

	public function __construct(){
 		parent::__construct();
 		//$this->load->model('auth');
 		//$this->load->model('googlecalendar');
 	}

	public function index()
	{
		//echo 'ALL Events';

		$start = false;
		$end   = false;
		$data['title'] = 'Events of today';

		//$data['events'] = $this->googlecalendar->getEvents('primary',$start,$end,40);

		$this->load->view('v_googlesidebar');
	}

	public function show_event($event)
	{
		echo $event;
		//$this->load->view('welcome_message');
	}
}
