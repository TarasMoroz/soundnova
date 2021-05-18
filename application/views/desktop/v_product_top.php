<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="product-top-container full-width-container" id="product1">
	<div class="product-top-inner-content">
		<div class="product-top-mobile">
			<h1 class="container-title main-title">
				<span class="gradient-title"><?=$product['name']?></span>
			</h1>
			<div class="sale-will-end-title">sale will end in</div>
			<div class="timer-counter">
				<div class="timer-counter-item">
					<span class="count-number days">00</span>
					<span class="count-text">days</span>
				</div>
				<div class="timer-counter-item">
					<span class="count-number hours">00</span>
					<span class="count-text">hours</span>
				</div>
					<div class="timer-counter-item">
						<span class="count-number minutes">00</span>
						<span class="count-text">mins</span>
					</div>
					<div class="timer-counter-item">
						<span class="count-number seconds">00</span>
						<span class="count-text">sec</span>
					</div>
			</div>
			<div class="product-top-info-container">
				<div class="left-col" <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>class="edition"<? endif; ?>>
					<div class="bundle-sale">

						<? if($mainVariant['price_old'] > $mainVariant['price']): ?>
						<div class="bundle-discount">-<?=ceil(($mainVariant['price_old']-$mainVariant['price'])/($mainVariant['price_old']/100))?>%</div>
						<? endif; ?>

						<? 
							$im = '/assets/img/packs/product-default.svg';
							if($mainVariant['img_box']) $im = '/assets/media/product_variant-img_box/'.substr($mainVariant['img_box'], 0, -4).'.svg'; 
							
							// дефолтный бокс бандла
							if(!$mainVariant['img_box'] && isset($prodVariants['bundle'])){
								$im = '/assets/img/packs/main-pack-min.svg';
							}

							// дефолтный бокс десигн
							if(!$mainVariant['img_box'] && isset($prodVariants['design'])){
								$im = '/assets/img/packs/product-default.svg';
							}
							// дефолтный бокс конструкт
							if(!$mainVariant['img_box'] && isset($prodVariants['construct'])){
								$im = '/assets/img/packs/construction-default-min.svg';
							}
						?>

						<div class="bundle-shadow"></div>
						<img id="product-top-box" src="<?=$im?>" alt="bundle name">
					</div>
					<div class="product-top-cat-col">
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
				<div class="right-col">

				<div class="prod-price">
									<span class="prod-price-inner">$<?=$mainVariant['price']?></span>
									
									<? if($mainVariant['price_old'] > $mainVariant['price']): ?>
									<span class="prod-price-old">$<?=$mainVariant['price_old']?></span>
									<? endif; ?>
				</div>

				<? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>
				<div id="product1-right-edition">
					<div class="prod-edition-title">Choose your edition</div>

					<select>
						<option value="Designed">Designed</option>
						<option value="Construction kit">Construction kit</option>
						<? if(isset($prodVariants['design_construct'])): ?>
						<option value="Designed + Construction kit">Designed + Construction kit</option>
						<? endif; ?>
					</select>

					<? if(isset($prodVariants['design_construct'])): ?>
					<a class="prod-edition-info-link">
						Ready to use DESIGNED + CONSTRUCTION KIT sound 
						<span class="quest-symb">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="10" height="10" viewBox="0 0 438.533 438.533" style="enable-background:new 0 0 438.533 438.533;" xml:space="preserve">
								<g fill="#1dd1e5">
									<path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0   c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267   c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407   s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062   C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563   c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823   c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563   c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275   c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135   c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571   c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279   c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847   c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421   c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431   c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991   c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119   c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
								</g>
							</svg>
						</span>
					</a>				
					<? endif; ?>
				</div>
				<? endif; ?>

					 <div class="product-info">
							<? if($product['l_name']): ?>
								<div class="label label-bestseller" style="color: <?=$product['l_color']?>;"><?=$product['l_name']?></div>
							<? endif; ?>
							
							<? if($product['cnt_sales_public']): ?>
							<div class="product-sold">Packages bought: <span><?=$product['cnt_sales_public']?></span></div>
							<? endif; ?>
					 </div>
					<div class="product1-right-reviews">
								<? if($product['cnt_reviews']): ?>
								<div class="prod-reviews">
									<div class="stars"></div>
									<div class="reviews-count"><?=$product['cnt_reviews']?> customer <a href="#reviews-container">reviews</a></div>
								</div>
								<? endif; ?>
					</div>
				</div>
			</div>
			<div id="product1-right-soundcloud">
					<iframe width="100%" class="lazy-frame" height="<?=($edition?'100':'166')?>" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>
				
				<div id="product1-right-buy">
					<button class="btn-purp-grad btn-product-add-cart">ADD TO CART</button>
					<button class="btn-purp-border btn-product-buy-now">BUY NOW</button>
				</div>

				<div id="product1-right-tryfree">
					<a href="#" class="link-product-try-free">TRY IT FREE</a>
				</div>
		</div>


		<!--desktop version-->
		<div class="product-top-desktop">
			<div class="product-top-info-container">
				<div class="left-col" <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>class="edition"<? endif; ?>>
					<div class="bundle-sale">
						<? if($product['adv1']||$product['adv2']||$product['adv3']): ?>
						<div class="main-pack-slider-texts">
								<? if($product['adv1']): ?>
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span><?=$product['adv1']?></span>
								</div>
								<? endif; ?>
								<? if($product['adv2']): ?>		
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span><?=$product['adv2']?></span>
								</div>
								<? endif; ?>
								<? if($product['adv3']): ?>	
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span><?=$product['adv3']?></span>
								</div>
								<? endif; ?>
					</div>
					<? endif; ?>
						<? if($mainVariant['price_old'] > $mainVariant['price']): ?>
						<div class="bundle-discount">-<?=ceil(($mainVariant['price_old']-$mainVariant['price'])/($mainVariant['price_old']/100))?>%</div>
						<? endif; ?>

						<? 
							$im = '/assets/img/packs/product-default.svg';
							if($mainVariant['img_box']) $im = '/assets/media/product_variant-img_box/'.substr($mainVariant['img_box'], 0, -4).'.svg'; 
							
							// дефолтный бокс бандла
							if(!$mainVariant['img_box'] && isset($prodVariants['bundle'])){
								$im = '/assets/img/packs/main-pack-min.svg';
							}

							// дефолтный бокс десигн
							if(!$mainVariant['img_box'] && isset($prodVariants['design'])){
								$im = '/assets/img/packs/product-default.svg';
							}
							// дефолтный бокс конструкт
							if(!$mainVariant['img_box'] && isset($prodVariants['construct'])){
								$im = '/assets/img/packs/construction-default-min.svg';
							}							
						?>

						<div class="bundle-shadow"></div>
						<img id="product-top-box" src="<?=$im?>" alt="bundle name">
					</div>
				<div class="product-info-bottom-block">
					<div class="product-info">
								<? if($product['l_name']): ?>
									<div class="label label-bestseller" style="color: <?=$product['l_color']?>;"><?=$product['l_name']?></div>
								<? endif; ?>
								
								<? if($product['cnt_sales_public']): ?>
								<div class="product-sold">Packages bought: <span><?=$product['cnt_sales_public']?></span></div>
								<? endif; ?>
						</div>
						<div class="product-top-cat-col">
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
				<div class="right-col">
				<h1 class="container-title main-title">
				<span class="gradient-title"><?=$product['name']?></span>
				</h1>
				<div class="prod-price-reviews">
					<div class="prod-price">
						<span class="price-text">price</span>
										<span class="prod-price-inner">$<?=$mainVariant['price']?></span>
										
										<? if($mainVariant['price_old'] > $mainVariant['price']): ?>
										<span class="prod-price-old">$<?=$mainVariant['price_old']?></span>
										<? endif; ?>
					</div>
					<div class="product1-right-reviews">
									<? if($product['cnt_reviews']): ?>
									<div class="prod-reviews">
										<div class="stars"></div>
										<div class="reviews-count"><?=$product['cnt_reviews']?> customer <a href="#reviews-container">reviews</a></div>
									</div>
									<? endif; ?>
					</div>
				</div>

				<? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>
				<div id="product1-right-edition">
					<div class="prod-edition-title">Choose your edition</div>
					<div class="product-edition-buttons">
						<div class="top-buttons">
							<button class="blue-btn">Designed</button>
							<button class="blue-btn">Construction kit</button>
						</div>
						<? if(isset($prodVariants['design_construct'])): ?>
							<button class="blue-btn selected">Designed + Construction kit</button>
						<? endif; ?>
					</div>
					<? if(isset($prodVariants['design_construct'])): ?>
					<a class="prod-edition-info-link">
						Ready to use DESIGNED + CONSTRUCTION KIT sound 
						<span class="quest-symb">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="14" height="14" viewBox="0 0 438.533 438.533" style="enable-background:new 0 0 438.533 438.533;" xml:space="preserve">
								<g fill="#1dd1e5">
									<path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0   c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267   c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407   s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062   C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563   c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823   c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563   c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275   c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135   c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571   c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279   c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847   c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421   c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431   c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991   c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119   c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
								</g>
							</svg>
						</span>
					</a>				
					<? endif; ?>
				</div>
				<? endif; ?>


						<div id="product1-right-soundcloud">
							<iframe width="100%" class="lazy-frame" height="<?=($edition?'100':'166')?>" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
						</div>
						
						<div id="product1-right-buy">
							<button class="btn-purp-grad btn-product-add-cart">ADD TO CART</button>
							<button class="btn-purp-border btn-product-buy-now">BUY NOW</button>
						</div>

						<div id="product1-right-tryfree">
							<a href="#" class="link-product-try-free">TRY IT FREE</a>
						</div>
						<div class="sale-will-end-title">sale will end in</div>
						<div class="timer-counter">
							<div class="timer-counter-item">
								<span class="count-number days">00</span>
								<span class="count-text">days</span>
							</div>
							<div class="timer-counter-item">
								<span class="count-number hours">00</span>
								<span class="count-text">hours</span>
							</div>
								<div class="timer-counter-item">
									<span class="count-number minutes">00</span>
									<span class="count-text">mins</span>
								</div>
								<div class="timer-counter-item">
									<span class="count-number seconds">00</span>
									<span class="count-text">sec</span>
								</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>