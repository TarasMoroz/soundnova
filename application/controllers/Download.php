<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {

	private $device = 'desktop';
	private $viewfolder = 'desktop';

	public function __construct()
 	{
 		
 		parent::__construct();
		$this->load->helper('url');

		if($this->agent->is_mobile()) $this->device =  'mobile';
 	}

	public function index()
 	{
		header("HTTP/1.0 404 Not Found");

		$data = get_common_page_data();
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
