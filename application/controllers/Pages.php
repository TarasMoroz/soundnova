<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {

	private $languages = array('en'=>'ENG');
	private $device = 'desktop';
	private $viewfolder = 'desktop';

	public function __construct()
 	{
 		
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Pages_model', 'pages');
		$this->load->model('Settings_model', 'settings');


		if($this->agent->is_mobile()) $this->device =  'mobile';
 	}

	// HOME PAGE
	public function index()
 	{
		error_reporting(1);

		// catsTree, lang, settings ...
		$data = get_common_page_data(); // view_helper

		// контент главной страницы
		$data['page'] = $this->db->query("SELECT * FROM pages WHERE alias = 'home'")->row_array();
		$data['flexdata'] = ($data['page']['flexdata'] != '') ? json_decode($data['page']['flexdata'], true) : [] ;

		// FAQ, FAQ items
		$faq = $this->db->query("SELECT * FROM faq WHERE item = 'main'")->row_array();
		$data['faq_items'] = (isset($faq['id'])) ? $this->db->query("SELECT * FROM faq_item WHERE id_faq = ".$faq['id'])->result_array() : [];

		// Home page reviews
		$data['video_reviews'] =  $this->db->query("SELECT sr.*, 
														   v.id v_id,
														   v.src v_src,
														   v.img_preview v_img_preview
													FROM site_review sr 
													LEFT JOIN video v ON v.id = sr.id_video AND v.item = 'site_review' 
													WHERE sr.id_video > 0 ORDER BY sr.sort ASC")->result_array();

		$data['text_reviews'] =  $this->db->query("SELECT * FROM site_review WHERE id_video = 0 ORDER BY sort ASC")->result_array();

		//

 		$this->load->view($this->viewfolder.'/v_main', $data);
 	}


 	// SOUND DESIGN STUDIO
 	public function show_page_design_studio(){

		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_sound_design_studio', $data);
	}

 	// CONTACT US
 	public function show_page_contact(){
 		
		$data = get_common_page_data();

		$this->load->view($this->viewfolder.'/v_page_contact', $data);
	}

	// ABOUT US
	public function show_page_aboutus(){

		$data = get_common_page_data();

		echo $this->load->view($this->viewfolder.'/v_about-us', $data, true);
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

	// 404 error handler 
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
	
}
