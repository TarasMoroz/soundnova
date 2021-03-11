<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('mobile/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('mobile/blocks/v_header'); ?>

	<div class="cont">
		
		<h2>Каталог</h2>
		
		<!-- <div id="brdcrmbs" class="marg40">
			<a href="#">Главная</a> 
			<i class="rarrsvg"></i>
			<a href="#">Каталог</a>
		</div> -->

		<? for($i=0; $i < 4; $i++): ?>
		<div class="cat-row">
			<div class="cat-col">
				<img src="/assets/img/saw-big.png" alt="smthng">
				<div class="cat-col-nav">
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
				</div>
			</div>
			<div class="cat-col">
				<img src="/assets/img/saw-big.png" alt="smthng">
				<div class="cat-col-nav">
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
					<a href="#">Категория товара</a>
				</div>
			</div>
		</div>
		<? endfor; ?>
	</div>

	<div class="hr"></div>

	<? $this->load->view('mobile/blocks/v_footer'); ?>

</body>
</html>
