<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div id="product1" style="background-image:url('/assets/img/product1-bg.jpg');">
	<div class="inner1170">
		<div id="product1-inner">
			<div id="product1-left">
				<div id="product1-left-top" <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>class="edition"<? endif; ?>>
					<div class="bundle-sale">

						<? if($product['adv1']||$product['adv2']||$product['adv3']): ?>
						<div class="bundle-sale-adv">
							<ul>
								<? if($product['adv1']): ?> <li><i class="checksvg"></i> <?=$product['adv1']?></li> <? endif; ?>
								<? if($product['adv2']): ?> <li><i class="checksvg"></i> <?=$product['adv2']?></li> <? endif; ?>
								<? if($product['adv3']): ?> <li><i class="checksvg"></i> <?=$product['adv3']?></li> <? endif; ?>
							</ul>
						</div>
						<? endif; ?>
						
						<? if($mainVariant['price_old'] > $mainVariant['price']): ?>
						<div class="bundle-discount">-<?=ceil(($mainVariant['price_old']-$mainVariant['price'])/($mainVariant['price_old']/100))?>%</div>
						<? endif; ?>

						<? 
							$im = '/assets/img/product-top-box.png';
							if($mainVariant['img_box']) $im = '/assets/media/product_variant-img_box/'.substr($mainVariant['img_box'], 0, -4).'_570.jpg'; 
							
							// дефолтный бокс бандла
							if(!$mainVariant['img_box'] && isset($prodVariants['bundle'])){
								$im = '/assets/img/default_bundle.png';
							}

							// дефолтный бокс десигн
							if(!$mainVariant['img_box'] && isset($prodVariants['design'])){
								$im = '/assets/img/default_design.png';
							}
						?>

						<div class="bundle-shadow"></div>
						<img id="product-top-box" src="<?=$im?>" alt="bundle name">
						<!-- <img src="/assets/img/product-edition-top-box.png" alt="bundle name"> -->
						<!-- <img src="/assets/img/product-top-box.png" alt="bundle name"> -->
					</div>	
				</div>

				<div id="product1-left-bottom">
					<div id="product1-left-bottom-left">
						
						<? if($product['l_name']): ?>
							<div class="label label-bestseller" style="color: <?=$product['l_color']?>;"><?=$product['l_name']?></div>
						<? endif; ?>
						
						<? if($product['cnt_sales_public']): ?>
						<div class="poruct-sold">Packages bought: <?=$product['cnt_sales_public']?></div>
						<? endif; ?>
					</div>

					<div id="product1-left-bottom-right">

						<? if(count($prodCategories)): ?>
						<div class="row">
							<span class="row-title">CATEGORY:</span> 

							<? foreach($prodCategories as $key => $prodcat): ?>
								<a href="/catalog/<?=$prodcat['alias']?>"><?=$prodcat['name']?></a> 
								<?=(count($prodCategories) > 1 && $key < (count($prodCategories)-1) ? '|' : '' )?>
							<? endforeach; ?>
						</div>
						<? endif; ?>
						
						<? if(count($prodTypes)): ?>
						<div class="row">
							<span class="row-title">TYPE:</span> 

							<? foreach($prodTypes as $key => $prodtype): ?> 
								<a href="/catalog/type/<?=$prodtype['alias']?>"><?=$prodtype['name']?></a> 
								<?=(count($prodTypes) > 1 && $key < (count($prodTypes)-1) ? '|' : '' )?>
							<? endforeach; ?>
						</div>
						<? endif; ?>

					</div>
				</div>
			</div>

			<div id="product1-right">

				<h1 class="grad"><?=$product['name']?></h1>

				<div id="product1-right-price_reviews">
					<div class="prod-price">
						<span class="prod-price-title">price</span>
						<span class="prod-price-inner">$<?=$mainVariant['price']?></span>
						
						<? if($mainVariant['price_old'] > $mainVariant['price']): ?>
						<span class="prod-price-old">$<?=$mainVariant['price_old']?></span>
						<? endif; ?>
					</div>

					<? if($product['cnt_reviews']): ?>
					<div class="prod-reviews">
						<div class="stars"></div>
						<div class="reviews-count"><?=$product['cnt_reviews']?> customer <a href="#">reviews</a></div>
					</div>
					<? endif; ?>
				</div>

				<? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>
				<div id="product1-right-edition">
					<div class="prod-edition-title">Choose your edition</div>
					
					<div class="prod-edition-buttons">
						<button class="btn-blue btn-product-edition">Designed</button>
						<button class="btn-blue btn-product-edition">Construction kit</button>
					</div>

					<? if(isset($prodVariants['design_construct'])): ?>

					<div class="prod-edition-single-button">
						<button class="btn-blue btn-product-edition">Designed + Construction kit</button>
					</div>

					<a href="#" class="prod-edition-info-link">
						Ready to use DESIGNED + CONSTRUCTION KIT sound <span class="quest-symb">?</span>
					</a>
					
					<? endif; ?>
				</div>
				<? endif; ?>

				<div id="product1-right-soundcloud">
					<iframe width="100%" height="<?=($edition?'100':'166')?>" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>

				<div id="product1-right-buy">
					<button class="btn-purp-grad btn-product-add-cart">ADD TO CART</button>
					<button class="btn-purp btn-product-buy-now">BUY NOW</button>
				</div>

				<div id="product1-right-tryfree">
					<a href="#" class="link-product-try-free">TRY IT FREE</a>
				</div>

				<div id="product1-right-timer">
					<div class="timer">
						<p class="timer-text">SALE WILL END IN</p>
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
			</div>
		</div>
	</div>
</div>