<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('mobile/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('mobile/blocks/v_header'); ?>

	<div class="cont">
		<!-- <div id="brdcrmbs" class="marg40">
			<a href="#">Главная</a> 
			<i class="rarrsvg"></i>
			<a href="#">Электроинструмент</a>
		</div> -->
		<h1>Бензопилы</h1>
	</div>

	<div id="cat-filter">
		<div id="cat-sel-ftr">
			<div class="sel-ftr">
				<div class="sel-ftr-title">На бензине</div> 
				<a href="#" class="close">
					<i class="closesvg"></i>
				</a>
			</div>
			<div class="sel-ftr">
				<div class="sel-ftr-title">На бензине</div> 
				<a href="#" class="close">
					<i class="closesvg"></i>
				</a>
			</div>
			<div class="sel-ftr">
				<div class="sel-ftr-title">На аккумаляторе</div> 
				<a href="#" class="close">
					<i class="closesvg"></i>
				</a>
			</div>
		</div>

		<? for ($i=0; $i < 5; $i++): ?>
		<div class="cat-ftr">
			<div class="cat-ftr-title">
				Фильтр <?=$i?> <i class="darrsvg"></i>
			</div>

			<? for ($j=0; $j < 7; $j++): ?>
			<div class="cat-ftr-it">
				<div class="cat-ftr-it-radio cat-ftr-it-radio-act"></div> 
				<div class="cat-ftr-it-name">На бензине</div>
				<div class="cat-ftr-it-cnt">(12)</div>
			</div>
			<? endfor; ?>
		</div>
		<? endfor; ?>

		<div id="ftr-inf">
			Подобрано 182 из 4332

			<a id="ftr-apply" href="#">Показать</a>
		</div>
	</div>

	<div id="category" class="cont">

		<div id="cat-cont">
			<div id="cat-header">
				<div id="cat-header-row">
					<div id="srt">
						<div id="srt-label">По рейтингу <i class="darrsvg"></i></div>
						<div id="srt-nav">
							<a href="#">По рейтингу</a>
							<a href="#">По цене</a>
						</div>
					</div>

					<a href="#" id="ftr-btn">
						<i class="ftrsvg"></i> Фильтры
					</a>
				</div>
			</div>

			<div id="cat-prod-list">
				<? for ($i=0; $i < 12; $i++): ?>
				<div class="prod-item" onclick="location.href='/ru/product/'">
				<div class="prod-item-inner">
					<div class="prod-item-row">
						<b>БЕНЗОПИЛА STIHL</b>
					</div>
					<div class="im" style="background-image: url(/assets/img/saw-big.png);"></div>
					<div class="prod-item-row">
						<div class="stars">
							<div class="stars-fill" style="width:100%;"></div>
							<div class="revs-count">(26)</div>
						</div>
					</div>
					<div class="prod-item-row"><span class="price">2500 грн</span></div>
					<div class="prod-item-row">
						<a href="#" class="add-cart prod-add-cart">
							<i class="cartsvg"></i>
						</a>

						<a href="#" class="add-comp prod-add-comp">
							<i class="compsvg"></i>
						</a>

						<a href="#" class="add-fav prod-add-fav">
							<i class="favsvg"></i>
						</a>
					</div>
				</div>
				</div>
				<? endfor; ?>
			</div>

			<div id="pag-bottom">
				<a href="#" class="act">1</a>
				<a href="#">2</a>
				<a href="#">3</a>
				<span>...</span>
				<a href="#">8</a>
			</div>
		</div>
		
	</div>

	<div class="hr"></div>

	<? $this->load->view('mobile/blocks/v_footer'); ?>

</body>
</html>
