<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="<?=$lang?>">
<!--<![endif]-->
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title><?=$page['meta_title']?></title>
	<meta name="description" content="<?=$page['meta_description']?>">
	<meta name="author" content="UKROLIYA">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/style.css?".rand(0,100));?>">
</head>
<body>

	<div id="top">
		
		<a id="hamb" href="#">
			<i id="hambsvg"></i>
			<i id="closesvg"></i>
		</a>

		<div id="logo">
			<a href="/">
				<img src="/assets/img/logo.png" alt="UKROLIYA">
			</a>
		</div>

		<ul id="menu">
			<? $c=0; foreach($menu as $cat): 
				$c++; 
				if(in_array($cat->type, ['good','post'])) continue;
				if(!in_array($cat->id, ['result','cart','checkout', 'terms'])): 
			?>
				<li <?=($cat->id == $page['id'] ? 'class="act"' : '')?>>
					<a href="/<?=$lang?>/<?=(substr($cat->id, 0,4) == 'home' ? '' : $cat->id)?>">
						<?=$cat->title?>	
					</a>
				</li>

				<? if($c==1): ?>
				<li> <a href="/#main"> Продукція </a> </li>
				<? endif; ?>
			<? endif; endforeach; ?>
		</ul>

		<div class="soc">
			<span>Приєднуйтесь до клубу кулінарного масла у соц. мережах!</span>
			<a href="<?=$s['inst']?>"> <i class="instsvg"></i> </a>
			<a href="<?=$s['fb']?>"> <i class="fbsvg"></i> </a>
			<a href="<?=$s['yt']?>"> <i class="ytsvg"></i> </a>

			<div id="terms">
				<a href="/ua/terms/">Умови використання сайту</a>
				<img src="/assets/img/mastercard.png" alt="mastercard">
				<img src="/assets/img/visa.png" alt="visa">
			</div>

			<b><?=date('Y')?> All rights reserved</b>
		</div>

		<a id="crt" href="/<?=$lang?>/cart/"> <i id="cartsvg"></i> <b id="crtcnt"></b> </a>
	</div>

	<? if(isset($club_view)): ?>
	<div id="lvcont">
	<b class="lv lv1" data-r="29">&nbsp;</b>
	<b class="lv lv2" data-r="54">&nbsp;</b>
	<b class="lv lv3" data-r="139">&nbsp;</b>
	<b class="lv lv4" data-r="89">&nbsp;</b>
	<b class="lv lv5" data-r="-13">&nbsp;</b>
	<b class="lv lv6" data-r="140">&nbsp;</b>
	<b class="lv lv7" data-r="155">&nbsp;</b>
	<b class="lv lv8" data-r="139">&nbsp;</b>
	<b class="lv lv9" data-r="49">&nbsp;</b>
	<b class="lv lv10" data-r="47">&nbsp;</b>
	</div>
	<? endif; ?>

	<div id="pagecontent">

		<? if(isset($cart_page)){ echo $cart_page; } ?>

		<? if(isset($pay_page)){ echo $pay_page; } ?>

		<? if(isset($prodrevs_page)){ echo $prodrevs_page; } ?>

		<? if(isset($addrev_page)){ echo $addrev_page; } ?>

		<? if(isset($checkout_page)){ echo $checkout_page; } ?>

		<? if(isset($study_page)){ echo $study_page; } ?>

		<? if(isset($aboutus_page)){ echo $aboutus_page; } ?>

		<? if(isset($sale_page)){ echo $sale_page; } ?>

		<? if(isset($support_page)){ echo $support_page; } ?>

		<? if(isset($tour_category_view)){ echo $tour_category_view; } ?>

		<? if(isset($good_view)){ echo $good_view; } ?>

		<? if(isset($photos_view)){ echo $photos_view; } ?>

		<? if(isset($reviews_view)){ echo $reviews_view; } ?>

		<? if(isset($backcall_view)){ echo $backcall_view; } ?>

		<article id="p-<?=$page['id']?>">
			<?=$page['article']?>
		</article>

		<? if(isset($club_view)){ echo $club_view; } ?>

		<? if(isset($contacts_view)){ echo $contacts_view; } ?>

	</div>


	<!-- End Document ================================================== -->

	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?php echo base_url("assets/neko/neko-framework/js/jquery/jquery-1.10.2.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/neko/neko-framework/js/jquery-ui/jquery-ui-1.8.23.custom.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/swiper.min.js");?>"></script>
	<!--Boostrap jQuery-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- neko custom script -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="<?php echo base_url("assets/js/svg.js?".rand(0,100));?>"></script>
	<script src="<?php echo base_url("assets/js/custom.js?".rand(0,100));?>"></script>
</body>
</html>