<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

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

		$data['meta_title'] = ($lang == 'ru') ? 'Новости и полезная информация компании ClimatMall' : 'Новини та корисна інформація компанії ClimatMall';
		$data['meta_description'] = ($lang == 'ru') ? 'Новости и полезная информация компании ClimatMall' : 'Новини та корисна інформація компанії ClimatMall';

		// боковой блок, передаем настройки, категории, массив параметров
		$data['v_aside'] = v_aside($data['s'], $data['cats'], ['fix' => true, 'foldup_categories' => false]);

		$page = (isset($_GET['page'])) ? (int) $_GET['page'] : 0 ;

		if($page > 1) $data['page'] = $page; // пишем только 2,3,4 ...

		$inpage = 6;
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
			'base' => '/'.$_SESSION['lang'].'/blog/',
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
		$data['cntPosts'] = $cntPosts;
		$data['posts'] = $posts;
		$data['pagination_html'] = $this->load->view($this->viewfolder.'/v_pagination', $data, TRUE);

		// популярные посты блога
		$data['pop_posts'] = $this->db->query("SELECT alias, name_ru, name_ua, img, date_add FROM blog ORDER BY cnt_views DESC LIMIT 0,3")->result_array();

 		$this->load->view($this->viewfolder.'/v_blog', $data);
 	}

	// REST PAGES
	public function post($alias = false)
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

		$data['post'] = $this->db->query("SELECT * FROM blog WHERE alias = '".$alias."'")->row_array();

		if($data['post']){ // if blog post exists

			$data['meta_title'] = ($data['post']['meta_title_'.$lang] != '') ? $data['post']['meta_title_'.$lang] : $data['post']['name_'.$lang];
			$data['meta_description'] = $data['post']['meta_description_'.$lang];

			// популярные посты блога
			$data['pop_posts'] = $this->db->query("SELECT alias, name_ru, name_ua, img, date_add FROM blog ORDER BY cnt_views DESC LIMIT 0,3")->result_array();

			// пишем просмотр поста блога... +1
			$this->db->query("UPDATE blog SET cnt_views = cnt_views + 1 WHERE id = ".$data['post']['id']);

			$this->load->view($this->viewfolder.'/v_blog_post', $data);			
		}
		else {
			header("HTTP/1.0 404 Not Found");
			echo '404';
		}
	}

}
