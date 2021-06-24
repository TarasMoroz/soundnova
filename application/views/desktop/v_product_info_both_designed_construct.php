<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

			
<div class="full-width-container whats-inside-container">
	<div class="inner-content-container">
		<h2 class="container-title secondary-title">
			<div class="gradient-title shadowed"><?=$mainVariant['cont2_title']?></div>
		</h2>
		<div class="whats-inside">
				<div class="whats-inside-cols design-construct">
						<div class="left-col">
						<div class="bundle-shadow"></div>
						<? 
							// дефолтная картинка бандла или дизайн пака
							$im = isset($prodVariants['bundle']) ? '/assets/img/packs/main-pack-min.svg' : '/assets/media/product_variant-img_box/construction-default-min.svg';
							if($mainVariant['cont2_img_box']) $im = '/assets/media/product_variant-cont2_img_box/'.substr($mainVariant['cont2_img_box'], 0, -4).'.svg'; 
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
				<div class="whats-inside-cols design-construct">
						<div class="left-col ">
						<div class="bundle-shadow"></div>
						<? 
							// дефолтная картинка бандла или дизайн пака
							$im = isset($prodVariants['bundle']) ? '/assets/img/packs/main-pack-min.svg' : '/assets/media/product_variant-img_box/construction-default-min.svg';
							if($mainVariant['cont2_img_box']) $im = '/assets/media/product_variant-cont2_img_box/'.substr($mainVariant['cont2_img_box'], 0, -4).'.svg'; 
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