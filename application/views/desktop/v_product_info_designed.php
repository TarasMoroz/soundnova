<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="product3">
	<div class="inner1170">
		<h2 class="grad"><?=$mainVariant['cont2_title']?></h2>

		<div class="product3-inner">
			<div class="product3-left">
				<div class="bundle-shadow"></div>
				<? 
					// дефолтная картинка бандла или дизайн пака
					$im = isset($prodVariants['bundle']) ? '/assets/img/default_bundle.png' : '/assets/img/default_design.png';
					if($mainVariant['cont2_img_box']) $im = '/assets/media/product_variant-cont2_img_box/'.substr($mainVariant['cont2_img_box'], 0, -4).'_570.jpg'; 
				?>
				<img src="<?=$im?>" alt="bundle name">
			</div>

			<div class="product3-right">
				<div class="product3-right-info">
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
				<div class="product3-right-content_info">
					<div class="product-content_info-title">
						Download content info
					</div>

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
				<? endif; ?>

				<? if($mainVariant['cont2_soundcloud']): ?>
				<div class="product3-right-soundcloud">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$mainVariant['cont2_soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>
				<? endif; ?>

				<div class="product3-right-buy_designed">
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

<?	
	// фон по дефолту, если не загружали из админки
	$cont3_img_bg = '/assets/img/cont3_img_bg.jpg';
	if($mainVariant['cont3_img_bg']) $cont3_img_bg = '/assets/media/product_variant-cont3_img_bg/'.$mainVariant['cont3_img_bg'];
?>

<div class="product4 <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>product4-flipped<? endif; ?>" style="background-image: url('/assets/media/product_variant-cont3_img_bg/<?=$mainVariant['cont3_img_bg']?>');">
	<div class="inner1170">
		<div class="product4-inner">
			<div class="product4-left <? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>product4-flipped<? endif; ?>">
				<h2 class="grad"><?=$mainVariant['cont3_title']?></h2>

				<?=$mainVariant['cont3_desc']?>

				<? if(isset($prodVariants['design']) && isset($prodVariants['construct'])): ?>
				<a href="#" class="desc-what-is"><span class="quest-symb">?</span> Designed, Construction Kit, Bundle: What’s the difference?</a>
				<? endif; ?>
			</div>

			<div class="product4-right"></div>
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