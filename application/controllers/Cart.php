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

		if(isset($_COOKIE['crt_hash'])) $this->cartHash = (int) $_COOKIE['crt_hash'];
		if(isset($_COOKIE['fp'])) $this->fp = $_COOKIE['fp'];
 	}

	public function index()
 	{
		$data = get_common_page_data();

		$userCart = $this->get_cart();

		if($userCart['id']){

			$data['cart'] = $userCart;
			$data['cart']['cartItems'] = $this->get_cart_items($data['cart']['id']);

		}

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


	public function ajax_get_cart(){

		if(!$this->cartHash) die(json_encode(['result'=>false, 'msg' => 'Cart not found!']));
		
		$userCart = $this->get_cart();

		if(!$userCart['id']) die(json_encode(['result'=>false, 'msg'=> 'Cart not inited!']));

		$userCart['cartItems'] = $this->get_cart_items($userCart['id']);
		
		die(json_encode(['result'=>true, 'cart'=> $userCart]));	
	}

	public function ajax_add_item(){

		$id_product = (int) $_POST['id_product'];
		$id_variant = (int) $_POST['id_variant'];

		if(!$this->cartHash) die(json_encode(['result' => false, 'msg'=> 'undefined crt_hash']));	

		$userCart = $this->get_cart();

		if(!$userCart['id']) $userCart = $this->cart_init();

		if(!$userCart['id']) die(json_encode(['result' => false, 'msg'=> 'cart doesnt inited']));

		// id_cart + id_product + id_variant has unique pair value
		if($id_product && $id_variant){

			// here we can check if user has allowance add to cart this item... or does exist current ids

			$this->db->simple_query("INSERT IGNORE INTO cart_item (id_cart,id_product,id_variant) VALUES (".$userCart['id'].",".$id_product.",".$id_variant.")");

			// refreshing dt_update 
			$this->db->simple_query("UPDATE cart SET dt_update = NOW() WHERE id = ".$userCart['id']);
		}

		$userCart = $this->get_cart();
		$userCart['cartItems'] = $this->get_cart_items($userCart['id']);
		
		die(json_encode(['result'=>true, 'cart'=> $userCart]));	
	}

	public function ajax_remove_item(){

		if(!$this->cartHash) die(json_encode(['result'=>false, 'msg'=> 'Cart not found!']));

		$id = (int) $_POST['id'];

		if(!$id) die(json_encode(['result'=>false, 'msg'=> 'Wrong cart item ID']));

		$userCart = $this->get_cart();

		$currItem = $this->db->query("SELECT * FROM cart_item WHERE id_cart = ".$userCart['id']." AND id = ".$id)->row_array();

		if($currItem['id']){

			$this->db->simple_query("DELETE FROM cart_item WHERE id = ".$id);

			die(json_encode(['result'=>true]));	

		} else {
			die(json_encode(['result'=>false, 'msg'=> 'Not found cart item']));
		}
	}

	public function ajax_apply_coupon(){

		if(!$this->cartHash) return false;

		$code = addslashes($_POST['code']);

		$coupon = $this->db->query("SELECT * FROM cart_coupon WHERE code = '".$code."' AND publish = 1")->row_array();

		if($coupon['id']){

			// bind coupon to the users card
			$this->db->simple_query("UPDATE cart SET id_coupon = ".$coupon['id']." WHERE hash = '".$this->cartHash."'");

			// increment cnt uses 
			$this->db->simple_query("UPDATE cart_coupon SET cnt_applies = cnt_applies + 1 WHERE id = ".$coupon['id']);

			die(json_encode(['result'=>true]));	
		} else {
			die(json_encode(['result'=>false, 'msg' => 'Wrong coupon!']));	
		}
	}

	public function ajax_remove_coupon(){

		if(!$this->cartHash) return false;

		// bind coupon to the users card
		$this->db->simple_query("UPDATE cart SET id_coupon = 0 WHERE hash = '".$this->cartHash."'");

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

		return $this->get_cart(); 
	}

	private function get_cart(){

		// calculate total with promo coupon here... !!!
		if(!$this->cartHash) return false;

		$cart = $this->db->query("SELECT crt.*,
									cp.code cp_code,
									cp.is_percent cp_is_percent,
									cp.value cp_value 
								FROM cart crt 
								LEFT JOIN cart_coupon cp ON crt.id_coupon = cp.id 
								WHERE crt.hash = '".$this->cartHash."'")->row_array();

		if(!$cart['id']) return false; // hash was wrong

		$total =  $this->db->query("SELECT SUM(pv.price) total_price, COUNT(ci.id) cnt_items  
									FROM cart_item ci 
									LEFT JOIN product p ON p.id = ci.id_product 
									LEFT JOIN product_variant pv ON pv.id = ci.id_variant AND pv.id_product = p.id 
									WHERE ci.id_cart = ".$cart['id'])->row_array();

		$cart['subtotal_price'] = ceil($total['total_price']);
		$cart['cnt_items'] = $total['cnt_items'];
		$cart['total_price'] = $cart['subtotal_price'];

		if($cart['cp_code'] && $cart['cp_value'] > 0){
			$cart['total_price'] = ($cart['cp_is_percent'] == 1) ? 
				$cart['subtotal_price'] - $cart['subtotal_price']*($cart['cp_value']/100) : // percent discount 
				$cart['subtotal_price'] - $cart['cp_value']; // fixed usd value discount
		}

		return $cart;
	}

	private function get_cart_items($id){

		$id = (int) $id;

		if(!$id) return false;

		// here we can join some extra data by id_product, id_variant
		return  $this->db->query("SELECT ci.*, 
									     p.alias p_alias, 
									     p.name p_name, 
									     pv.price pv_price, 
									     pv.price_old pv_price_old,
									     pv.img_box pv_img_box,
									     IF(pv.price_old > pv.price, CEIL((pv.price_old-pv.price)/(pv.price_old/100)), 0) pv_disc_percent
									FROM cart_item ci 
									LEFT JOIN product p ON p.id = ci.id_product 
									LEFT JOIN product_variant pv ON pv.id = ci.id_variant AND pv.id_product = p.id 
									WHERE ci.id_cart = ".$id)->result_array();
	}

}
