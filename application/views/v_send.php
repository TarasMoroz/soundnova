<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
 
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<!-- Basic Page Needs ================================================== -->
	<meta charset="utf-8">
	<title><?=$result['title']?></title>
	<meta name="author" content="FiatPoltava">

	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->

	<!-- Neko framework  -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/fa/css/font-awesome.css");?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css");?>">
	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/style.css?".rand(0,100));?>">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="<?=base_url("assets/img/icon.png")?>">
</head>

<body>

	<style>
	#mess { width:300px; height:300px; color:#fff; position: absolute; top:calc(50% - 150px); left:calc(50% - 150px); border:10px solid #fff; text-align: center; padding:50px 0; }
	#mess b { font-size: 40px; }
	#mess b.under { font-size: 20px; }
	#mess b.subunder { font-size: 18px; padding:50px 0 0 0; display: block; }

	#return { display: block; width:300px; height:45px; line-height: 45px; font-size:18px; position: absolute; left:-10px; bottom:-80px; }
	#return a{ display: block; width:100%; height:45px; color:#444; text-decoration: none; border:1px solid #444; background:#fff;  }
	@media(min-width: 1000px){
		#mess { width:400px; height:400px; color:#fff; position: absolute; top:calc(50% - 200px); left:calc(50% - 200px); border:10px solid #fff; text-align: center; padding:50px 30px; }
		#mess b { font-size: 50px; }
		#mess b.under { font-size: 30px; }
		#mess b.subunder { font-size: 24px; padding:50px 0 0 0; display: block; }

		#return { left:40px; }
	}
	</style>

	<div style="width:100%; height:100vh; position:relative; background-image:url('../../assets/img/sl1/sl1img.png'); background-position: center; background-size:cover; background-repeat:no-repeat;">
		<div style="width:100%; height:100vh; background-color:rgba(30,30,30,0.85);">
			<div id="mess">
				<b><?=$flexdata->h1?></b><br><b class='under'><?=$flexdata->h2?></b><br>
				<b class='subunder'><?=$flexdata->message?></b>

				<div id="return">
					<a href="<?=base_url("/")?>"><?=$flexdata->return?></a>
				</div>
			</div>
		</div>
	</div>



	<!-- End Document ================================================== -->

	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="<?php echo base_url("assets/neko/neko-framework/js/jquery/jquery-1.10.2.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/neko/neko-framework/js/jquery-ui/jquery-ui-1.8.23.custom.min.js");?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/swiper.min.js");?>"></script>
	<!--Boostrap jQuery-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- neko custom script -->
	<script src="<?php echo base_url("assets/js/custom.js");?>"></script>
</body>

</html>