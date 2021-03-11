<?php

/** This file is part of KCFinder project
  *
  *      @desc Upload calling script
  *   @package KCFinder
  *   @version 3.12
  *    @author Pavel Tzonkov <sunhater@sunhater.com>
  * @copyright 2010-2014 KCFinder Project
  *   @license http://opensource.org/licenses/GPL-3.0 GPLv3
  *   @license http://opensource.org/licenses/LGPL-3.0 LGPLv3
  *      @link http://kcfinder.sunhater.com
  */

ob_start();
include('index_ci.php');
ob_end_clean();
$CI=&get_instance();
$CI->load->library('session'); //if it's not autoloaded in your CI setup
//echo $CI->session->userdata('validate');

if(isset($_SESSION['validate'])){

  require "core/bootstrap.php";
  $uploader = "kcfinder\\uploader";  // To execute core/bootstrap.php on older
  $uploader = new $uploader();       // PHP versions (even PHP 4)
  $uploader->upload();

} else {

  echo "access denied!";

}