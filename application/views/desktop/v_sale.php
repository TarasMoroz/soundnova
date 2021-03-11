<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="sale-page">

	<main>

		<?=$v_aside?>

		<section id="cont" class="fix">

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<a href="/<?=$lang?>/sales/"><?=($lang == 'ru' ? 'Акции' : 'Акції')?></a>
		</div>

		<h1><?=$sale['name_'.$lang]?></h1>

		<div class="formatted-text sale-text">
			<?=$sale['text_'.$lang]?>
		</div>

		<? if(!empty($sale_prods)): ?>

		<h2><?=($lang == 'ru' ? 'Товары учавствующие в акции' : 'Товари що приймають участь в акції')?></h2>
		<div class="prods">
			<? $this->load->view('desktop/v_product_list', ['prod_list'=>$sale_prods, 'prod_list_slider'=>false]); ?>
		</div>

		<? endif; ?>

		<br><br>

		<? $this->load->view('desktop/blocks/v_calcbanner'); ?>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
