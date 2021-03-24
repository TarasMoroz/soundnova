<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="favorite-page">

	<main>

		<?=$v_aside?>

		<section id="cont" class="fix">

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<span class="text"><?=($lang == 'ru' ? 'Избранное' : 'Обране')?></span>
		</div>

		<h1><?=($lang == 'ru' ? 'Избранное' : 'Обране')?></h1>

		<div class="prods">
			<? if(!empty($favorites)): ?>
				<? $this->load->view('desktop/v_product_list', ['prod_list'=>$favorites, 'prod_list_slider'=>false, 'favorite_list' => true]); ?>
			<? else: ?>
				<div style="padding:10px; margin:40px 0;"><?=($lang == 'ru' ? 'Список избранных товаров пуст, добавьте товары!' : 'Список обраних товарів порожній, додайте в нього товари!')?></div>
			<? endif; ?>
		</div>

		<br><br>


		<? $this->load->view('desktop/blocks/v_watched'); ?>


		<? $this->load->view('desktop/blocks/v_calcbanner'); ?>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
