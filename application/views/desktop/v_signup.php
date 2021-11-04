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

				<?php if($needEmailActivation && $activationEmail): ?>

				<h1 class="container-title main-title">
					<span class="gradient-title">EMAIL ACTIVATION</span>
				</h1>

				<div class="login-container">
					<div class="login-container-inner">
						<div style="color:#fff;text-align: center;margin-bottom:10px;">Enter code we sent you on <b><?php echo $activationEmail; ?></b></div>
						<div class="separator-line"></div>
						<form action="/email_activate" method="post">
							<div class="form-field">
								<input type="text" name="code" placeholder="Activation code" value=""/>
									<!-- <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg> -->
							</div>

							<button class="btn-purp-grad create-acc" type="submit">Activate account</button>
						</form>
					</div>
				</div>

				<? else: ?>

				<h1 class="container-title main-title">
							<span class="gradient-title">SIGN UP</span>
				</h1>
				<div class="login-container">
						<div class="login-container-inner">
							<div class="login-buttons">
									<!-- <button class="facebook-btn">Continue with <span>Facebook</span></button>
									<button class="google-btn">Continue with <span>Google</span></button> -->
									<div class="sociallogin-btn facebook">
										<div class="icon-wrapper">
											<img class="icon" src="/assets/img/icons/facebook-icon.svg"/>
										</div>
										<p class="btn-text">Continue with <b>Facebook</b></p>
									</div>
									<div class="sociallogin-btn google">
										<div class="icon-wrapper">
											<img class="icon" src="/assets/img/icons/google-icon-color.svg"/>
										</div>
										<p class="btn-text">Sign in with <b>Google</b></p>
									</div>
							</div>
							<div class="or-line">Or</div>
							<form action="/proceed_signup" method="post">
								<div class="form-field">
									<input type="email" name="user_email" placeholder="Email Address" value="<?php echo $signupEmail ? $signupEmail : ''; ?>"/>
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6zm-2 0l-8 5-8-5h16zm0 12H4V8l8 5 8-5v10z"/></svg>
								</div>
								<div class="form-field">
									<input type="password" id="password-input" name="user_pass" placeholder="Password"/>
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#FFFFFF"><path d="M0 0h24v24H0z" fill="none"/><path d="M18 8h-1V6c0-2.76-2.24-5-5-5S7 3.24 7 6v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm-6 9c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2zm3.1-9H8.9V6c0-1.71 1.39-3.1 3.1-3.1 1.71 0 3.1 1.39 3.1 3.1v2z"/></svg>
								</div>

								<?php if($displaySignupErrors): ?>

									<div id="sign-up-errors" style="color:red;">
										<?php foreach($displaySignupErrors as $errorText): ?>

										<div> <?php echo $errorText; ?> </div>

										<?php endforeach; ?>
									</div>

								<?php endif; ?>

								<button class="btn-purp-grad create-acc" type="submit">Create account</button>
							</form>
							<div class="forgot-password terms">By continuing you agree to<a href="/terms"> Terms and Conditions</a> and <a href="/privacy-policy"> Privacy Policy</a></div>
							<div class="separator-line"></div>
							<div class="sign-up">Already have an account? <a href="/login">Log in</a></div>
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
