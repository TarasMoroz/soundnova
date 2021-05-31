<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>
	
		<div class="full-width-container checkout-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title">checkout</span>
				</h1>
				<div class="checkout-content">
					<div class="checkout-total-container">
						<div class="cart-item">
							<img class="lzy_img" data-src="/assets/img/packs/product-default.svg" width="70" height="56"/>
							<div class="product-name">
								<a href="#">Product name link</a>
							</div>
							<div class="product-actions-price">
								<div class="price">$360</div>
							</div>
						</div>
						<div class="cart-item">
							<img class="lzy_img" data-src="/assets/img/packs/construction-default-min.svg" width="70" height="56"/>
							<div class="product-name">
								<a href="#">Product name link</a>
							</div>
							<div class="product-actions-price">
								<div class="price">$20 <span class="old-price">$40</span></div>
							</div>
						</div>
						<div class="cart-total-line">
								<div class="total-text">total</div>
								<div class="total-price">$380</div>
						</div>
					</div>

					<div class="login-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title">Account information</span>
						</h2>
						<div class="login-text">
								Have an account SoundNova?<br>
								<a href="/login">Log in  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="16px" viewBox="0 0 24 24" width="16px" fill="#1dd1e5"><g><rect fill="none" height="24" width="24"/></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"/></g></svg></a>
								  or  <a href="/register">Quick registration  <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="16px" viewBox="0 0 24 24" width="16px" fill="#1dd1e5"><g><rect fill="none" height="24" width="24"/></g><g><path d="M20,9V6h-2v3h-3v2h3v3h2v-3h3V9H20z M9,12c2.21,0,4-1.79,4-4c0-2.21-1.79-4-4-4S5,5.79,5,8C5,10.21,6.79,12,9,12z M9,6 c1.1,0,2,0.9,2,2c0,1.1-0.9,2-2,2S7,9.1,7,8C7,6.9,7.9,6,9,6z M15.39,14.56C13.71,13.7,11.53,13,9,13c-2.53,0-4.71,0.7-6.39,1.56 C1.61,15.07,1,16.1,1,17.22V20h16v-2.78C17,16.1,16.39,15.07,15.39,14.56z M15,18H3v-0.78c0-0.38,0.2-0.72,0.52-0.88 C4.71,15.73,6.63,15,9,15c2.37,0,4.29,0.73,5.48,1.34C14.8,16.5,15,16.84,15,17.22V18z"/></g></svg></a>
						</div>
						<div class="login-buttons-container">
							<div class="login-buttons-text">
								You can also continue with account <span>Facebook / Google</span>
							</div>
							<div class="login-buttons">
									<button class="facebook-btn">Continue with <span>Facebook</span></button>
									<button class="google-btn">Continue with <span>Google</span></button>
								</div>
						</div>
					</div>

					<div class="payment-choice-container">
						<h2 class="container-title secondary-title">
							<span class="gradient-title">Payment information</span>
						</h2>
						<div class="payment-options-container">
								<div class="payment-tabs-headers">
										<ul id="payment-tabs" class="payment-tabs">
											<li>
												<a class="payment-tab"><span class="checkbox"></span> Credit card 
												<svg xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 4H4c-1.11 0-1.99.89-1.99 2L2 18c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V6c0-1.11-.89-2-2-2zm0 14H4v-6h16v6zm0-10H4V6h16v2z"/></svg>
												</a>
											</li>
											<li>
												<a class="payment-tab"><span class="checkbox"></span>PayPal 
												<svg xmlns="http://www.w3.org/2000/svg" fill="#fff" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="15" height="15" viewBox="0 0 435.505 435.505" style="enable-background:new 0 0 435.505 435.505;" xml:space="preserve">
													<g>
														<g>
															<path d="M403.496,101.917c-4.104-5.073-8.877-9.705-14.166-13.839c0.707,13.117-0.508,27.092-3.668,41.884    c-8.627,40.413-29.256,74.754-59.656,99.304c-30.375,24.533-68.305,37.502-109.686,37.502h-60.344l-19.533,91.512    c-3.836,17.959-19.943,30.99-38.303,30.99H70.938l-4.898,22.484c-1.258,5.79,0.17,11.839,3.887,16.453    c3.715,4.614,9.324,7.298,15.25,7.298h66.498c9.24,0,17.225-6.459,19.152-15.495L193.667,313h76.188    c36.854,0,70.527-11.464,97.384-33.152c26.869-21.697,45.129-52.186,52.807-88.162    C427.822,155.309,422.253,125.106,403.496,101.917z"/>
															<path d="M117.292,354.191l22.84-107.008h76.188c36.852,0,70.527-11.465,97.383-33.154c26.867-21.697,45.129-52.186,52.809-88.161    c7.773-36.378,2.207-66.58-16.553-89.769C331.952,13.832,301.17,0,269.633,0H103.639c-9.209,0-17.174,6.417-19.135,15.414    L12.505,345.938c-1.26,5.789,0.168,11.838,3.887,16.453c3.713,4.613,9.32,7.296,15.248,7.296h66.5    C107.38,369.687,115.36,363.229,117.292,354.191z M178.235,75.291h52.229c12.287,0,23.274,5.149,30.145,14.129    c7.297,9.539,9.431,22.729,5.853,36.188c-0.047,0.171-0.088,0.342-0.131,0.516c-6.57,27.73-33.892,50.291-60.898,50.291h-50.05    L178.235,75.291z"/>
														</g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													<g>
													</g>
													</svg>
												</a>
											</li>
											<li>
												<a class="payment-tab google"><span class="checkbox"></span>
												<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 256 262" preserveAspectRatio="xMidYMid"><path d="M255.878 133.451c0-10.734-.871-18.567-2.756-26.69H130.55v48.448h71.947c-1.45 12.04-9.283 30.172-26.69 42.356l-.244 1.622 38.755 30.023 2.685.268c24.659-22.774 38.875-56.282 38.875-96.027" fill="#fff"/><path d="M130.55 261.1c35.248 0 64.839-11.605 86.453-31.622l-41.196-31.913c-11.024 7.688-25.82 13.055-45.257 13.055-34.523 0-63.824-22.773-74.269-54.25l-1.531.13-40.298 31.187-.527 1.465C35.393 231.798 79.49 261.1 130.55 261.1" fill="#fff"/><path d="M56.281 156.37c-2.756-8.123-4.351-16.827-4.351-25.82 0-8.994 1.595-17.697 4.206-25.82l-.073-1.73L15.26 71.312l-1.335.635C5.077 89.644 0 109.517 0 130.55s5.077 40.905 13.925 58.602l42.356-32.782" fill="#fff"/><path d="M130.55 50.479c24.514 0 41.05 10.589 50.479 19.438l36.844-35.974C195.245 12.91 165.798 0 130.55 0 79.49 0 35.393 29.301 13.925 71.947l42.211 32.783c10.59-31.477 39.891-54.251 74.414-54.251" fill="#fff"/></svg>
												Pay</a>
											</li>
											<li>
												<a class="payment-tab apple"><span class="checkbox"></span>
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#fff" width="15" height="15" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512.003 512.003" style="enable-background:new 0 0 512.003 512.003;" xml:space="preserve">
														<g>
															<g>
																<path d="M351.98,0c-27.296,1.888-59.2,19.36-77.792,42.112c-16.96,20.64-30.912,51.296-25.472,81.088    c29.824,0.928,60.64-16.96,78.496-40.096C343.916,61.568,356.556,31.104,351.98,0z"/>
															</g>
														</g>
														<g>
															<g>
																<path d="M459.852,171.776c-26.208-32.864-63.04-51.936-97.824-51.936c-45.92,0-65.344,21.984-97.248,21.984    c-32.896,0-57.888-21.92-97.6-21.92c-39.008,0-80.544,23.84-106.88,64.608c-37.024,57.408-30.688,165.344,29.312,257.28    c21.472,32.896,50.144,69.888,87.648,70.208c33.376,0.32,42.784-21.408,88-21.632c45.216-0.256,53.792,21.92,87.104,21.568    c37.536-0.288,67.776-41.28,89.248-74.176c15.392-23.584,21.12-35.456,33.056-62.08    C387.852,342.624,373.932,219.168,459.852,171.776z"/>
															</g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														<g>
														</g>
														</svg>
												Pay</a>
											</li>
										</ul>
								</div>
								<div class="payment-tab-container" style="display:none">
									<div class="credit-card-form">
										<input type="text" placeholder="Card number">
										<button class="btn-purp-grad subscription-form-btn">Place order</button>
									</div>
								</div>
								<div class="payment-tab-container" style="display:none">
								<div class="credit-card-form">
										<input type="text" placeholder="Paypal email">
										<button class="btn-purp-grad subscription-form-btn">Place order</button>
									</div>
								</div>
								<div class="payment-tab-container" style="display:none">
								<div class="credit-card-form">
										<input type="text" placeholder="Google pay">
										<button class="btn-purp-grad subscription-form-btn">Place order</button>
									</div>
								</div>
								<div class="payment-tab-container" style="display:none">
								<div class="credit-card-form">
										<input type="text" placeholder="Apple pay">
										<button class="btn-purp-grad subscription-form-btn">Place order</button>
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
