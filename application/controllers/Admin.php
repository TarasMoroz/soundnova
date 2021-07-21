<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/*
		author: Taras Moroz
		email: moroz.taras.box@gmail.com
	*/

	private $mainlanguage = array('ru');
	private $translations = array('ua');

	public function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('upload');
		$this->load->library('session');

		$this->load->model('Settings_model', 'settings');
		$this->load->model('Products_model', 'products');
		$this->load->model('Product_variant_model', 'productvariant');
		$this->load->model('Category_model', 'category');
		$this->load->model('Label_model', 'label');
		$this->load->model('Type_model', 'type');
		$this->load->model('Video_model', 'video');
		$this->load->model('Sound_model', 'sound');
		$this->load->model('Faq_model', 'faq');
		$this->load->model('Faq_item_model', 'faq_item');
		$this->load->model('Site_reviews_model', 'site_review');
		$this->load->model('Product_review_model', 'product_review');
		$this->load->model('Sale_model', 'sale');
		$this->load->model('Pages_model', 'pages');

		$this->load->model('Filter_model', 'filter');
		$this->load->model('Filtergroup_model', 'filtergroup');
		$this->load->model('Blog_model', 'blog');
		$this->load->model('Banner_model', 'banner');
		$this->load->model('Orders_model', 'orders');
		$this->load->model('Email_model', 'email');
	}

	// shows admin main page
	public function index()
	{

		if($this->session->userdata('validate') == 'yes'){
			$data = [];
			$this->load->view('admin/lte/homepage', $data);
		}
		else {
			$login['text'] = "";
			$this->load->view('admin/v_admin_login', $login);
		} 
	}

	// checking password
	public function check_password()
	{
		$pass = $this->input->post('pass');
		$settings = $this->settings->get(1);

		if($pass == $settings['password']){

			$this->session->set_userdata(['validate'=>'yes']);

			$location = base_url('/admin');

			header("Location: ".$location);
		}
		else {
			header("Location: ".base_url('/admin'));
		}
	}

	public function logout(){
		$this->session->unset_userdata('validate');
		redirect(base_url('/admin'));
	}

	private function is_admin_logged(){
		if($this->session->userdata('validate') != 'yes'){
			redirect(base_url('admin/'));
			return;
		}
	}

	// setting the right ajax headers for our application
	private function ajax_headers($type = 'text/plain')
	{
		//Error_Reporting(E_ALL & ~E_NOTICE);
		//Error_Reporting (ERROR | WARNING);
		header("Content-type: $type; charset=utf-8");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
	}

	/// -------------- PRODUCTS

	public function show_products()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;
		$ftrCatalog = (isset($_GET['catalog'])) ? (int) $_GET['catalog'] : 0 ;
		$ftrType = (isset($_GET['type'])) ? (int) $_GET['type'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;


		$sWhere = '';
		if($ftrCatalog){
			$query = "SELECT * FROM product_category WHERE id_category = ".$ftrCatalog;
			$prodsInCat = $this->db->query($query)->result_array();

			if(count($prodsInCat)){
				$prodIds = array_column($prodsInCat, 'id_product');
				$sWhere .= " AND p.id IN (".implode(',',$prodIds).")";
			} else {
				$sWhere .= " AND 5 > 10";
			}
		}

		if($ftrType){
			$query = "SELECT * FROM product_type WHERE id_type = ".$ftrType;
			$prodsInType = $this->db->query($query)->result_array();

			if(count($prodsInType)){
				$prodIds = array_column($prodsInType, 'id_product');
				$sWhere .= " AND p.id IN (".implode(',',$prodIds).")";
			}else {
				$sWhere .= " AND 5 > 10";
			}
		}
		
		$query = "SELECT SQL_CALC_FOUND_ROWS p.* 
					FROM product p 
					WHERE 1=1 ".$sWhere." 
					ORDER BY p.id ASC 
					LIMIT ".$limit;

		$products = $this->db->query($query)->result_array();
		$cntProds = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntProds = current($cntProds[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntProds ? $to : $cntProds); // по какой товар показано
		$left = $cntProds - $to;
		$left = ($left < $cntProds) ? $left : $cntProds; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_products',
			'query' => ['catalog'=> $ftrCatalog, 'type' => $ftrType],
			'pages' => ceil($cntProds/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntProds, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		foreach($products as $key => $prod){
			$products[$key]['variants'] =  $this->db->query("SELECT * FROM product_variant WHERE id_product = ".$prod['id'])->result_array();
		}

		$data['products'] = $products;
		$data['cntProds'] = $cntProds;
		$data['ftrCatalog'] = $ftrCatalog;
		$data['ftrType'] = $ftrType;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		//$data['products'] = $this->products->get_all();

		$query = "SELECT * FROM category ORDER BY sort ASC";
		$cats = $this->db->query($query)->result_array();
		$cready = [];
		foreach($cats as $cat){
			$cready[$cat['id']] = $cat;
		}

		$query = "SELECT * FROM type";
		$types = $this->db->query($query)->result_array();
		$tready = [];
		foreach($types as $type){
			$tready[$type['id']] = $type;
		}

		$data['cats'] = $cready;
		$data['types'] = $tready;

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_products_list', $data, true);
	}

	public function show_ftp() {

		set_time_limit(300);

		$time_start = microtime(true);

		$this->load->library('ftp');

		// тут все настройки вo flexdata
		$ftp_settings = $this->db->query("SELECT * FROM settings WHERE name = 'ftp'")->row_array();
		$param = ($ftp_settings['flexdata'] != '') ? json_decode($ftp_settings['flexdata'], true) : [] ;

		if(isset($param['hostname']) && isset($param['username']) && isset($param['password'])){

			$config['hostname'] = $param['hostname'];
			$config['username'] = $param['username'];
			$config['password'] = $param['password'];
			$config['debug']    = TRUE;

			$this->ftp->connect($config);
			//$this->ftp->upload('./assets/csv/product.psd', '/domains/squarange.com/public_html/product.psd', 'binary', 0775);
			$list = $this->ftp->list_files($param['root']);
			// print_r($list);	
			$this->ftp->close();

			if(!empty($list)){

				// выбираем все продукты и их вариации...
				$query = "SELECT pv.id, pv.variant, pv.ftp_exist ftp_exist_prev, p.alias p_alias, p.name p_name 
					FROM product_variant pv 
					LEFT JOIN product p ON pv.id_product = p.id 
					ORDER BY pv.id DESC";

				$items = $this->db->query($query)->result_array();

				$arrayExists = []; // сюда пишем id те у которых есть на ftp архив
				$arrayNotExists = []; // сюда пишем id те у которых нет на ftp архива

				foreach($items as $key => $item){
					
					$exist = in_array($item['id'].'.zip', $list);

					$items[$key]['ftp_exist'] = $exist;

					if($exist)  $arrayExists[] = $item['id'];
					if(!$exist) $arrayNotExists[] = $item['id'];
				}

				if(!empty($arrayExists)) $this->db->simple_query("UPDATE product_variant SET ftp_exist = 1 WHERE id IN (".implode(',',$arrayExists).")");
				if(!empty($arrayNotExists)) $this->db->simple_query("UPDATE product_variant SET ftp_exist = 0 WHERE id IN (".implode(',',$arrayNotExists).")");

				// Display Script End time
				$time_end = microtime(true);
				//dividing with 60 will give the execution time in minutes other wise seconds (Mins)
				$execution_time = ($time_end - $time_start)/60;

				$data['items'] = $items;
				$data['execution_time'] = $execution_time;

				echo $this->load->view('admin/v_ajax_ftp_list', $data, true);
			} else {
				echo "FTP root folder is empty!";
			}
		}
	}

	public function show_photos() // showing list of bulletin pictures
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		error_reporting(0);

		$folder = $this->input->post('folder');

		//array with data for the view
		$data = array();
		//$dir_iterator = new RecursiveDirectoryIterator("./assets/".$folder);
		//$iterator = new RecursiveIteratorIterator($dir_iterator, RecursiveIteratorIterator::SELF_FIRST);
		// could use CHILD_FIRST if you so wish
		$imgFiles = array();
		foreach (glob("./assets/".$folder."/*") as $file) {
			if(substr($file, -4) === ".jpg"){
				//$file = str_replace("\\", "/", substr($file,1));
				//echo "----- ". $file . "<br>";
				array_push($imgFiles,$file);
			}
		}

		ksort($imgFiles);

		//$data['iterator'] = $iterator;
		$data['iterator'] = $imgFiles;
		$data['folder'] = $folder;

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_tour_photos', $data, true);
	}

	public function delete_photo()
	{
		$this->is_admin_logged();

		$file = $this->input->post('file');

		if(is_file($file)){
			if(unlink($file)){
				echo json_encode(array('result'=>true));
			}
		}
	}

	public function csv()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$file = $_POST['file'];

		$query = "SELECT * FROM catalog";
		$cats = $this->db->query($query)->result_array();
		$catAliases = array_column($cats, 'alias');

		$query = "SELECT * FROM catalog_filter";
		$filters = $this->db->query($query)->result_array();
		$filtersAliases = array_column($filters, 'alias');

		$query = "SELECT id FROM product";
		$productIds = $this->db->query($query)->result_array();
		$prIds = array_column($productIds, 'id');

		$csv = array_map('str_getcsv', file('./assets/csv/'.$file));

		$insertBatchData = [];
		$updateBatchData = [];
		$wrongData = [];

		// $rowScheme = [
		// 	0 => 'id',
		// 	1 => 'name_ru',
		// 	2 => 'price',
		// 	3 => 'price_old',
		// 	4 => 'brand',
		// 	5 => 'mpn',
		// 	6 => 'filters',
		// 	7 => 'alias_catalog',
		// 	8 => 'categories',
		// 	9 => 'stock',
		// 	10 => 'sort',
		// 	11 => 'sort_category',
		// ];

		foreach($csv as $rowkey => $row){

			if($rowkey == 0) continue;	

			$data = [];

			foreach($row as $key => $val){

				if($key == 0) $data['id'] = (int) $val;
				if($key == 1) $data['name_ru'] = htmlentities($val);
				if($key == 2) $data['price'] = (float) $val;
				if($key == 3) $data['price_old'] = (float) $val;
				if($key == 4) $data['brand'] = htmlentities($val);
				if($key == 5) $data['mpn'] = htmlentities($val);
				if($key == 6) {
					$ftrs = [];
					$val2 = preg_replace('/\s+/', '', $val);
					$ftrs = explode(',',$val2);
					$ftrs2 = array_map('trim', $ftrs);
					$ftrs3 = array_map('strtolower', $ftrs2);
					$data['filters'] = json_encode($ftrs3);
				}
				if($key == 7) $data['alias_catalog'] = trim($val);
				if($key == 8) $data['categories'] = htmlentities($val);
				if($key == 9) $data['stock'] = (int) $val;
				if($key == 10) $data['sort'] = (int) $val;
				if($key == 11) $data['sort_category'] = (int) $val;	
			}

			// валидный каталог, цена, название
			if(in_array($data['alias_catalog'], $catAliases) && $data['price'] > 0 && $data['name_ru'] != ''){
				if(in_array($data['id'], $prIds)){
					array_push($updateBatchData, $data);
				} else {
					// при создании товара генерим ему alias
					$urlBrand = iconv("utf-8", "us-ascii//IGNORE", $data['brand']);
					$urlBrand = strtolower($urlBrand);
					$urlBrand = preg_replace('~[^-a-z0-9_]+~', '', $urlBrand);

					$urlMpn = iconv("utf-8", "us-ascii//IGNORE", $data['mpn']);
					$urlMpn = strtolower($urlMpn);
					$urlMpn = preg_replace('~[^-a-z0-9_]+~', '', $urlMpn);

					$alias = $data['id'].'-'.$urlBrand.'-'.($urlMpn ? $urlMpn : $data['alias_catalog']);
					
					$data['alias'] = $alias;

					array_push($insertBatchData, $data);
				}
			} else {
				if($data['name_ru'] != '') array_push($wrongData, $data);
			}
		}

		// проверяем которые добавить.
		if(!empty($insertBatchData)){
			$this->db->insert_batch('product', $insertBatchData);
		}

		// проверяем которые перезаписать
		if(!empty($updateBatchData)){
			$this->db->update_batch('product', $updateBatchData, 'id');
		}

		$data = [
			'insertBatchData' => $insertBatchData,
			'updateBatchData' => $updateBatchData,
			'wrongData' => $wrongData,
			'catAliases' => $catAliases
		];

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_products_csv', $data, true);
	}

	public function show_product_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id'); // the same with $_POST['id'], just CI synthax

		// получаем все категории
		$query = "SELECT * FROM category ORDER BY sort ASC";
		$return['categories'] = $this->db->query($query)->result_array();

		// получаем все типы
		$query = "SELECT * FROM type ORDER BY sort ASC";
		$return['types'] = $this->db->query($query)->result_array();

		// получаем все лейбы : bestseller, new product
		$query = "SELECT * FROM label ORDER BY id ASC";
		$return['labels'] = $this->db->query($query)->result_array();

		//array with data for the view
		$return['data'] = [
			'alias'=>'',
			'name' => '',
			'categories'=>'',
			'types'=>'',
			'id_label'=>'',
			'soundcloud'=>'',
			'youtube'=>'',
			'id_video'=>'',
			'cnt_elements'=>'',
			'cnt_sales'=>'',
			'cnt_sales_public'=>'',
			'cont_description'=>'',
			'cont_id_video'=>'',
			'meta_title'=>'',
			'meta_description'=>'',
			'adv1'=>'',
			'adv2'=>'',
			'adv3'=>'',
			'related_ids'=>'',
			'package_ids'=>'',
			'bundle_ids'=>'',
			'bundle_slider_title'=>'',
			'bundle_slider_text'=>''
		];

		if($postId) $return['data'] = $this->products->get($postId);

		echo $this->load->view('admin/v_ajax_product_form', $return, true);
	}

	public function show_product_variant_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id'); // the same with $_POST['id'], just CI synthax
		$id_product = $this->input->post('id_product'); // the same with $_POST['id'], just CI synthax

		//array with data for the view
		$return['data'] = [

			'id_product'=> $id_product,
			'variant' => '',
			'img_box'=>'',
			'img_bg_preview'=>'',
			'img_bg'=>'',
			'soundcloud'=>'',
			'price'=>'',
			'price_old'=>'',
			
			'cont1_title'=>'',
			'cont1_desc'=>'',
			'cont1_id_video'=>'',

			'cont2_title'=>'',
			'cont2_files'=>'',
			'cont2_sounds'=>'',
			'cont2_size'=>'',
			'cont2_format'=>'',
			'cont2_pdf'=>'',
			'cont2_xls'=>'',
			'cont2_soundcloud'=>'',
			'cont2_img_box'=>'',

			'cont3_title'=>'',
			'cont3_desc'=>'',
			'cont3_img_bg'=>'',

			'cont4_title'=>'',
			'cont4_include_ids'=>'',

			'cont5_title'=>'',
			'cont5_video_ids'=>'',

			'cont6_title'=>'',
			'cont6_video_ids'=>'',

			'cont7_title'=>'',
			'cont7_id_slider'=>'',

			'cont8_title'=>'',
			'cont8_video_ids'=>'',
			'cont8_video_sort'=>'',

			'cont9_title'=>'',
			'cont9_video_ids'=>'',
			'cont9_video_sort'=>'',

			'cont10_title'=>'',
			'cont10_id_faq'=>''
		];

		if($postId) $return['data'] = $this->productvariant->get($postId);

		echo $this->load->view('admin/v_ajax_product_variant_form', $return, true);
	}

	/// ------------- VIDEO

	public function show_videos()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		// $query = "SELECT * FROM video ORDER BY id ASC";
		// $videos = $this->db->query($query)->result_array();
		// $data['videos'] = $videos;

		$items = $this->getVideoItems();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;
		$ftrItem = (isset($_GET['item'])) ? $_GET['item'] : '';

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$sWhere = '';

		if($ftrItem && in_array($ftrItem, array_keys($items))){
			$sWhere .= " AND v.item = '".$ftrItem."'";
		}
		
		$query = "SELECT SQL_CALC_FOUND_ROWS v.* 
					FROM video v 
					WHERE 1=1 ".$sWhere." 
					ORDER BY v.sort ASC 
					LIMIT ".$limit;

		$videos = $this->db->query($query)->result_array();
		$cntVideos = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntVideos = current($cntVideos[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntVideos ? $to : $cntVideos); // по какой товар показано
		$left = $cntVideos - $to;
		$left = ($left < $cntVideos) ? $left : $cntVideos; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_videos',
			'query' => ['item' => $ftrItem],
			'pages' => ceil($cntVideos/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntVideos, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['videos'] = $videos;
		$data['cntVideos'] = $cntVideos;
		$data['ftrItem'] = $ftrItem;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);
		$data['items'] = $items;

		echo $this->load->view('admin/v_ajax_video_list', $data, true);
	}

	public function show_video_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'title'=> '',
			'subtitle'=>'',
			'desc' => '',
			'item'=> '',
			'id_item'=> 0,
			'src'=>'',
			'img_preview'=>'',
			'sort'=> 0
		];

		if($postId) $return['data'] = $this->video->get($postId);

		$return['items'] = $this->getVideoItems();

		echo $this->load->view('admin/v_ajax_video_form', $return, true);
	}

	public function getVideoItems() {
		return [
			'product' => 'Видео продукта',
			'product_cont' => 'Видео описания продукта',
			'product_variant_cont1' => 'Видео описания вариации продукта',
			'product_who_need' => 'Видео "Who need..."',
			'product_how_to_use' => 'Видео "How clients use..."',
			'product_overviews' => 'Видео обзоры',
			'product_tutorials' => 'Видео уроки',
			'site_review' => 'Видео отзыв'
		];
	}

	/// ------------- SOUNDS

	public function show_sounds()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;
		
		$query = "SELECT SQL_CALC_FOUND_ROWS s.* 
					FROM sound s 
					WHERE 1=1 
					ORDER BY s.id DESC 
					LIMIT ".$limit;

		$sounds = $this->db->query($query)->result_array();
		$cntSounds = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntSounds = current($cntSounds[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntSounds ? $to : $cntSounds); // по какой товар показано
		$left = $cntSounds - $to;
		$left = ($left < $cntSounds) ? $left : $cntSounds; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_sounds',
			'query' => [],
			'pages' => ceil($cntSounds/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntSounds, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['sounds'] = $sounds;
		$data['cntSounds'] = $cntSounds;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		echo $this->load->view('admin/v_ajax_sound_list', $data, true);
	}

	public function show_sound_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'name'=> '',
			'soundcloud'=>'',
			'sort'=> 0
		];

		if($postId) $return['data'] = $this->sound->get($postId);

		echo $this->load->view('admin/v_ajax_sound_form', $return, true);
	}

	/// ------------- CATEGGORIES

	public function show_categories()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM category ORDER BY sort ASC";
		$cats = $this->db->query($query)->result_array();
		$data['cats'] = $cats;
		echo $this->load->view('admin/v_ajax_categories_list', $data, true);
	}

	public function show_category_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'alias'=> '',
			'name'=>'',
			'sort' =>0,
			'img'=> '',
			'meta_title'=>'',
			'meta_description'=>'',
			'seo_text'=>''
		];

		if($postId) $return['data'] = $this->category->get($postId);

		echo $this->load->view('admin/v_ajax_category_form', $return, true);
	}

	/// ------------- LABEL

	public function show_labels()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM label ORDER BY id ASC";
		$labels = $this->db->query($query)->result_array();
		$data['labels'] = $labels;
		echo $this->load->view('admin/v_ajax_label_list', $data, true);
	}

	public function show_label_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'name'=>'',
			'color'=>''
		];

		if($postId) $return['data'] = $this->label->get($postId);

		echo $this->load->view('admin/v_ajax_label_form', $return, true);
	}

	/// ------------- TYPES

	public function show_types()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM type ORDER BY id ASC";
		$labels = $this->db->query($query)->result_array();
		$data['types'] = $labels;
		echo $this->load->view('admin/v_ajax_type_list', $data, true);
	}

	public function show_type_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'alias'=>'',
			'name'=>'',
			'sort'=>0
		];

		if($postId) $return['data'] = $this->type->get($postId);

		echo $this->load->view('admin/v_ajax_type_form', $return, true);
	}

	/// ------------- Site Reviwes

	public function show_site_reviews()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM site_review ORDER BY id ASC";
		$reviews = $this->db->query($query)->result_array();
		$data['reviews'] = $reviews;
		echo $this->load->view('admin/v_ajax_site_review_list', $data, true);
	}

	public function show_site_review_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'id_video'=>0,
			'title'=>'',
			'person_name'=>'',
			'person_position'=>'',
			'description'=>'',
			'text'=>'',
			'sort'=>0
		];

		if($postId) $return['data'] = $this->site_review->get($postId);

		echo $this->load->view('admin/v_ajax_site_review_form', $return, true);
	}

	/// ------------- Product Reviwes

	public function show_product_reviews()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM product_review ORDER BY id DESC";
		$reviews = $this->db->query($query)->result_array();
		$data['reviews'] = $reviews;
		echo $this->load->view('admin/v_ajax_product_review_list', $data, true);
	}

	public function show_product_review_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'id_customer'=>0,
			'name'=>'',
			'email'=>'',
			'comment'=>'',
			'value'=>5,
			'ts'=> strtotime('now'),
			'id_product' => 0,
			'is_buyer'=> 1,
			'sort'=> 0
		];

		if($postId) $return['data'] = $this->product_review->get($postId);

		echo $this->load->view('admin/v_ajax_product_review_form', $return, true);
	}

	/// ------------- FAQ

	public function show_faqs()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;
		
		$query = "SELECT SQL_CALC_FOUND_ROWS f.* 
					FROM faq f
					WHERE 1=1 
					ORDER BY f.id DESC 
					LIMIT ".$limit;

		$faqs = $this->db->query($query)->result_array();
		$cntFaqs = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntFaqs = current($cntFaqs[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntFaqs ? $to : $cntFaqs); // по какой товар показано
		$left = $cntFaqs - $to;
		$left = ($left < $cntFaqs) ? $left : $cntFaqs; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_faqs',
			'query' => [],
			'pages' => ceil($cntFaqs/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntFaqs, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		foreach($faqs as $key => $faq){
			$faqs[$key]['items'] =  $this->db->query("SELECT * FROM faq_item WHERE id_faq = ".$faq['id'])->result_array();
		}

		$data['faqs'] = $faqs;
		$data['cntFaqs'] = $cntFaqs;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		echo $this->load->view('admin/v_ajax_faq_list', $data, true);
	}

	public function show_faq_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'name'=> '',
			'item'=>'',
			'id_item'=> 0
		];

		if($postId) $return['data'] = $this->faq->get($postId);

		echo $this->load->view('admin/v_ajax_faq_form', $return, true);
	}


	public function show_faq_item_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');
		$faqId = $this->input->post('id_faq');

		$return['data'] = [
			'id_faq' => $faqId,
			'name'=>'',
			'desc'=> ''
		];

		if($postId) $return['data'] = $this->faq_item->get($postId);

		echo $this->load->view('admin/v_ajax_faq_item_form', $return, true);
	}

	/// --------- BLOG 

	public function show_blog()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$query = "SELECT SQL_CALC_FOUND_ROWS * FROM blog ORDER BY id DESC LIMIT ".$limit;

		$posts = $this->db->query($query)->result_array();
		$cntPosts = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntPosts = current($cntPosts[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntPosts ? $to : $cntPosts); // по какой товар показано
		$left = $cntPosts - $to;
		$left = ($left < $cntPosts) ? $left : $cntPosts; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_blog',
			'query' => [],
			'pages' => ceil($cntPosts/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntPosts, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['posts'] = $posts;
		$data['cntPosts'] = $cntPosts;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_blog_list', $data, true);
	}

	public function show_blog_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();
		$postId = $this->input->post('id'); // the same with $_POST['id'], just CI synthax
		$return = array();

		if($postId){
			$return['data'] = $this->blog->get($postId);
		}
		else {
			$return['data'] = array(
				'alias'=> '',
				'date_add' => strtotime('now'),
				'name_ru' =>'',
				'name_ua' =>'',
				'meta_title_ru'=>'',
				'meta_title_ua'=>'',
				'meta_description_ru'=>'',
				'meta_description_ua'=>'',
				'text_ru'=>'',
				'text_ua'=>'',
				'img'=>''
			);
		}

		echo $this->load->view('admin/v_ajax_blog_form', $return, true);
	}

	// ------------- SALES

	public function show_sale()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM sale ORDER BY id DESC";
		$data['sales'] = $this->db->query($query)->result_array();
		echo $this->load->view('admin/v_ajax_sale_list', $data, true);
	}

	public function show_sale_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		// получаем все продукты (до 1 тыс. норм если все получить)
		$query = "SELECT id, name FROM product ORDER BY id ASC";
		$return['products'] = $this->db->query($query)->result_array();

		$postId = $this->input->post('id');

		$return['data'] = [
			'name'=> '',
			'description'=>'',
			'text'=>'',
			'products'=>'',
			'discount_percent'=>'',
			'img_logo'=>'',
			'img_bg'=>'',
			'date_create'=> date('Y-m-d H:i:s'),
			'date_end'=>'',
			'date_end_ts'=>'',
			'priority'=>'',
			'publish'=> 0
		];

		if($postId) $return['data'] = $this->sale->get($postId);

		echo $this->load->view('admin/v_ajax_sale_form', $return, true);
	}

	// ---------- BANNERS

	public function show_banner()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM banner ORDER BY place DESC, sort ASC";
		$data['banners'] = $this->db->query($query)->result_array();
		echo $this->load->view('admin/v_ajax_banner_list', $data, true);
	}

	public function show_banner_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();
		$postId = $this->input->post('id');
		$return = array();

		if($postId){
			$return['data'] = $this->banner->get($postId);
		}
		else {
			$return['data'] = array(
				'name_ru' =>'',
				'name_ua' =>'',
				'link_ru'=>'',
				'link_ua'=>'',
				'place'=>'main_top',
				'sort'=>1,
				'img_ru'=>'',
				'img_ua'=>'',
				'img_mobile_ru'=>'',
				'img_mobile_ua'=>''
			);
		}

		echo $this->load->view('admin/v_ajax_banner_form', $return, true);
	}

	/// -------------- PAGES


	public function show_pages() // showing list of pages
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM pages ORDER BY id ASC";
		$data['pages'] = $this->db->query($query)->result_array();

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_pages_list', $data, true);
	}

	public function show_page_form() // showing ajax form for adding and changing review
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id'); // the same with $_POST['id'], just CI synthax
		// $translation = ($this->input->post('lang') != '') ? $this->input->post('lang') : $this->mainlanguage[0];
		$alias = ($this->input->post('alias') != '') ? $this->input->post('alias') : '';

		$return['data'] = [
			'alias'=>$alias,
			'meta_title'=>'',
			'meta_description'=>'',
			'name'=>'',
			'text'=>'',
			'flexdata'=>''
		];

		if($postId) $return['data'] = $this->pages->get($postId);

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_page_form', $return, true);
	}

	/// ------------- ORDERS

	public function show_orders(){

		$this->ajax_headers();
		$this->is_admin_logged();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$query = "SELECT SQL_CALC_FOUND_ROWS * FROM orders ORDER BY id DESC LIMIT ".$limit;

		$orders = $this->db->query($query)->result_array();
		$cntOrders = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntOrders = current($cntOrders[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntOrders ? $to : $cntOrders); // по какой товар показано
		$left = $cntOrders - $to;
		$left = ($left < $cntOrders) ? $left : $cntOrders; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_orders',
			'query' => [],
			'pages' => ceil($cntOrders/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntOrders, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['orders'] = $orders;
		$data['cntOrders'] = $cntOrders;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_orders_list', $data, true);

	}

	// ---- CLIENTS ---- на основании ORDERS уникальные клиенты (по номеру телефона)


	public function show_clients(){
		$this->ajax_headers();
		$this->is_admin_logged();


		$data = array();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$query = "SELECT SQL_CALC_FOUND_ROWS *, count(id) cnt_orders FROM orders GROUP BY phone ORDER BY ts DESC LIMIT ".$limit;

		$clients = $this->db->query($query)->result_array();
		$cntClients = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntClients = current($cntClients[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntClients ? $to : $cntClients); // по какой товар показано
		$left = $cntClients - $to;
		$left = ($left < $cntClients) ? $left : $cntClients; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_clients',
			'query' => [],
			'pages' => ceil($cntClients/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntClients, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['clients'] = $clients;
		$data['cntClients'] = $cntClients;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_clients_list', $data, true);
	}

	// ---- CLIENTS ---- на основании ORDERS уникальные клиенты (по номеру телефона)


	public function show_comment(){

		$this->ajax_headers();
		$this->is_admin_logged();


		$data = array();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$query = "SELECT SQL_CALC_FOUND_ROWS c.*, p.name_ru, p.alias 
					FROM comment c 
					LEFT JOIN product p ON p.id = c.id_product
					ORDER BY c.ts DESC LIMIT ".$limit;

		$comments = $this->db->query($query)->result_array();
		$cntComments = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntComments = current($cntComments[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntComments ? $to : $cntComments); // по какой товар показано
		$left = $cntComments - $to;
		$left = ($left < $cntComments) ? $left : $cntComments; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_comment',
			'query' => [],
			'pages' => ceil($cntComments/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntComments, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['comments'] = $comments;
		$data['cntComments'] = $cntComments;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_comment_list', $data, true);
	}

	// ----- EMAIL LIST список емайл подписок

	public function show_emails(){
		$this->ajax_headers();
		$this->is_admin_logged();

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 30;
		$page = (isset($data['page']))?$data['page']:1;
		$limit = ($page - 1) * $inpage . ', ' . $inpage;

		$query = "SELECT SQL_CALC_FOUND_ROWS * FROM email_list ORDER BY id DESC LIMIT ".$limit;

		$emails = $this->db->query($query)->result_array();
		$cntEmails = $this->db->query("SELECT FOUND_ROWS()")->result_array();
		$cntEmails = current($cntEmails[0]);
		
		// определяем параметры пагинации...
		$from = ($page == 1) ? 1 : ($page-1)*$inpage+1;
		$to = $inpage*$page;
		$to = ($to < $cntEmails ? $to : $cntEmails); // по какой товар показано
		$left = $cntEmails - $to;
		$left = ($left < $cntEmails) ? $left : $cntEmails; // сколько осталось показвыать еще...

		$pagination = [
			'base' => 'show_emails',
			'query' => [],
			'pages' => ceil($cntEmails/$inpage), // сколько страниц пагинации
			'curr' => $page, // текущий номер страницы
			'inpage' => $inpage, // сколько на одной страницы
			'total' => $cntEmails, // сколько всего в наборе
			'from'=> $from, // от какого товара показываем
			'to' => $to, // по какой товар показываем
			'left' => $left, // сколько товара осталось показывать через кнопку ЕЩЕ
		];

		$data['pagination'] = $pagination;

		$data['emails'] = $emails;
		$data['cntEmails'] = $cntEmails;
		$data['pagination_html'] = $this->load->view('admin/v_pagination', $data, TRUE);

		// placing html content inside variable and returning to the View
		echo $this->load->view('admin/v_ajax_email_list', $data, true);
	}

	// ------ SETTINGS

	public function show_settings()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$query = "SELECT * FROM settings ORDER BY id DESC";
		$data['settings'] = $this->db->query($query)->result_array();
		echo $this->load->view('admin/v_ajax_settings_list', $data, true);
	}

	public function show_settings_form()
	{
		$this->ajax_headers();
		$this->is_admin_logged();

		$postId = $this->input->post('id');

		$return['data'] = [
			'name'=> '',
			'password'=>'',
			'flexdata'=>''
		];

		if($postId) $return['data'] = $this->settings->get($postId);

		echo $this->load->view('admin/v_ajax_settings_form', $return, true);
	}

	// ---- COMMON TECHNICAL FUNCTIONS

	public function delete_row(){

		$this->ajax_headers();
		$this->is_admin_logged();

		$rowId = $this->input->post('id'); // id of row which we gonna delete
		$model = $this->input->post('model'); // model which related with specific table of DB

		if(!$model) {
			return 'unexpected crash, no model name passed';
		}

		if($this->$model->isset_id($rowId)){

			$thisRow = $this->$model->get($rowId);

			// у стрниц ищем переводы и удаляем тоже...
			if($model == 'pages'){

				$query = "SELECT id FROM pages WHERE alias = '".$thisRow['alias']."' AND id != ".$thisRow['id'];
				$transIds = $this->db->query($query)->result_array();
				$pagesIds = array_column($transIds, 'id');

				foreach ($pagesIds as $pId) {
					$this->$model->delete($pId);
				}
			}

			if($this->$model->delete($rowId)){
				echo json_encode(array('result' => true, 'id' => $rowId));
			}
		}
	}

	public function check_id_availability(){ // checking id for existance in DB, and loading propriate message, use $_POST['id'] and $_POST['model']

		$this->is_admin_logged();

		$rowId = $this->input->post('id'); // id of row which we gonna check for existance
		$model = $this->input->post('model'); // model which related with specific table of DB

		//$rowId = 333; // id of row which we gonna check for existance
		//$model = 'services'; // model which related with specific table of DB

		$this->ajax_headers();

		if(isset($rowId) && isset($model)){

			if($this->$model->isset_id($rowId)){

				$this->load->view('admin/messages/v_ajax_id_exist');
			}
			else {

				$this->load->view('admin/messages/v_ajax_id_available');
			}
		}
	}

	public function update_row(){ // checking id for existance in DB, and loading propriate message, use $_POST['id'] and $_POST['model']

		$this->is_admin_logged();

		$rowId = $this->input->post('id'); // id of row which we gonna update
		$modelName = $this->input->post('model'); // name of model
		$data = array(); // creating array in which we place the POST data

		$messageSuccess = $this->load->view('admin/messages/v_ajax_id_update_success', '', true);
		$messageFail = $this->load->view('admin/messages/v_ajax_id_update_fail', '', true);

		$return = array('result'=>false, 'message'=>$messageFail);

		/// Create a function which will check the validation of post data... !!!!
		$this->ajax_headers('application/json');

		if($modelName != ""){

			foreach ($_POST as $key => $value) {
				$data[$key] = $value;
			}
			
			unset($data['model']); // deleting model name from array which is going to be placed in DB

			//echo print_r($data);

			// обновляем связи с категориями и типами
			if($modelName == 'products'){
				$types = array_filter(explode(',',$data['types']));

				if(count($types)){
					if($rowId > 0) $this->db->simple_query("DELETE FROM product_type WHERE id_product = ".$rowId);
					
					foreach($types as $typeId){
						$this->db->simple_query("INSERT IGNORE INTO product_type (id_product,id_type) VALUES (".$rowId.",".$typeId.")");
					}
				}

				$categories = array_filter(explode(',',$data['categories']));

				if(count($categories)){
					if($rowId > 0) $this->db->simple_query("DELETE FROM product_category WHERE id_product = ".$rowId);
					
					foreach($categories as $catId){
						$this->db->simple_query("INSERT IGNORE INTO product_category (id_product,id_category) VALUES (".$rowId.",".$catId.")");
					}
				}
			}

			// обновляем связи с категориями и типами
			if($modelName == 'sale'){
				$products = array_filter(explode(',',$data['products']));

				if(count($products)){
					if($rowId > 0) $this->db->simple_query("DELETE FROM sale_product WHERE id_sale = ".$rowId);
					
					$c = 1;
					foreach($products as $key => $prodId){
						$this->db->simple_query("INSERT IGNORE INTO sale_product (id_product,id_sale,sort) VALUES (".$prodId.",".$rowId.",".$c.")");
						$c++;
					}
				}
			}

			if($this->$modelName->isset_id($rowId)){ // if isset row in DB than we try to refresh data

				if ($this->$modelName->update($rowId, $data))
					$return = array('result' => true, 'message' => $messageSuccess, 'id' => $rowId);
			}
			else { // otherwise we creating new row and saving information...

				//if($modelName == 'pages' in_array($modelName, array('pages', 'sermons'))){ $data['id'] = $rowId; }

				$data['id'] = $rowId;

				if ($this->$modelName->insert($data)){
					$insertId = $this->db->insert_id();
					$return = array('result' => true, 'message' => $messageSuccess, 'id' => $insertId);
				}
			}

			// if($modelName == 'pages'){
			// 	if(!is_dir('./assets/posts/'.$rowId)){
			// 		mkdir('./assets/posts/'.$rowId); // creates folder for tour's photos
			// 	}
			// }
		}
			
		echo json_encode($return);
	}

	// данные для видео
	public function get_video_edit(){

		$this->ajax_headers();
		$this->is_admin_logged();

		$rowId = (int) $this->input->post('id');

		$query = "SELECT * FROM video WHERE id = ".$rowId;
		$video = $this->db->query($query)->result_array();

		echo json_encode(['result' => true, 'data' => $video[0]]);
	}

	// публикация, снять с публикации
	public function publish_toggle(){
		$this->ajax_headers();
		$this->is_admin_logged();

		$rowId = (int) $this->input->post('id');
		$item = $this->input->post('item');

		$performedAction = -1;

		$query = "SELECT * FROM ".$item." WHERE id = ".$rowId;
		$row = $this->db->query($query)->result_array();

		if((int) $row[0]['publish'] === 0 || (int) $row[0]['publish'] === 1){
			$this->db->simple_query("UPDATE ".$item." SET publish = ".($row[0]['publish'] == 0 ? 1 : 0)." WHERE id = ".$rowId);
			$performedAction = ($row[0]['publish'] == 0) ? 1 : 0;
		}

		echo json_encode(['result' => true, 'action' => $performedAction]);
	}

}
