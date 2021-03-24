<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {

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

		$data['meta_title'] = ($lang == 'ru') ? 'Акции и скидки от интернет магазина ClimatMall' : 'Акції та знижки від магазину ClimatMall';
		$data['meta_description'] = ($lang == 'ru') ? 'Акции и скидки от интернет магазина ClimatMall' : 'Акції та знижки від магазину ClimatMall';

		// боковой блок, передаем настройки, категории, массив параметров
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true, 'foldup_categories' => false]);

		$query = "SELECT * FROM sale ORDER BY id DESC";
		$data['sales'] = $this->db->query($query)->result_array();

 		$this->load->view($this->viewfolder.'/v_sales_list', $data);
 	}

	// REST PAGES
	public function sale($id)
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

		// боковой блок, передаем настройки, категории, массив параметров
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true, 'foldup_categories' => false]);

		$data['sale'] = $this->db->query("SELECT * FROM sale WHERE id = ".$id)->row_array();

		if($data['sale']){ // if sale exists

			$data['meta_title'] = $data['sale']['name_'.$lang];
			$data['meta_description'] = $data['sale']['description_'.$lang];

			$data['sale_prods'] = [];

			if($data['sale']['products']){
				
				$pIds = explode(',', $data['sale']['products']);
				$pIds = array_map('intval', $pIds);
				$pIds = array_unique($pIds);
				$pIds = array_filter($pIds);

				if(!empty($pIds)){
					$prods = $this->db->query("SELECT p.id, p.name_ru, p.name_ua, p.alias, p.stock, p.price, p.price_old, IF(p.price_old > p.price, CEIL((p.price_old-p.price)/(p.price_old/100)), 0) discount_percent, count(c.id) cnt_comments, TRUNCATE(AVG(c.value), 1) avg_rate  FROM product p LEFT JOIN comment c ON c.id_product = p.id WHERE p.id IN (".implode(',',$pIds).") GROUP BY p.id")->result_array();
				
					if(count($prods)){
						foreach($pIds as $pId){
							foreach($prods as $p){
								if($pId == $p['id']){
									$data['sale_prods'][] = $p;
									break;
								}
							}
						}
					}
				}
			}

			$this->load->view($this->viewfolder.'/v_sale', $data);			
		}
		else {
			header("HTTP/1.0 404 Not Found");
			echo '404';
		}
	}
}