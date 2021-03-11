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
			<a href="/<?=$lang?>/cart/"><?=($lang == 'ru' ? 'Корзина' : 'Кошик')?></a> 
			<span class="sep"> / </span>
			<span class="text"><?=($lang == 'ru' ? 'Оформление заказа' : 'Оформлення замовлення')?></span>
		</div>
		
		<h1><?=($lang == 'ru' ? 'Укажите контактную информацию' : 'Вкажіть контактну інформацію')?></h1>
		
		<div id="checkout-wrapper">
			<div id="checkout-form">
				<form id="formcheckout">
				<div id="checkout-form-inf">
					<div class="checkout-row">
						<b><?=($lang == 'ru' ? 'Фамилия Имя *' : 'Прізвище Ім\'я *')?></b>
						<input type="text" name="fio" id="checkout-fio">
					</div>
					<div class="checkout-row">
						<b><?=($lang == 'ru' ? 'Телефон *' : 'Телефон *')?></b>
						<input type="text" name="phone" id="checkout-phone" placeholder="+38 (0__) ___ __ __">
					</div>
					<div class="checkout-row">
						<b><?=($lang == 'ru' ? 'Email *' : 'Email *')?></b>
						<input type="text" name="email" id="checkout-email">
					</div>
				</div>
				
				<div id="checkout-form-delivery">
					<h2><?=($lang == 'ru' ? 'Способ доставки' : 'Спосіб доставки')?></h2>

					<div id="form-delivery">
						<a href="#" data-type="type1">
							<b></b> <?=($lang == 'ru' ? 'Самовывоз из магазина Харьков' : 'Самовивіз в місті Харків')?>

							<div class="delivery-inf" data-type="type1">
							<?=($lang == 'ru' ? 'Детали самовывоза в городе Харьков будут согласованы с менеджером.' : 'Деталі самовивозу в місті Харків, будуть узгодженні з менеджером.')?>
							</div>
						</a>
						
						<a href="#" data-type="type2">
							<b></b> <?=($lang == 'ru' ? 'Самовывоз из магазина Полтава' : 'Самовивіз в місті Полтава')?>
						<div class="delivery-inf" data-type="type2">
							<?=($lang == 'ru' ? 'Детали самовывоза в городе Полтава будут согласованы с менеджером.' : 'Деталі самовивозу в місті Полтава, будуть узгодженні з менеджером.')?>
						</div>
						</a>

						<a href="#" data-type="type5"><b></b> <?=($lang == 'ru' ? 'Адресная доставка курьером Харьков, Полтава' : 'Адресна доставка кур\'єром Харків, Полтава')?>
						<div class="delivery-inf" data-type="type5">
							<?=($lang == 'ru' ? 'Детали или специфику подъезда к вашему адресу описывайте в комментариях к заказу.' : 'Деталі та специфіку підїзду по вашому адресу описуйте в коментарях до замовлення.')?>
						</div>
						</a>

						<div class="delivery-extra" data-type="type5">

							<input type="hidden" id="del-type5-cty" name="del-type5-cty" value="">

							<div id="checkout-del-type5-form-city" class="chase-city">
								<div class="tit"><?=($lang == 'ru' ? 'Выберите город' : 'Оберіть місто')?></div>
								<div class="form-city">
									<a href="#" data-input="#del-type5-cty" data-type="type1"><div class="bull"></div> <?=($lang == 'ru' ? 'Харьков' : 'Харків')?></a>
									<a href="#" data-input="#del-type5-cty" data-type="type2"><div class="bull"></div> <?=($lang == 'ru' ? 'Полтава' : 'Полтава')?></a>
								</div>
							</div>

							<input id="del-type5-str" type="text" name="del-type5-str" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Улица' : 'Вулиця')?>">

							<input id="del-type5-house" type="text" name="del-type5-house" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Номер дома' : 'Номер будинку')?>">

							<input id="del-type5-flat" type="text" name="del-type5-flat" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Номер квартиры' : 'Номер квартири')?>">

						</div>

						<a href="#" data-type="type3"><b></b> <?=($lang == 'ru' ? 'Адресная доставка, Новая Почта' : 'Адресна доставка, Нова Пошта')?>
							<div class="delivery-inf" data-type="type3">
								<?=($lang == 'ru' ? 'Укажите полный адресс доставки.' : 'Вкажіть повну адресу доставки.')?>
							</div>
						</a>

						<div class="delivery-extra" data-type="type3">

							<input id="del-type3-cty" type="text" name="del-type3-cty" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Город' : 'Місто')?>">

							<input id="del-type3-str" type="text" name="del-type3-str" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Улица' : 'Вулиця')?>">

							<input id="del-type3-house" type="text" name="del-type3-house" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Дом / квартира' : 'Будинок / квартира')?>">
						</div>

						<a href="#" data-type="type4"><b></b> <?=($lang == 'ru' ? 'Доставка в отделение, Новая Почта' : 'Доставка у відділення, Нова Пошта')?>
						<div class="delivery-inf" data-type="type4">
							<?=($lang == 'ru' ? 'Укажите город и отделение Новой Почты.' : 'Вкажіть місто та номер відділення Нової Пошти.')?>
						</div></a>

						<div class="delivery-extra" data-type="type4">
							
							<input id="cty" type="text" name="cty" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Город' : 'Місто')?>">
							<div id="cities">
								
							</div>

							<input id="dep" type="text" name="dep" autocomplete="false" placeholder="<?=($lang == 'ru' ? 'Номер отделения' : 'Номер відділення')?>">
							<div id="departments">
								
							</div>
						</div>

					</div>
				</div>

				<div id="checkout-form-pay">
					<h2><?=($lang == 'ru' ? 'Способ оплаты' : 'Спосіб оплати')?></h2>

					<div id="form-pay">
						<a href="#" data-type="type1"><b></b> <?=($lang == 'ru' ? 'Наличными при получении' : 'Готівкою при отриманні')?></a>
						<a href="#" data-type="type2"><b></b> <?=($lang == 'ru' ? 'Наложенный платеж' : 'Наложений платіж')?></a>
						<!-- <a href="#" data-type="type3"><b></b> <?//=($lang == 'ru' ? 'Оплата частями / рассрочка' : 'Сплата частинами / розсрочка')?></a> -->
						<a href="#" data-type="type4"><b></b> <?=($lang == 'ru' ? 'Онлайн оплата' : 'Оплата онлайн')?></a>
					</div>
				</div>

				<div id="checkout-form-comment">
					<h2><?=($lang == 'ru' ? 'Комментарий к заказу' : 'Комментар до замовлення')?></h2>

					<textarea name="comment" id="checkout-comment"></textarea>
				</div>

				</form>
			</div>

			<div id="cart-total">
				<div id="cart-inf">
					<div id="cart-total-head"><?=($lang == 'ru' ? 'Состав заказа' : 'Ваше замовлення')?></div>
					<? foreach($goods as $id => $good): ?>
					<div class="cart-inf-item">
						<div class="im">
							<img src="<?=$good['im']?>">
						</div>
						<div class="inf">
							<b><?=$good['t']?></b>
							<div class="price"><?=$good['p']?> грн</div>
						</div>
					</div>
					<? endforeach; ?>
				</div>

				<div id="cart-inf-total">
					<div class="cart-inf-total-row">
						<div class="cart-inf-total-row-text"><?=($lang == 'ru' ? 'Всего' : 'Всього')?></div>
						<div class="cart-inf-total-row-sum"><b id="tot">0</b> грн</div>
					</div>
					<div class="cart-inf-total-row">
						<div class="cart-inf-total-row-text"><?=($lang == 'ru' ? '' : '')?></div>
						<div class="cart-inf-total-row-sum"><?=($lang == 'ru' ? '+ Доставка' : '+ Доставка')?></div>
					</div>
				</div>


				<div id="total-row">
					<div class="total-row-text"><?=($lang == 'ru' ? 'Итого к оплате' : 'Всього до сплати')?></div>
					<div class="total-row-sum"><span id="total-sum">0</span> грн</div>
				</div>

				<a href="#" id="cart-order"> <?=($lang == 'ru' ? 'Оформить заказ' : 'Оформити замовлення')?> </a>
			</div>
		</div>

		</section>

	</main>

	<? $this->load->view('desktop/blocks/v_footer'); ?>

</body>
</html>
