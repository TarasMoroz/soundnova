<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	// дефолтная картинка бандла или дизайн пака
	$im = isset($prodVariants['bundle']) ? '/assets/img/packs/main-pack-min.svg' : '/assets/img/packs/product-default.svg';
	if($mainVariant['cont2_img_box']) {
		$imPath = '/assets/media/product_variant-cont2_img_box/'.substr($mainVariant['cont2_img_box'], 0, -4).'.svg';
		if (file_exists($imPath)) $im = $imPath;
	}
?>

<div class="whats-inside-container">
		<h2 class="gradient-title txt-uppercase txt-center"><?= $mainVariant['cont2_title'] ?></h2>

		<div class="view-mobile">
			<div class="d-flex">
				<div class="flex-1">
					<div class="image-wrapper">
						<img class="product-img" src="<?=$im?>" alt="<?= $mainVariant['cont2_title'] ?>">
					</div>
				</div>
				<div class="flex-1">
					<div class="file-details">
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
					<div class="download-info mt-1">
						<div class="product-content_info-title">
							Download content info
						</div>
						<div class="donwload-content-icons">
							<? if($mainVariant['cont2_pdf']): ?>
								<div class="product-content_info-link">
									<a href="/assets/media/product_variant-cont2_pdf/<?=$mainVariant['cont2_pdf']?>" target="_blank">
										<div class="icon"><img src="/assets/img/icons/file-pdf.svg" alt="pdf"></div>
										<div class="text">pdf</div>
									</a>
								</div>
							<? endif; ?>

							<? if($mainVariant['cont2_xls']): ?>
								<div class="product-content_info-link">
									<a href="/assets/media/product_variant-cont2_xls/<?=$mainVariant['cont2_xls']?>" target="_blank">
										<div class="icon"><img src="/assets/img/icons/file-xls.svg" alt="xls"></div>
										<div class="text">xls</div>
									</a>
								</div>
							<? endif; ?>
						</div>

					</div>
				<? endif; ?>

				<? if($mainVariant['cont2_soundcloud']): ?>
					<div class="player mt-1">
						<iframe class="lazy-frame" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$mainVariant['cont2_soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
					</div>
				<? endif; ?>

				<div class="button-area d-flex jc-center">
					<button class="btn-purp-grad btn-product-add-cart">

						<? if(isset($prodVariants['bundle'])): ?>

							BUY DESIGNED $<?=$prodVariants['bundle']['price']?>

						<? else: ?>

							BUY NOW $<?=$prodVariants['design']['price']?>

						<? endif; ?>

					</button>
				</div>
		</div>


		<div class="view-desktop">
			
			<div class="d-flex">
				<div class="flex-1 d-flex ai-center">
					<div class="image-wrapper">
						<img class="product-img" src="<?=$im?>" alt="<?= $mainVariant['cont2_title'] ?>">
					</div>
				</div>
				<div class="flex-1">
					<div class="card dark">

						<div class="file-details">
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
							<div class="download-info mt-1">
								<div class="product-content_info-title">
									Download content info
								</div>
								<div class="donwload-content-icons">
									<? if($mainVariant['cont2_pdf']): ?>
										<div class="product-content_info-link">
											<a href="/assets/media/product_variant-cont2_pdf/<?=$mainVariant['cont2_pdf']?>" target="_blank">
												<div class="icon"><img src="/assets/img/icons/file-pdf.svg" alt="pdf"></div>
												<div class="text">pdf</div>
											</a>
										</div>
									<? endif; ?>

									<? if($mainVariant['cont2_xls']): ?>
										<div class="product-content_info-link">
											<a href="/assets/media/product_variant-cont2_xls/<?=$mainVariant['cont2_xls']?>" target="_blank">
												<div class="icon"><img src="/assets/img/icons/file-xls.svg" alt="xls"></div>
												<div class="text">xls</div>
											</a>
										</div>
									<? endif; ?>
								</div>

							</div>
						<? endif; ?>

						<? if($mainVariant['cont2_soundcloud']): ?>
							<div class="product-right-soundcloud mt-1">
								<iframe class="lazy-frame" width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/<?=$mainVariant['cont2_soundcloud']?>&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
							</div>
						<? endif; ?>

						<div class="button-area d-flex jc-center">
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