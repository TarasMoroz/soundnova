<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container error-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title shadowed glitch" data-text="ERROR 404">ERROR 404</span>
				</h1>
                <div class="error-form-container">
                    <img width="190" class="lzy_img flying-astronaut" data-src="/assets/img/astronaut.svg"/>
                    <div class="top-text">Sorry! The page you were looking for could not be found.</div>
                    <div class="descr">You may have typed the address incorrectly. Try search sound effects or:</div>
                    <div class="button-container">
                        <a href="/" class="btn-blue-grad">Go To Main Page</a>
                    </div>
                </div>
			</div>
		</div>


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
