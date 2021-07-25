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
				<h1 class="container-title main-title">
							<div class="gradient-title shadowed">SUPPORT &<br> KNOWLEDGEBASE</div>
				</h1>
                <div class="main-subtitle">
                    Find answers to commonly asked questions here
                </div>
                <div class="search-field-container">
                     <input type="text" placeholder="How can we help? Search now">
                     <button class="btn-blue-grad">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" width="16" fill="#1dd1e5"><path d="M51.7 51.3l-15-15.5A21 21 0 0 0 43 21 21 21 0 0 0 22 0 21 21 0 0 0 1 21a21 21 0 0 0 21 21 21 21 0 0 0 13.4-4.8l15 15.5c.2.2.5.3.7.3a1 1 0 0 0 .7-1.7zM22 40A19 19 0 0 1 3 21 19 19 0 0 1 22 2a19 19 0 0 1 19 19 19 19 0 0 1-19 19z"></path></svg>
                         <span>Search</span>
                     </button>
                </div>
                <div class="support-categories-container">
                    <? for ($i=0; $i <= 6; $i++): ?>
                        <div class="support-category-col">
                            <div class="title">General</div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file fa-w-12 fa-3x" fill="#1dd1e5" width="12"><path fill="#1dd1e5" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z" class=""></path></svg>
                                        Language support in the Pack Manage
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file fa-w-12 fa-3x" fill="#1dd1e5" width="12"><path fill="#1dd1e5" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z" class=""></path></svg>
                                        Language support in the Pack Manage
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="file" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file fa-w-12 fa-3x" fill="#1dd1e5" width="12"><path fill="#1dd1e5" d="M369.9 97.9L286 14C277 5 264.8-.1 252.1-.1H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48V131.9c0-12.7-5.1-25-14.1-34zM332.1 128H256V51.9l76.1 76.1zM48 464V48h160v104c0 13.3 10.7 24 24 24h104v288H48z" class=""></path></svg>
                                        Language support in the Pack Manage
                                    </a>
                                </li>
                            </ul>
                            <a href="#" class="go-to-all">
                            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-double-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" class="svg-inline--fa fa-angle-double-down fa-w-10 fa-3x" fill="#1dd1e5" width="10"><path fill="#1dd1e5" d="M143 256.3L7 120.3c-9.4-9.4-9.4-24.6 0-33.9l22.6-22.6c9.4-9.4 24.6-9.4 33.9 0l96.4 96.4 96.4-96.4c9.4-9.4 24.6-9.4 33.9 0L313 86.3c9.4 9.4 9.4 24.6 0 33.9l-136 136c-9.4 9.5-24.6 9.5-34 .1zm34 192l136-136c9.4-9.4 9.4-24.6 0-33.9l-22.6-22.6c-9.4-9.4-24.6-9.4-33.9 0L160 352.1l-96.4-96.4c-9.4-9.4-24.6-9.4-33.9 0L7 278.3c-9.4 9.4-9.4 24.6 0 33.9l136 136c9.4 9.5 24.6 9.5 34 .1z" class=""></path></svg>
                                Go to all
                            </a>
                        </div>
                    <? endfor; ?>
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
