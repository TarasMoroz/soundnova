<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>
	
		<div class="full-width-container login-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title">LOG IN</span>
				</h1>
				<div class="login-container">
						<div class="login-container-inner">
							<div class="login-buttons">
									<button class="facebook-btn">Continue with <span>Facebook</span></button>
									<button class="google-btn">Continue with <span>Google</span></button>
							</div>
							<div class="or-line">Or</div>
						</div>
				</div>
			</div>
		</div>
		
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
