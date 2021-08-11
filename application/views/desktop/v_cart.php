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

				<?php if(!isset($cart) || isset($cart) && empty($cart['cartItems'])): ?>

					<h1 class="container-title main-title">
						<span class="gradient-title">EMPTY CART :(</span>
						<br><span class="gradient-title">ADD SOME STUFFS</span>
					</h1>

				<?php else: ?>

				<h1 class="container-title main-title">
							<span class="gradient-title">CART</span>
				</h1>
				<div class="cart-content-block">
					<div class="cart-items-block">

						<?php foreach($cart['cartItems'] as $item): ?>

						<?php

							$im = ($item['pv_img_box']) ? 
									('/assets/media/product_variant-img_box/'.$item['pv_img_box']) : 
									'/assets/img/packs/product-default.svg'; 
						?>

						<div class="cart-item">
							<img class="lzy_img" data-src="<? echo $im; ?>" width="70" height="56"/>
							<div class="product-name">
								<a href="/product/<?php echo $item['p_alias']; ?>"><?php echo $item['p_name']; ?></a>
							</div>
							<div class="product-actions-price">
								<div class="price">
									$<?php echo $item['pv_price']; ?>

									<?php if($item['pv_price_old'] > $item['pv_price']): ?>
										<span class="old-price">$<?php echo $item['pv_price_old']; ?></span>
									<?php endif; ?>
								</div>
								<i class="trash act-remove-cart-item" data-p='{"id":<?php echo $item['id']; ?>}'>
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#E23C7B" class="bi bi-trash" viewBox="0 0 16 16">
									<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
									<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									</svg>
								</i>
							</div>
						</div>

						<?php endforeach; ?>
					</div>

					<div class="promo-code-block">
						<h2 class="container-title secondary-title">
								<span class="gradient-title">GOT A PROMO CODE?</span>
						</h2>
						<form class="coupon-form">
							<input type="text" id="cart-coupon" placeholder="Coupon Code">
							<button type="subbmit" class="btn-blue-grad coupon-form-btn act-apply-coupon">Apply Coupon</button>
						</form>
					</div>

					<div class="cart-totals-block">
						<h2 class="container-title secondary-title">
								<span class="gradient-title">CART TOTALS</span>
						</h2>
						<div class="totals-lines">

							<div class="total-line subtotal">
								<div class="total-line-text">Subtotal (<span class="items-count"><?php echo $cart['cnt_items']; ?> items</span>)</div>
								<div class="subtotal-price">$<? echo $cart['subtotal_price']; ?></div>
							</div>

							<?php if($cart['id_coupon'] > 0): ?>

							<div class="total-line coupon">
								<div class="total-line-text">Coupon: <span class="coupon-code"><?php echo $cart['cp_code']; ?></span></div>
								<div class="coupon-actions">
									<?php echo ($cart['cp_is_percent'] == 1 ? '-' : '-$'); ?><?php echo $cart['cp_value']; ?><?php echo ($cart['cp_is_percent'] == 1 ? '%' : ''); ?>								
									<i class="trash act-remove-coupon">
										<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#E23C7B" class="bi bi-trash" viewBox="0 0 16 16">
										<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
										<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
										</svg>
									</i>
								</div>
							</div>

							<?php endif; ?>
							
							<div class="total-line total">
								<div class="total-line-text">
									Total 
									<?php if($cart['id_coupon'] > 0): ?><span class="with-code"> with Promo code</span><?php endif; ?>:
								</div>
								<div class="total-price">$<? echo $cart['total_price']; ?></div>
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

				<?php endif; ?>

			</div>
		</div>
		
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
