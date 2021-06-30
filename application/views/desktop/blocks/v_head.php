<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="<?=($_SESSION['lang'] == 'ua' ? 'uk' : $_SESSION['lang'])?>"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="<?=($_SESSION['lang'] == 'ua' ? 'uk' : $_SESSION['lang'])?>"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="<?=($_SESSION['lang'] == 'ua' ? 'uk' : $_SESSION['lang'])?>"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="<?=($_SESSION['lang'] == 'ua' ? 'uk' : $_SESSION['lang'])?>"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="<?=($_SESSION['lang'] == 'ua' ? 'uk' : $_SESSION['lang'])?>">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?=(isset($meta_title) ? $meta_title : 'SOUND')?></title>
	<meta name="description" content="<?=(isset($meta_description) ? $meta_description : 'SOUND description')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/swiper.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/styles.min.css?");?><?=strtotime('now')?>">
	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/catalog/catalog.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/header/header-component.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/home-page/home.min.css?");?><?=strtotime('now')?>">
	
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/footer/footer-component.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/product/product.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/contact-us/contact-us.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/cart/cart.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/checkout/checkout.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/sound-design-studio/sound-design-studio.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/login/login.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/success/success.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/subscription/subscription.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/stage-one/stage-one.min.css?");?><?=strtotime('now')?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/stage-two/stage-two.min.css?");?><?=strtotime('now')?>">
	<link rel="shortcut icon" href="<?=base_url("assets/img/icon.png")?>">
	<link rel="canonical" href="<?=base_url(explode('?',$_SERVER['REQUEST_URI'])[0])?>"/>
	<script type="text/javascript">
		var prds = {};
		var lang = '<?=$lang?>';
	</script>

	<meta name="robots" content="noindex, nofollow"> 

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KT898Z4');</script>
	<!-- End Google Tag Manager -->

</head>