<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container stage-three-top-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title first-title">STEP 3/3</span><br>
                            <div class="gradient-title">add a payment method<br>
for after your free month</div>
				</h1>
			</div>
		</div>
	
    <div class="full-width-container stage-three-payment">
				<div class="inner-content-container">
				<div class="email-reminder-block">
						<p class="email-reminder-subtitle-top">Cancel anytime before <span><?=date('F d', strtotime('+1 month'))?></span> and you won’t be charged</p>
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
						<p class="email-reminder-subtitle">We’ll email you a reminder <span>three days</span> before your trial ends</p>
						<div class="payment-container">
							<form class="add-payment-method">
								<div class="payment-fields">
									<input class="card-number" type="number" placeholder="Cards Number"/>
									<input class="date" type="text" placeholder="MM / YY"/>
									<input class="cvc" type="number" placeholder="CVC"/>
								</div>
								<button class="btn-purp-grad" type="submit">add payment method and start membership</button>
							</form>
						</div>
					</div>
				</div>
			</div>	
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
