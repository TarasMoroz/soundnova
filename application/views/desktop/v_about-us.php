<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container about-us-top">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title">SOUNDNOVA</span>
				</h1>
                <div class="main-subtitle">
                    We are a team of people who strive to create the best sound<br> effects library and help everyone fill their project with life
                </div>
                <div class="about-us-top-content">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p> 

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. </p> 

                </div>
			</div>
		</div>
	
	    <div class="full-width-container meet-team-container">
			<div class="inner-content-container">
				<h2 class="container-title secondary-title">
							<span class="gradient-title">Meet the Team</span>
				</h2>
                <div class="secondary-subtitle">
				Established in 2021, SoundNova's team is a unique blend of mixed experiences with a love for all things creative.<br>
				We worked in well-known agencies, small agencies, big huge corporates, freelance, had another activity, worked for small, middle, large<br>
				accounts, some were swimming champions, others fell into webshops when they were young, but all of us
                </div>


				<div class="team-slider-container">
								<div class="team-slider">
										<!-- Swiper -->
										<div class="swiper-container team-wrapper">
											<div class="swiper-wrapper">
												<div class="swiper-slide">
													<div class="team-column">
														<div class="name">Jack</div>
														<img class="lzy_img human-img" data-src="/assets/img/human-one.svg" />
														<img class="lzy_img sphere-img" data-src="/assets/img/water-sphere.svg" />
														<div class="position">Creative Director</div>
														<div class="yellow-line"></div>
													</div>
													
												</div>
												<div class="swiper-slide">
													<div class="team-column">
														<div class="name">John</div>
														<img class="lzy_img human-img" data-src="/assets/img/human-two.svg" />
														<img class="lzy_img sphere-img" data-src="/assets/img/violet-sphere.svg" />
														<div class="position">Tech Director</div>
														<div class="yellow-line"></div>
													</div>	
												</div>
										</div>
											    <!-- Add Arrows -->
												<div class="swiper-button-next"></div>
												<div class="swiper-button-prev"></div>
												<!-- Add Pagination -->
    											<div class="swiper-pagination"></div>
								</div>
							</div>
				</div>

                <div class="team-columns">
					<div class="team-column">
						<div class="name">Jack</div>
						<img class="lzy_img human-img" data-src="/assets/img/human-one.svg" />
						<img class="lzy_img sphere-img" data-src="/assets/img/water-sphere.svg" />
						<div class="position">Creative Director</div>
						<div class="yellow-line"></div>
					</div>
					<div class="team-column">
						<div class="name">John</div>
						<img class="lzy_img human-img" data-src="/assets/img/human-two.svg" />
						<img class="lzy_img sphere-img" data-src="/assets/img/violet-sphere.svg" />
						<div class="position">Tech Director</div>
						<div class="yellow-line"></div>
					</div>
					<div class="team-column">
						<div class="name">John</div>
						<img class="lzy_img human-img" data-src="/assets/img/human-three.svg" />
						<img class="lzy_img sphere-img" data-src="/assets/img/radioactive-sphere.svg" />
						<div class="position">Head Manager</div>
						<div class="yellow-line"></div>
					</div>
					<div class="team-column">
						<div class="name">Jack</div>
						<img class="lzy_img human-img" data-src="/assets/img/human-one.svg" />
						<img class="lzy_img sphere-img" data-src="/assets/img/orange-sphere.svg" />
						<div class="position">Creative Director</div>
						<div class="yellow-line"></div>
					</div>
					<div class="team-column">
						<div class="name">John</div>
						<img class="lzy_img human-img" data-src="/assets/img/human-two.svg" />
						<img class="lzy_img sphere-img" data-src="/assets/img/electric-sphere.svg" />
						<div class="position">Tech Director</div>
						<div class="yellow-line"></div>
					</div>
					<div class="team-column">
						<div class="name">John</div>
						<img class="lzy_img human-img" data-src="/assets/img/human-three.svg" />
						<img class="lzy_img sphere-img" data-src="/assets/img/air-sphere.svg" />
						<div class="position">Head Manager</div>
						<div class="yellow-line"></div>
					</div>
                </div>
			</div>
		</div>
		


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
