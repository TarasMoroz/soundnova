<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container support-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title category-title">
							<span class="gradient-title">CATEGORY QUESTIONS</span>
				</h1>
                <div class="support-category-items">
                    <? for ($i=0; $i <= 6; $i++): ?>
                        <div class="support-category-item">
                            <div class="top-content">
                                <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file fa-w-12 fa-3x" fill="#1dd1e5" width="15"><path fill="#1dd1e5" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z" class=""></path></svg>
                                <div class="title">Language support in the Pack Manage</div>
                            </div>
                            <div class="descr">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam ...
                                <a href="#" class="read-more">
                                    Read more
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-double-down fa-w-10 fa-3x" fill="#1dd1e5" width="10"><path fill="#1dd1e5" d="M143 256.3L7 120.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0L313 86.3c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.4 9.5-24.6 9.5-34 .1zm34 192l136-136c9.4-9.4 9.4-24.6 0-33.9l-22.6-22.6c-9.4-9.4-24.6-9.4-33.9 0L160 352.1l-96.4-96.4c-9.4-9.4-24.6-9.4-33.9 0L7 278.3c-9.4 9.4-9.4 24.6 0 33.9l136 136c9.4 9.5 24.6 9.5 34 .1z" class=""></path></svg>
                                </a> 
                            </div>
                        </div>
                    <? endfor; ?>
                </div>
                <div class="pagination-container">
                            <a href="#" class="page-number current">1</a>
                            <a href="#" class="page-number">2</a>
                            <a href="#" class="page-number">3</a>
                            <a href="#" class="page-number">4</a>
                            <a href="#" class="page-number">5</a>
                            <a href="#" class="page-number next">></a>
                            <a href="#" class="page-number to-end">>></a>
                </div>
                <div class="contact-us-container">
                    <div class="contact-us-inner-block">
                        <div class="title">Didn’t find what you were looking for? Contact us</div>
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


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
