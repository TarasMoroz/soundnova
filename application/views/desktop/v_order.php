<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="checkout-page">

	<main>

		<?=$v_aside?>

		<section id="cont">

		<? $this->load->view('desktop/blocks/v_header'); ?>

		<div id="brdcrmbs">
			<a href="/<?=$lang?>/"><?=($lang == 'ru' ? 'Главная' : 'Головна')?></a> 
			<span class="sep"> / </span>
			<span class="text"><?=($lang == 'ru' ? 'Заказ' : 'Замовлення')?></span>
		</div>
		
		<!-- <h1><?=($lang == 'ru' ? 'Спасибо за заказ!' : 'Дякуємо за замовлення!')?></h1> -->
		
		<div id="order-wrapper">
			<i class="checksvg"></i>

			<h2><?=($lang == 'ru' ? 'Спасибо за заказ!' : 'Дякуємо за замовлення!')?></h2>

			<div id="order-inf-text">
				<?=($lang == 'ru' ? 'Ваш заказ №'.$order_id.' успешно оформлен.' : 'Ваше замовлення №'.$order_id.' успішно оформлене.')?>
			</div>

			<div id="order-btns">
				<a href="/<?=$lang?>/" id="to-main"> <?=($lang == 'ru' ? 'Вернуться на главную' : 'Повернутись на главную')?> </a>
				<a href="/<?=$lang?>/service/" id="to-service"> <?=($lang == 'ru' ? 'Перейти в монтаж и сервис' : 'Перейти в монтаж та сервіс')?> </a>
			</div>
		</div>

		</section>

	</main>

	<? if($order['id']): $goods = json_decode($order['goods'], true); ?>
		<script>
			window.dataLayer = window.dataLayer || [];
			dataLayer.push({
			 'ecommerce': {
			   'currencyCode': 'UAH',
			   'purchase': {
			     'actionField': {
			       'id': '<?=$order['id']?>',
			       'affiliation': 'ClimatMall',
			       'revenue': '<?=$order['sum']?>'
			     },
			     'products': [
			     <? $c=1; foreach($goods as $good): ?>
			     {  
			       'name': '<?=$good['t']?>',
			       'id': '<?=$good['id']?>',
			       'price': '<?=$good['p']?>',
			       'brand': 'Brand1',
			       'category': 'Category1',
			       'variant': 'Variant1',
			       'quantity': <?=$good['c']?>,
			       'coupon': ''
			      }<?=($c == count($goods) ? '' : ',')?>
			 	 <? $c++; endforeach; ?>
			     ]
			   }
			 },
			 'event': 'gtm-ee-event',
			 'gtm-ee-event-category': 'Enhanced Ecommerce',
			 'gtm-ee-event-action': 'Purchase',
			 'gtm-ee-event-non-interaction': 'False',
			});
		</script>

	<? endif; ?>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
