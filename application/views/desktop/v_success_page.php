<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>
	
		<div class="full-width-container thank-you-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title first-title">Thank you</span><br>
                            <span class="gradient-title">For your purchase</span>
				</h1>
                <div class="thank-you-top-descr">
					<div class="transaction-number">
							transaction #43543565
					</div>
					<div class="purchase-available">
						The purchase is already available for download in your<br> <a href="/account">personal account</a>
					</div>
					<div class="purchase-available-descr">
						Your downloads are valid for <span>30 days</span> from the purchase date.<br>
						Each file can be downloaded <span>up to 5 times</span>
					</div>
					<a href="#" class="watch-instruction">
							WATCH THE FULL DOWNLOAD INSTRUCTIONS
					</a>
				</div>
			</div>
		</div>

		<div class="full-width-container thank-you-order">
			<div class="inner-content-container">
				<h2 class="container-title secondary-title">
							<span class="gradient-title">Order details</span>
				</h2>

				<div class="order-details-container">
					<div class="checkout-total-container">
						<div class="cart-items">
							<div class="cart-item">
								<img class="lzy_img" data-src="/assets/img/packs/product-default.svg" width="70" height="56"/>
								<div class="product-name">
									<a href="#">Product name link</a>
								</div>
								<div class="product-actions-price">
									<div class="price">$360</div>
								</div>
							</div>
						</div>
						<div class="cart-subtotal-container">
							<div class="cart-subtotal-line">
								<div class="subtotal-text">Cart subtotal</div>
								<div class="subtotal-price">$360</div>
							</div>
							<div class="cart-subtotal-line">
								<div class="subtotal-text">Coupon</div>
								<div class="subtotal-price">-$20</div>
							</div>
							<div class="cart-subtotal-line">
								<div class="subtotal-text">Payment method</div>
								<div class="subtotal-price">PayPal</div>
							</div>
							<div class="cart-subtotal-line">
								<div class="subtotal-text">Date</div>
								<div class="subtotal-price">05/30/2021</div>
							</div>
						</div>
						<div class="cart-total-line">
								<div class="total-text">total</div>
								<div class="total-price">$340</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

		<div class="full-width-container thank-you-discount">
			<div class="inner-content-container">
				<h2 class="container-title secondary-title">
							<div class="gradient-title">30% discount<br>
								on next purchase</div>
				</h2>
				<div class="discount-top-text">
					In gratitude, we give you a coupon with a <span>30%</span> discount on your next purchase.  Use it until <span>05/31/2021</span>
				</div>
				<div class="subscription-form">
						<input type="text" placeholder="Coupon code" value="23dfGhjjkljh44dh9ff" readonly>
						<button class="btn-blue-grad subscription-form-btn">Download coupon</button>
				</div>
				<div class="discount-bottom-text">
				We have saved this coupon in your <a href="/account">account</a>
				</div>
			</div>
		</div>

		<div class="full-width-container thank-you-special-offer">
			<div class="inner-content-container">
				<h2 class="container-title secondary-title">
							<span class="gradient-title">Special offer just for you!</span>
				</h2>
				<div class="timer-title">The offer will end in</div>
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


							<div class="offer-products-slider-container">
								<div class="offer-products-slider">
										<!-- Swiper -->
										<div class="swiper-container offer-products-wrapper">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
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
													
												</div>
											<div class="swiper-slide">
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
													
											</div>
											<div class="swiper-slide">
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


		<div class="full-width-container thank-you-rate">
			<div class="inner-content-container">
				<h2 class="container-title secondary-title">
							<span class="gradient-title">rate our site</span>
				</h2>
				<div class="rate-top-text">
					The opinion of each customer is important to us. Please rate our site so that <span>we can make it better</span>
				</div>
					<form class="rating-blocks-form">
						<div class="rating-line">
							<div class="rating-line-text">
								Did you find the right product quickly?
							</div>
							<div class="rating-line-buttons">
								<button class="plus" type="button">+</button>
								<button class="minus" type="button">-</button>
							</div>
						</div>
						<div class="rating-line">
							<div class="rating-line-text">
								Was it easy to place your order?
							</div>
							<div class="rating-line-buttons">
								<button class="plus" type="button">+</button>
								<button class="minus" type="button">-</button>
							</div>
						</div>
						<div class="rating-line">
							<div class="rating-line-text">
								Do you plan to shop more on our website?
							</div>
							<div class="rating-line-buttons">
								<button class="plus" type="button">+</button>
								<button class="minus" type="button">-</button>
							</div>
						</div>
						<button type="submit" class="btn-blue-grad">Submit</button>
					</form>

			</div>
		</div>
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
