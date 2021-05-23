<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>
	
		<div class="full-width-container cart-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title">CART</span>
				</h1>
				<div class="cart-content-block">
					<div class="cart-items-block">
						<div class="cart-item">
							<img class="lzy_img" data-src="/assets/img/packs/product-default.svg" width="70" height="56"/>
							<div class="product-name">
								<a href="#">Product name link</a>
							</div>
							<div class="product-actions-price">
								<div class="price">$360</div>
								<i class="trash">
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E23C7B" class="bi bi-trash" viewBox="0 0 16 16">
									<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
									<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									</svg>
								</i>
							</div>
						</div>
						<div class="cart-item">
							<img class="lzy_img" data-src="/assets/img/packs/construction-default-min.svg" width="70" height="56"/>
							<div class="product-name">
								<a href="#">Product name link</a>
							</div>
							<div class="product-actions-price">
								<div class="price">$20 <span class="old-price">$40</span></div>
								<i class="trash">
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E23C7B" class="bi bi-trash" viewBox="0 0 16 16">
									<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
									<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									</svg>
								</i>
							</div>
						</div>
					</div>

					<div class="promo-code-block">
						<h2 class="container-title secondary-title">
								<span class="gradient-title">GOT A PROMO CODE?</span>
						</h2>
						<div class="coupon-form">
							<input type="text" placeholder="Coupon Code">
							<button class="btn-blue-grad coupon-form-btn">Apply Coupon</button>
						</div>
					</div>

					<div class="cart-totals-block">
						<h2 class="container-title secondary-title">
								<span class="gradient-title">CART TOTALS</span>
						</h2>
						<div class="totals-lines">
							<div class="total-line subtotal">
								<div class="total-line-text">Subtotal (<span class="items-count">2 items</span>)</div>
								<div class="subtotal-price">$400</div>
							</div>
							<div class="total-line coupon">
								<div class="total-line-text">Coupon: <span class="coupon-code">3fdf565h</span></div>
								<div class="coupon-actions">-$20 								
									<i class="trash">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#E23C7B" class="bi bi-trash" viewBox="0 0 16 16">
										<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
										<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
										</svg>
									</i>
								</div>
							</div>
							<div class="total-line total">
								<div class="total-line-text">Total <span class="with-code"> with Promo code</span>:</div>
								<div class="total-price">$380</div>
							</div>
						</div>
						<div class="total-submit">
						<button class="btn-purp-grad coupon-form-btn">Proceed to checkout</button>
						</div>
					</div>

					<div class="benefits-container">
							<div class="benefit-item">
								<img class="lzy_img" data-src="/assets/img/icons/yes-icon.svg" width="45" height="35"/>
								<div class="benefit-text">
									<div class="title">
										Satisfaction guaranteed
									</div>
									<div class="descr">
										60-day money back guaranteed
									</div>
								</div>
							</div>
							<div class="benefit-item">
								<img class="lzy_img" data-src="/assets/img/icons/shield-icon.svg" width="45" height="35"/>
								<div class="benefit-text">
									<div class="title">
									Safe & secure checkout
									</div>
									<div class="descr">
									128-bit SSL encrypted payment
									</div>
								</div>
							</div>
							<div class="benefit-item">
								<img class="lzy_img" data-src="/assets/img/icons/cloud-icon.svg" width="45" height="35"/>
								<div class="benefit-text">
									<div class="title">
										High speed downloads
									</div>
									<div class="descr">
										Downloads are available immidiately
									</div>
								</div>
							</div>
					</div>

				</div>
			</div>
		</div>
		
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
