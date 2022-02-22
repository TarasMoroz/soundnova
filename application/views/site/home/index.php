<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main class="main-content home-page">
  
				<!-- main indexed content -->
		<section id="main" class="main-content">

			<!--sound  effects category-->
			<div class="full-width-container home-first-container">

			<?php // $this->load->view('desktop/animation_wave_3d_dots_bg'); ?>
			<?php //$this->load->view('desktop/animation_wave_equalizer_bg'); ?>
			<?php $this->load->view('desktop/animation_wave_2b_bg'); ?>

				<div class="inner-content-container">
				<h1 class="container-title main-title">
						<span class="gradient-title">Sound effects library</span>
					</h1>
					<div class="main-subtitle">
						<div class="title">Professional sound effects</div>
						<div class="sub-title">for games, movies, cartoons, TV-shows and more</div>
					</div>
					<p class="main-subtitle desktop">Professional sfx for games, movies, trailers, cartoons, tv-shows & any your projects</p>
					<div class="summer-sale-block-mobile">
							<? $this->load->view('modules/sale-timer', [
								'type' => 'normal',
								'title' => 'BLACK FRIDAY'
							]); ?>
							<div class="main-pack-block">
								<div class="bundle-discount">-30%</div>
								<div class="bundle-shadow"></div>
								<img width="342" class="lzy_img" data-src="../assets/img/packs/main-pack-min.svg"/>
								<button class="bundle-play video-open" data-code="Zo6Gu8RUExM">
									<div class="inner">
										<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
									</div>
								</button>
							</div>
							<div class="main-pack-slider-container">
								<div class="main-pack-slider-heading">
								ultimate bundle included 12 packages <span> you save $550</span>
								</div>
								<div class="main-pack-slider">
										<!-- Swiper -->
										<div class="swiper-container main-pack-wrapper">
											<div class="swiper-wrapper">
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
										</div>
													<!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
								</div>
							</div>
						</div>
							<div class="main-pack-slider-texts">
								<div class="main-pack-slider-texts-col">
									<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> -->
									<span>100% royalty<br>FREE</span>
								</div>
								<div class="main-pack-slider-texts-col">
									<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> -->
									<span>30 days moneyback<br>GUARANTEE</span>
								</div>
								<div class="main-pack-slider-texts-col">
									<!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg> -->
									<span>Professionally<br>mastered</span>
								</div>
							</div>

							<div class="buy-buttons-container grid-two-one">
							<a href="#" class="btn-purp-grad btn-main-sale">BUY OUT $299 <s>$1000</s></a>
							<a href="#" class="btn-blue-grad btn-main-sale">TRY 30 DAYS FREE</a>
							<a href="#" class="btn-blue-border btn-main-sale">ABOUT BUNDLE</a>
							</div>
					</div>
				</div>
				<div class="summer-sale-desktop">
					<div class="summer-sale-left-col">
					<div class="main-pack-block">

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

								<div class="bundle-discount">-30%</div>
								<div class="bundle-shadow"></div>
								<img width="342" class="lzy_img" data-src="../assets/img/packs/main-pack-min.svg"/>
								<button class="bundle-play video-open" data-code="Zo6Gu8RUExM">
									<div class="inner">
										<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
									</div>
								</button>
					</div>
					<div class="main-pack-slider-container">
								<div class="main-pack-slider-heading">
								ultimate bundle included 12 packages <span> you save $550</span>
								</div>
								<div class="main-pack-slider">
										<!-- Swiper -->
										<div class="swiper-container main-pack-wrapper">
											<div class="swiper-wrapper">
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-1.svg"/>Product name</a></div>
											<div class="swiper-slide"><a href="#"><img class="lzy_img" data-src="../assets/img/packs/packs-bundle-2.svg"/>Product name</a></div>
											</div>
													<!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
										</div>
								</div>
							</div>
							<div class="main-pack-slider-texts tablet">
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
					</div>
					<div class="summer-sale-right-col">
					<div class="summer-sale-title"><img class="lzy_img" data-src="/assets/img/summer_sale.svg" alt="summer-sale"/></div>
							<p class="summer-sale-subtitle">get everything we’ve ever created</p>
					<div class="buy-buttons-container">
							<a href="#" class="btn-purp-grad btn-main-sale">BUY OUT $299 <s>$1000</s></a>
							<a href="#" class="btn-blue-grad btn-main-sale">TRY 30 DAYS FREE</a>
							<a href="#" class="btn-blue-border btn-main-sale">ABOUT BUNDLE</a>
							</div>
							<div class="timer-title">sale will end in</div>
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
			<div class="full-width-container home-categories-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title effects-category-title">
						<span class="gradient-title">Sound effects category</span>
					</h2>
					<div class="home-categories-links">

						<?php foreach($list_categories as $key => $item): ?>

						<a href="/catalog/<?php echo $item['alias']; ?>" style="background-image: url('/assets/media/category/<?php echo '165_'.$item['img']; ?>');">
							<span class="inner"></span>
							<span class="txt"><?php echo $item['name']; ?></span>
							<div class='sound-wave-bars'>
								<?php 
									for ($i=0; $i < 20; $i++) { 
										echo "<div class='bar'></div>";
									}
								?>
							</div>
						</a>

						<?php endforeach; ?>
					</div>
				</div>
			</div>



			<div class="full-width-container home-subscription-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<span class="gradient-title">You can try</span><br>
								<span class="gradient-title">free monthly subscription</span>
					</h2>
					<h3 class="secondary-subtitle">and get full access to the basic sound effects library</h3>
					<div class="email-reminder-block">
						<p class="email-reminder-subtitle">We’ll email you a reminder three days before your trial ends</p>
							<div class="subscription-timeline">
								<div class="line">
									<div class="inner-line line1">
										<div class="line-text">
											Reminder 3 days <i class="mailsvg"></i>
										</div>
									</div>

									<div class="inner-line line2"></div>

									<div class="date-label date1"><?=date('F d', strtotime('+1 month'))?></div>
									<div class="date-label date2"><?=date('F d', strtotime('+2 month'))?></div>

									<div class="text-label text1">FREE 30 days</div>
									<div class="text-label text2">First bill</div>
								</div>
						</div>
						<p class="email-reminder-subtitle">Cancel anytime before <span><?=date('F d', strtotime('+1 month'))?></span> and you won’t be charged</p>
						

						<div class="subscription-form">
							<input type="text" placeholder="Email address">
							<button class="btn-blue-grad subscription-form-btn">Try 30 days FREE</button>
						</div>

						<p class="subscription-form-yellow-text">Ready to use? Enter your email to create or access your account.</p>

					</div>
				</div>
			</div>


			<div class="full-width-container home-best-seller-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<span class="gradient-title">Best sellers</span>
					</h2>
					<div class="best-seller">

						<? $this->load->view('modules/product-card', [
							'productId' => 0,
							'productName' => 'Impacts Pack | 3600 elements',
							'productImg' => '/assets/img/packs/best1pack.svg',
							'backgroundImg' => '/assets/img/packs/bestsellerbg1-min.jpg',
							'label' => 'Best Seller',
							'price' => 80,
							'discount' => 50,
							'salesCount' => 336,
							'starsCount' => 146,
						]); ?>

						<? $this->load->view('modules/product-card', [
							'productId' => 0,
							'productName' => 'Industrial Pack | 3000 elements',
							'productImg' => '/assets/img/packs/best2pack.svg',
							'backgroundImg' => '/assets/img/packs/bestsellerbg2-min.jpg',
							'label' => 'Best Seller',
							'price' => 36,
							'discount' => 0,
							'salesCount' => 335,
							'starsCount' => 146,
						]); ?>

						<? $this->load->view('modules/product-card', [
							'productId' => 0,
							'productName' => 'Impact Pack | 3600 elements',
							'productImg' => '/assets/img/packs/pack2bundle.svg',
							'backgroundImg' => '/assets/img/packs/bestsellerbg3.jpg',
							'label' => 'Best Seller',
							'price' => 200,
							'discount' => 0,
							'salesCount' => 122,
							'starsCount' => 87,
						]); ?>

					</div>
				</div>
			</div>

			<div class="full-width-container home-new-products-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<span class="gradient-title">New products</span>
					</h2>
					<div class="new-products-slider-container">
								<div class="new-products-slider">
										<!-- Swiper -->
										<div class="swiper-container new-products-wrapper">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="new-product-inner">
														<div class="new-product-title">Technology Pack</div>
														<div class="new-product-image">
														<img  src="/assets/img/packs/new-product.svg">
														</div>
														<div class="new-product-actions">
														<? $this->load->view('modules/player', [
															'key' => 'file_details',
															'buy_button' => false,
															'artist_name' => false,
															'track_title' => false,
															'sound' => [
																'id' => 0
															]
														]); ?>
														<div class="buy-buttons-container">
															<a href="#" class="btn-purp-grad btn-new-product">ADD TO CART <span> $59</span></a>
															<a href="#" class="btn-blue-border btn-new-product">LEARN MORE</a>
														</div>
														</div>
													</div>

													<div class="new-product-inner desktop">
														<div class="new-product-image">
														<img src="/assets/img/packs/new-product.svg">
														<button class="bundle-play video-open" data-code="Zo6Gu8RUExM">
															<div class="inner">
																<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
															</div>
														</button>
														</div>
														<div class="new-product-actions">
														<div class="new-product-title">Technology Pack</div>
														<? $this->load->view('modules/player', [
															'key' => 'file_details',
															'buy_button' => false,
															'artist_name' => false,
															'track_title' => false,
															'sound' => [
																'id' => 0
															]
														]); ?>
														<div class="buy-buttons-container">
															<a href="#" class="btn-purp-grad btn-new-product">ADD TO CART <span> $59</span></a>
															<a href="#" class="btn-blue-border btn-new-product">LEARN MORE</a>
														</div>
														</div>
													</div>
													
												</div>
												<div class="swiper-slide">
													<div class="new-product-inner">
														<div class="new-product-title">Technology Pack</div>
														<div class="new-product-image">
														<img src="/assets/img/packs/new-product.svg">
														</div>
														<div class="new-product-actions">
														<? $this->load->view('modules/player', [
															'key' => 'file_details',
															'buy_button' => false,
															'artist_name' => false,
															'track_title' => false,
															'sound' => [
																'id' => 0
															]
														]); ?>
														<div class="buy-buttons-container">
															<a href="#" class="btn-purp-grad btn-new-product">ADD TO CART <span> $59</span></a>
															<a href="#" class="btn-blue-border btn-new-product">LEARN MORE</a>
														</div>
														</div>
													</div>

													<div class="new-product-inner desktop">
														<div class="new-product-image">
														<img src="/assets/img/packs/new-product.svg">
														</div>
														<div class="new-product-actions">
														<div class="new-product-title">Technology Pack</div>
														<? $this->load->view('modules/player', [
															'key' => 'file_details',
															'buy_button' => false,
															'artist_name' => false,
															'track_title' => false,
															'sound' => [
																'id' => 0
															]
														]); ?>
														<div class="buy-buttons-container">
															<a href="#" class="btn-purp-grad btn-new-product">ADD TO CART <span> $59</span></a>
															<a href="#" class="btn-blue-border btn-new-product">LEARN MORE</a>
														</div>
														</div>
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
			</div>


			<div class="full-width-container home-partners-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<span class="gradient-title desktop-title">THESE COMPANIES TRUST</span><br>
						<span class="gradient-title mobile-title">IN soundnova LIBRARY </span><br>
						<span class="gradient-title mobile-title">SOUND EFFECTS</span>
						<span class="gradient-title desktop-title-last">IN soundnova LIBRARY SOUND EFFECTS</span>
					</h2>
						<div class="home-partners-block">
							<div class="clients">
									<img class="lzy_img" data-src="/assets/img/clients/partner1.svg" alt="client">
									<img class="lzy_img" data-src="/assets/img/clients/partner2.svg" alt="client">
									<img class="lzy_img" data-src="/assets/img/clients/partner4.svg" alt="client">
									<img class="lzy_img" data-src="/assets/img/clients/partner3.svg" alt="client">
									
							</div>
							<a href="#" class="more-clients">More clients</a>								
						</div>
				</div>
			</div>


			<div class="full-width-container testimonials-container">
				<div class="inner-content-container">
					<h2 class="container-title secondary-title">
						<span class="gradient-title">WHAT OUR CLIENTS SAY ABOUT</span><br>
						<span class="gradient-title">soundnova LIBRARY SOUND FX</span>
					</h2>
						<div class="testimonials-block">

						<?php if(count($video_reviews) > 0): ?>

						<!-- Swiper, video reviews -->
						<div class="swiper-container video-testimonials">
							<div class="swiper-wrapper">

								<?php foreach ($video_reviews as $key => $item): ?>

								<div class="swiper-slide">
									<div class="testimonial-inner">
										<div class="review-item">
											<div class="review-vid" style="background-image: url('/assets/media/video_preview/360_<?php echo $item['v_img_preview']; ?>');">
												<button class="bundle-play video-open" data-code="<?php echo $item['v_src']; ?>">
													<div class="inner">
														<i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
													</div>
												</button>
											</div>

											<div class="review-name"> <?php echo $item['person_name']; ?> </div>
											<div class="review-sub"> <?php echo $item['person_position']; ?> </div>
										</div>
									</div>
								</div>

								<?php endforeach; ?>
							</div>		
							
							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
						<?php endif; ?>

						

						<?php if(count($text_reviews) > 0): ?>
						<!-- Swiper, text reviews -->
						<div class="swiper-container testimonials-video-wrapper-mobile">
							<div class="swiper-wrapper">
								<?php foreach ($text_reviews as $key => $item): ?>

								<div class="swiper-slide">
									<div class="testimonial-inner">

											<div class="review-item">
												<div class="review-text">
													<h3> <?php echo $item['title']; ?> </h3>
													
													<p><?php echo $item['description']; ?></p>
												</div>

												<div class="review-name"> <?php echo $item['person_name']; ?> </div>
												<div class="review-sub"> <?php echo $item['person_position']; ?> </div>
											</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="testimonial-inner">

											<div class="review-item">
												<div class="review-text">
													<h3> <?php echo $item['title']; ?> </h3>
													
													<p><?php echo $item['description']; ?></p>
												</div>

												<div class="review-name"> <?php echo $item['person_name']; ?> </div>
												<div class="review-sub"> <?php echo $item['person_position']; ?> </div>
											</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="testimonial-inner">

											<div class="review-item">
												<div class="review-text">
													<h3> <?php echo $item['title']; ?> </h3>
													
													<p><?php echo $item['description']; ?></p>
												</div>

												<div class="review-name"> <?php echo $item['person_name']; ?> </div>
												<div class="review-sub"> <?php echo $item['person_position']; ?> </div>
											</div>
									</div>
								</div>

								<?php endforeach; ?>
							</div>		
							
							<!-- Add Arrows -->
							<div class="swiper-button-next"></div>
							<div class="swiper-button-prev"></div>
						</div>
						<?php endif; ?>
				</div>
			</div>
			</div>


			<div class="full-width-container home-faq-container">
					<div class="inner-content-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title">Frequently Asked</span><br>
							<span class="gradient-title">Questions</span>
							<span class="gradient-title desktop">Frequently Asked Questions</span>
						</h2>
						<div class="faq-block">
						<div id="faq">
								
							<?php foreach ($faq_items as $key => $item): ?>

							<div id="qa<?php echo $key; ?>" class="qa">
								<div class="qa-hd">
									<p class="qa-name"> <?php echo $item['name']; ?> </p>
									<button class="qa-pls-mns">
										<span>+</span>
										<span>-</span>
									</button>
								</div>
								<div class="qa-desc"> <?php echo $item['desc']; ?> </div>
							</div>

							<?php endforeach; ?>
						</div>
						
						<div class="subscription-form">
								<input type="text" placeholder="Email address">
								<button class="btn-blue-grad subscription-form-btn">Try 30 days FREE</button>
							</div>

							<p class="subscription-form-yellow-text">Ready to use? Enter your email to create or access your account.</p>
					</div>
				</div>
			</div>

		</section>

  </main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>