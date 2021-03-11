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
	<title>sl4</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
	<!-- Mobile Specific Metas ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS ================================================== -->

	<link type="text/css" rel="stylesheet" href="<?php echo base_url("assets/css/tripple.css");?>">

	<!-- Favicons ================================================== -->
	<link rel="shortcut icon" href="<?=base_url("assets/img/icon.png")?>">
	<script src="<?php echo base_url("assets/js/modernizr.js");?>"></script>
</head>
<body>

<div class="fs-slider" id="fs-slider">

<? foreach($slides as $slide): ?>
<figure>
	<img src="/assets/slides/<?=$slide->image?>"/>
	<? if($slide->title != '' || $slide->text != ''): ?>
	<figcaption>
		<? if($slide->title!=''): ?><h3><?=$slide->title?></h3><? endif; ?>
		<? if($slide->text!=''): ?><p><?=$slide->text?></p><? endif; ?>
	</figcaption>
	<? endif; ?>
</figure>
<? endforeach; ?>

</div><!-- /fs-slider -->

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="<?php echo base_url("assets/js/tripple-slider.js");?>"></script>
<script type="text/javascript">

	// Это решение предусматривает поддержку IE8-
function onWheel(e) {
  e = e || window.event;

  // deltaY, detail содержат пиксели
  // wheelDelta не дает возможность узнать количество пикселей
  // onwheel || MozMousePixelScroll || onmousewheel
  var delta = e.deltaY || e.detail || e.wheelDelta;

  if(delta > 0) {
    if(!window.parent.isimove) window.parent.sl('t');
  } else {
    if(!window.parent.isimove) window.parent.sl('b');
  }

  prevDelta = delta;

  e.preventDefault ? e.preventDefault() : (e.returnValue = false);
}

	$(function() {

		    var elem = document.getElementById('fs-slider');

		    console.log(elem);

		    if(elem !== null){
		     if (elem.addEventListener) {
		        if ('onwheel' in document) {
		          // IE9+, FF17+
		          elem.addEventListener("wheel", onWheel);
		        } else if ('onmousewheel' in document) {
		          // устаревший вариант события
		          elem.addEventListener("mousewheel", onWheel);
		        } else {
		          // Firefox < 17
		          elem.addEventListener("MozMousePixelScroll", onWheel);
		        }
		      } else { // IE8-
		        elem.attachEvent("onmousewheel", onWheel);
		      }      
		    }

		$( '#fs-slider' ).imgslider();

		$('.fs-container').width($(window).width());

	});
</script>

</body>
</html>

<?php //echo base_url("assets/js/scripts.js"); ?>
