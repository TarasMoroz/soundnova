<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>
	
		
		<!-- main indexed content -->
		<section id="main" class="main-content">
			<div class="full-width-container contact-us-container">
				<div class="inner-content-container">
					<h1 class="container-title main-title">
						<span class="gradient-title">contact us</span>
					</h1>
					<p class="main-subtitle">
						Can't find the answer to your question<br> in our <a target="_blank" href="#">knowledge base</a>?
						<span>Are you interested in partnering with us? Reach out to us.</span>
					</p>
					<div class="contact-us-columns">
							<div class="contact-us-info">
								<div class="title">general enquiries</div>
								<div class="info-item">
									<div class="info-image">
										<img data-src="/assets/img/icons/adres-icon.svg" class="lzy_img" width="26" height="35"/>
									</div>
									<div class="info-content">
										<div class="info-title">Address</div>
										<div class="info-descr">Ukraine, Poltava 36019 115 Shevchenko St, App.46</div>
									</div>
								</div>
								<div class="info-item">
									<div class="info-image">
										<img data-src="/assets/img/icons/phone-icon.svg" class="lzy_img" width="28" height="28"/>
									</div>
									<div class="info-content">
										<div class="info-title">Phone</div>
										<div class="info-descr"><a href="tel:+380509819275">+38 050 981 92 75</a></div>
									</div>
								</div>
								<div class="info-item">
									<div class="info-image">
										<img data-src="/assets/img/icons/mail-icon.svg" class="lzy_img" width="28" height="28"/>
									</div>
									<div class="info-content">
										<div class="info-title">Email</div>
										<div class="info-descr">hello@soundnova.net</div>
									</div>
								</div>
								<div class="info-item">
									<div class="info-image clock">
										<img data-src="/assets/img/icons/time-icon.svg" class="lzy_img" width="35" height="35"/>
									</div>
									<div class="info-content">
										<div class="info-title">Working Hours</div>
										<div class="info-descr">Mon-Fri: 8AM to 8PM UTC/GMT-4</div>
									</div>
								</div>
							</div>
							<div class="contact-us-form">
								<div class="title">Send message</div>
								<form id="contact-form">
									<div class="add-review-row half-row">
										<div class="add-review-label">Name <sup>*</sup></div> 
										<input type="text" name="name" placeholder="Name *">
									</div>

									<div class="add-review-row half-row">
										<div class="add-review-label">Email <sup>*</sup></div> 
										<input type="text" name="email" placeholder="Email *">
									</div>
									<div class="add-review-row">
										<div class="add-review-label">Subject</div> 
										<input type="text" name="subject" placeholder="Subject *">
									</div>

									<div class="add-review-row">
										<div class="add-review-label">Message <sup>*</sup></div> 
										<textarea name="review" placeholder="Message *"></textarea>
									</div>
									<div class="add-review-row">
										<button class="btn-purp-grad">Send message</button>
									</div>
								</form>
							</div>
					</div>
				</div>
			</div>
		</section>

	

	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
