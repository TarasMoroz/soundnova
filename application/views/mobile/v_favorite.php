<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('mobile/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('mobile/blocks/v_header'); ?>

	<div id="favorite" class="cont">
		<h2>Избранные товары</h2>
		<!-- <div class="cont-head">
			
			<div id="srt">
				<div id="srt-label">По рейтингу <i class="darrsvg"></i></div>
				<div id="srt-nav">
					<a href="#">По рейтингу</a>
					<a href="#">По цене</a>
				</div>
			</div>
		</div> -->

		<div id="fav-prods">
			<? for ($i=0; $i < 9; $i++): ?>
			<div class="fav-item">
				<a href="#" class="close">
					<i class="closesvg"></i>
				</a>
				<div class="fav-item-row">
					<b>БЕНЗОПИЛА STIHL</b>
				</div>
				<div class="im" style="background-image: url(/assets/img/saw-big.png);"></div>
				<div class="fav-item-row">
					<div class="stars">
						<div class="stars-fill" style="width:100%;"></div>
						<div class="revs-count">(26)</div>
					</div>
				</div>
				<div class="fav-item-row">
					<span class="price">2500 грн</span>

					<a href="#" class="add-cart fav-add-cart">
						<i class="cartsvg"></i>
					</a>
				</div>
			</div>
			<? endfor; ?>
		</div>
	</div>

	<div class="hr"></div>

	<? $this->load->view('mobile/blocks/v_footer'); ?>

</body>
</html>
