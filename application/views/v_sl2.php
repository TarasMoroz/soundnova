<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="">
<!--<![endif]-->
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title>sl2</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->

	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/carousel.css?".rand(0,100));?>">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="<?=base_url("assets/img/icon.png")?>">
</head>
<body>

<div class="carousel"> <!-- BEGIN CONTAINER -->
<div class="slides"> <!-- BEGIN CAROUSEL -->
	<? foreach($slides as $slide): ?>
    <div><img src="/assets/slides/<?=$slide->image?>"/></div>
	<? endforeach; ?>
</div>
</div>


<script src="<?php echo base_url("assets/js/jquery-1.4.min.js");?>"></script>
<script src="<?php echo base_url("assets/js/carousel.js?".rand(0,100));?>"></script>

</body>
</html>

<?php //echo base_url("assets/js/scripts.js"); ?>
