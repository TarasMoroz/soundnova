<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="full-width-container whats-inside-container">
	<div class="inner-content-container">
		<h2 class="container-title secondary-title">
			<span class="gradient-title mobile">What’s inside <br></span>
			<span class="gradient-title mobile"> <?=$mainVariant['cont2_title']?></span>
			<span class="gradient-title desktop">What’s inside <?=$mainVariant['cont2_title']?></span>
		</h2>
		<div class="whats-inside">
				<div class="whats-inside-cols">
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
				<div class="whats-inside-cols">
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
		<div class="two-cols-block <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>product4-flipped<? endif; ?>">
							<div class="left-col">
								<h2 class="container-title secondary-title">
									<span class="gradient-title"><?=$mainVariant['cont3_title']?></span>
								</h2>
								<div class="descr"><?=$mainVariant['cont3_desc']?></div>
								<? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>
									<a href="#" class="desc-what-is"><span class="quest-symb">?</span> Designed, Construction Kit, Bundle: What’s the difference?</a>
								<? endif; ?>
							</div>
							<div class="right-col"></div>
						</div>
	</div>
</div>


<? if(isset($prodVariants['bundle'])): ?>

<!-- Included packages for BUNDLE type -->

<? else: ?>

<div class="product5">
	<div class="inner1170">
		<h2 class="grad">Included sounds</h2>

		<div class="product5-sounds_preview">

			<? $soundPreviews = ['Blasts','Breams','Mits','Mits','Movements','Padicles','Whoesdes','Whoesdes','Textures','Zaps','Ambienes','Ambienes']; ?>
			<? for ($i=0; $i <= 11; $i++): if($mobile && $i > 1) continue; ?>
			<div class="product-sound_preview">
				<div class="product-sound_preview-title"><?=$soundPreviews[$i]?></div>
				<div class="product-sound_preview-soundcloud">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>
			</div>
			<? endfor; ?>

			<? if($mobile): ?>
				<div class="arrow next-arrow"><i>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
				</i></div>

				<div class="arrow prev-arrow"><i>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
				</i></div>

				<div class="product-sounds_preview-nav">
					<button data-slide="1" class="act"></button>
					<button data-slide="2"></button>
					<button data-slide="3"></button>
					<button data-slide="4"></button>
				</div>
			<? endif; ?>
		</div>
	</div>
</div>

<? endif; ?>