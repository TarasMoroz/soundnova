<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Catalog extends CI_Controller {

	private $languages = array('uk'=>'УКР', 'ru'=>'РУС');
	private $device = 'desktop';
	private $viewfolder = 'desktop';

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
	public function index($type = false)
 	{
		$data = array();
		error_reporting(1);

		// Должно быть в каждом методе !!!
		// $lang =  $_SESSION['lang'];
		// $data['lang'] = $lang;
		// $data['s'] = $this->settings->get(1);
		$data['device'] = $this->device;

		// CATEGORIES
		$cats = $this->db->query("SELECT * FROM category ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $item) { $data['cats'][$item['id']] = $item; }

		// TYPES
		$types = $this->db->query("SELECT * FROM type ORDER BY sort ASC")->result_array();
		$data['types'] = [];
		foreach($types as $item) { $data['types'][$item['id']] = $item; }

		// если тип фейковый, то редиректим
		if($type != false && !in_array($type, array_column($data['types'], 'alias'))){
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: /catalog/"); 
			exit();
		}

		$data['meta_title'] = 'ALL SOUND EFFECTS PACKAGES AND BUNDLES';
		$data['meta_description'] = 'ALL SOUND EFFECTS PACKAGES AND BUNDLES';
		$data['h1_top'] = 'ALL SOUND EFFECTS';
		$data['h1_bot'] = 'PACKAGES AND BUNDLES';

		// CURRENT TYPE
		$currType = $this->db->query("SELECT * FROM type WHERE alias = '".htmlentities($type)."'")->row_array();

		$data['type'] = $currType;

		// category, type
		$data = $this->productsList(false, $currType, $data);


 		$this->load->view($this->viewfolder.'/v_catalog', $data);
 	}

	// REST PAGES
	public function show_category($page, $type = false)
	{
		$data = array();
		error_reporting(1);

		//$data['s'] = $this->settings->get(1);

		$data['device'] = $this->device;

		// CATEGORIES
		$cats = $this->db->query("SELECT * FROM category ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $item) { $data['cats'][$item['id']] = $item; }

		// TYPES
		$types = $this->db->query("SELECT * FROM type ORDER BY sort ASC")->result_array();
		$data['types'] = [];
		foreach($types as $item) { $data['types'][$item['id']] = $item; }

		if(!in_array($page, array_column($data['cats'], 'alias'))){
			header("HTTP/1.1 301 Moved Permanently"); 
			header("Location: /catalog/"); 
			exit();
		}

		if($type != false && !in_array($type, array_column($data['types'], 'alias'))){
			header("HTTP/1.1 301 Moved Permanently");
			header("Location: /catalog/".$page."/"); 
			exit();
		}

		// CURRENT CATEGORY
		$currCategory = $this->db->query("SELECT * FROM category WHERE alias = '".htmlentities($page)."'")->row_array();

		// CURRENT TYPE
		$currType = $this->db->query("SELECT * FROM type WHERE alias = '".htmlentities($type)."'")->row_array();


		$data['category'] = $currCategory;
		$data['type'] = $currType;

		$data['meta_title'] = ($data['category']['meta_title']) ? $data['category']['meta_title'] : $data['category']['name'].' sound effects bundles';
		$data['meta_description'] = ($data['category']['meta_description']) ? $data['category']['meta_description'] : '';
		$data['h1'] = $data['meta_title'];

		// category, type
		$data = $this->productsList($currCategory, $currType, $data);

		$this->load->view($this->viewfolder.'/v_catalog', $data);
	}

	private function productsList($category, $type, $data) {

		// where для товаров 
		$sWhere = 'WHERE 1=1';

		if($category){
			$sWhere .= " AND p.id IN (SELECT id_product FROM product_category WHERE id_category = ".$category['id'].")";
		}

		if($type){
			$sWhere .= " AND p.id IN (SELECT id_product FROM product_type WHERE id_type = ".$type['id'].")";
		}

		// поиск
		if(isset($_GET['srch'])) $sWhere .= ' AND (p.name LIKE \'%'.htmlentities($_GET['srch']).'%\')';

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		$sort = (isset($_GET['sort'])) ? 
			(in_array($_GET['sort'], ['price_asc','price_desc','latest']) ? $_GET['sort'] : 'def') : 
			'def';

		$sSort = 'p.cnt_sales_public DESC';
		if($sort == 'price_asc') $sSort = 'pv.price ASC';
		if($sort == 'price_desc') $sSort = 'pv.price DESC';
		if($sort == 'latest') $sSort = 'p.id DESC';

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 18;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$query = "SELECT SQL_CALC_FOUND_ROWS 
					p.id, 
					p.name, 
					p.alias, 
					p.soundcloud,
					p.cnt_elements,
					p.cnt_sales_public,

					l.name l_name,
					l.color l_color,

					pv_des.price pv_des_price, 
					pv_des.price_old pv_des_price_old, 
					pv_des.img_box pv_des_img_box,
					pv_des.img_bg_preview pv_des_img_bg_preview,
					IF(pv_des.price_old > pv_des.price, CEIL((pv_des.price_old-pv_des.price)/(pv_des.price_old/100)), 0) pv_des_disc_percent,

					pv_bund.price pv_bund_price,
					pv_bund.price_old pv_bund_price_old,
					pv_bund.img_box pv_bund_img_box,
					pv_bund.img_bg_preview pv_bund_img_bg_preview,
					IF(pv_bund.price_old > pv_bund.price, CEIL((pv_bund.price_old-pv_bund.price)/(pv_bund.price_old/100)), 0) pv_bund_disc_percent,

					count(pr.id) cnt_reviews, 
					TRUNCATE(AVG(pr.value), 1) avg_rate 
				  FROM product p 
				  LEFT JOIN (SELECT MIN(price) price, id_product FROM product_variant WHERE publish = 1 GROUP BY id_product) pv ON pv.id_product = p.id
				  LEFT JOIN product_variant pv_des ON pv_des.id_product = p.id AND pv_des.publish = 1 AND pv_des.variant = 'design' 
				  -- LEFT JOIN product_variant pv_con ON pv_con.id_product = p.id AND pv_con.publish = 1 AND pv_con.variant = 'construct' 
				  -- LEFT JOIN product_variant pv_des_con ON pv_des_con.id_product = p.id AND pv_des_con.publish = 1 AND pv_des_con.variant = 'design_construct' 
				  LEFT JOIN product_variant pv_bund ON pv_bund.id_product = p.id AND pv_bund.publish = 1 AND pv_bund.variant = 'bundle' 
				  LEFT JOIN label l ON l.id = p.id_label 
				  LEFT JOIN product_review pr ON pr.id_product = p.id 
				  ".$sWhere." 
				  AND p.publish = 1 
				  GROUP BY p.id
				  ORDER BY ".$sSort.", p.cnt_sales_public DESC LIMIT ".$limit; 

		$products = $this->db->query($query)->result_array();
		$cntProds = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntProds = current($cntProds[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntProds ? $to : $cntProds); // по какой товар показано
		$left = $cntProds - $to;
		$left = ($left < $cntProds) ? $left : $cntProds; // сколько осталось показвыать еще...

		$query = [];
		if($sort != 'pop') $query['sort'] = $sort;
		if(isset($_GET['srch'])) $query['srch'] = htmlentities($_GET['srch']);

		$pagination = [
			'base' => '/catalog/'.($category ? $category['alias'].'/' : '').($type ? 'filter/'.$filter.'/' : ''),
			'query' => $query,
			'pages' => ceil($cntProds/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntProds, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		// мета тайтлы для фильтров...
		if($category){

			$suffix = ' sound effects bundles';

			$data['meta_title'] = $category['name'].' '.$suffix;
			$data['h1'] = $data['meta_title'];
			$data['meta_description'] = $data['meta_title'];
		}

		$data['pagination'] = $pagination;
		// $data['aFilters'] = $aFilters;
		$data['cntProds'] = $cntProds;
		$data['products'] = $products;
		$data['sort'] = $sort;
		$data['query'] = $query;
		$data['pagination_html'] = $this->load->view($this->viewfolder.'/v_pagination', $data, TRUE);

		return $data;
	}
}
