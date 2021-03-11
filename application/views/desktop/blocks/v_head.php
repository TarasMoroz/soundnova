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
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/style.css?33");?><?=strtotime('now')?>">
	<link rel="shortcut icon" href="<?=base_url("assets/img/icon.png")?>">
	<link rel="canonical" href="<?=base_url(explode('?',$_SERVER['REQUEST_URI'])[0])?>"/>
	<script type="text/javascript">
		var prds = {};
		var lang = '<?=$lang?>';
	</script>

	<meta name="robots" content="noindex, nofollow"> 

</head>