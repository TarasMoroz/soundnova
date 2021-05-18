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
				<? if(isset($prodVariants['design']) || isset($prodVariants['construct'])) $this->load->view('desktop/v_product_top'); ?>

				<div class="full-width-container product-arcane-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title mobile shadowed"><?=$product['name']?><br></span>
							<span class="gradient-title mobile shadowed"> sound element</span>
							<span class="gradient-title desktop shadowed"><?=$product['name']?> sound element</span>
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


			<? if(isset($prodVariants['designed']) && !isset($prodVariants['construct']) && !isset($prodVariants['bundle']) && !isset($prodVariants['design_construct']) ): ?>
				<? $this->load->view('desktop/v_product_info_designed'); ?>
			<? endif; ?>
			<? if(isset($prodVariants['bundle']) && !isset($prodVariants['construct']) && !isset($prodVariants['designed']) && !isset($prodVariants['design_construct'])): ?>
				<? $this->load->view('desktop/v_product_info_bundle'); ?>
			<? endif; ?>
			<? if(isset($prodVariants['design_construct']) && !isset($prodVariants['design']) && !isset($prodVariants['construct']) && !isset($prodVariants['bundle']) ): ?>
				<? $this->load->view('desktop/v_product_info_both_designed_construct'); ?>
			<? endif; ?>

			<? if(isset($prodVariants['design']) && isset($prodVariants['construct']) && !isset($prodVariants['bundle']) && !isset($prodVariants['design_construct']) ): ?>
				<? $this->load->view('desktop/v_product_info_construction'); ?>
				<? $this->load->view('desktop/v_product_info_designed'); ?>
			<? endif; ?>

			<? if(isset($prodVariants['design']) && isset($prodVariants['construct']) && isset($prodVariants['design_construct']) && !isset($prodVariants['bundle']) ): ?>
				<? $this->load->view('desktop/v_product_info_construction'); ?>
				<? $this->load->view('desktop/v_product_info_designed'); ?>
				<? $this->load->view('desktop/v_product_info_both_designed_construct'); ?>
			<? endif; ?>

			<? $this->load->view('desktop/v_product_info_compatible_software'); ?>

			<div class="full-width-container who-needs-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title shadowed">Who needs this pack?</span>
						</h2>
						<div class="who-need-mobile-block">
							<div class="whoneeds-pack-slider">
									<!-- Swiper -->
									<div class="swiper-container whoneeds-pack-wrapper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video1.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<h3 class="container-title secondary-title">
														<span class="gradient-title">Cinema maker</span>
													</h3>
													<div class="slide-digit">1</div>
													<div class="text">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
													</div>
											</div>
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video2.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<h3 class="container-title secondary-title">
														<span class="gradient-title">Motion Designer</span>
													</h3>
													<div class="slide-digit">2</div>
													<div class="text">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
													</div>
											</div>
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video3.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<h3 class="container-title secondary-title">
														<span class="gradient-title">Game creator</span>
													</h3>
													<div class="slide-digit">3</div>
													<div class="text">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
													</div>
											</div>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>	
						</div>
						<div class="who-need-columns-block">
								<div class="who-need-row text-left">
										<div class="left-col">
											<h3 class="container-title secondary-title">
												<span class="gradient-title">Cinema maker</span>
											</h3>
											<div class="slide-digit">1</div>
											<div class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
											</div>
										</div>
										<div class="right-col">
										<div class="product-video">
												<div class="prod-vid" style="background-image: url('/assets/img/product7-video1.jpg');">
													<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
														<div class="inner">
															<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
														</div>
													</button>
												</div>
										</div>
									</div>
								</div>
								<div class="who-need-row text-right">
										<div class="left-col">
											<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video2.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
											</div>
										</div>
										<div class="right-col">
											<h3 class="container-title secondary-title">
												<span class="gradient-title">Motion Designer</span>
											</h3>
											<div class="slide-digit">2</div>
											<div class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
											</div>
									</div>
								</div>
								<div class="who-need-row text-left">
										<div class="left-col">
											<h3 class="container-title secondary-title">
												<span class="gradient-title">Game creator</span>
											</h3>
											<div class="slide-digit">3</div>
											<div class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
											</div>
										</div>
										<div class="right-col">
										<div class="product-video">
												<div class="prod-vid" style="background-image: url('/assets/img/product7-video3.jpg');">
													<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
														<div class="inner">
															<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
														</div>
													</button>
												</div>
										</div>
									</div>
								</div>
						</div>
					</div>
			</div>



			<div class="full-width-container how-use-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<div class="gradient-title">How do our clients<br> use this pack?</div>
						</h2>
						<div class="how-use-mobile-block">
							<div class="how-use-pack-slider">
									<!-- Swiper -->
									<div class="swiper-container how-use-pack-wrapper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product8-user1.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<h3 class="container-title secondary-title">
														<span class="gradient-title">Andrew Nell</span>
													</h3>
													<div class="subtext">NINTENDO | USA, NY</div>
													<div class="text">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
													</div>
											</div>
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product8-user2.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<h3 class="container-title secondary-title">
														<span class="gradient-title">Stefan Stefanic</span>
													</h3>
													<div class="subtext">MOTION DESIGNER | POLAND</div>
													<div class="text">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
													</div>
											</div>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>	
						</div>

						<div class="how-use-columns">
								<div class="how-use-row">
										<div class="left-col">
											<h3 class="container-title secondary-title">
												<span class="gradient-title">Andrew Nell</span>
											</h3>
											<div class="subtext">NINTENDO | USA, NY</div>
											<div class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
											</div>
										</div>
										<div class="right-col">
										<div class="product-video">
												<div class="prod-vid" style="background-image: url('/assets/img/product8-user1.jpg');">
													<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
														<div class="inner">
															<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
														</div>
													</button>
												</div>
										</div>
									</div>
								</div>
								<div class="how-use-row">
										<div class="left-col">
											<h3 class="container-title secondary-title">
												<span class="gradient-title">Stefan Stefanic</span>
											</h3>
											<div class="subtext">MOTION DESIGNER | POLAND</div>
											<div class="text">
												Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.
											</div>
										</div>
										<div class="right-col">
										<div class="product-video">
												<div class="prod-vid" style="background-image: url('/assets/img/product8-user2.jpg');">
													<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
														<div class="inner">
															<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
														</div>
													</button>
												</div>
										</div>
									</div>
								</div>
						</div>

					</div>
			</div>
			<? if(!isset($prodVariants['bundle'])): ?>
			<div class="full-width-container bundle-sale-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<div class="gradient-title">SAVE 50% WITH THE BUNDLE!</div>
						</h2>

						<div class="bundle-sale-slider">
									<!-- Swiper -->
									<div class="swiper-container bundle-sale-wrapper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="subtext">MAGIC PACK IS INCLUDED IN THE <a href="#">SOUND DESIGN BUNDLE</a></div>
												<div class="bundle-image">
												<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
														<div class="inner">
															<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
														</div>
													</button>
													<div class="bundle-shadow"></div>
													<img class="lzy_img" data-src="/assets/img/packs/main-pack-min.svg" alt="bundle name">
												</div>
												<div class="text-under">
													The total price of all products is <span class="text-under-stroked">$1190</span> 
													<br>save <span class="text-under-marked">$550</span> by purchasing this bundle
												</div>
												<button class="btn-purp-grad btn-main-sale">BUY NOW $500 <span>$1190</span></button>
											</div>
											<div class="swiper-slide">
													<div class="subtext">MAGIC PACK IS INCLUDED IN THE <a href="#">SOUND DESIGN BUNDLE</a></div>
													<div class="bundle-image">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
														<div class="bundle-shadow"></div>
														<img class="lzy_img" data-src="/assets/img/packs/main-pack-min.svg" alt="bundle name">
													</div>
													<div class="text-under">
														The total price of all products is <span class="text-under-stroked">$1190</span> 
														<br>save <span class="text-under-marked">$550</span> by purchasing this bundle
													</div>
													<button class="btn-purp-grad btn-main-sale">BUY NOW $500 <span>$1190</span></button>
											</div>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>	

					</div>
			</div>
			<? endif;?>

			<div class="full-width-container overviews-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<div class="gradient-title shadowed">Watch overviews<br> about magic</div>
						</h2>
						<div class="overviews-slider">
									<!-- Swiper -->
									<div class="swiper-container overviews-wrapper">
										<div class="swiper-wrapper">
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video1.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<div class="subtext">
														Overview by <a href="#">Nintendo</a>
													</div>
											</div>
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video2.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
												<div class="subtext">
														Overview by <a href="#">Motion</a>
													</div>
											</div>
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video3.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
												<div class="subtext">
														Overview by <a href="#">Epic Games</a>
													</div>
											</div>
											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/product7-video1.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<div class="subtext">
														Overview by <a href="#">Nintendo</a>
													</div>
											</div>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>	
					</div>
			</div>


			<div class="full-width-container overviews-container tutorials-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title shadowed">Tutorials</span>
						</h2>
						<div class="overviews-slider">
									<!-- Swiper -->
									<div class="swiper-container overviews-wrapper">
										<div class="swiper-wrapper">
										<? for ($i=1; $i <= 3; $i++): ?>

											<div class="swiper-slide">
												<div class="product-video">
													<div class="prod-vid" style="background-image: url('/assets/img/reviews/<?=$i?>.jpg');">
														<button class="bundle-play video-open" data-code="kPkKeGBSbCc">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
													</div>
												</div>
													<div class="subtext">
													Title of the tutorial <?=$i?>
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
					</div>
			</div>


			
			<div class="full-width-container home-faq-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<span class="gradient-title shadowed">Frequently Asked</span><br>
						<span class="gradient-title shadowed">Questions</span>
						<span class="gradient-title desktop shadowed">Frequently Asked Questions</span>
					</h2>
					<div class="faq-block">
					<div id="faq">
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
												<div id="qa1" class="qa">
							<div class="qa-hd">
								<p class="qa-name">How much does Mufassa Sound cost?</p>
								<button class="qa-pls-mns">
									<span>+</span>
									<span>-</span>
								</button>
							</div>
							<p class="qa-desc">Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account.</p>
						</div>
												<div id="qa1" class="qa">
							<div class="qa-hd">
								<p class="qa-name">Where can I watch?</p>
								<button class="qa-pls-mns">
									<span>+</span>
									<span>-</span>
								</button>
							</div>
							<p class="qa-desc">Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account.</p>
						</div>
												<div id="qa1" class="qa">
							<div class="qa-hd">
								<p class="qa-name">How do I cancel?</p>
								<button class="qa-pls-mns">
									<span>+</span>
									<span>-</span>
								</button>
							</div>
							<p class="qa-desc">Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account.</p>
						</div>
												<div id="qa1" class="qa">
							<div class="qa-hd">
								<p class="qa-name">What can I watch on Mufassa Sound?</p>
								<button class="qa-pls-mns">
									<span>+</span>
									<span>-</span>
								</button>
							</div>
							<p class="qa-desc">Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account.</p>
						</div>
												<div id="qa1" class="qa">
							<div class="qa-hd">
								<p class="qa-name">How does the FREE trial work?</p>
								<button class="qa-pls-mns">
									<span>+</span>
									<span>-</span>
								</button>
							</div>
							<p class="qa-desc">Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account. Ready to use? Enter your email to create or access your account.</p>
						</div>
					</div>
				</div>
			</div>
			</div>

			<div class="full-width-container reviews-container" id="reviews-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<div class="gradient-title">Customer reviews</div>
					</h2>
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
						<div class="add-review-inf">Your email address will not be published.<br> Required fields are marked <sup>*</sup></div>
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
							<input type="text" name="name" placeholder="Name *">
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Email <sup>*</sup></div> 
							<input type="text" name="email" placeholder="Email *">
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Your review <sup>*</sup></div> 
							<textarea name="review" placeholder="Your review *"></textarea>
						</div>
						<div class="add-review-row">
							<div class="add-review-label"></div> 
							<button class="btn-purp-grad btn-main-sale">Submit</button>
						</div>
					</form>
				</div>
			</div>


			<div class="full-width-container home-best-seller-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<div class="gradient-title">Related products</div>
					</h2>
				<div class="best-seller">

					<div class="prd best-seller-item">
								<div class="prd-label label-best">Best Seller</div>
								<div class="prd-label label-discount">-50%</div>
								<a class="prd-hd" href="#">
									<div class="inner" style="background-image: url('/assets/img/packs/bestsellerbg1-min.jpg');"></div>
									<img class="lzy_img" data-src="/assets/img/packs/best1pack.svg" alt="default box">
									<span class="prd-tit">Impacts Pack | 3600 elements</span>
									<span class="prd-tit-blue">Impacts Sound Effects</span>
								</a>

								<div class="prd-sndcld">
									<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
								</div>

								<div class="prd-ft">
									<div class="prd-ft-lt">
										<div class="prd-price">from <b>$36</b><span class="price-crossed">$72</span></div>
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

							<div class="prd best-seller-item">
								<div class="prd-label label-best">Best Seller</div>
								<a class="prd-hd" href="#">
								<div class="inner" style="background-image: url('/assets/img/packs/bestsellerbg2-min.jpg');"></div>
									<img class="lzy_img" data-src="/assets/img/packs/best2pack.svg" alt="default box">
									<span class="prd-tit">Industrial Pack | 3000 elements</span>
									<span class="prd-tit-blue">Industrial Sound Effects</span>
								</a>

								<div class="prd-sndcld">
									<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
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


							<div class="prd best-seller-item">
								<div class="prd-label label-best">Best Seller</div>
								<a class="prd-hd" href="#">
								<div class="inner mufasa" style="background-image: url('/assets/img/packs/bestsellerbg3.jpg');"></div>
									<img class="lzy_img" data-src="/assets/img/packs/pack2bundle.svg" alt="default box">
									<span class="prd-tit">Impact Pack | 3600 elements</span>
									<span class="prd-tit-blue">Impact Sound Effects</span>
								</a>

								<div class="prd-sndcld">
									<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
								</div>

								<div class="prd-ft">
									<div class="prd-ft-lt">
										<div class="prd-price">from <b>$200</b></div>
										<div class="prd-stars">
											<div class="stars"></div>
											<span class="prd-stars-cnt">87</span>
										</div>
										<div class="prd-seles">122Seles</div>
									</div>

									<div class="prd-ft-rt">
										<button class="btn-purp-grad prd-buy act-buy">ADD TO CART</button>
										<a href="#" class="prd-more">More details about pack</a>
									</div>
								</div>
							</div>

					</div>
				</div>
			</div>
		</section>

	</main>


	<div id="popup-tooltip-wrapper">
	<div id="popup-tooltip">
		<div id="popup-tooltip-head">
			<span id="popup-tooltip-head-text">
			DESIGNED, CONSTRUCTION KIT, BUNDLE - WHAT'S THE DIFFERENCE?
								</span>
			<div id="popup-tooltip-close">
				<i class="closesvg"></i>
			</div>
		</div>

		<div id="popup-tooltip-content">
			<div class="title-descr-block">
				<h3>CONSTRUCTION KIT – THE SOURCE SOUNDS</h3>
				A CONSTRUCTION KIT generally contains thousands of sounds as raw as possible and only as processed as needed for a specific topic, perfectly organized to make it easy for you to use them. Carefully selected, those sounds give you all the freedom and possibilities you need to design your own sounds within the given topic from scratch. For some topics it is difficult to provide recordings only, so you will find some pre-processed or synthesizer based sounds in those collections as well, but still only basic material, since we don’t want to offer it compressed to the maximum or similarly mutated. After all, the CONSTRUCTION KIT serves as such for ourselves, namely in the following process of creating the respective DESIGNED collection.
			</div>
			<div class="title-descr-block">
				<h3>DESIGNED – THE PRE-DESIGNED & READY-TO-USE SOUNDS</h3>
				The DESIGNED collections feature fully designed sounds which originate from the CONSTRUCTION KIT stock. The sounds are of a specific topic and ready to use: mixed, processed, compressed, mastered etc. They can be easily put into all kind of projects, for example trailers, commercials, movies, TV shows and so forth or used as in-game sounds. This collection provides a quick and easy workflow and you can still use those sounds as a basic and layer, stretch or otherwise adjust them to suit your specific needs.
			</div>
			<div class="title-descr-block">
				<h3>BUNDLE – THE MONEY-SAVER</h3>
				The bundle is the best option as it contains both, the DESIGNED and the CONSTRUCTION KIT at a reduced price.
			</div>
		</div>
	</div>
</div>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
