<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>
	
		<? //$this->load->view('desktop/blocks/v_aside', ['fix' => true]); ?>

		<?//=$v_aside?>
		
		<!-- main indexed content -->
		<section id="main" class="content">

			<div id="main1">
				<div class="inner1170">
					<h1 class="grad main">Sound effects library</h1>

					<p class="main_sub_h1">Professional sound effects for games, movies, trailers, cartoons, tv-shows & any your projects</p>
					<!-- <div class="main_sub2_h1">FOR GAMES, MOVIES, CARTOONS, TV-SHOWS AND MORE</div> -->

					<div class="main-bundle">
						<div class="bundle-left">
							<div class="bundle-sale">
								<div class="bundle-sale-adv">
									<ul>
										<li><i class="checksvg"></i> 100% royalty free</li>
										<li><i class="checksvg"></i> professionaly mastered</li>
										<li><i class="checksvg"></i> 30 days moneyback <br>GUARANTEE</li>
									</ul>
								</div>

								<div class="bundle-discount">-70%</div>

								<div class="bundle-shadow"></div>
								<img src="/assets/img/topbundle.png" alt="bundle name">

								<button class="bundle-play">
									<div class="inner">
										<i class="playsvg"></i>
									</div>
								</button>
							</div>	
						</div>

						<div class="bundle-right">
							<div class="bundle-form">
								<div class="bundle-right-text">BLACK FRIDAY</div>
								<p class="bundle-right-subtext">get everything we've ever created</p>
								<button class="btn-purp-grad btn-main-sale">BUY OUT $299 <s>$1000</s></button>
								<button class="btn-blue-grad btn-main-sale">TRY 30 DAYS FREE</button>
								<button class="btn-blue btn-main-sale">ABOUT BUNDLE</button>
								<div class="timer">
									<p class="timer-text">SALE WILL END IN</p>
									<div class="timer-counter">
										<div class="timer-counter-item">
											<b>02</b>
											<span>days</span>
										</div>
										<div class="timer-counter-item">
											<b>23</b>
											<span>hours</span>
										</div>
										<div class="timer-counter-item">
											<b>45</b>
											<span>mins</span>
										</div>
										<div class="timer-counter-item">
											<b>20</b>
											<span>sec</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div id="main2">
				<div class="inner1170">
					<h2 class="grad main">Sound effects category</h2>

					<div class="sound-cats">
						<? $cats = [
							'Animals', 'Audiences <br>& Crowds', 'Cartoon', 'Cinematic', 'City', 'Destruction',	
							'Fantasy <br>& Medieval', 'Foley', 'Futuristic', 'Game', 'Horror', 'Human',	
							'Impacts', 'Industrial', 'Interface', 'Multimedia', 'Nature', 'Public Places', 
							'Science Fiction', 'Technology', 'Transportation', 'Transitions <br>& Movements', 'UI, Buttons, <br>& Menus', 'Weapons <br>& Warfare' 
						]; ?>
						<? for ($i=0; $i <= 23; $i++): ?>
							<a href="#" style="background-image: url('/assets/img/cats/<?=$i?>.jpg');">
								<span class="inner"></span>
								<span class="txt"><?=$cats[$i]?></span>
							</a>
						<? endfor; ?>
					</div>
				</div>
			</div>

			<div id="main3">
				<div class="inner1170">
					<h2 class="grad main">You can try <br>free monthly subscription</h2>
					<p class="main_sub_h1">and get full access to the basic sound effects library</p>
					<p class="main_sub2_h1">We’ll email you a reminder three days before your trial ends</p>

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

							<div class="text-label text1">Free 30 days</div>
							<div class="text-label text2">First bill</div>
						</div>
					</div>

					<p class="main_sub2_h1">Cancel anytime before <b><?=date('F d', strtotime('+1 month'))?></b> and you won’t be charged</p>

					<div class="subscription-form">
						<input type="text" placeholder="Email address">
						<button class="btn-blue-grad subscription-form-btn">Try 30 days FREE</button>
					</div>

					<p class="main_sub_text_yellow">Ready to use? Enter your email to create or access your account.</p>
				</div>
			</div>

			<div id="main4">
				<div class="inner1170">
					<h2 class="grad main">Best sellers</h2>

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

			<div id="main5">
				<div class="inner1170">
					<h2 class="grad main">New products</h2>

					<div class="new-products">
						<div class="new-products-slider">

							<? for ($i=1; $i <= 4; $i++): ?>
							<div class="new-product-item" data-slide="<?=$i?>">
								<div class="new-product-left">
									
									<img src="/assets/img/topbundle.png" alt="bundle name">

									<button class="bundle-play">
										<div class="inner">
											<i class="playsvg"></i>
										</div>
									</button>
								</div>

								<div class="new-product-right">
									<div class="new-product-title">TECHNOLOGY PACK</div>
									<div class="new-product-adv">
										<ul>
											<li><i class="checksvg"></i> 100% royalty free</li>
											<li><i class="checksvg"></i> professionaly mastered</li>
											<li><i class="checksvg"></i> 30 days moneyback GUARANTEE</li>
										</ul>
									</div>
									<button class="btn-purp-grad btn-main-sale">ADD TO CART $59</button>
									<button class="btn-blue btn-main-sale">LEARN MORE</button>
								</div>
							</div>
							<? endfor; ?>
						</div>

						<div class="new-products-nav">
							<? for ($i=1; $i <= 4; $i++): ?>
								<button data-slide="<?=$i?>" <? if($i == 1): ?>class="act"<? endif;?>></button>
							<? endfor; ?>
						</div>
					</div>
				</div>
			</div>

			<div id="main6">
				<div class="inner1170">
					<h2 class="grad main">THESE COMPANIES TRUST <br>IN MUFASSA LIBRARY SOUND EFFECTS</h2>

					<div class="clients">
						<? for ($i=1; $i <= 4; $i++): ?>
						<img src="/assets/img/clients/<?=$i?>.png" alt="client">
						<? endfor; ?>
					</div>

					<a href="#" class="more-clients">More clients</a>
				</div>
			</div>

			<div id="main7">
				<div class="inner1170">
					<h2 class="grad main">WHAT OUR CLIENTS SAY ABOUT <br>MUFASSA LIBRARY SOUND FX</h2>

					<div class="reviews">

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

								<div class="review-name">Joshua</div>
								<div class="review-sub">CEO Nintendo</div>
							</div>
							<? endfor; ?>
						</div>
					</div>

					<div class="reviews">
						<div class="reviews-text">
							<? for ($i=1; $i <= 3; $i++): ?>
							<div class="review-item" data-slide="<?=$i?>">
								<div class="review-text">
									<h3>rover, VW, ford, honda, bmw, audi</h3>
									<p>Lorem ipsum <a href="#">dolor sit amet</a>, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>

								<div class="review-name">Joshua</div>
								<div class="review-sub">Sound Designer</div>
							</div>
							<? endfor; ?>

							<div class="arrow next-arrow"><i>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</i></div>

							<div class="arrow prev-arrow"><i>
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M6 9l6 6 6-6" stroke="#f9eb0e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
							</i></div>
							
						</div>
					</div>

					<a href="#" class="more-reviews">See all reviews</a>
				</div>
			</div>

			<div id="main8">
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

					<div class="subscription-form">
						<input type="text" placeholder="Email address">
						<button class="btn-blue-grad subscription-form-btn">Try 30 days FREE</button>
					</div>

					<p class="main_sub_text_yellow">Ready to use? Enter your email to create or access your account.</p>
				</div>
			</div>
		</section>

		<!-- rest less important content -->

	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
