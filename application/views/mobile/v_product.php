<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('mobile/blocks/v_head'); ?>

<body id="home">

	<? $this->load->view('mobile/blocks/v_header'); ?>

	<!-- <div class="cont">
		<div id="brdcrmbs" class="marg40">
			<a href="#">Главная</a> 
			<i class="rarrsvg"></i>
			<a href="#">Электроинструмент</a>
			<i class="rarrsvg"></i>
			<a href="#">Бензиновые пилы</a>

			<a href="#" class="pr-print">Печать страницы товара</a>
		</div>
	</div> -->

	<div id="product" class="cont">
		<div id="pr-row-top" class="pr-row">
			<div id="pr-first">
				<div class="pr-first-row">
					<img id="pr-brnd" src="/assets/img/brnd.png">
					<div id="pr-article">
						АРТИКУЛ 26178349
					</div>
				</div>
				<h1>БЕНЗОПИЛА STIHL</h1>
				<div class="stars">
					<div class="stars-fill" style="width:100%;"></div>
				</div>
				<div id="pr-price-old-wrap">
					<span id="pr-price-old">2960 грн</span>
					<span id="pr-price-disc">-15%</span>
				</div>
				<div id="pr-price">2500 грн</div>
			</div>

			<div id="pr-second">
				
				<div id="pr-im">
					<!-- <a href="#" class="add-comp pr-add-comp">
						<i class="compsvg"></i>
					</a> -->
					<img src="/assets/img/prod-img.png">
				</div>

				<div id="pr-im-prev">
					<img class="act" src="/assets/img/slide-item-1.png">
					<img src="/assets/img/slide-item-2.png">
					<img src="/assets/img/slide-item-3.png">
					<img src="/assets/img/slide-item-4.png">
					<img src="/assets/img/slide-item-1.png">
				</div>
			</div>

			<div id="pr-third">
				<div id="pr-third-btns">
					<a href="#" class="add-comp pr-add-fav">
						В избранное <i class="favsvg"></i>
					</a>

					<a href="#" class="add-cart pr-add-cart">
						В корзину <i class="cartsvg"></i>
					</a>
				</div>

				<div class="char-row">
						<b>Тип:</b> <span>бензиновая </span>
					</div>
					<div class="char-row">
						<b>Мощность:</b> <span>250л.с.</span>
					</div>
					<div class="char-row">
						<b>Размер:</b> <span>30 х 10 м</span>
					</div>
					<div class="char-row">
						<b>Фильтр:</b> <span>Да</span>
					</div>
					<div class="char-row">
						<b>Фильтр:</b> <span>Нет</span>
					</div>

				<a href="#" id="pr-credit">Этот товар можно купить в кредит</a>
			</div>
		</div>

		<div class="pr-row">
			<div id="pr-tabs-wrap">
				<div id="pr-tabs">
					<a href="#" data-id="pr-tab-desc" class="act">Описание</a>
					<a href="#" data-id="pr-tab-char">Характеристики</a>
					<a href="#" data-id="pr-tab-revs">Отзывы</a>
				</div>
			</div>

			<div id="pr-tab-wrap">
				<div id="pr-tab-desc" class="pr-tab pr-tab-act">
					<div class="pr-tab-desc">
						<h2>БЕНЗОПИЛА STIHL</h2>
						
						<div>
							<h3>Универсальная бензопила</h3>
							<p>Высокая надежность и рациональное соотношение веса и мощности: В этой модели идеально сочетается мощность и легкость. Рукоятка и топливный бак объединены и защищены от двигателя 5-ю антивибрационными элементами, обеспечивая точность и жесткость распиливания.</p>

							<h3>Безопасность</h3>
							<p>Инерционный тормоз цепи. Механизм, предотвращающий случайное дросселирование. Улавливатель цепи.</p>

							<h3>Легкость управления</h3>
							<p>Беспрепятственный доступ к крышке фильтра и свечи зажигания, не требующий применения инструментов. Узел двигателя независим от корпуса пилы.</p>
						</div>
					</div>
				</div>

				<div id="pr-tab-revs" class="pr-tab">
					<h2>КОММЕНТАРИИ К ТОВАРУ</h2>

					<? for ($i=0; $i < 4; $i++): ?>
					<div class="pr-rev">
						<div class="pr-rev-head">
							<div class="pr-rev-head-left">
								<b>Титаренко Ирина</b>
								<div class="stars">
									<div class="stars-fill" style="width:100%;"></div>
								</div>
							</div>
							<div class="pr-rev-head-date">
								10.08.2019
							</div>
						</div>
						<div class="pr-rev-cont">
							Беспрепятственный доступ к крышке фильтра и свечи зажигания, не требующий применения инструментов. Узел двигателя независим от корпуса пилы.
						</div>
					</div>
					<? endfor; ?>

					<a href="#" class="add-rev pr-add-rev">Оставить отзыв</a>
				</div>

				<div id="pr-tab-char" class="pr-tab">

					<h2>Характеристики</h2>

					<div class="char-row">
						<b>Тип:</b> <span>бензиновая </span>
					</div>
					<div class="char-row">
						<b>Мощность:</b> <span>250л.с.</span>
					</div>
					<div class="char-row">
						<b>Размер:</b> <span>30 х 10 м</span>
					</div>
					<div class="char-row">
						<b>Фильтр:</b> <span>Да</span>
					</div>
					<div class="char-row">
						<b>Фильтр:</b> <span>Нет</span>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="cont">
		<h2>C ЭТИМ ТОВАРОМ ТАК ЖЕ ПОКУПАЮТ</h2>
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
		<h2>РЕКОМЕНДАЦИИ</h2>
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
		<h2>НЕДАВНО ПРОСМОТРЕННЫЕ</h2>
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

	<? $this->load->view('mobile/blocks/v_footer'); ?>

</body>
</html>
