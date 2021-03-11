<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="cart-page">

	<main>

		<?=$v_aside?>

		<section id="cont">

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<span class="text"><?=($lang == 'ru' ? 'Корзина' : 'Кошик')?></span>
		</div>
		
		<h1><?=($lang == 'ru' ? 'Корзина' : 'Кошик')?></h1>
		
		<div id="cart-wrapper">
			<? if(!empty($goods)): ?>
			<div id="cart-prods">
				<? foreach($goods as $id => $good): ?>
				<div id="cit<?=$id?>" class="cart-item">
					<a href="#" class="close del" data-cit="<?=$id?>">
						<i class="closesvg"></i>
					</a>

					<div class="im">
						<img src="<?=$good['im']?>">
					</div>

					<div class="cart-item-row">
						<b><?=$good['t']?></b>
					</div>

					<div class="cart-item-row cart-item-quant">
						<a href="#" class="cart-item-minus cgq q-min" data-cit="<?=$id?>"> - </a>
						<span class="cart-item-count cgquant" data-cit="<?=$id?>"> <?=$good['c']?> </span>
						<a href="#" class="cart-item-plus cgq q-pls" data-cit="<?=$id?>"> + </a>
					</div>

					<div class="cart-item-row cart-item-total">
						<?=$good['p']?> грн
					</div>
				</div>
				<? endforeach; ?> 
			</div>

			<div id="cart-total">
				<div id="cart-inf">
					<div id="cart-total-head"><?=($lang == 'ru' ? 'Всего' : 'Всього')?></div>
					<div id="cart-sum"><b id="tot">0</b> грн</div>
				</div>

				<a href="#" id="cart-tocheckout"> <?=($lang == 'ru' ? 'Оформить заказ' : 'Оформити замовлення')?> </a>
			</div>
			<? else: ?>
				<p><?=($lang == 'ru' ? 'Ваша корзина пуста, добавьте в нее товары!' : 'Ваш кошик порожній, додайте в нього товари!')?></p>
			<? endif; ?>
		</div>

		</section>
	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
