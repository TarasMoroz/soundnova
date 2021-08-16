<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>


	<div class="full-width-container blog-main-container blog-post-container" style="background-image: url(/assets/img/foley_sound_effect.jpg)">
		<div class="inner"></div>
			<div class="inner-content-container">
				<div class="blog-container">
					<div class="top-tabs-block">
						<div class="mobile">
							<div class="dropdown">
								<div class="choosen-value">
									BLOG CATEGORIES
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
									<a href="/blog/news-and-updates">
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
								<div class="single-post main-post">
									<span class="category">Category name</span>
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
										<div class="tags">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-tags fa-w-20 fa-3x" width="20" fill="#1dd1e5"><path fill="#1dd1e5" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z" class=""></path></svg>
											<a href="#">foley</a>
											<a href="#">effects</a>
											<a href="#">new in library</a>
										</div>
									</div>
								</div>

			</div>	
		</div>
	</div>

	<div class="full-width-container blog-post-bottom">
			<div class="inner-content-container">
						<div class="article-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 

								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							<img width="100%" class="lzy_img" data-src="/assets/img/cartoons-img.jpg"/>

							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
								Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 

								Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
							</p>
						</div>
						<div class="navigation mobile">
								<div class="tags">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tags" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-tags fa-w-20 fa-3x" width="20" fill="#1dd1e5"><path fill="#1dd1e5" d="M497.941 225.941L286.059 14.059A48 48 0 0 0 252.118 0H48C21.49 0 0 21.49 0 48v204.118a48 48 0 0 0 14.059 33.941l211.882 211.882c18.744 18.745 49.136 18.746 67.882 0l204.118-204.118c18.745-18.745 18.745-49.137 0-67.882zM112 160c-26.51 0-48-21.49-48-48s21.49-48 48-48 48 21.49 48 48-21.49 48-48 48zm513.941 133.823L421.823 497.941c-18.745 18.745-49.137 18.745-67.882 0l-.36-.36L527.64 323.522c16.999-16.999 26.36-39.6 26.36-63.64s-9.362-46.641-26.36-63.64L331.397 0h48.721a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882z" class=""></path></svg>
									<a href="#">foley</a>
									<a href="#">effects</a>
									<a href="#">new in library</a>
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


						<div id="product-reviews" class="reviews-list">
							<div class="comments">
								comments
								<span class="count">(3)</span>
							</div>
						<? for ($i=1; $i <= 3; $i++): ?>
						<div class="prod-rev">
                            <div class="prod-rev-main">
                                <div class="prod-rev-pic">
                                    <img src="/assets/img/avatar<?=$i?>.gif">
                                </div>
                                <div class="prod-rev-cont">
                                    <div class="prod-rev-cont-top">
                                        <div class="prod-rev-name">
                                            <b>Stefan</b>
                                            <div class="stars"></div>
                                        </div>
                                        <div class="review-status">
                                            Buyer of the product:
                                            <div class="product-name">
                                                <a href="#">Magic Bundle</a>
                                            </div>
                                        </div>
                                        <div class="prod-rev-dash"></div>
                                    </div>

                                    <div class="prod-rev-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                    <div class="review-date">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-calendar-alt fa-w-14 fa-3x" fill="#25393F" width="12"><path fill="#25393F" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" class=""></path></svg>
                                        OCT 17, 2020
                                    </div>
                                </div>
                            </div>
                            <div class="prod-rev-answer">
                                <div class="prod-rev-dash"></div>
                                <div class="prod-rev-cont">
                                    <div class="prod-rev-cont-top">
                                        <div class="prod-rev-pic">
                                            <img src="/assets/img/avatar<?=$i?>.gif">
                                        </div>
                                        <div class="prod-rev-name team">
                                            <b>Jay</b>
                                        </div>
                                        <div class="review-status team">
                                            SoundNova Team
                                        </div>
                                    </div>

                                    <div class="prod-rev-text">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                                    </div>
                                    <div class="review-date">
                                        <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="calendar-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-calendar-alt fa-w-14 fa-3x" fill="#25393F" width="12"><path fill="#25393F" d="M148 288h-40c-6.6 0-12-5.4-12-12v-40c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12zm108-12v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 96v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm-96 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm192 0v-40c0-6.6-5.4-12-12-12h-40c-6.6 0-12 5.4-12 12v40c0 6.6 5.4 12 12 12h40c6.6 0 12-5.4 12-12zm96-260v352c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V112c0-26.5 21.5-48 48-48h48V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h128V12c0-6.6 5.4-12 12-12h40c6.6 0 12 5.4 12 12v52h48c26.5 0 48 21.5 48 48zm-48 346V160H48v298c0 3.3 2.7 6 6 6h340c3.3 0 6-2.7 6-6z" class=""></path></svg>
                                        OCT 17, 2020
                                    </div>
                                </div>
                            </div>
						</div>
						<? endfor; ?>

						<form id="add-comment">
						<div class="add-review-inf">To leave a comment, you need to 
							<a href="/login">
							Sign In  
							<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="16px" viewBox="0 0 24 24" width="16px" fill="#1dd1e5"><g><rect fill="none" height="24" width="24"></rect></g><g><path d="M11,7L9.6,8.4l2.6,2.6H2v2h10.2l-2.6,2.6L11,17l5-5L11,7z M20,19h-8v2h8c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-8v2h8V19z"></path></g></svg>
							</a>
							or enter your name and email</div>

						<div class="add-review-row">
							<div class="add-review-label">Name <sup>*</sup></div> 
							<input type="text" name="name" placeholder="Name *">
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Email <sup>*</sup></div> 
							<input type="text" name="email" placeholder="Email *">
						</div>

						<div class="add-review-row">
							<div class="add-review-label">Your review <sup>*</sup></div> 
							<textarea name="review" placeholder="Your review *"></textarea>
						</div>
						<div class="add-review-row">
							<div class="add-review-label"></div> 
							<button class="btn-purp-grad btn-main-sale">Comment</button>
						</div>
					</form>


					<div class="posts-grid-item">
							<div class="title-links">
								<h2 class="container-title secondary-title">
									<div class="gradient-title shadowed">Featured articles</div>
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

	</main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>
