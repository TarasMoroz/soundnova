<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container stage-one-top-container join">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title first-title">STEP 1/3</span><br>
                            <div class="gradient-title">choose your<br> subscription plan</div>
				</h1>
                <div class="sbscr-timeline-title">
						DISCOUNTS FOR A LONG SUBSCRIPTION: <span>11%</span>
					</div>
					<div class="subscription-plan-timeline">
									<div class="line">
										<div class="inner-line"></div>

										<div class="date-label date1">1 month</div>
										<div class="date-label date2">3 month</div>
										<div class="date-label date3">6 month</div>
										<div class="date-label date4">1 year</div>
									</div>
					</div>
			</div>
		</div>
	
    <div class="full-width-container choose-plan-container-s-one join">
				<div class="inner-content-container">
					<div class="sbscr-plans-columns">
						<div class="sbscr-plan-col">
							<div class="plan-title">STANDARD</div>
							<div class="free-trial-text">30 days free trial</div>
							<div class="per-month"><span class="then">then </span> <span class="digit">$9</span> /month</div>
							<div class="billed-block">$26.50 billed quarterly</div>
							<div class="features-list">
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/discount-voucher.svg"/>
									exclusive discounts up to 60%
								</div>
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/unlock.svg"/>
									full access to the base sound library
								</div>
                        	</div>
							<a href="/stage-two" class="btn-purp-grad">BUY STANDARD NOW</a>
							<div class="or-line">Or</div>
							<div class="under-or-title">Trial > Standard</div>
							<div class="features-list trial">
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/folder-yeloow.svg"/>
									30 DAYS Free access to the base library
								</div>
                        	</div>
							<a href="#" class="btn-blue-grad">TRY TRIAL  >  STANDARD</a>
						</div>
						<div class="sbscr-plan-col premium">
							<img class="best-img lzy_img" data-src="/assets/img/best-choice.svg"/>
							<div class="plan-title">PREMIUM</div>
							<div class="free-trial-text">30 days free trial</div>
							<div class="per-month"><span class="then">then </span> <span class="digit">$15.50</span> /month</div>
							<div class="billed-block">$46.50 billed quarterly</div>
							<div class="features-list">
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/discount-voucher.svg"/>
									exclusive discounts up to 60%
								</div>
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/unlock.svg"/>
									full access to the base sound library
								</div>
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/gift-box.svg"/>
									every month we give any pack to choose from the entire range
								</div>
                        	</div>
							<a href="/stage-two" class="btn-purp-grad">BUY PREMIUM NOW</a>
							<div class="or-line">Or</div>
							<div class="under-or-title">Trial > Premium</div>
							<div class="features-list trial">
								<div class="feature-line">
									<img class="lzy_img" data-src="/assets/img/icons/folder-yeloow.svg"/>
									30 DAYS Free access to the base library
								</div>
                        	</div>
							<a href="#" class="btn-blue-grad">TRY TRIAL  >  PREMIUM</a>
						</div>
					</div>
				</div>
			</div>	
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
