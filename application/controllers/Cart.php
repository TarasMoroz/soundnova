<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	private $viewfolder = 'desktop';
	private $cartHash = false;
	private $fp = false;

	public function __construct()
 	{
 		parent::__construct();
		$this->load->model('Settings_model', 'settings');

		if($_COOKIE['crt_hash']) $this->cartHash = (int) $_COOKIE['crt_hash'];
		if($_COOKIE['fp']) $this->fp = $_COOKIE['fp'];
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

	public function ajax_add_item(){

		$id_product = (int) $_POST['id_product'];
		$id_variant = (int) $_POST['id_variant'];

		if(!$this->cartHash) die(json_encode(['result' => false, 'msg'=> 'undefined crt_hash']));	

		$userCart = $this->db->query("SELECT * FROM cart WHERE hash = '".$this->cartHash."'")->row_array();

		if(!$userCart['id']) $userCart = $this->cart_init();

		if(!$userCart['id']) die(json_encode(['result' => false, 'msg'=> 'cart doesnt inited']));

		// id_cart + id_product + id_variant has unique pair value
		if($id_product && $id_variant){

			// here we can check if user has allowance add to cart this item... or does exist current ids

			$this->db->simple_query("INSERT IGNORE INTO cart_item (id_cart,id_product,id_variant) VALUES (".$userCart['id'].",".$id_product.",".$id_variant.")");
		}

		$userCart['cartItems'] = $this->get_cart_items($userCart['id']);
		
		die(json_encode(['result'=>true, 'cart'=> $userCart]));	
	}

	public function ajax_remove_item(){

		


		die(json_encode(['result'=>true]));	
	}


	private function cart_init(){

		if(!$this->cartHash) return false;

		$this->db->insert('cart', [
			'referer' => $_SERVER['HTTP_REFERER'],
			'ua' => $_SERVER['HTTP_USER_AGENT'],
			'ip' => $_SERVER['REMOTE_ADDR'],
			'fp' => (isset($_COOKIE['fp']) ? $_COOKIE['fp'] : NULL),
			'hash' => $this->cartHash
		]);

		$insertId = $this->db->insert_id();

		return $this->db->query("SELECT * FROM cart WHERE id = ".$insertId)->row_array();
	}

	private function get_cart_items($id){

		$id = (int) $id;

		if(!$id) return false;

		// here we can join some extra data by id_product, id_variant
		return  $this->db->query("SELECT ci.*, 
									     p.alias p_alias, 
									     p.name p_name, 
									     pv.price pv_price, 
									     pv.price_old pv_price_old 
									FROM cart_item ci 
									LEFT JOIN product p ON p.id = ci.id_product 
									LEFT JOIN product_variant pv ON pv.id = ci.id_variant AND pv.id_product = p.id 
									WHERE ci.id_cart = ".$id)->result_array();
	}

}
