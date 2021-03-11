<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	private $languages = array('uk'=>'УКР', 'ru'=>'РУС');
	private $viewfolder = 'desktop' ;

	public function __construct()
 	{
 		header('Access-Control-Allow-Origin: *');
	    header('Access-Control-Allow-Methods: GET');
	    header('Access-Control-Max-Age: 1000');
	    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
 		
 		parent::__construct();
		$this->load->model('Settings_model', 'settings');

		// новая почта и ликпей...
		$this->load->library('NP');
		$this->load->library('LP');

		//if($this->agent->is_mobile()) $this->viewfolder =  'mobile';
 	}

	// MAIN PAGE
	public function index()
 	{
		$data = array();
		error_reporting(1);

		// Должно быть в каждом методе !!!
		$lang =  $_SESSION['lang'];
		$data['lang'] = $lang;
		$data['s'] = $this->settings->get(1);
		// список доступных категорий каталога
		$cats = $this->db->query("SELECT * FROM catalog ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $cat) { $data['cats'][$cat['id']] = $cat; }

		$data['meta_title'] = ($lang == 'ru') ? 'Корзина' : 'Кошик';
		$data['meta_description'] = ($lang == 'ru') ? 'Корзина' : 'Кошик';

		// боковой блок, передаем настройки, категории, массив параметров
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => false, 'foldup_categories' => false]);


		$cart = [];
		if(isset($_COOKIE['cart'])){
			$cart = json_decode($_COOKIE['cart'], true);

			$data['goods'] = [];
			if(!empty($cart['goods'])) $data['goods'] = $cart['goods'];

			$data['cart'] = $cart;
		}


 		$this->load->view($this->viewfolder.'/v_cart', $data);
 	}

	// REST PAGES
	public function checkout()
	{
		$data = array();
		error_reporting(1);

		// Должно быть в каждом методе !!!
		$lang =  $_SESSION['lang'];
		$data['lang'] = $lang;
		$data['s'] = $this->settings->get(1);
		// список доступных категорий каталога
		$cats = $this->db->query("SELECT * FROM catalog ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $cat) { $data['cats'][$cat['id']] = $cat; }

		$data['meta_title'] = ($lang == 'ru') ? 'Оформление заказа' : 'Оформлення замовлення';
		$data['meta_description'] = ($lang == 'ru') ? 'Оформление заказа' : 'Оформлення замовлення';

		// боковой блок, передаем настройки, категории, массив параметров
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => false, 'foldup_categories' => false]);


		$cart = [];
		if(isset($_COOKIE['cart'])){
			$cart = json_decode($_COOKIE['cart'], true);

			$data['goods'] = [];
			if(!empty($cart['goods'])) $data['goods'] = $cart['goods'];

			$data['cart'] = $cart;

			if(!empty($cart['goods'])){ // if product cart not empty

				$this->load->view($this->viewfolder.'/v_checkout', $data);
			}
			else {
				header("HTTP/1.0 404 Not Found");
				echo '404';
			}
		}
	}

	// REST PAGES
	public function order($num = false)
	{
		$data = array();
		error_reporting(1);

		// Должно быть в каждом методе !!!
		$lang =  $_SESSION['lang'];
		$data['lang'] = $lang;
		$data['s'] = $this->settings->get(1);
		// список доступных категорий каталога
		$cats = $this->db->query("SELECT * FROM catalog ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $cat) { $data['cats'][$cat['id']] = $cat; }

		$data['meta_title'] = ($lang == 'ru') ? 'Оформление заказа' : 'Оформлення замовлення';
		$data['meta_description'] = ($lang == 'ru') ? 'Оформление заказа' : 'Оформлення замовлення';

		// боковой блок, передаем настройки, категории, массив параметров
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => false, 'foldup_categories' => false]);


		if(isset($_SESSION['order_id'])){ // if product cart not empty

			$data['order'] = $this->db->query("SELECT * FROM orders WHERE id = '".$_SESSION['order_id']."'")->row_array();

			$data['order_id'] = $_SESSION['order_id'];
			
			$this->load->view($this->viewfolder.'/v_order', $data);			
		}
		else {
			header("HTTP/1.0 404 Not Found");
			echo '404';
		}
	}

}
