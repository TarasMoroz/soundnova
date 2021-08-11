<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

	/*
		project: one of the many :)
		author: Taras Moroz

		email: tarik_alka@mail.ru
	*/

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		//$this->load->library('upload');
	}


	public function index()
	{

	}

	// saving a CSV file
	public function save_file()
	{

		$folder = $this->input->post('folder');
		$prev = $this->input->post('prev'); // предыдущий файл на удаление
		$callback = $this->input->post('callback'); // callback JS функция

		$fname = explode(".", $_FILES['userfile']['name']);
		$ext = end($fname);

		$ts = strtotime('now');

		$config['upload_path']          = './assets/'.$folder.'/';
	    // $config['allowed_types']        = 'csv|xls|pdf|PDF|CSV|XLS';
	    $config['allowed_types']        = '*';
	    $config['file_name']            = $ts.".".$ext;
	    $config['max_size']             = 20000;
	    $config['overwrite']            = true;

	    if(!is_dir('./assets/'.$folder)){
			mkdir('./assets/'.$folder); // creates folder
		}

		// если нашли прошлый файл то удалим...
	    if(is_file('./assets/'.$folder.'/'.$prev)){
	    	unlink('./assets/'.$folder.'/'.$prev);
	    }

	    $this->load->library('upload', $config);

	    if (!$this->upload->do_upload())
	    {
	            $error = array('error' => $this->upload->display_errors());

	            $result = print_r($error, true);

	            $success = true;

				echo $result;

	           //$this->jsOnResponse("{'filename':'" . $result . "', 'success':'" . $success . "'}");

	           $this->jsOnError($this->upload->display_errors());
	    }
	    else
	    {
	            $data = array('upload_data' => $this->upload->data());

	            $result = print_r($data, true);

	            $success = true;

	            $this->jsOnSuccess(json_encode(['folder' => $folder, 'file' => $config['file_name']]), $callback);
	            //echo '<script type="text/javascript">alert('.print_r($data).')</script>';
	    }
	}

	// saving a picture to specified folder...
	// removes old ones, resizes

	public function save_img()
	{

		$folder = $this->input->post('folder');
		$prev = $this->input->post('prev'); // предыдущий файл на удаление
		$sizesGET = $this->input->post('sizes'); // размеры для ресайза через запятую
		$callback = $this->input->post('callback'); // callback JS функция

		$sizes = [];
		if($sizesGET != '') $sizes = explode(',',$sizesGET);

		$ts = strtotime('now');

		$fileExt = pathinfo($_FILES["userfile"]["name"], PATHINFO_EXTENSION);

		// не ресайзим если вектор.
		if($fileExt == 'svg') $sizes = [];

		$config['upload_path']          = './assets/'.$folder.'/';
	    $config['allowed_types']        = 'gif|jpg|jpeg|png|svg|GIF|JPG|JPEG|PNG|SVG';
	    $config['max_size']             = 10000;
	    $config['max_width']            = 5000;
	    $config['max_height']           = 5000;
	    $config['overwrite']            = true;
	    $config['file_name']            = $ts.'.'.$fileExt;

	    if(!is_dir('./assets/'.$folder)){
			mkdir('./assets/'.$folder); // creates folder
		}

	    // если нашли прошлый файл то удалим...
		if($prev){
			if(is_file('./assets/'.$folder.'/'.$prev)){
		    	unlink('./assets/'.$folder.'/'.$prev);

		    	$prevArr = explode('.',$prev);

		    	// удаляем все прошлые ресайзы
		    	// 200_filename.jpg ...
		    	// 400_filename.jpg ...
				foreach (glob("./assets/".$folder."/*_".$prev) as $file) {
					$fExt = substr($file, -4);
					if(in_array($fExt, ['.jpg','.png','.gif','jpeg','.svg'])){
						//$file = str_replace("\\", "/", substr($file,1));
						//echo "----- ". $file . "<br>";
						unlink($file);
					}
				}
		    }
		}

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload())
		{
						$error = array('error' => $this->upload->display_errors());

						$result = print_r($error, true);

						$success = true;

						echo $result;

					 //$this->jsOnResponse("{'filename':'" . $result . "', 'success':'" . $success . "'}");

					 $this->jsOnError($this->upload->display_errors());
		}
		else
		{
						$data = array('upload_data' => $this->upload->data());

						$result = print_r($data, true);

						$success = true;

						if(!empty($sizes)){
							foreach($sizes as $size){
								// resizes... send to FTP
								// $data = $this->upload->data();
		      					// $image = $data['file_name'];

		        				$configResize['image_library'] = 'gd2';
						        $configResize['source_image'] = './assets/'.$folder.'/'.$config['file_name'];
						        $configResize['maintain_ratio'] = TRUE;
						        $configResize['width']    = (int) $size;
						        // $configResize['height']   = 300;
						        $configResize['new_image']   = $size.'_'.$config['file_name'];

						        $this->load->library('image_lib');
						        $this->image_lib->initialize($configResize);
						        $this->image_lib->resize();
						        $this->image_lib->clear();
							}
						}

				        // $localPath = './uploads/devices/'.$image;
				        // $remotePath = 'webspace/httpdocs/uploads/devices/'.$image;

				        // $this->load->library('ftp');
				        // $config['hostname'] = '';
				        // $config['username'] = '';
				        // $config['password'] = '';
				        // $config['port']     = 21;
				        // $config['passive']  = TRUE;
				        // $this->ftp->connect($config);
				        // $this->ftp->upload($localPath, $remotePath);
				        // $this->ftp->close();

						$this->jsOnSuccess(json_encode(['folder' => $folder, 'img' => $config['file_name']]), $callback);

						//echo '<script type="text/javascript">alert('.print_r($data).')</script>';
		}
	}

	// calling js function in error case
	private function jsOnError($filename) {
		 echo '
		 <script type="text/javascript">
		 	window.parent.onError("'.$filename.'");
		 </script>
		 ';
	}

	// calling js callback after successful downloading
	private function jsOnSuccess($filename, $callback = false)
	 {
		 echo '
		 <script type="text/javascript">
		 	window.parent.'.($callback ? $callback : 'onSuccess').'(\''.$filename.'\');
		 </script>
		 ';
	 }
}


// location: application/controllers/Upload.php
