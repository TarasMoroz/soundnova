<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="product3">
	<div class="inner1170">
		<h2 class="grad">What's inside arcane forces <br>construction kit</h2>

		<div class="product3-inner">
			<div class="product3-left construction">
				<div class="bundle-shadow"></div>
				<img src="/assets/img/topbundle.png" alt="bundle name">
			</div>

			<div class="product3-right">
				<div class="product3-right-info">
					<div class="info-item">
						<span class="info-item-title">Files</span>
						<span class="info-item-count">650</span>
					</div>
					<div class="info-item">
						<span class="info-item-title">Sounds</span>
						<span class="info-item-count">3240</span>
					</div>
					<div class="info-item">
						<span class="info-item-title">Size</span>
						<span class="info-item-count">11 Gb</span>
					</div>
					<div class="info-item">
						<span class="info-item-title">Format</span>
						<span class="info-item-count">WAV 24bit</span>
					</div>
				</div>

				<div class="product3-right-content_info">
					<div class="product-content_info-title">
						Download content info
					</div>
					<div class="product-content_info-link">
						<a href="#">
							<i class="pdfsvg"></i> PDF
						</a>
					</div>
					<div class="product-content_info-link">
						<a href="#">
							<i class="xlssvg"></i> XLS
						</a>
					</div>
				</div>

				<div class="product3-right-soundcloud">
					<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
				</div>

				<div class="product3-right-buy_designed">
					<button class="btn-purp-grad btn-product-add-cart">BUY CONSTRUCTION KIT $123</button>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="product4" style="background-image: url('/assets/img/product4-bg2.jpg');">
	<div class="inner1170">
		<div class="product4-inner">
			<div class="product4-left">
				<h2 class="grad">TITLE DESCRIPTION</h2>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>

				<? if($edition): ?>
				<a href="#" class="desc-what-is"><span class="quest-symb">?</span> Designed, Construction Kit, Bundle: What’s the difference?</a>
				<? endif; ?>
			</div>

			<div class="product4-right"></div>
		</div>
	</div>
</div>

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