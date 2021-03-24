<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="product1" style="background-image:url('/assets/img/product1-bg.jpg');">
	<div class="inner1170">
		<div id="product1-inner">
			<div id="product1-left">
				<div id="product1-left-top" <? if($edition): ?>class="edition"<? endif; ?>>

					<h1 class="grad">Magic - arcane forces</h1>

					<div id="product1-left-timer">
						<div class="timer">
							<p class="timer-text">BLACK FRIDAY SALE WILL END IN</p>
							<div class="timer-counter">
								<div class="timer-counter-item">
									<b>02</b>
									<span>days</span>
								</div>
								<div class="timer-counter-item">
									<b>23</b>
									<span>hours</span>
								</div>
								<div class="timer-counter-item">
									<b>45</b>
									<span>mins</span>
								</div>
								<div class="timer-counter-item">
									<b>20</b>
									<span>sec</span>
								</div>
							</div>
						</div>
					</div>

					<div id="product1-left-bundle">
						<div id="product1-left-bundle_left">
							<div class="bundle-sale">
								<!-- <div class="bundle-sale-adv">
									<ul>
										<li><i class="checksvg"></i> 100% royalty free</li>
										<li><i class="checksvg"></i> professionaly mastered</li>
										<li><i class="checksvg"></i> 30 days moneyback <br>GUARANTEE</li>
									</ul> 
								</div> -->

								<div class="bundle-discount">-30%</div>

								<div class="bundle-shadow"></div>
								<? if($edition): ?>
								<img src="/assets/img/product-edition-top-box.png" alt="bundle name">
								<? else: ?>
								<img src="/assets/img/product-top-box.png" alt="bundle name">
								<? endif; ?>
							</div>

							<div id="product1-left-bundle_info">
								<div class="row">
									<span class="row-title">CATEGORY:</span> <a href="#">Fantasy</a>
								</div>
								
								<div class="row">
									<span class="row-title">TYPE:</span> <a href="#">Package</a> | <a href="#">Best sellers</a>
								</div>
							</div>
						</div>

						<div id="product1-left-bundle_right" <? if($edition): ?>class="bundle_right_edition"<? endif; ?>>
							<div class="prod-price">
								<!-- <span class="prod-price-title">price</span> -->
								<span class="prod-price-inner">$99</span>
								<span class="prod-price-old">$149</span>
							</div>

							<!-- selector bundle -->
							<? if($edition): ?>
							<div id="product1-right-edition">
								<div class="prod-edition-title">Choose your edition</div>

								<div id="pr-edit">
								<div class="pr-edit-wrapper">
									<div class="pr-edit" data-ftr="1">
										<div class="pr-edit-title" data-ftr="1">
											<span>Product type</span> 
											<span class="pr-edit-sel">Designed + <br>Construction kit</span> 
											<i class="darrsvg"></i>
										</div>

										<div class="pr-edit-cont">
											<a href="#" class="act">
												<span class="name">Designed + <br>Construction kit</span>
											</a>
											<a href="#">
												<span class="name">Designed</span>
											</a>
											<a href="#">
												<span class="name">Construction kit</span>
											</a>
										</div>
									</div>
								</div>
								</div>
								
								<!-- <div class="prod-edition-buttons">
									<button class="btn-blue btn-product-edition">Designed</button>
									<button class="btn-blue btn-product-edition">Construction kit</button>
								</div>

								<div class="prod-edition-single-button">
									<button class="btn-blue btn-product-edition">Designed + Construction kit</button>
								</div> -->

								<a href="#" class="prod-edition-info-link">
									Ready to use DESIGNED + CONSTRUCTION KIT sound <span class="quest-symb">?</span>
								</a>
							</div>
							<? endif; ?>

							<div class="label label-bestseller">BEST SELLER</div>
							<div class="poruct-sold">Packages bought: 547</div>

							<div class="prod-reviews">
								<div class="stars"></div>
								<div class="reviews-count">8 customer <a href="#">reviews</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="product1-right">

				<div id="product1-right-soundcloud">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>

				<div id="product1-right-buy">
					<button class="btn-purp-grad btn-product-add-cart">ADD TO CART</button>
					<button class="btn-purp btn-product-buy-now">BUY NOW</button>
				</div>

				<div id="product1-right-tryfree">
					<a href="#" class="link-product-try-free">TRY IT FREE</a>
				</div>
			</div>
		</div>
	</div>
</div>