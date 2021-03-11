<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('mobile/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('mobile/blocks/v_header'); ?>

	<div class="cont">

		<div id="register">
			<h2>Регистрация</h2>
			<div class="reg-row">
				<div class="reg-row-label">ФИО</div>
				<input type="text">
			</div>
			<div class="reg-row">
				<div class="reg-row-label">Эл. почта</div>
				<input type="text">
			</div>
			<div class="reg-row">
				<div class="reg-row-label">Телефон</div>
				<input type="text">
			</div>
			<div class="reg-row">
				<div class="reg-row-label">Компания</div>
				<input type="text">
			</div>
			<div class="reg-row">
				<div class="reg-row-label">Служба доставки</div>
				<input type="text">
			</div>
			<div class="reg-row">
				<div class="reg-row-label">Придумайте пароль</div>
				<input type="text">
			</div>
			<div class="reg-row">
				<div class="reg-row-label"></div>
				<div class="reg-row-inf">
					Пароль должен быть не менее 6 символов, содержать цифры и заглавные буквы и не должен совпадать с именем и эл.почтой
				</div>
			</div>
			<div class="reg-row">
				<div class="reg-row-label"></div>
				<a id="reg-proceed" href="#">Зарегистрироваться</a>
			</div>
			<div class="reg-inf">
				* - Регистрируясь, вы соглашаетесь с <a href="#" target="_blank">пользовательским соглашением</a>
			</div>
		</div>
	</div>

	<div class="hr"></div>

	<? $this->load->view('mobile/blocks/v_footer'); ?>

</body>
</html>
