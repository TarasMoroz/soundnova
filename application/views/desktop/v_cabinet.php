<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('desktop/blocks/v_header'); ?>

	<div id="cabinet" class="cont">
		<div class="cab-col">
			<h2>Личный кабинет</h2>
			<div class="cab-col-row"><b>Логин</b> <span>Den Khodatenko</span></div>
			<div class="cab-col-row"><b>Эл. почта</b> <span>sdsad@gmail.com</span></div>
			<div class="cab-col-row"><b>Телефон</b> <span>+38 (095) 12 23 233</span></div>
		</div>

		<div class="cab-col">
			<a href="#">Поменять пароль</a>
			<a href="#">Редактировать профиль</a>
			<a href="#">Выйти</a>
		</div>
	</div>

	<div class="hr"></div>

	<div class="cont">
		<h2>Избранные</h2>
		<div class="slider">
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-2.png);"></div>
				<b>БЕНЗОПИЛА Forte</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-3.png);"></div>
				<b>БЕНЗОПИЛА HUSQVARNA</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-4.png);"></div>
				<b>БЕНЗОПИЛА Oregon</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
		</div>
	</div>

	<div class="hr"></div>

	<div class="cont">
		<h2>Недавно просмотренные</h2>
		<div class="slider">
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-2.png);"></div>
				<b>БЕНЗОПИЛА Forte</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-3.png);"></div>
				<b>БЕНЗОПИЛА HUSQVARNA</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-4.png);"></div>
				<b>БЕНЗОПИЛА Oregon</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="slide-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
		</div>
	</div>

	<div class="hr"></div>

	<div class="cont">
		<h2>История заказов</h2>

		<? for ($i=0; $i < 3; $i++): ?>
		<div class="cab-order">
			<h3 class="cab-order-title">Заказ №1234<?=$i?> <i class="darrsvg"></i></h3>
			<div class="cab-order-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-1.png);"></div>
				<b>БЕНЗОПИЛА STIHL</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="cab-order-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-2.png);"></div>
				<b>БЕНЗОПИЛА Forte</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="cab-order-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-3.png);"></div>
				<b>БЕНЗОПИЛА HUSQVARNA</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
			<div class="cab-order-item">
				<div class="im" style="background-image: url(/assets/img/slide-item-4.png);"></div>
				<b>БЕНЗОПИЛА Oregon</b>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<span class="price">2500 грн</span>
			</div>
		</div>
		<? endfor; ?>
	</div>

	<div class="hr"></div>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
