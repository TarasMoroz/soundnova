<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container blog-main-container">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title">Category name</span>
				</h1>
				<div class="blog-container">
					<div class="top-tabs-block category">
						<div class="mobile">
							<div class="dropdown">
								<div class="choosen-value">
									Category name
								</div>
								<ul>
									<li>
										<a href="/blog/news-and-updates">
										News & Updates
										</a>
									</li>
									<li>
										<a href="/blog/filmmaking-and-post-production">
											Filmmaking & Post-production
										</a>
									</li>
									<li>
										<a href="/blog/post-audio-and-sound-design">
											Post-audio & Sound design
										</a>
									</li>
								</ul>
							</div>
							<div class="search-block">
								<input type="text" placeholder="Search in blog..."/>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" width="53" height="53"><path d="M51.7 51.3l-15-15.5A21 21 0 0 0 43 21 21 21 0 0 0 22 0 21 21 0 0 0 1 21a21 21 0 0 0 21 21 21 21 0 0 0 13.4-4.8l15 15.5c.2.2.5.3.7.3a1 1 0 0 0 .7-1.7zM22 40A19 19 0 0 1 3 21 19 19 0 0 1 22 2a19 19 0 0 1 19 19 19 19 0 0 1-19 19z"></path></svg>
								</a>
							</div>
						</div>
						<div class="desktop">
							<ul>
								<li>
									<a href="/blog/news-and-updates" class="current">
										News & Updates 
										<svg xmlns="http://www.w3.org/2000/svg" height="14px" viewBox="0 0 24 24" width="14px" fill="#1dd1e5"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
									</a>
								</li>
								<li>
									<a href="/blog/filmmaking-and-post-production">
										Filmmaking & Post-production
										<svg xmlns="http://www.w3.org/2000/svg" height="14px" viewBox="0 0 24 24" width="14px" fill="#1dd1e5"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
									</a>
								</li>
								<li>
									<a href="/blog/post-audio-and-sound-design">
										Post-audio & Sound design
										<svg xmlns="http://www.w3.org/2000/svg" height="14px" viewBox="0 0 24 24" width="14px" fill="#1dd1e5"><path d="M24 24H0V0h24v24z" fill="none" opacity=".87"/><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6-1.41-1.41z"/></svg>
									</a>
								</li>
							</ul>
							<div class="search-block">
								<input type="text" placeholder="Search in blog..."/>
								<a href="#">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53" width="53" height="53"><path d="M51.7 51.3l-15-15.5A21 21 0 0 0 43 21 21 21 0 0 0 22 0 21 21 0 0 0 1 21a21 21 0 0 0 21 21 21 21 0 0 0 13.4-4.8l15 15.5c.2.2.5.3.7.3a1 1 0 0 0 .7-1.7zM22 40A19 19 0 0 1 3 21 19 19 0 0 1 22 2a19 19 0 0 1 19 19 19 19 0 0 1-19 19z"></path></svg>
								</a>
							</div>
						</div>
					</div>

					<div class="subcategories-block">
						<a href="#">
							Industry News
						</a>
						<a href="#">
							Soundnova News
						</a>
						<a href="#">
							Industry Tips
						</a>
						<a href="#">
							Tutorials
						</a>
					</div>

					<div class="blog-content-container">
						<div class="posts-grid-item">
							<div class="title-links">
								<h2 class="container-title secondary-title">
									<div class="gradient-title">Subcategory title</div>
								</h2>
								<a href="#" class="category-link">All articles of this categories</a>
							</div>
							<div class="category-posts-mobile">
								<div class="category-posts-slider-container">
										<div class="category-posts">
											<!-- Swiper -->
											<div class="swiper-container category-posts-wrapper-one">
												<div class="swiper-wrapper">
													<? for ($i=1; $i <= 6; $i++): ?>
														<div class="swiper-slide">
															<div class="category-post">
																<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
																	<div class="inner"></div>
																	<div class="post-date-time">
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
																			oct 28, 2020
																		</div>
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
																			15
																		</div>
																	</div>
																	<div class="post-title">
																		New foley sound effects on our library SoundNova
																	</div>
																	<div class="post-data">
																		<div class="post-author">
																			<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
																			Author name
																		</div>
																		<div class="post-reactions">
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
																				2343
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
																				12
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
																				2
																			</div>
																		</div>
																	</div>
																</div>
																<div class="post-text">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
																	<a href="#" class="read-more">Read more</a>
																</div>
															</div>
														</div>
													<? endfor; ?>
												</div>
														<!-- Add Arrows -->
														<div class="swiper-button-next"></div>
														<div class="swiper-button-prev"></div>
														<!-- Add Pagination -->
														<div class="swiper-pagination"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="category-posts desktop">
							<? for ($i=1; $i <= 6; $i++): ?>
								<div class="category-post">
									<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
										<div class="inner"></div>
										<div class="post-date-time">
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
												oct 28, 2020
											</div>
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
												15
											</div>
										</div>
										<div class="post-title">
											New foley sound effects on our library SoundNova
										</div>
										<div class="post-data">
											<div class="post-author">
												<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
												Author name
											</div>
											<div class="post-reactions">
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
													2343
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
													12
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
													2
												</div>
											</div>
										</div>
									</div>
									<div class="post-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							<? endfor; ?>
							</div>
						</div>
					</div>
			</div>


			


		</div>
	</div>


		<div class="full-width-container blog-second-container blog-main-container">
			<div class="inner-content-container">
				<div class="blog-container">
					<div class="blog-content-container">
						<div class="posts-grid-item">
							<div class="title-links">
								<h2 class="container-title secondary-title">
									<div class="gradient-title">Subcategory title</div>
								</h2>
								<a href="#" class="category-link">All articles of this categories</a>
							</div>
							<div class="category-posts-mobile">
								<div class="category-posts-slider-container">
										<div class="category-posts">
											<!-- Swiper -->
											<div class="swiper-container category-posts-wrapper-one">
												<div class="swiper-wrapper">
													<? for ($i=1; $i <= 6; $i++): ?>
														<div class="swiper-slide">
															<div class="category-post">
																<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
																	<div class="inner"></div>
																	<div class="post-date-time">
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
																			oct 28, 2020
																		</div>
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
																			15
																		</div>
																	</div>
																	<div class="post-title">
																		New foley sound effects on our library SoundNova
																	</div>
																	<div class="post-data">
																		<div class="post-author">
																			<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
																			Author name
																		</div>
																		<div class="post-reactions">
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
																				2343
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
																				12
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
																				2
																			</div>
																		</div>
																	</div>
																</div>
																<div class="post-text">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
																	<a href="#" class="read-more">Read more</a>
																</div>
															</div>
														</div>
													<? endfor; ?>
												</div>
														<!-- Add Arrows -->
														<div class="swiper-button-next"></div>
														<div class="swiper-button-prev"></div>
														<!-- Add Pagination -->
														<div class="swiper-pagination"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="category-posts desktop">
							<? for ($i=1; $i <= 6; $i++): ?>
								<div class="category-post">
									<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
										<div class="inner"></div>
										<div class="post-date-time">
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
												oct 28, 2020
											</div>
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
												15
											</div>
										</div>
										<div class="post-title">
											New foley sound effects on our library SoundNova
										</div>
										<div class="post-data">
											<div class="post-author">
												<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
												Author name
											</div>
											<div class="post-reactions">
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
													2343
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
													12
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
													2
												</div>
											</div>
										</div>
									</div>
									<div class="post-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							<? endfor; ?>
							</div>
						</div>


						<div class="posts-grid-item">
							<div class="title-links">
								<h2 class="container-title secondary-title">
									<div class="gradient-title">Subcategory title</div>
								</h2>
								<a href="#" class="category-link">All articles of this categories</a>
							</div>
							<div class="category-posts-mobile">
								<div class="category-posts-slider-container">
										<div class="category-posts">
											<!-- Swiper -->
											<div class="swiper-container category-posts-wrapper-two">
												<div class="swiper-wrapper">
													<? for ($i=1; $i <= 6; $i++): ?>
														<div class="swiper-slide">
															<div class="category-post">
																<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
																	<div class="inner"></div>
																	<div class="post-date-time">
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
																			oct 28, 2020
																		</div>
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
																			15
																		</div>
																	</div>
																	<div class="post-title">
																		New foley sound effects on our library SoundNova
																	</div>
																	<div class="post-data">
																		<div class="post-author">
																			<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
																			Author name
																		</div>
																		<div class="post-reactions">
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
																				2343
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
																				12
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
																				2
																			</div>
																		</div>
																	</div>
																</div>
																<div class="post-text">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
																	<a href="#" class="read-more">Read more</a>
																</div>
															</div>
														</div>
													<? endfor; ?>
												</div>
														<!-- Add Arrows -->
														<div class="swiper-button-next"></div>
														<div class="swiper-button-prev"></div>
														<!-- Add Pagination -->
														<div class="swiper-pagination"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="category-posts desktop">
							<? for ($i=1; $i <= 6; $i++): ?>
								<div class="category-post">
									<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
										<div class="inner"></div>
										<div class="post-date-time">
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
												oct 28, 2020
											</div>
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
												15
											</div>
										</div>
										<div class="post-title">
											New foley sound effects on our library SoundNova
										</div>
										<div class="post-data">
											<div class="post-author">
												<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
												Author name
											</div>
											<div class="post-reactions">
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
													2343
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
													12
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
													2
												</div>
											</div>
										</div>
									</div>
									<div class="post-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							<? endfor; ?>
							</div>
						</div>

						<div class="catalog-top-sales-block">
					<div class="catalog-top-sales-inner mobile">
						<div class="catalog-sales-left">
							<div class="summer-sale-title">
								<img class="lzy_img" data-src="/assets/img/summer_sale.svg">
							</div>
						</div>
						<div class="catalog-sales-middle">
							<div class="shadow"></div>
							<img class="lzy_img" data-src="/assets/img/catalog-sales-bundle-min.svg">
						</div>
						<div class="catalog-sales-right">
						<p class="bundle-title-blue">Ultimate bundle offer</p>
						<a href="#" class="btn-purp-grad btn-main-sale">BUY $299 <s>$1000</s></a>
						<div class="timer-counter">
										<div class="timer-counter-item">
											<span class="count-number days">0</span>
											<span class="count-text">days</span>
										</div>
										<div class="timer-counter-item">
											<span class="count-number hours">0</span>
											<span class="count-text">hours</span>
										</div>
										<div class="timer-counter-item">
											<span class="count-number minutes">0</span>
											<span class="count-text">mins</span>
										</div>
										<div class="timer-counter-item">
											<span class="count-number seconds">0</span>
											<span class="count-text">sec</span>
										</div>
							</div>
						</div>
					</div>

					<div class="catalog-top-sales-inner desktop">
						<div class="catalog-sales-left">
							<div class="summer-sale-title">
								<img class="lzy_img" data-src="/assets/img/summer_sale.svg">
								<p class="bundle-title-blue">Ultimate bundle offer</p>
								<a href="#" class="btn-purp-grad btn-main-sale">BUY $299 <s>$1000</s><span>SAVE -71%</span></a>
							</div>
						</div>
						<div class="catalog-sales-middle">
							<div class="shadow"></div>
							<img class="lzy_img" data-src="/assets/img/catalog-sales-bundle-min.svg">
						</div>
						<div class="catalog-sales-right">
						<div class="get-everything-title">get everything we’ve ever created</div>
						<div class="sale-will-end-title">sale will end in</div>
						<div class="timer-counter">
										<div class="timer-counter-item">
											<span class="count-number days">0</span>
											<span class="count-text">days</span>
										</div>
										<div class="timer-counter-item">
											<span class="count-number hours">0</span>
											<span class="count-text">hours</span>
										</div>
										<div class="timer-counter-item">
											<span class="count-number minutes">0</span>
											<span class="count-text">mins</span>
										</div>
										<div class="timer-counter-item">
											<span class="count-number seconds">0</span>
											<span class="count-text">sec</span>
										</div>
							</div>
						</div>
					</div>
				</div>


						<div class="posts-grid-item">
							<div class="title-links">
								<h2 class="container-title secondary-title">
									<div class="gradient-title">Subcategory title</div>
								</h2>
								<a href="#" class="category-link">All articles of this categories</a>
							</div>
							<div class="category-posts-mobile">
								<div class="category-posts-slider-container">
										<div class="category-posts">
											<!-- Swiper -->
											<div class="swiper-container category-posts-wrapper-three">
												<div class="swiper-wrapper">
													<? for ($i=1; $i <= 6; $i++): ?>
														<div class="swiper-slide">
															<div class="category-post">
																<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
																	<div class="inner"></div>
																	<div class="post-date-time">
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
																			oct 28, 2020
																		</div>
																		<div class="item">
																			<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
																			15
																		</div>
																	</div>
																	<div class="post-title">
																		New foley sound effects on our library SoundNova
																	</div>
																	<div class="post-data">
																		<div class="post-author">
																			<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
																			Author name
																		</div>
																		<div class="post-reactions">
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
																				2343
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
																				12
																			</div>
																			<div class="reaction">
																				<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
																				2
																			</div>
																		</div>
																	</div>
																</div>
																<div class="post-text">
																	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
																	<a href="#" class="read-more">Read more</a>
																</div>
															</div>
														</div>
													<? endfor; ?>
												</div>
														<!-- Add Arrows -->
														<div class="swiper-button-next"></div>
														<div class="swiper-button-prev"></div>
														<!-- Add Pagination -->
														<div class="swiper-pagination"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="category-posts desktop">
							<? for ($i=1; $i <= 6; $i++): ?>
								<div class="category-post">
									<div class="single-post main-post" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
										<div class="inner"></div>
										<div class="post-date-time">
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M7 11h2v2H7v-2zm14-5v14c0 1.1-.9 2-2 2H5c-1.11 0-2-.9-2-2l.01-14c0-1.1.88-2 1.99-2h1V2h2v2h8V2h2v2h1c1.1 0 2 .9 2 2zM5 8h14V6H5v2zm14 12V10H5v10h14zm-4-7h2v-2h-2v2zm-4 0h2v-2h-2v2z"/></svg>
												oct 28, 2020
											</div>
											<div class="item">
												<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/></svg>
												15
											</div>
										</div>
										<div class="post-title">
											New foley sound effects on our library SoundNova
										</div>
										<div class="post-data">
											<div class="post-author">
												<img class="lzy_img" data-src="/assets/img/avatar3.gif"/>
												Author name
											</div>
											<div class="post-reactions">
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 6c3.79 0 7.17 2.13 8.82 5.5C19.17 14.87 15.79 17 12 17s-7.17-2.13-8.82-5.5C4.83 8.13 8.21 6 12 6m0-2C7 4 2.73 7.11 1 11.5 2.73 15.89 7 19 12 19s9.27-3.11 11-7.5C21.27 7.11 17 4 12 4zm0 5c1.38 0 2.5 1.12 2.5 2.5S13.38 14 12 14s-2.5-1.12-2.5-2.5S10.62 9 12 9m0-2c-2.48 0-4.5 2.02-4.5 4.5S9.52 16 12 16s4.5-2.02 4.5-4.5S14.48 7 12 7z"/></svg>
													2343
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.5 3c-1.74 0-3.41.81-4.5 2.09C10.91 3.81 9.24 3 7.5 3 4.42 3 2 5.42 2 8.5c0 3.78 3.4 6.86 8.55 11.54L12 21.35l1.45-1.32C18.6 15.36 22 12.28 22 8.5 22 5.42 19.58 3 16.5 3zm-4.4 15.55l-.1.1-.1-.1C7.14 14.24 4 11.39 4 8.5 4 6.5 5.5 5 7.5 5c1.54 0 3.04.99 3.57 2.36h1.87C13.46 5.99 14.96 5 16.5 5c2 0 3.5 1.5 3.5 3.5 0 2.89-3.14 5.74-7.9 10.05z"/></svg>
													12
												</div>
												<div class="reaction">
													<svg xmlns="http://www.w3.org/2000/svg" height="16px" viewBox="0 0 24 24" width="16px" fill="#FFFFFF"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 17.17L18.83 16H4V4h16v13.17zM20 2H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h14l4 4V4c0-1.1-.9-2-2-2z"/></svg>
													2
												</div>
											</div>
										</div>
									</div>
									<div class="post-text">
										Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis... 
										<a href="#" class="read-more">Read more</a>
									</div>
								</div>
							<? endfor; ?>
							</div>
						</div>

						<div class="blog-offer-container">
							<div class="blog-offer-inner">
								<h2 class="container-title secondary-title">
									<div class="gradient-title">You can try free monthly subscription</div>
								</h2>
								<div class="secondary-subtitle">
									and get full access to the basic sound effects library
								</div>
								<div class="subscription-form">
									<input type="text" placeholder="Email address">
									<button class="btn-blue-grad subscription-form-btn">Try 30 days FREE</button>
								</div>
							</div>
						</div>

					</div>					
				</div>
			</div>
		</div>


		<div class="full-width-container blog-instagram-container category">
			<div class="inner-content-container">
				<h2 class="container-title secondary-title">
							<span class="gradient-title">Our instagram</span>
				</h2>
				<div class="instagram-grid">
					<? for ($i=1; $i <= 8; $i++): ?>
						<img width="160" class="lzy_img" data-src="/assets/img/insta-<?=$i?>.jpg"/>
					<? endfor; ?>
				</div>
				<a href="#" class="insta-link">
					<svg xmlns="http://www.w3.org/2000/svg" height="15" width="15" viewBox="0 0 57 57"><path d="M43.4 4.8H13c-5.3 0-9.6 4.3-9.6 9.6v30.4c0 5.3 4.3 9.6 9.6 9.6h30.4c5.3 0 9.6-4.3 9.6-9.6V14.4c0-5.3-4.3-9.6-9.6-9.6zm2.7 5.7h1V19H39v-8.4h7.3zm-25 14c1.6-2.2 4.2-3.6 7-3.6s5.5 1.4 7 3.6c1 1.4 1.7 3.2 1.7 5 0 4.8-4 8.7-8.7 8.7s-8.7-4-8.7-8.7c0-2 .6-3.7 1.7-5zm27 20.3c0 2.6-2 4.8-4.7 4.8H13c-2.6 0-4.8-2-4.8-4.7V24.5h7.4c-.6 1.6-1 3.3-1 5 0 7.5 6 13.6 13.6 13.6s13.6-6 13.6-13.6c0-1.8-.4-3.5-1-5h7.4v20.3z"></path></svg>
					#soundnova_net
				</a>
			</div>
		</div>


	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
