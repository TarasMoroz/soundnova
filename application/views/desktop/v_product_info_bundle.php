<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="full-width-container whats-inside-container">
	<div class="inner-content-container">
		<h2 class="container-title secondary-title">
			<div class="gradient-title shadowed"><?=$mainVariant['cont2_title']?></div>
		</h2>
		<div class="whats-inside">
				<div class="whats-inside-cols bundle">
					<div class="left-col">
						<div class="bundle-shadow"></div>
						<? 
							// дефолтная картинка бандла или дизайн пака
							$im = isset($prodVariants['bundle']) ? '/assets/img/packs/main-pack-min.svg' : '/assets/img/packs/product-default.svg';
							if($mainVariant['cont2_img_box']) $im = '/assets/media/product_variant-cont2_img_box/'.substr($mainVariant['cont2_img_box'], 0, -4).'_570.svg'; 
						?>
						<img src="<?=$im?>" alt="bundle name">
					</div>
					<div class="right-col">
							<div class="product-right-info">
								<div class="info-item">
									<span class="info-item-title">Files</span>
									<span class="info-item-count"><?=$mainVariant['cont2_files']?></span>
								</div>
								<div class="info-item">
									<span class="info-item-title">Sounds</span>
									<span class="info-item-count"><?=$mainVariant['cont2_sounds']?></span>
								</div>
								<div class="info-item">
									<span class="info-item-title">Size</span>
									<span class="info-item-count"><?=$mainVariant['cont2_size']?></span>
								</div>
								<div class="info-item">
									<span class="info-item-title">Format</span>
									<span class="info-item-count"><?=$mainVariant['cont2_format']?></span>
								</div>
							</div>
						</div>	
				</div>
				<? if($mainVariant['cont2_pdf'] || $mainVariant['cont2_xls']): ?>
						<div class="product-right-download-info">
							<div class="product-content_info-title">
								Download content info
							</div>
							<div class="donwload-content-icons">
								<? if($mainVariant['cont2_pdf']): ?>
								<div class="product-content_info-link">
									<a href="/assets/media/product_variant-cont2_pdf/<?=$mainVariant['cont2_pdf']?>" target="_blank">
										<i class="pdfsvg"></i> PDF
									</a>
								</div>
								<? endif; ?>

								<? if($mainVariant['cont2_xls']): ?>
								<div class="product-content_info-link">
									<a href="/assets/media/product_variant-cont2_xls/<?=$mainVariant['cont2_xls']?>" target="_blank">
										<i class="xlssvg"></i> XLS
									</a>
								</div>
								<? endif; ?>
							</div>

						</div>
						<? endif; ?>

						<div class="main-pack-slider-texts">
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span>100% royalty <br> FREE</span>
								</div>
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span>Professionally mastered</span>
								</div>
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span>30 days moneyback<br> GUARANTEE</span>
								</div>
						</div>

						<? if($mainVariant['cont2_soundcloud']): ?>
							<div class="product-right-soundcloud">
								<iframe class="lazy-frame" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$mainVariant['cont2_soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
							</div>
						<? endif; ?>

						<div class="product-right-buy_designed">
							<button class="btn-purp-grad btn-product-add-cart">

								<? if(isset($prodVariants['bundle'])): ?>

									BUY DESIGNED $<?=$prodVariants['bundle']['price']?>

								<? else: ?>

									BUY NOW $<?=$prodVariants['design']['price']?>

								<? endif; ?>

							</button>
						</div>
			</div>


			<div class="whats-inside desktop">
				<div class="whats-inside-cols bundle">
					<div class="left-col">
						<div class="bundle-shadow"></div>
						<? 
							// дефолтная картинка бандла или дизайн пака
							$im = isset($prodVariants['bundle']) ? '/assets/img/packs/main-pack-min.svg' : '/assets/img/packs/product-default.svg';
							if($mainVariant['cont2_img_box']) $im = '/assets/media/product_variant-cont2_img_box/'.substr($mainVariant['cont2_img_box'], 0, -4).'_570.svg'; 
						?>
						<img src="<?=$im?>" alt="bundle name">
					</div>
                    <div class="right-col">
							<div class="product-right-info">
								<div class="info-item">
									<span class="info-item-title">Files</span>
									<span class="info-item-count"><?=$mainVariant['cont2_files']?></span>
								</div>
								<div class="info-item">
									<span class="info-item-title">Sounds</span>
									<span class="info-item-count"><?=$mainVariant['cont2_sounds']?></span>
								</div>
								<div class="info-item">
									<span class="info-item-title">Size</span>
									<span class="info-item-count"><?=$mainVariant['cont2_size']?></span>
								</div>
								<div class="info-item">
									<span class="info-item-title">Format</span>
									<span class="info-item-count"><?=$mainVariant['cont2_format']?></span>
								</div>
							</div>

							<? if($mainVariant['cont2_pdf'] || $mainVariant['cont2_xls']): ?>
						<div class="product-right-download-info">
							<div class="product-content_info-title">
								Download content info
							</div>
							<div class="donwload-content-icons">
								<? if($mainVariant['cont2_pdf']): ?>
								<div class="product-content_info-link">
									<a href="/assets/media/product_variant-cont2_pdf/<?=$mainVariant['cont2_pdf']?>" target="_blank">
										<i class="pdfsvg"></i> PDF
									</a>
								</div>
								<? endif; ?>

								<? if($mainVariant['cont2_xls']): ?>
								<div class="product-content_info-link">
									<a href="/assets/media/product_variant-cont2_xls/<?=$mainVariant['cont2_xls']?>" target="_blank">
										<i class="xlssvg"></i> XLS
									</a>
								</div>
								<? endif; ?>
							</div>

						</div>
						<? endif; ?>

						<div class="main-pack-slider-texts">
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span>100% royalty <br> FREE</span>
								</div>
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span>Professionally mastered</span>
								</div>
								<div class="main-pack-slider-texts-col">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
									<span>30 days moneyback<br> GUARANTEE</span>
								</div>
						</div>

						<? if($mainVariant['cont2_soundcloud']): ?>
							<div class="product-right-soundcloud">
								<iframe class="lazy-frame" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$mainVariant['cont2_soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
							</div>
						<? endif; ?>

						<div class="product-right-buy_designed">
							<button class="btn-purp-grad btn-product-add-cart">

								<? if(isset($prodVariants['bundle'])): ?>

									BUY DESIGNED $<?=$prodVariants['bundle']['price']?>

								<? else: ?>

									BUY NOW $<?=$prodVariants['design']['price']?>

								<? endif; ?>

							</button>
						</div>

					</div>	
				</div>
 
				
			</div>

	</div>
</div>

<?	
	// фон по дефолту, если не загружали из админки
	$cont3_img_bg = '/assets/img/cont3_img_bg.jpg';
	if($mainVariant['cont3_img_bg']) $cont3_img_bg = '/assets/media/product_variant-cont3_img_bg/'.$mainVariant['cont3_img_bg'];
?>

<div class="full-width-container right-background-container" style="background-image: url('/assets/media/product_variant-cont3_img_bg/<?=$mainVariant['cont3_img_bg']?>');">
	<div class="inner-content-container">
		<div class="two-cols-block bundle <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>product4-flipped<? endif; ?>">

							<div class="left-col">
								<h2 class="container-title secondary-title">
									<div class="gradient-title"><?=$mainVariant['cont3_title']?></div>
								</h2>
								<div class="descr"><?=$mainVariant['cont3_desc']?></div>
								<? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>
									<a href="#" class="desc-what-is">
										<span class="quest-symb">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="10" height="10" viewBox="0 0 438.533 438.533" style="enable-background:new 0 0 438.533 438.533;" xml:space="preserve">
												<g fill="#1dd1e5">
													<path d="M409.133,109.203c-19.608-33.592-46.205-60.189-79.798-79.796C295.736,9.801,259.058,0,219.273,0   c-39.781,0-76.47,9.801-110.063,29.407c-33.595,19.604-60.192,46.201-79.8,79.796C9.801,142.8,0,179.489,0,219.267   c0,39.78,9.804,76.463,29.407,110.062c19.607,33.592,46.204,60.189,79.799,79.798c33.597,19.605,70.283,29.407,110.063,29.407   s76.47-9.802,110.065-29.407c33.593-19.602,60.189-46.206,79.795-79.798c19.603-33.596,29.403-70.284,29.403-110.062   C438.533,179.485,428.732,142.795,409.133,109.203z M255.82,356.309c0,2.662-0.862,4.853-2.573,6.563   c-1.704,1.711-3.895,2.567-6.557,2.567h-54.823c-2.664,0-4.854-0.856-6.567-2.567c-1.714-1.711-2.57-3.901-2.57-6.563v-54.823   c0-2.662,0.855-4.853,2.57-6.563c1.713-1.708,3.903-2.563,6.567-2.563h54.823c2.662,0,4.853,0.855,6.557,2.563   c1.711,1.711,2.573,3.901,2.573,6.563V356.309z M325.338,187.574c-2.382,7.043-5.044,12.804-7.994,17.275   c-2.949,4.473-7.187,9.042-12.709,13.703c-5.51,4.663-9.891,7.996-13.135,9.998c-3.23,1.995-7.898,4.713-13.982,8.135   c-6.283,3.613-11.465,8.326-15.555,14.134c-4.093,5.804-6.139,10.513-6.139,14.126c0,2.67-0.862,4.859-2.574,6.571   c-1.707,1.711-3.897,2.566-6.56,2.566h-54.82c-2.664,0-4.854-0.855-6.567-2.566c-1.715-1.712-2.568-3.901-2.568-6.571v-10.279   c0-12.752,4.993-24.701,14.987-35.832c9.994-11.136,20.986-19.368,32.979-24.698c9.13-4.186,15.604-8.47,19.41-12.847   c3.812-4.377,5.715-10.188,5.715-17.417c0-6.283-3.572-11.897-10.711-16.849c-7.139-4.947-15.27-7.421-24.409-7.421   c-9.9,0-18.082,2.285-24.555,6.855c-6.283,4.565-14.465,13.322-24.554,26.263c-1.713,2.286-4.093,3.431-7.139,3.431   c-2.284,0-4.093-0.57-5.424-1.709L121.35,145.89c-4.377-3.427-5.138-7.422-2.286-11.991   c24.366-40.542,59.672-60.813,105.922-60.813c16.563,0,32.744,3.903,48.541,11.708c15.796,7.801,28.979,18.842,39.546,33.119   c10.554,14.272,15.845,29.787,15.845,46.537C328.904,172.824,327.71,180.529,325.338,187.574z"/>
												</g>
											</svg>
										</span>
						 				Designed, Construction Kit, Bundle: What’s the difference?
									</a>
								<? endif; ?>
							</div>
                            <div class="right-col"></div>
						</div>
	</div>
</div>


<? if(isset($prodVariants['bundle'])): ?>

<!-- Included packages for BUNDLE type -->

<div class="full-width-container sounds-slider-container">
		<div class="inner-content-container">
			<h2 class="container-title secondary-title">
				<span class="gradient-title shadowed">Included packages</span>
			</h2>
			<div class="product-sounds_preview">

								<div class="sounds-pack-slider">
										<!-- Swiper -->
										<div class="swiper-container sounds-pack-wrapper">
											<div class="swiper-wrapper best-seller">
											<? $soundPreviews = ['Blasts','Breams','Mits','Mits','Movements','Padicles','Whoesdes','Whoesdes','Textures','Zaps','Ambienes','Ambienes']; ?>
											<? for ($i=0; $i < 4; $i++):?>
											<div class="swiper-slide">
												<div class="prd best-seller-item">
													<div class="prd-label label-best">Best Seller</div>
													<a class="prd-hd" href="#">
														<div class="inner" style="background-image: url('/assets/img/packs/bestsellerbg1-min.jpg');"></div>
														<img class="lzy_img" data-src="/assets/img/packs/best1pack.svg" alt="default box">
														<span class="prd-tit">Impacts Pack | 3600 elements</span>
														<span class="prd-tit-blue">Impacts Sound Effects</span>
													</a>

													<div class="prd-sndcld">
														<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
													</div>
												</div>
											</div>
											<? endfor; ?>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>	
							
							<div class="desktop-sounds-preview bundle best-seller">
											<? for ($i=0; $i < 4; $i++):?>
												<div class="prd best-seller-item">
													<div class="prd-label label-best">Best Seller</div>
													<a class="prd-hd" href="#">
														<div class="inner" style="background-image: url('/assets/img/packs/bestsellerbg1-min.jpg');"></div>
														<img class="lzy_img" data-src="/assets/img/packs/best1pack.svg" alt="default box">
														<span class="prd-tit">Impacts Pack | 3600 elements</span>
														<span class="prd-tit-blue">Impacts Sound Effects</span>
													</a>

													<div class="prd-sndcld">
														<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
													</div>
												</div>
											<? endfor; ?>
							</div>


			</div>
		</div>
	</div>

<? else: ?>

	<div class="full-width-container sounds-slider-container">
		<div class="inner-content-container">
			<h2 class="container-title secondary-title">
				<span class="gradient-title shadowed">Included sounds</span>
			</h2>
			<div class="product-sounds_preview">

								<div class="sounds-pack-slider">
										<!-- Swiper -->
										<div class="swiper-container sounds-pack-wrapper">
											<div class="swiper-wrapper">
											<? $soundPreviews = ['Blasts','Breams','Mits','Mits','Movements','Padicles','Whoesdes','Whoesdes','Textures','Zaps','Ambienes','Ambienes']; ?>
											<? for ($i=0; $i < count($soundPreviews); $i+=2):?>
											<div class="swiper-slide">
												<div class="product-sound_preview">
													<div class="product-sound_preview-title"><?=$soundPreviews[$i]?></div>
													<div class="product-sound_preview-soundcloud">
														<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
													</div>
												</div>
												<div class="product-sound_preview">
													<div class="product-sound_preview-title"><?=$soundPreviews[$i+1]?></div>
													<div class="product-sound_preview-soundcloud">
														<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
													</div>
												</div>
											</div>
											<? endfor; ?>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>	
							
							<div class="desktop-sounds-preview">
											<? for ($i=0; $i < count($soundPreviews); $i++):?>
												<div class="product-sound_preview">
													<div class="product-sound_preview-title"><?=$soundPreviews[$i]?></div>
													<div class="product-sound_preview-soundcloud">
														<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
													</div>
												</div>
											<? endfor; ?>
							</div>


			</div>
		</div>
	</div>

<? endif; ?>