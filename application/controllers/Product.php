<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	private $languages = array('uk'=>'УКР', 'ru'=>'РУС');
	private $device = 'desktop';
	private $viewfolder = 'desktop' ;

	public function __construct()
 	{
 		// header('Access-Control-Allow-Origin: *');
	  //   header('Access-Control-Allow-Methods: GET');
	  //   header('Access-Control-Max-Age: 1000'); 
	  //   header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');

 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Settings_model', 'settings');

		if($this->agent->is_mobile()) $this->device =  'mobile';
 	}

	// MAIN PAGE
	public function index()
 	{
 		$data = [];
 		$data['edition'] = (isset($_GET['edition'])) ? true : false;
 		$data['mobile'] = ($this->agent->is_mobile()) ? true : false;
 		
		//header("HTTP/1.0 404 Not Found");
		//$this->load->view($this->viewfolder.'/v_error-404', $data);
		$this->load->view($this->viewfolder.'/v_product', $data);
 	}

	public function show_product($alias = false)
	{
		$data = array();
		error_reporting(1);

		// Должно быть в каждом методе !!!
		// $lang =  $_SESSION['lang'];
		// $data['lang'] = $lang;
		// $data['s'] = $this->settings->get(1);

		// CATEGORIES
		$cats = $this->db->query("SELECT * FROM category ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $item) { $data['cats'][$item['id']] = $item; }

		// TYPES
		$types = $this->db->query("SELECT * FROM type ORDER BY sort ASC")->result_array();
		$data['types'] = [];
		foreach($types as $item) { $data['types'][$item['id']] = $item; }

		$product = $this->db->query("SELECT p.*,
											
											l.name l_name,
											l.color l_color,

											cont_v.id cont_v_id,
											cont_v.title cont_v_title,
											cont_v.src cont_v_src, 
											cont_v.img_preview cont_v_img_preview, 

											count(pr.id) cnt_reviews, 
											TRUNCATE(AVG(pr.value), 1) avg_rate 
											
											FROM product p 
											LEFT JOIN video cont_v ON cont_v.id_item = p.id AND cont_v.item = 'product_cont' 
											LEFT JOIN product_review pr ON pr.id_product = p.id 
											LEFT JOIN label l ON l.id = p.id_label 
											WHERE p.alias = '".htmlentities($alias)."' AND p.publish = 1 GROUP BY p.id")->row_array();

		if($product){ // isset product page

			$prodCategories = $this->db->query("SELECT * FROM category WHERE id IN (".$product['categories'].")")->result_array();
			$prodTypes = $this->db->query("SELECT * FROM type WHERE id IN (".$product['types'].")")->result_array();
			$prodVariants = $this->db->query("SELECT * FROM product_variant WHERE id_product = ".$product['id'])->result_array();
			$data['prodVariants'] = [];
			foreach($prodVariants as $item) { $data['prodVariants'][$item['variant']] = $item; }

			// если сняли с публикации все варианты 404
			if(!$data['prodVariants']){
				header("HTTP/1.0 404 Not Found");
				$this->load->view($this->viewfolder.'/v_error-404', $data);
				die();
			}

			// главный вариант (или бандл или десигн) -- для удобства
			$mainVariant = (isset($data['prodVariants']['bundle'])) ? $data['prodVariants']['bundle'] : $data['prodVariants']['design'];
			$data['mainVariant'] = $mainVariant;

			// TODO: collect all viewed bundles
			// TODO: collect all bundles inside pack

			// $data['analogs'] = [];

			// $sWhereAnalog = "";
			// if(!empty($aFilters)){
			// 	$likeParts = [];
			// 	foreach($aFilters as $falias) { $likeParts[] = 'filters LIKE \'%"'.$falias.'"%\''; }
			// 	$sWhereAnalog .= ' AND ('.implode(' AND ', $likeParts).')';

			// 	$data['analogs'] = $this->db->query("SELECT id, name_ru, name_ua, alias, stock, price, price_old, IF(price_old > price, CEIL((price_old-price)/(price_old/100)), 0) discount_percent, TRUNCATE(ABS(price - ".$product['price']."),2) delta_price
			// 		FROM product
			// 		WHERE stock > 0 AND id != ".$product['id']." AND alias_catalog = '".$product['alias_catalog']."' ".$sWhereAnalog."
			// 		ORDER BY delta_price ASC, sort_category ASC
			// 		LIMIT 0, 9")->result_array();
			// }

			// $data['analogs'] = $this->db->query("SELECT id, name_ru, name_ua, alias, stock, price, price_old, IF(price_old > price, CEIL((price_old-price)/(price_old/100)), 0) discount_percent, TRUNCATE(ABS(price - ".$product['price']."),2) delta_price
			// 		FROM product
			// 		WHERE stock > 0 AND id != ".$product['id']." AND alias_catalog = '".$product['alias_catalog']."'
			// 		ORDER BY delta_price ASC, sort_category ASC
			// 		LIMIT 0, 9")->result_array();

			// отзывы... 30 последних
			$data['product_reviews'] = $this->db->query("SELECT * FROM product_review WHERE id_product = ".$product['id']." ORDER BY ts DESC LIMIT 0, 30")->result_array();

			$data['viewed'] = viewedProducts();
			$data['product'] = $product;
			$data['prodCategories'] = $prodCategories;
			$data['prodTypes'] = $prodTypes;

			// meta tags
			$data['meta_title'] = ($data['product']['meta_title']) ? $data['product']['meta_title'] : $data['product']['name'];
			$data['meta_description'] = ($data['product']['meta_description']) ? $data['product']['meta_description'] : $data['meta_title'];

			$this->load->view($this->viewfolder.'/v_product', $data);
		}
		else {
			header("HTTP/1.0 404 Not Found");
			$this->load->view($this->viewfolder.'/v_error-404', $data);
		}
	}

}