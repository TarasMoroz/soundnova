<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?=(isset($meta_title) ? $meta_title : 'SOUNDNOVA')?></title>
	<meta name="description" content="<?=(isset($meta_description) ? $meta_description : 'SOUND description')?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php

		$css_dir = 'assets/css/';

		// version param, for auto refresh cached styles
		$env_param = (ENVIRONMENT == 'development') ? '?'.strtotime('now') : '?1';

		// commonly used styles
		$common_css = [
			'swiper.min.css', 
			'styles.min.css', 
			'header/header-component.min.css', 
			'footer/footer-component.min.css'
		];
		
		// styles for particular pages
		// controller => [... filenames]
		// controller => [ action => [... filenames], 'action2' => [... filenames] ]
		$particular_css = [
			'pages' => [
				'index' => ['home-page/home.min.css'],
				'show_page_contact' => ['contact-us/contact-us.min.css'],
				'show_page_design_studio' => ['sound-design-studio/sound-design-studio.min.css'],
				'show_page_aboutus' => ['about-us/about-us.min.css'],
				'show_page_reviews' => ['reviews/reviews.min.css'],
				'show_page_404' => ['error-page/error-page.min.css'],
				'show_page_support' => ['support/support.min.css'],
				'show_page_support_category' => ['support/support.min.css'],
				'show_page_support_article' => ['support-article/support-article.min.css'],
				'show_page_blog' => ['blog/blog.min.css'],
				'show_page_blog_category' => ['blog/blog.min.css'],
				'show_page_blog_subcategory' => ['blog/blog.min.css'],
				'show_page_blog_post' => ['blog/blog.min.css'],
			],
			'catalog' => ['catalog/catalog.min.css'],
			// 'product' => ['product/product.min.css'],
			'product' => ['product/product.v2.min.css'],
			'cart' => [
				'index' => ['cart/cart.min.css'],
				'checkout' => ['checkout/checkout.min.css'],
				'purchase_success' => ['success/success.min.css']
			],
			'user' => [
				'login' => ['login/login.min.css'],
				'signup' => ['login/login.min.css'],
				'account' => ['account/account.min.css'],
				'orders' => ['account/account.min.css'],
				'subscriptions' => ['account/account.min.css'],
				'downloads' => ['account/account.min.css'],
				'payments' => ['account/account.min.css'],
				'details' => ['account/account.min.css'],
				'coupons' => ['account/account.min.css'],
			],
			'subscription' => [
				'index' => ['home-page/home.min.css', 'product/product.min.css', 'subscription/subscription.min.css'],
				'show_page_stageone_join' => ['stage-one/stage-one.min.css'],
				'show_page_stageone_free' => ['stage-one/stage-one.min.css'],
				'show_page_stageone' => ['stage-one/stage-one.min.css'],
				'show_page_stagetwo' => ['stage-two/stage-two.min.css'],
				'show_page_stagethree' => ['stage-three/stage-three.min.css']
			]
		];
	?>

	<!-- common -->
	<?php foreach($common_css as $css_file_path): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url($css_dir.$css_file_path.$env_param);?>">
	<?php endforeach; ?>


	<!-- particular -->

	<?php foreach($particular_css as $css_controller => $css_actions): if($css_controller == $controller): ?>
	<?php 

		// если на весь контроллер один набор css
		$css_set = $css_actions;

		// если не указаны индексы массива (ассоциативный), значит в контроллере наборы css на каждый экшн
		if(!isset($css_actions[0])){
			foreach($css_actions as $css_action_name => $css_action_set){
				if($css_action_name == $action){
					$css_set = $css_action_set;
					break;
				}
			}
		}

	?>
		
	<?php foreach($css_set as $css_file_path): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url($css_dir.$css_file_path.$env_param);?>">
	<?php endforeach; ?>

	<?php break; endif; endforeach; ?>

	<style>
		#inform {
		  width:320px;
		  height:auto;
		  padding:20px 10px;
		  text-align: center;
		  background: rgba(255, 255, 255, 0.95);
		  /*box-shadow: 0px 0px 20px 10px #fff;*/
		  border-radius: 5px;
		  border:1px solid #ddd;
		  color:#000;
		  opacity: 0;
		  visibility: hidden;
		  top: -100px;
		  left:50%;
		  font-size: 15px;
		  transform: translateX(-50%);
		  transition: 0.2s;
		  position: fixed;
		  z-index: 9999;
		}

		#inform.red {background: rgba(249, 50, 50, 0.95); color:#fff;}
		#inform.grn {background: rgba(50, 211, 95, 0.95); color:#fff;}
		#inform.on { opacity: 1; visibility: visible; top:50px; transition-delay: 0.3s; transition: 0.5s;}
	</style>
	
	<link rel="shortcut icon" href="<?=base_url("assets/img/icon.png")?>">
	<link rel="canonical" href="<?=base_url(explode('?',$_SERVER['REQUEST_URI'])[0])?>"/>

	<script type="text/javascript">
		var prds = {};
		var lang = '<?=$lang?>';
		var ci = {'controller': '<?php echo $controller; ?>', 'action': '<?php echo $action; ?>'};
	</script>

	<meta name="robots" content="noindex, nofollow"> 

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-KT898Z4');</script>
	<!-- End Google Tag Manager -->


	<!-- jQuery -->
	<script src="/assets/lte/plugins/jquery/jquery.min.js"></script>
</head>