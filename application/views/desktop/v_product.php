<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="product-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

		<?
			// defining product design
			$prClass = '';
			if(isset($prodVariants['bundle'])) $prClass = 'pr-bundle';
			if(isset($prodVariants['design']) && isset($prodVariants['construct'])) $prClass = 'pr-edition';

		?>

		<section id="product" class="content <?=$prClass?>">


				<? if(isset($prodVariants['bundle'])) $this->load->view('desktop/v_product_top_bundle'); ?>
				<? if(isset($prodVariants['design'])) $this->load->view('desktop/v_product_top'); ?>

				<div class="full-width-container product-arcane-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title mobile"><?=$product['name']?><br></span>
							<span class="gradient-title mobile"> sound element</span>
							<span class="gradient-title desktop"><?=$product['name']?> sound element</span>
						</h2>
						<div class="two-cols-block">
							<div class="left-col">
									<div class="descr"><?=$product['cont_description']?></div>
							</div>
							<div class="right-col">
								<div class="product-video">
									<? if($product['cont_v_id']): ?>
									<div class="prod-vid" style="background-image: url('/assets/media/video_preview/<?=substr($product['cont_v_img_preview'], 0, -4).'_570.jpg'?>');">
										<button class="bundle-play video-open" data-code="<?=$product['cont_v_src']?>">
											<div class="inner">
												<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
											</div>
										</button>
									</div>
									<? endif; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			<!-- Product whats inside block -->
			<? if($edition): ?>
				<? $this->load->view('desktop/v_product_info_construction'); ?>
				<? $this->load->view('desktop/v_product_info_designed'); ?>
				<? $this->load->view('desktop/v_product_info_both_designed_construct'); ?>
			<? else: ?>
				<? $this->load->view('desktop/v_product_info_designed'); ?>
			<? endif; ?>

			<? $this->load->view('desktop/v_product_info_compatible_software'); ?>

			<div id="product7">
				<div class="inner1170">
					<h2 class="grad">Who needs this pack?</h2>

					<div id="product7-who_need">

						<div class="product-who_need-item">
							<div class="product-who_need-item-text">
								<div class="product-who_need-item-text-sublayer">1</div>
								<div class="product-who_need-item-text-content">
									<h3 class="grad">Cinema maker</h3>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									</div>
								</div>
							</div>

							<div class="product-who_need-item-video">
								<div class="prod-vid" style="background-image: url('/assets/img/product7-video1.jpg');">
									<button class="prod-play">
										<div class="inner"><i class="playsvg"></i></div>
									</button>
								</div>
							</div>
						</div>

						<div class="product-who_need-item">
							<div class="product-who_need-item-text">
								<div class="product-who_need-item-text-sublayer">2</div>
								<div class="product-who_need-item-text-content">
									<h3 class="grad">Motion Designer</h3>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									</div>
								</div>
							</div>

							<div class="product-who_need-item-video">
								<div class="prod-vid" style="background-image: url('/assets/img/product7-video2.jpg');">
									<button class="prod-play">
										<div class="inner"><i class="playsvg"></i></div>
									</button>
								</div>
							</div>
						</div>

						<div class="product-who_need-item">
							<div class="product-who_need-item-text">
								<div class="product-who_need-item-text-sublayer">3</div>
								<div class="product-who_need-item-text-content">
									<h3 class="grad">Game creator</h3>
									<div class="text">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>
									</div>
								</div>
							</div>

							<div class="product-who_need-item-video">
								<div class="prod-vid" style="background-image: url('/assets/img/product7-video3.jpg');">
									<button class="prod-play">
										<div class="inner"><i class="playsvg"></i></div>
									</button>
								</div>
							</div>
						</div>

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

			<div id="product8">
				<div class="inner1170">
					<h2 class="grad">How do our clients use this pack?</h2>

					<div class="product-client-item">
						<div class="product-client-item-text">
							<h3 class="grad">Andrew Nell</h3>
							<div class="subtext">NINTENDO | USA, NY</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
							</p>
						</div>

						<div class="product-client-item-video">
							<div class="prod-vid" style="background-image: url('/assets/img/product8-user1.jpg');">
								<button class="prod-play">
									<div class="inner"><i class="playsvg"></i></div>
								</button>
							</div>
						</div>
					</div>

					<div class="product-client-item">
						<div class="product-client-item-text">
							<h3 class="grad">Stefan Stefanic</h3>
							<div class="subtext">MOTION DESIGNER | POLAND</div>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
							</p>
						</div>

						<div class="product-client-item-video">
							<div class="prod-vid" style="background-image: url('/assets/img/product8-user2.jpg');">
								<button class="prod-play">
									<div class="inner"><i class="playsvg"></i></div>
								</button>
							</div>
						</div>
					</div>

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

			<div id="product9">
				<div class="inner1170">

					<div id="product9-slider">
						<div class="swiper product-sale-slider ">
							<h2 class="grad">SAVE 50% WITH THE BUNDLE!</h2>
							<div class="subtext">MAGIC PACK IS INCLUDED IN THE <a href="#">SOUND DESIGN BUNDLE</a></div>

							<div class="product-bundle-img-wrapper">
								<img src="/assets/img/product-all-packs.png" alt="bundle name">
								<button class="bundle-play">
									<div class="inner">
										<i class="playsvg"></i>
									</div>
								</button>
							</div>

							<div class="text-under">
								The total price of all products is <span class="text-under-stroked">$1190</span> 
								<br>save <span class="text-under-marked">$550</span> by purchasing this bundle
							</div>

							<button class="btn-purp-grad btn-main-sale">BUY NOW $500 <s>$1190</s></button>
						</div>

						<div class="product-sale-nav">
								<button data-slide="1" class="act"></button>
								<button data-slide="2"></button>
								<button data-slide="3"></button>
								<button data-slide="4"></button>
						</div>

						<div class="arrow next-arrow"><i>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</i></div>

						<div class="arrow prev-arrow"><i>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</i></div>
					</div>
				</div>
			</div>

			<div id="product10">
				<div class="inner1170">
					<h2 class="grad">Watch overviews about magic</h2>


					<div class="product10-reviews reviews">

						<div class="reviews-video">
							<? for ($i=1; $i <= 3; $i++): ?>
							<div class="review-item" data-slide="<?=$i?>">
								<div class="review-vid" style="background-image: url('/assets/img/product10-overview<?=$i?>.jpg');">
									<button class="review-play">
										<div class="inner">
											<i class="playsvg"></i>
										</div>
									</button>
								</div>

								<div class="review-name">Overview by <a href="#">Nintendo</a></div>
							</div>
							<? endfor; ?>
						</div>

						<div class="arrow next-arrow"><i>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</i></div>

						<div class="arrow prev-arrow"><i>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</i></div>
					</div>
				</div>
			</div>

			<div id="product11">
				<div class="inner1170">
					<h2 class="grad">Tutorials</h2>

					<div class="product11-reviews reviews">
						<div class="reviews-video">
							<? for ($i=1; $i <= 3; $i++): ?>
							<div class="review-item" data-slide="<?=$i?>">
								<div class="review-vid" style="background-image: url('/assets/img/reviews/<?=$i?>.jpg');">
									<button class="review-play">
										<div class="inner">
											<i class="playsvg"></i>
										</div>
									</button>
								</div>

								<div class="review-name">Title of the tutorial <?=$i?></div>
							</div>
							<? endfor; ?>
						</div>

						<div class="arrow next-arrow"><i>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</i></div>

						<div class="arrow prev-arrow"><i>
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
						</i></div>
					</div>
				</div>
			</div>

			<div id="product12">
				<div class="inner1170">
					<h2 class="grad main">Frequently Asked Questions</h2>

					<div id="faq">
						<? for ($i=1; $i <= 6; $i++): ?>
						<div id="qa1" class="qa">
							<div class="qa-hd">
								<p class="qa-name">What is Mufassa Sound?</p>
								<button class="qa-pls-mns">
									<span>+</span>
									<span>-</span>
								</button>
							</div>
							<p class="qa-desc">Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account.</p>
						</div>
						<? endfor; ?>
					</div>
				</div>
			</div>

			<div id="product13">
				<div class="inner1170">
					<h2 class="grad main">Customer reviews</h2>

					<div id="product-reviews">
						<div class="product-reviews-title"><b>17</b> reviews for <b>MAGIC PACK</b></div>
						<? for ($i=1; $i <= 3; $i++): ?>
						<div class="prod-rev">
							<div class="prod-rev-dash"></div>
							<div class="prod-rev-pic">
								<img src="/assets/img/avatar<?=$i?>.gif">
							</div>
							<div class="prod-rev-cont">
								<div class="prod-rev-name"><b>Stefan</b> Buyer</div>
								<div class="stars"></div>

								<div class="prod-rev-text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
								</div>
							</div>
						</div>
						<? endfor; ?>
					</div>

					<button id="show-more-reviews">
						<i class="refreshsvg"></i>
					</button>

					<form id="add-review">
						<div class="add-review-inf">Your email address will not be published. Required fields are marked <sup>*</sup></div>
						<div class="add-review-select-rate">
							<span>Your rating</span>
							<div class="starsadd">
								<i data-value="1" class="starsvg" data-active="1"></i>	
								<i data-value="2" class="starsvg"></i>	
								<i data-value="3" class="starsvg"></i>	
								<i data-value="4" class="starsvg"></i>	
								<i data-value="5" class="starsvg"></i>
							</div>
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Name <sup>*</sup></div> 
							<input type="text" name="name" <? if($mobile): ?>placeholder="Name *"<? endif; ?>>
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Email <sup>*</sup></div> 
							<input type="text" name="email" <? if($mobile): ?>placeholder="Email *"<? endif; ?>>
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Your review <sup>*</sup></div> 
							<textarea name="review" <? if($mobile): ?>placeholder="Your review *"<? endif; ?>></textarea>
						</div>
						<div class="add-review-row">
							<div class="add-review-label"></div> 
							<button class="btn-purp-grad btn-main-sale">Submit</button>
						</div>
					</form>
				</div>
			</div>

			<div id="product14">
				<div class="inner1170">
					<h2 class="grad main">Related products</h2>

					<div class="best-seller">
						<? for ($i=1; $i <= 3; $i++): ?>
							<div class="prd best-seller-item">
								<div class="prd-label label-best">Best Seller</div>
								<a class="prd-hd" href="#" style="background-image: url('/assets/img/bestsellerbg.jpg');">
									<img src="/assets/img/best<?=$i?>pack.png" alt="default box">
									<span class="prd-tit">Impacts Pack | 3600 elements</span>
									<!-- <span class="prd-tit-blue">Impacts Sound Effects</span> -->
								</a>

								<div class="prd-sndcld">
									<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
								</div>

								<div class="prd-ft">
									<div class="prd-ft-lt">
										<div class="prd-price">from <b>$36</b></div>
										<div class="prd-stars">
											<div class="stars"></div>
											<span class="prd-stars-cnt">146</span>
										</div>
										<div class="prd-seles">335 Seles</div>
									</div>

									<div class="prd-ft-rt">
										<button class="btn-purp-grad prd-buy act-buy">ADD TO CART</button>
										<a href="#" class="prd-more">More details about pack</a>
									</div>
								</div>
							</div>
						<? endfor; ?>
					</div>
				</div>
			</div>
		</section>

	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
