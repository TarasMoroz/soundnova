<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	private $languages = array('ua'=>'УКР', 'ru'=>'РУС');
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
		$this->load->model('Pages_model', 'pages');
		$this->load->model('Settings_model', 'settings');


		if($this->agent->is_mobile()) $this->device =  'mobile';
 	}

	// MAIN PAGE
	public function index()
 	{
		$data = array();
		error_reporting(1);

		// Должно быть в каждом методе !!!
		$lang =  $_SESSION['lang'];
		$data['lang'] = $lang;

		// CATEGORIES
		$cats = $this->db->query("SELECT * FROM category ORDER BY sort ASC")->result_array();
		$data['cats'] = [];
		foreach($cats as $cat) { $data['cats'][$cat['id']] = $cat; }

		// FAQ, FAQ items
		$faq = $this->db->query("SELECT * FROM faq WHERE item = 'main'")->row_array();
		$faq_items = (isset($faq['id'])) ? $this->db->query("SELECT * FROM faq_item WHERE id_faq = ".$faq['id'])->result_array() : [];

		// ----- только для главной.

		// контент главной страницы
		$data['page'] = $this->db->query("SELECT * FROM pages WHERE alias = 'home'")->row_array();
		$data['flexdata'] = ($data['page']['flexdata'] != '') ? json_decode($data['page']['flexdata'], true) : [] ;

		// // flexdata должны содержать top_cats 7 ids через запятую
		// $data['top_cats'] = [];
		// if(isset($data['flexdata']['top_cats'])){
		// 	$topCats = explode(',', $data['flexdata']['top_cats']);
		// 	$topCats = array_map('intval', $topCats);
		// 	$topCats = array_unique($topCats);
		// 	if(!empty($topCats)){
		// 		foreach($topCats as $topCID){
		// 			if(isset($data['cats'][$topCID])) $data['top_cats'][] = $data['cats'][$topCID];
		// 		}
		// 	}
		// }

		// // hits 6  ids хиты продаж товаров через запятую
		// $data['hits'] = [];
		// if(isset($data['flexdata']['hits'])){
		// 	$topHits = explode(',', $data['flexdata']['hits']);
		// 	$topHits = array_map('intval', $topHits);
		// 	$topHits = array_unique($topHits);
		// 	if(count($topHits) > 1){
		// 		$hits = $this->db->query("SELECT p.id, p.name_ru, p.name_ua, p.alias, p.stock, p.price, p.price_old, IF(p.price_old > p.price, CEIL((p.price_old-p.price)/(p.price_old/100)), 0) discount_percent, count(c.id) cnt_comments, TRUNCATE(AVG(c.value), 1) avg_rate FROM product p 
		// 			LEFT JOIN comment c ON c.id_product = p.id  WHERE p.id IN (".implode(',',$topHits).") AND p.stock > 0 GROUP BY p.id")->result_array();
		// 		if(count($hits)){
		// 			foreach($topHits as $hitId){
		// 				foreach($hits as $hit){
		// 					if($hitId == $hit['id']){
		// 						$data['hits'][] = $hit;
		// 						break;
		// 					}
		// 				}
		// 			}
		// 		}
		// 	}
		// }

		// // акционные предложения по размеру скидки топ 6
		// $data['top_sales'] = $this->db->query("SELECT p.id, p.name_ru, p.name_ua, p.alias, p.stock, p.price, p.price_old, CEIL((p.price_old-p.price)/(p.price_old/100)) discount_percent, count(c.id) cnt_comments, TRUNCATE(AVG(c.value), 1) avg_rate 
		// 	FROM `product` p 
		// 	LEFT JOIN comment c ON c.id_product = p.id 
		// 	WHERE p.price_old > p.price AND p.stock > 0 GROUP BY p.id
		// 	ORDER BY ((p.price_old-p.price)/(p.price_old/100)) DESC LIMIT 0,6")->result_array();

		// // meta tags
		// //$data['meta_title'] = ($data['page']['meta_title']) ? $data['page']['meta_title'] : $data['page']['name'];
		// //$data['meta_description'] = $data['page']['meta_description'];

		// // все баннеры
		// $data['banners'] = $this->db->query("SELECT * FROM banner ORDER BY place DESC, sort ASC")->result_array();

		// // топ производители: id_filter_group = 1 это производители
		// $data['brands'] = $this->db->query("SELECT * FROM catalog_filter WHERE id_filter_group = 1 ORDER BY sort ASC LIMIT 0, 10")->result_array();

		// // посты блога
		// $data['posts'] = $this->db->query("SELECT alias, name_ru, name_ua, img, date_add FROM blog ORDER BY id DESC LIMIT 0,3")->result_array();

 		$this->load->view($this->viewfolder.'/v_main_new', $data);
 	}

	// REST PAGES
	public function show_page($alias)
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
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true]);

		// контент главной страницы
		$data['page'] = $this->db->query("SELECT * FROM pages WHERE alias = '".$alias."' AND translation = '".$lang."'")->row_array();

		if($data['page']){
			$data['flexdata'] = ($data['page']['flexdata'] != '') ? json_decode($data['page']['flexdata'], true) : [] ;

			$data['meta_title'] = ($data['page']['meta_title'] != '') ? $data['page']['meta_title'] : $data['page']['name'];
			$data['meta_description'] = $data['page']['meta_description'];

			// популярные посты блога
			$data['pop_posts'] = $this->db->query("SELECT alias, name_ru, name_ua, img, date_add FROM blog ORDER BY cnt_views DESC LIMIT 0,3")->result_array();

			// reserved page designs
			if($alias == 'reviews'){
				$this->load->view($this->viewfolder.'/v_page_reviews', $data);
				return;
			}

			$this->load->view($this->viewfolder.'/v_page', $data);	
		}
		else {
			header("HTTP/1.0 404 Not Found");
			$this->load->view($this->viewfolder.'/v_error-404', $data);
			
		}
	}

	public function show_page_contact(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data['lang'] = $lang;

		echo $this->load->view($this->viewfolder.'/v_page_contact', $data, true);
	}

	public function show_page_soundstudio(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data['lang'] = $lang;

		echo $this->load->view($this->viewfolder.'/v_sound_design_studio', $data, true);
	}

	public function show_page_login(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_login', $data, true);
	}

	public function show_page_signup(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_signup', $data, true);
	}
	public function show_page_success(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_success_page', $data, true);
	}
	public function show_page_subscription(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_subscription', $data, true);
	}
	public function show_page_stageone(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_subscriptStage1', $data, true);
	}
	public function show_page_stageone_join(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_subscriptPageJoinNow', $data, true);
	}
	public function show_page_stageone_free(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_subscriptPageTryFree', $data, true);
	}
	public function show_page_stagetwo(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_subscriptStage2', $data, true);
	}
	public function show_page_stagethree(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_subscriptStage3', $data, true);
	}
	public function show_page_aboutus(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data = [];

		echo $this->load->view($this->viewfolder.'/v_about-us', $data, true);
	}
	public function favorite() {
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
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true]);

		$data['meta_title'] = ($lang == 'ru') ? 'Список избранных товаров' : 'Список обраних товарів';
		$data['meta_description'] = ($lang == 'ru') ? 'Список избранных товаров' : 'Список обраних товарів';

		$data['favorites'] = [];

		if($_COOKIE['favs']){
			
			$favIds = array_filter(json_decode($_COOKIE['favs'], true));

			if(!empty($favIds)){
				$pfavs = $this->db->query("SELECT p.id, p.name_ru, p.name_ua, p.alias, p.stock, p.price, p.price_old, IF(p.price_old > p.price, CEIL((p.price_old-p.price)/(p.price_old/100)), 0) discount_percent, count(c.id) cnt_comments, TRUNCATE(AVG(c.value), 1) avg_rate FROM product p LEFT JOIN comment c ON c.id_product = p.id WHERE p.id IN (".implode(',',$favIds).") GROUP BY p.id")->result_array();
			
				if(count($pfavs)){
					foreach($favIds as $fId){
						foreach($pfavs as $p){
							if($fId == $p['id']){
								$data['favorites'][] = $p;
								break;
							}
						}
					}
				}
			}
		}

		$this->load->view($this->viewfolder.'/v_favorite', $data);	
	}

	public function compare() {
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
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true]);

		$data['meta_title'] = ($lang == 'ru') ? 'Сравнение товаров' : 'Порівняння товарів';
		$data['meta_description'] = ($lang == 'ru') ? 'Сравнение товаров' : 'Порівняння товарів';

		$data['compares'] = [];

		if($_COOKIE['comps']){
			
			$compIds = array_filter(json_decode($_COOKIE['comps'], true));

			if(!empty($compIds)){
				$pcomps = $this->db->query("SELECT id, name_ru, name_ua, alias, stock, price, price_old, IF(price_old > price, CEIL((price_old-price)/(price_old/100)), 0) discount_percent, filters FROM product WHERE id IN (".implode(',',$compIds).")")->result_array();
				
				if(count($pcomps)){
					foreach($compIds as $cId){
						foreach($pcomps as $p){
							if($cId == $p['id']){
								$data['compares'][] = $p;
								break;
							}
						}
					}
				}

				$query = "SELECT g.*, 
								(SELECT count(id) FROM catalog_filter WHERE id_filter_group = g.id) cnt_ftrs 
						  FROM catalog_filter_group g 
						  ORDER BY g.sort ASC";

				$data['groups'] = $this->db->query($query)->result_array();

				$query = "SELECT f.*, g.name_ru g_name 
					FROM catalog_filter f 
					LEFT JOIN catalog_filter_group g ON g.id = f.id_filter_group 
				  ORDER BY g.sort ASC, f.sort ASC";
				  
				$data['ftrs'] = $this->db->query($query)->result_array();
			}
		}

		$this->load->view($this->viewfolder.'/v_compare', $data);	
	}

	public function send($mode){

	  if($mode == 'contacts' || $mode == 'support'){

	  } else {
	  	if(isset($_SESSION['secret']) && $_SESSION['secret'] == $mode){
	  		$this->show_message();
	  		exit();
	  	}else {
	  		die ("incorrect send mode: ".$mode);
	  	}
	  }

 	  $settings = $this->settings->get(1);

 	  $operators = array("039", "050", "063", "066", "067", "068", "073", "091", "092", "093", "094", "095", "096", "097", "098", "099");

 	  // Устанавливаем значения некоторых полей по умолчанию
	  $d = date('d.m.Y в H:i');

	  $url = $_POST['url'];
	  $u_phone = ($_POST['phone'] == "") ? "Неизвестно" : $_POST['phone'] ;
	  $u_name = ($_POST['fio'] == "") ? "Неизвестно" : $_POST['fio'] ;
	  $u_email = ($_POST['email'] == "") ? "Неизвестно" : $_POST['email'] ;
	  $u_desc = ($_POST['text'] == "") ? "Пользователь не прокомментировал заявку." : $_POST['text'] ;


	  // проверка на укр. операторы... УБИРАЕМ!!!
	  // if(!in_array(substr($u_phone, 1, 3), $operators)){
	  // 	header("Location: ".base_url('/'));
	  // 	return;
	  // }

	  $thm = "Новое сообщение! ".$d." ";
  	  $msg = "Новое сообщение через форму сайта! ".$d." \r\n Со страницы: ".$url." \r\n  Имя: ".$u_name." \r\n Контактный телефон: ".$u_phone." \r\n  Email: ".$u_email." \r\n \r\n ";

  	  if($mode == 'contacts'){
  	  	$thm .= "Сообщение со странцы контакты";
  	  	$msg .= "Интересует:  \r\n \r\n";
  	  	$msg .= $u_desc;
  	  }

  	  if($mode == 'sale'){
  	  	$thm .= "Продукция";
  	  	$msg .= "Интересует:  \r\n \r\n";

  	  	$prods = [
  	  		'prod1'=>'- Маточне стадо',
  	  		'prod2'=>'- Молодняк',
  	  		'prod3'=>'- Заморожені равлики у мушлі',
  	  		'prod4'=>'- Слиз равлика / Яйця равлика',
  	  		'prod5'=>'- Готові напівфабрикати равликів',
  	  		'prod6'=>'- Очищене філе равликів',
  	  		'prod7'=>'- Живі їстівні равлики Helix Aspera'
  	  	];

  	  	for ($i=1; $i < 8; $i++) { 
  	  		if(isset($_POST['prod'.$i])) {
  	  			$msg .= $prods['prod'.$i] . "\r\n";
  	  		} 
  	  	}
  	  }

  	  $header = "From: \"site\" <site@web.site>\n";
	  $header .= "Content-type: text/plain; charset=\"utf-8\"";

	  if($_POST['phone'] != ""){
	  	  if(mail($settings['email'], $thm, $msg, $header)){
	  	  //if(mail('moroz.taras.box@gmail.com', $thm, $msg, $header)){
	  	  	$_SESSION['secret'] = "s".strtotime('now');
	  	  	echo json_encode(['result'=>true, 'secret'=>$_SESSION['secret']]);
	  	  }else {
	  	  	echo json_encode(['result'=>false]);
	  	  }	  	
	  }

 	}

	private function show_message(){
		
		// брать из базы данные и формировать...
		$lang =  $_SESSION['lang'];
		$data['link_suffix'] = ($lang == 'ua') ? '' : '_'.$lang; // makes _en or _ua suffixes for link
		$data['result'] = $this->pages->get_translated('result'.$data['link_suffix'],$lang);
		$data['flexdata'] = ($data['result']['flexdata'] != '') ? 
			json_decode($data['result']['flexdata']) : 
			[] ;

		echo $this->load->view('v_send', $data, true);
	}

	public function np($param){

		if($param == 'cities'){
			$npCities = json_decode($this->np->getJsonCities());
			$ts = strtotime('now');
			$data = [];

			if($npCities->success){
				foreach($npCities->data as $city){
					array_push($data, [
						'uk' => $city->Description,
						'ru' => $city->DescriptionRu,
						'ref'=> $city->Ref,
						'updated'=>$ts
					]);
				}
			}

			if(!empty($data)){
				$this->db->truncate('np_cities');
				$this->db->insert_batch('np_cities', $data);
				echo "список городов НП обновлен!";
			}
		}

		if($param == 'departments'){
			$npDeps = json_decode($this->np->getJsonWarehouses());
			$ts = strtotime('now');
			$data = [];
			//echo print_r($npDeps);
			if($npDeps->success){
				foreach($npDeps->data as $dep){
					array_push($data, [
						'uk' => $dep->Description,
						'ru' => $dep->DescriptionRu,
						'ref'=> $dep->Ref,
						'ref_city'=> $dep->CityRef,
						'ts'=>$ts
					]);
				}
			}

			if(!empty($data)){
				$this->db->truncate('np_departments');
				$this->db->insert_batch('np_departments', $data);
				echo "список отделений НП обновлен!";
			}
		}

		if($param == 'get_cities'){
			$this->db->select('uk,ru,ref');
			$cities = $this->db->get('np_cities')->result();
			echo json_encode($cities);
		}

		if($param == 'get_departments'){
			$ref = htmlentities($_POST['ref']);
			$this->db->select('uk,ru,ref,ref_city');
			$this->db->where('ref_city',$ref);
			$deps = $this->db->get('np_departments')->result();
			echo json_encode($deps);
		}
	}

	public function promocode(){
		$code = htmlentities($_POST['promo']);

		$this->db->where('code', $code);
		$codeDB = $this->db->get('promocodes')->row_array();
		

		echo json_encode($codeDB ? $codeDB : ['active'=>false]);
	}

	public function order(){
		// $_POST card object... not encoded!
		if(isset($_COOKIE['cart'])){

			$ts = strtotime('now');

			$s = $this->settings->get(1);

			$cart = json_decode($_COOKIE['cart'], true);

			$sum = 0;
			$goodIds = [];
			foreach($cart['goods'] as $good){
				array_push($goodIds, $good['id']);
			}

			$goodDB = $this->db->query("SELECT id, price, name_ru FROM product WHERE id IN (".implode(',',$goodIds).")")->result_array();

			$goodPrice = [];
			$total_sum = 0;
			foreach($goodDB as $item){
				$goodPrice[$item['id']] = $item;
				$total_sum += $item['price']*$cart['goods'][$item['id']]['c'];
			}

			$total_sum = price_grn($total_sum, $s['kurs']);

			$data = [
				'name'=> $cart['fio'],
				'phone'=> $cart['mob'],
				'email'=> $cart['email'],
				'city'=> $cart['city'],
				'department'=> $cart['npdn'],
				'np_city'=> $cart['npc'],
				'np_department'=> $cart['npd'],
				'ts'=>  $ts,
				'pay_type' => $cart['tpay'],
				'del_type' => $cart['tdel'],
				'sum' => $total_sum,
				'comment' => htmlentities($_POST['comment']),
				'goods'=> json_encode($cart['goods']),
				'obj'=> $_COOKIE['cart']
			];

			// сохраняем email в список подписок.
			$isMail = $this->db->query("SELECT count(*) cnt FROM email_list WHERE email = '".htmlentities($cart['email'])."'")->row_array();
			if(!$isMail['cnt']){
				$this->db->insert('email_list', ['email' => htmlentities($cart['email']), 'ts' => $ts]);
			}

			$this->db->insert('orders', $data);

			$order_id = $this->db->insert_id();
			$order_sum = $total_sum;

			// Отправляем Email админу...

			$settings = $this->settings->get(1);

			$d = date('d.m.Y в H:i');

			$del = 'Не указано';
			
			if($data['del_type'] == 'type1') $del = 'Самовывоз из магазина Харьков';
			
			if($data['del_type'] == 'type2') $del = 'Самовывоз из магазина Полтава';
			
			if($data['del_type'] == 'type3'){
				
				$del = 'Адресная доставка, Новая Почта [ ';

				$delExtra = 'адресс не указан';

				if($_POST['del-type3-cty'] != '') $delExtra = 'город: '.$_POST['del-type3-cty'];
				if($_POST['del-type3-str'] != '') $delExtra .= ', улица: '.$_POST['del-type3-str'];
				if($_POST['del-type3-house'] != '') $delExtra .= ', дом / квартира: '.$_POST['del-type3-house'];

				$delExtra .= ' ]';

				$del .= $delExtra;
			}

			if($data['del_type'] == 'type4') {
				
				$del = 'Доставка в отделение, Новая Почта [ ';

				$delExtra = 'город и отделение не указанны';

				if($data["city"] != '') $delExtra = 'город: '.$data["city"];
				if($data["department"] != '') $delExtra .= ', отделение: '.$data["department"];

				$delExtra .= ' ]';
				
				$del .= $delExtra;
			}
			
			if($data['del_type'] == 'type5') {
				$del = 'Адресная доставка курьером Харьков, Полтава [ ';
				
				$delExtra = 'город не указан';

				if($_POST['del-type5-cty'] == 'type1' || $_POST['del-type5-cty'] == 'type2') {
					if($_POST['del-type5-cty'] == 'type1') $delExtra = ' Харьков';
					if($_POST['del-type5-cty'] == 'type2') $delExtra = ' Полтава';
				}

				if($_POST['del-type5-str'] != '') $delExtra .= ', улица: '.$_POST['del-type5-str'];
				if($_POST['del-type5-house'] != '') $delExtra .= ', номер дома: '.$_POST['del-type5-house'];
				if($_POST['del-type5-flat'] != '') $delExtra .= ', квартира: '.$_POST['del-type5-flat'];

				$delExtra .= ' ]';

				$del .= $delExtra;
			}

			$pay = 'Не указано';
			if($data['pay_type'] == 'type1') $pay = 'Наличными при получении';
			if($data['pay_type'] == 'type2') $pay = 'Наложенный платеж';
			if($data['pay_type'] == 'type3') $pay = 'Оплата частями / рассрочка';
			if($data['pay_type'] == 'type4') $pay = 'Онлайн оплата';

			$thm = "Новый заказ на ".$data['sum']." грн (".$data['name'].", ".$data['phone'].") ".$d." ";
  	  		$msg = " Новый заказ с сайта ClimatMall! ".$d
  	  			   ." \r\n Номер заказа: ".$order_id
  	  			   ." \r\n Имя: ".$data['name']
  	  			   ." \r\n Телефон: ".$data['phone']
  	  			   ." \r\n Email: ".$data['email']
  	  			   ." \r\n Доставка: ".$del
  	  			   ." \r\n Оплата: ".$pay
  	  			   ." \r\n Комментарий к заказу: "
  	  			   ." \r\n ".($_POST['comment'] != '' ? $_POST['comment'] : 'не указано')
  	  			   ." \r\n \r\n "
  	  			   ." \r\n Товары: \r\n ----------------  \r\n\r\n";

  	  		foreach($cart['goods'] as $good){
  	  			//echo 'good... ';
  	  			$msg .= $goodPrice[$good['id']]['name_ru']." [".$good['id']."] --- ".$good['c']." шт. х ".price_grn($goodPrice[$good['id']]['price'], $s['kurs'])."грн. \r\n";
  	  		}

  	  		$msg .= " \r\n ---------------- "
  	  				." \r\n Сумма:  ".$total_sum." грн.";

  	  		// if(isset($cart->pcd->code)){
  	  		// 	//echo 'promo found... ';
  	  		// 	$msg .= " \r\n Промокод: ".$cart->pcd->code." (".$cart->pcd->percent."%)";
  	  		// }

  	  		$header = "From: \"ClimatMall\" <site@web.site>\n";
	 		$header .= "Content-type: text/plain; charset=\"utf-8\"";	 		
			
			if(mail($settings['admin_email1'], $thm, $msg, $header)){

				if($settings['admin_email2'] != ''){
					mail($settings['admin_email2'], $thm, $msg, $header); // дублируем на еще один email
				}

				// если вывоз из харькова... шлем админу в харькове
				if($settings['admin_email_kh'] != ''){
					// адрессная или вывоз из харькова, новая почта харьков.
					if($_POST['del-type5-cty'] == 'type1' || $data['del_type'] == 'type1'){
						mail($settings['admin_email_kh'], $thm, $msg, $header);
					}
				}

				// если вывоз из полтава... шлем админу в полтаве
				// if($settings['admin_email_pl'] != '' && $data['del_type'] == 'type2'){
				// 	mail($settings['admin_email_pl'], $thm, $msg, $header);
				// }

				$_SESSION['order_id'] = $order_id;
		  	  	$_SESSION['order_sum'] = $order_sum;

		  	  	// тут отправить сообщение SMS fly !!!
		  	  	$this->send_sms(str_replace(["+", " ", "(", ")"], "", $cart['mob']), $order_id);

		  	  	echo json_encode(['result'=>true, 'order'=>$order_id]);

		  	  	//echo 'email sent <br><br><br>';
		  	  	//echo nl2br($msg);
			} else {
			  	//echo json_encode(['result'=>false]);
			}

			//mail($cart->email, $thm, $msg, $header);

			// {"sum":1860,"disc":279,"del":0,"fee":0,"goods":{"p1557916892_vol_085":{"id":"p1557916892","t":"ДИКАНЬКА для смаження","c":13,"p":"20","at":{"a":"vol_085","t":"0,85L","p":"20"}},"p1557916885_vol_1":{"id":"p1557916885","t":"ГАРНА ОРГАНІКА Високоолеїнова для смаження","c":1,"p":"400","at":{"a":"vol_1","t":"1L","p":"400","s":"1"}},"p1557916891_vol_1":{"id":"p1557916891","t":"ДИКАНЬКА для салатів","c":2,"p":"400","at":{"a":"vol_1","t":"1L","p":"400","s":"1"}},"p1557916889_vol_1":{"id":"p1557916889","t":"EFFO CHEF","c":1,"p":"400","at":{"a":"vol_1","t":"1L","p":"400","s":"1"}}},"pcd":{"id":"3","code":"test","percent":"15","active":"1","count":"0"},"promo":"test","fio":"test","mob":"+38 (099) 999 99 99","email":"moroz.taras.box@gmail.com","city":"Полтава","tdel":"","tpay":"","str":"","pindx":"","npc":"db5c8892-391c-11dd-90d9-001a92567626","npd":"47402e74-e1c2-11e3-8c4a-0050568002cf","npdn":"Відділення №7 (до 30 кг на одне місце): вул. Маршала Бірюзова, 43 а","src":"","crd":0}  	
		}
	}

	private function send_sms($tel, $order_id){

		$settings = $this->settings->get(1);

		$description = $tel;
		$start_time = "AUTO"; //отправить немедленно
		$end_time = "AUTO"; // автоматически рассчитать системой
		$rate = 1; // скорость отправки сообщений (1 = 1 смс минута). Одиночные СМС сообщения отправляются всегда с максимальной скоростью.
		$lifetime = 4; // срок жизни сообщения 4 часа
		$source = 'CLIMAT'; // Alfaname
		$recipient = $tel; //'380669273407';
		$user = $settings['smsfly_login'];
		$password = $settings['smsfly_password'];

		$myXML = "<?xml version=\"1.0\" encoding=\"utf-8\"?>\n";
		$myXML .= "<request>";
		$myXML .= "<operation>SENDSMS</operation>";
		$myXML .= '		<message start_time="' . $start_time . '" end_time="' . $end_time . '" lifetime="' . $lifetime . '" rate="' . $rate . '" desc="' . $description . '" source="' . $source . '">' . "\n";
		$myXML .= "		<body>" . str_replace("[num]", $order_id, $settings['sms_template']) . "</body>";
		$myXML .= "		<recipient>" . $recipient . "</recipient>";
		$myXML .= "</message>";
		$myXML .= "</request>";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, $user . ':' . $password);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_URL, 'http://sms-fly.com/api/api.php');
		curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: text/xml", "Accept: text/xml"));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $myXML);
		$response = curl_exec($ch);
		curl_close($ch);

		return true;
	}

	public function calc(){
		if(isset($_POST['name']) && isset($_POST['phone'])){

			$name = htmlentities($_POST['name']);
			$phone = htmlentities($_POST['phone']);
			$text = htmlentities($_POST['text']);
			$city = htmlentities($_POST['city']);

			// Отправляем Email админу...

			$settings = $this->settings->get(1);

			$d = date('d.m.Y в H:i');

			$cityStr = 'Не указано';
			if($city == 'type1') $cityStr = 'Харьков';
			if($city == 'type2') $cityStr = 'Полтава';
			if($city == 'type3') $cityStr = 'Другой город';

			$thm = "Новая заявка на рассчет монтажа (".$name.", ".$phone.") ".$d." ";
  	  		$msg = "Новая заявка на рассчет монтажа с сайта ClimatMall! ".$d
  	  			   ." \r\n Имя: ".$name
  	  			   ." \r\n Телефон: ".$phone
  	  			   ." \r\n Город: ".$cityStr
  	  			   ." \r\n ----------------  \r\n\r\n";

  	  		$msg .= $text;

  	  		$header = "From: \"ClimatMall\" <site@web.site>\n";
	 		$header .= "Content-type: text/plain; charset=\"utf-8\"";

			
			if(mail($settings['admin_email1'], $thm, $msg, $header)) {

				if($settings['admin_email2'] != ''){
					mail($settings['admin_email2'], $thm, $msg, $header); // дублируем на еще один email
				}

				// если из харькова... шлем админу в харькове
				if($settings['admin_email_kh'] != '' && $city == 'type1'){
					mail($settings['admin_email_kh'], $thm, $msg, $header);
				}

				// если из полтава... шлем админу в полтаве ---> Полтава по умолчанию
				// if($settings['admin_email_pl'] != '' && $city == 'type2'){
				// 	mail($settings['admin_email_pl'], $thm, $msg, $header);
				// }

		  	  	echo json_encode(['result'=>true]);
			} else {
			  	//echo json_encode(['result'=>false]);
			}
		}
	}

	public function callback(){

		if(isset($_POST['name']) && isset($_POST['phone'])){

			$name = htmlentities($_POST['name']);
			$phone = htmlentities($_POST['phone']);
			$city = htmlentities($_POST['city']);

			// Отправляем Email админу...

			$settings = $this->settings->get(1);

			$d = date('d.m.Y в H:i');

			$cityStr = 'Не указано';
			if($city == 'type1') $cityStr = 'Харьков';
			if($city == 'type2') $cityStr = 'Полтава';
			if($city == 'type3') $cityStr = 'Другой город';

			$thm = "Новая заявка на обратный звонок (".$name.", ".$phone.") ".$d." ";
  	  		$msg = "Новая заявка на обратный звонок с сайта ClimatMall! ".$d
  	  			   ." \r\n Имя: ".$name
  	  			   ." \r\n Телефон: ".$phone
  	  			   ." \r\n Город: ".$cityStr
  	  			   ." \r\n ---------------- \r\n\r\n";

  	  		$header = "From: \"ClimatMall\" <site@web.site>\n";
	 		$header .= "Content-type: text/plain; charset=\"utf-8\"";

			if(mail($settings['admin_email1'], $thm, $msg, $header)){

				if($settings['admin_email2'] != ''){
					mail($settings['admin_email2'], $thm, $msg, $header); // дублируем на еще один email
				}

				// если из харькова... шлем админу в харькове
				if($settings['admin_email_kh'] != '' && $city == 'type1'){
					mail($settings['admin_email_kh'], $thm, $msg, $header);
				}

				// если из полтава... шлем админу в полтаве ---> основной и есть полтава
				// if($settings['admin_email_pl'] != '' && $city == 'type2'){
				// 	mail($settings['admin_email_pl'], $thm, $msg, $header);
				// }

		  	  	echo json_encode(['result'=>true]);
			} else {
			  	//echo json_encode(['result'=>false]);
			}
		}
	}

	public function addcomment(){
		// $_POST card object... not encoded!
		if(isset($_POST['id'])){

			$ts = strtotime('now');

			$data = [
				'name' => htmlentities($_POST['fio']),
				'email' => htmlentities($_POST['email']),
				'comment' => htmlentities($_POST['com']),
				'value'=> (int) $_POST['val'],
				'lang' => $_SESSION['lang'],
				'id_product' => htmlentities($_POST['id']),
				'ts'=> $ts
			];

			$this->db->insert('comment', $data);

			echo json_encode(['result'=>true]);
		}
	}

	// подписка
	public function subscribe(){
		// $_POST card object... not encoded!
		if(isset($_POST['mail'])){

			$ts = strtotime('now');

			$isMail = $this->db->query("SELECT count(*) cnt FROM email_list WHERE email = '".htmlentities($_POST['mail'])."'")->row_array();

			$msgMailExist = ($_SESSION['lang'] == 'ru') ? 'Вы уже подписаны на скидки и новости :)' : 'Ви вже підписані на знижки :)';
			$msgMailNew = ($_SESSION['lang'] == 'ru') ? 'Вы успешно подписались на скидки и новости :)' : 'Ви успішно підписались на знижки :)';

			if(!$isMail['cnt']){
				$this->db->insert('email_list', ['email' => htmlentities($_POST['mail']), 'ts' => $ts]);
			}

			echo json_encode(['result'=>true, 'msg'=> ($isMail['cnt'] ? $msgMailExist : $msgMailNew)]);
		}
	}

	// подписка
	public function sitemap(){
		
		set_time_limit(100);

		$now = strtotime('now');
		$nowDt = date('Y-m-d', $now);

		// список доступных категорий каталога
		$cats = $this->db->query("SELECT alias FROM catalog WHERE alias IN (SELECT DISTINCT alias_catalog FROM product)")->result_array();

		$prods = $this->db->query("SELECT alias FROM product")->result_array();

		$posts = $this->db->query("SELECT alias, date_add FROM blog")->result_array();

		$content = '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';

		// главная страница
		$content .= '<url><loc>'.base_url("/").'</loc><changefreq>daily</changefreq><priority>1</priority><lastmod>'.$nowDt.'</lastmod></url>';

		foreach($cats as $item){
			$content .= '<url><loc>'.base_url('/ru/catalog/'.$item['alias'].'/').'</loc><changefreq>weekly</changefreq><priority>0.7</priority><lastmod>'.$nowDt.'</lastmod></url>';
			$content .= '<url><loc>'.base_url('/ua/catalog/'.$item['alias'].'/').'</loc><changefreq>weekly</changefreq><priority>0.7</priority><lastmod>'.$nowDt.'</lastmod></url>';
		}

		foreach($prods as $item){
			$content .= '<url><loc>'.base_url('/ru/product/'.$item['alias'].'/').'</loc><changefreq>weekly</changefreq><priority>0.9</priority><lastmod>'.$nowDt.'</lastmod></url>';
			$content .= '<url><loc>'.base_url('/ua/product/'.$item['alias'].'/').'</loc><changefreq>weekly</changefreq><priority>0.9</priority><lastmod>'.$nowDt.'</lastmod></url>';
		}

		foreach($posts as $item){
			$content .= '<url><loc>'.base_url('/ru/blog/'.$item['alias'].'/').'</loc><changefreq>weekly</changefreq><priority>0.6</priority><lastmod>'.date('Y-m-d', $item['date_add']).'</lastmod></url>';
			$content .= '<url><loc>'.base_url('/ua/blog/'.$item['alias'].'/').'</loc><changefreq>weekly</changefreq><priority>0.6</priority><lastmod>'.date('Y-m-d', $item['date_add']).'</lastmod></url>';
		}

		$content .= '</urlset>';

		file_put_contents('sitemap.xml', $content);

		echo 'sitemap ready! checkout file: <a href="/sitemap.xml" target="_blank">sitemap.xml</a>';
	}

	// google feed merchant
	public function google(){
		
		set_time_limit(100);

		$now = strtotime('now');
		$nowDt = date('Y-m-d', $now);

		$s = $this->settings->get(1);

		$prods = $this->db->query("SELECT id, alias, name_ru, brand, mpn, price, stock FROM product")->result_array();

		$content = '<rss xmlns:g="http://base.google.com/ns/1.0" version="2.0">
                <channel>
                <title>Ассортимент магазина ClimatMall.com.ua</title>
                <link>https://climatmall.com.ua</link>
                <description>Актуальный ассортимент кондиционеров на climatmall.com.ua</description>';

		foreach($prods as $item){
			$content .= '<item>
                      <g:id>'.$item['id'].'</g:id>
                      <g:title>'.htmlentities($item['name_ru']).'</g:title>
                      <g:description>'.htmlentities($item['name_ru']).'. Купить в Харькове или Полтаве.</g:description> 
                      <g:link>'.base_url('/ru/product/'.$item['alias'].'/').'</g:link>
                      <g:image_link>https://climatmall.com.ua/assets/products/'.$item['id'].'/main.jpg</g:image_link>
                      <g:condition>new</g:condition>
                      <g:availability>'.($item['stock'] ? 'in stock' : 'out of stock').'</g:availability>
                      <g:google_product_category>499873</g:google_product_category>
                      <g:product_type> Кондиционер </g:product_type>
                      <g:identifier_exists>no</g:identifier_exists>
                      <g:mpn>'.htmlentities($item['mpn']).'</g:mpn>
                      <g:brand>'.htmlentities($item['brand']).'</g:brand>
                      <g:price>'.price_grn($item['price'], $s['kurs']).' UAH</g:price>
                      </item>';
		}

		$content .= '</channel></rss>';



		file_put_contents('google.xml', $content);

		echo 'google feed ready! checkout file: <a href="/google.xml" target="_blank">google.xml</a>';
	}

	// API для получения JSON списка отзывов...
	public function get_orders(){

		if(isset($_GET['key'])){
			$settings = $this->settings->get(1);

			if($_GET['key'] == $settings['apiKey']){

				$this->db->select('*');
				$this->db->limit(100);
				$orders = $this->db->get('orders')->result();

				$ordersReady = [];

				foreach($orders as $order){
					$orderObj = json_decode($order->obj);
					$orderObj->id = $order->id;
					$orderObj->date = date('Y-m-d H:i:s', $order->ts);
					array_push($ordersReady, $orderObj);
				}

				echo json_encode(['result'=>true, 'orders'=>$ordersReady]);

			} else {

				echo json_encode(['result'=>false, 'message'=>'Неверный параметр [key]! Обратитесь к администратору сайта!']);
			}

		} else {
			echo json_encode(['result'=>false, 'message'=>'Необходимо передать параметр [key]!']);
		}
	}

	public function photoswipe()
	{
		echo $this->load->view('ajax/v_photoswipe', '', true);
	}

	public function error(){

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
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true]);

		header("HTTP/1.0 404 Not Found");
			$this->load->view($this->viewfolder.'/v_error-404', $data);
	}

	public function save() {

		// тут все настройки вo flexdata
		$ftp_settings = $this->db->query("SELECT * FROM settings WHERE name = 'ftp'")->row_array();
		$param = ($ftp_settings['flexdata'] != '') ? json_decode($ftp_settings['flexdata'], true) : [] ;

		if(isset($param['hostname']) && isset($param['username']) && isset($param['password'])){

			$config['hostname'] = $param['hostname'];
			$config['username'] = $param['username'];
			$config['password'] = $param['password'];
			$config['debug']    = TRUE;

			$conn_id = ftp_connect($config['hostname']);
			// вход с именем пользователя и паролем
			$login_result = ftp_login($conn_id, $config['username'], $config['password']);

			if ((!$conn_id) || (!$login_result)) {
			    echo "Не удалось установить соединение с FTP-сервером!";
			    exit;
			}

		    $file = $param['root'].'/product.psd';
		    // $file = 'video.mp4';

		    $fsize = ftp_size($conn_id, $file);

		    // если больше 1 мб, то ставим больше
		    $timeLimit = ($fsize > 1024*1024) ? (int) (ceil($fsize/(1024*1024)*2) + 5) : 10; // 10 сек или 500 кб в секунду + 5 сек на все соединения.

		    set_time_limit($timeLimit);
		    ftp_set_option($conn_id, FTP_TIMEOUT_SEC, $timeLimit);

		    // echo 'start downloading '.$file.' with size: '.$fsize. ' defining time for that: '.$timeLimit;

			//echo $this->formatBytes($fsize);

	    	header('Content-Description: File Transfer');
	        header('Content-Type: application/octet-stream');
	        header('Content-Disposition: attachment; filename=file_'.$this->formatBytes($fsize).'.psd');
	        header('Content-Transfer-Encoding: binary');
	        header('Expires: 0');
	        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
	        header('Pragma: public');
	        header('Content-Length: ' . $fsize);

			$sourceFile = fopen('ftp://'.$config['username'].':'.$config['password'].'@'.$config['hostname'].$file, 'r');

			while(!feof($sourceFile)){
			   echo fread($sourceFile, 8192);
			}

		}

	    return null;
	}

	private function formatBytes($bytes, $precision = 2) { 
	    $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

	    $bytes = max($bytes, 0); 
	    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
	    $pow = min($pow, count($units) - 1); 

	    // Uncomment one of the following alternatives
	    $bytes /= pow(1024, $pow);
	    // $bytes /= (1 << (10 * $pow)); 

	    // return round($bytes, $precision) . '_' . $units[$pow]; 
	    return ceil($bytes) . '_' . $units[$pow]; 
	}
	
}
