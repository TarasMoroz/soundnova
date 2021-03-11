<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('mobile/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('mobile/blocks/v_header'); ?>

	<div id="cart" class="cont">
		
		<h2>Корзина</h2>

		<div id="cart-prods">
			<? for ($i=0; $i < 3; $i++): ?>
			<div class="cart-item">
				<a href="#" class="close">
					<i class="closesvg"></i>
				</a>

				<div class="cart-item-row">
					<b>БЕНЗОПИЛА STIHL</b>
					<span class="price">2500 грн</span>
				</div>

				<div class="im" style="background-image: url(/assets/img/saw-big.png);"></div>

				<div class="cart-item-row cart-item-quant">
					<a href="#" class="cart-item-minus"> - </a>
					<span class="cart-item-count"> 1 </span>
					<a href="#" class="cart-item-plus"> + </a>
				</div>
			</div>
			<? endfor; ?>
		</div>

		<a href="#" id="cart-torder"> Оформить заказ </a>
		<a href="#" id="cart-continue"> Продолжить покукпки </a>

	</div>

	<? $this->load->view('mobile/blocks/v_footer'); ?>

</body>
</html>
