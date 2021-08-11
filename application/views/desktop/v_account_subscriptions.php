<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="home">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main>

    <div class="full-width-container account-container only-wave">
			<div class="inner-content-container">
				<h1 class="container-title main-title">
							<span class="gradient-title">Subscriptions</span>
				</h1>
				<div class="dashboard-container">
					<div class="top-tabs-block">
						<div class="mobile">
							<div class="dropdown">
								<div class="choosen-value">
									<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="undo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-undo fa-w-16 fa-3x" fill="#fff" width="14"><path fill="#fff" d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z" class=""></path></svg>
									Subscriptions
								</div>
								<ul>
									<li>
										<a href="/dashboard">
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cog fa-w-16 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z" class=""></path></svg>
										Dashboard
										</a>
									</li>
									<li>
										<a href="/orders">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg>
											Orders
										</a>
									</li>
									<li>
										<a href="/subscriptions">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="undo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-undo fa-w-16 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z" class=""></path></svg>
											Subscriptions
										</a>
									</li>
									<li>
										<a href="/downloads">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cloud-download-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-cloud-download-alt fa-w-20 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z" class=""></path></svg>
											Downloads
										</a>
									</li>
									<li>
										<a href="/payments">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-credit-card fa-w-18 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z" class=""></path></svg>
											Payment methods
										</a>
									</li>
									<li>
										<a href="/details">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg>
											Account details
										</a>
									</li>
									<li>
										<a href="/coupons">
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-tag fa-w-16 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z" class=""></path></svg>
											Coupons
										</a>
									</li>
								</ul>
							</div>
							<a href="/logout" class="logout">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="power-off" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-power-off fa-w-16 fa-3x" fill="#ef4cc6" width="14"><path fill="#ef4cc6" d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z" class=""></path></svg>
								Logout
							</a>
						</div>
						<div class="desktop">
								<ul>
									<li>
										<a href="/dashboard">
										<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-cog fa-w-16 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z" class=""></path></svg>
											Dashboard
									</a>
									</li>
									<li>
										<a href="/orders">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z" class=""></path></svg>
											Orders
										</a>
									</li>
									<li>
										<a href="/subscriptions" class="current">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="undo" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-undo fa-w-16 fa-3x" fill="#fff" width="14"><path fill="#fff" d="M212.333 224.333H12c-6.627 0-12-5.373-12-12V12C0 5.373 5.373 0 12 0h48c6.627 0 12 5.373 12 12v78.112C117.773 39.279 184.26 7.47 258.175 8.007c136.906.994 246.448 111.623 246.157 248.532C504.041 393.258 393.12 504 256.333 504c-64.089 0-122.496-24.313-166.51-64.215-5.099-4.622-5.334-12.554-.467-17.42l33.967-33.967c4.474-4.474 11.662-4.717 16.401-.525C170.76 415.336 211.58 432 256.333 432c97.268 0 176-78.716 176-176 0-97.267-78.716-176-176-176-58.496 0-110.28 28.476-142.274 72.333h98.274c6.627 0 12 5.373 12 12v48c0 6.627-5.373 12-12 12z" class=""></path></svg>
											Subscriptions
										</a>
									</li>
									<li>
										<a href="/downloads">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cloud-download-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="svg-inline--fa fa-cloud-download-alt fa-w-20 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z" class=""></path></svg>
											Downloads
										</a>
									</li>
									<li>
										<a href="/payments">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="credit-card" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-credit-card fa-w-18 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M0 432c0 26.5 21.5 48 48 48h480c26.5 0 48-21.5 48-48V256H0v176zm192-68c0-6.6 5.4-12 12-12h136c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H204c-6.6 0-12-5.4-12-12v-40zm-128 0c0-6.6 5.4-12 12-12h72c6.6 0 12 5.4 12 12v40c0 6.6-5.4 12-12 12H76c-6.6 0-12-5.4-12-12v-40zM576 80v48H0V80c0-26.5 21.5-48 48-48h480c26.5 0 48 21.5 48 48z" class=""></path></svg>
											Payment methods
										</a>
									</li>
									<li>
										<a href="/details">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-user fa-w-14 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z" class=""></path></svg>
											Account details
										</a>
									</li>
									<li>
										<a href="/coupons">
											<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="tag" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-tag fa-w-16 fa-3x" fill="#1dd1e5" width="14"><path fill="#1dd1e5" d="M0 252.118V48C0 21.49 21.49 0 48 0h204.118a48 48 0 0 1 33.941 14.059l211.882 211.882c18.745 18.745 18.745 49.137 0 67.882L293.823 497.941c-18.745 18.745-49.137 18.745-67.882 0L14.059 286.059A48 48 0 0 1 0 252.118zM112 64c-26.51 0-48 21.49-48 48s21.49 48 48 48 48-21.49 48-48-21.49-48-48-48z" class=""></path></svg>
											Coupons
										</a>
									</li>
								</ul>
								<a href="/logout" class="logout">
								<svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="power-off" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-power-off fa-w-16 fa-3x" fill="#ef4cc6" width="14"><path fill="#ef4cc6" d="M400 54.1c63 45 104 118.6 104 201.9 0 136.8-110.8 247.7-247.5 248C120 504.3 8.2 393 8 256.4 7.9 173.1 48.9 99.3 111.8 54.2c11.7-8.3 28-4.8 35 7.7L162.6 90c5.9 10.5 3.1 23.8-6.6 31-41.5 30.8-68 79.6-68 134.9-.1 92.3 74.5 168.1 168 168.1 91.6 0 168.6-74.2 168-169.1-.3-51.8-24.7-101.8-68.1-134-9.7-7.2-12.4-20.5-6.5-30.9l15.8-28.1c7-12.4 23.2-16.1 34.8-7.8zM296 264V24c0-13.3-10.7-24-24-24h-32c-13.3 0-24 10.7-24 24v240c0 13.3 10.7 24 24 24h32c13.3 0 24-10.7 24-24z" class=""></path></svg>
									Logout
								</a>
						</div>
					</div>

					<div class="no-subscriptions-container">
							<div class="no-subscriptions-text">
								You have no active subscriptions
							</div>
							<h2 class="container-title secondary-title">
								<div class="gradient-title">
									choose your<br>
									subscription plan
								</div>
							</h2>
							<div class="main-subtitle">SWITCH PLANS OR CANCEL ANYTIME</div>
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
									<a href="/stage-two" class="btn-blue-grad">TRY TRIAL  >  STANDARD</a>
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
									<a href="/stage-two" class="btn-blue-grad">TRY TRIAL  >  PREMIUM</a>
								</div>
							</div>
					</div>
					<div class="has-subscription-container">
						<div class="has-subscr-item">
							<h2 class="container-title secondary-title">
								<div class="gradient-title shadowed">
									special offers on this month<br>
									in the premium subscription
								</div>
							</h2>
							<div class="yellow-subtitle">offers valid from 1-st to 31-th March</div>
							<div class="sounds-pack-slider">
								<!-- Swiper -->
								<div class="swiper-container sounds-pack-wrapper">
											<div class="swiper-wrapper best-seller">
												<div class="swiper-slide">
													<div class="prd best-seller-item">
														<div class="prd-label label-best">Best Seller</div>
														<div class="prd-label label-discount">-50%</div>
														<a class="prd-hd" href="#">
															<div class="inner" style="background-image: url('/assets/img/packs/bestsellerbg1-min.jpg');"></div>
															<img class="lzy_img" data-src="/assets/img/packs/best1pack.svg" alt="default box">
															<span class="prd-tit">Impacts Pack | 3600 elements</span>
															<span class="prd-tit-blue">Impacts Sound Effects</span>
														</a>

														<div class="prd-sndcld">
															<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
														</div>

														<div class="prd-ft">
															<div class="prd-ft-lt">
																<div class="prd-price">from <b>$36</b><span class="price-crossed">$72</span></div>
																<div class="prd-stars">
																	<div class="stars"></div>
																	<span class="prd-stars-cnt">146</span>
																</div>
																<div class="prd-seles">335 Seles</div>
															</div>

															<div class="prd-ft-rt">
																<button class="btn-purp-grad prd-buy act-buy">ADD TO CART</button>
																<a href="#" class="prd-more">More details about pack</a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="prd best-seller-item">
														<div class="prd-label label-best">Best Seller</div>
														<a class="prd-hd" href="#">
														<div class="inner" style="background-image: url('/assets/img/packs/bestsellerbg2-min.jpg');"></div>
															<img class="lzy_img" data-src="/assets/img/packs/best2pack.svg" alt="default box">
															<span class="prd-tit">Industrial Pack | 3000 elements</span>
															<span class="prd-tit-blue">Industrial Sound Effects</span>
														</a>

														<div class="prd-sndcld">
															<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
														</div>

														<div class="prd-ft">
															<div class="prd-ft-lt">
																<div class="prd-price">from <b>$36</b></div>
																<div class="prd-stars">
																	<div class="stars"></div>
																	<span class="prd-stars-cnt">146</span>
																</div>
																<div class="prd-seles">335 Seles</div>
															</div>

															<div class="prd-ft-rt">
																<button class="btn-purp-grad prd-buy act-buy">ADD TO CART</button>
																<a href="#" class="prd-more">More details about pack</a>
															</div>
														</div>
													</div>
												</div>
												<div class="swiper-slide">
													<div class="prd best-seller-item">
														<div class="prd-label label-best">Best Seller</div>
														<a class="prd-hd" href="#">
														<div class="inner mufasa" style="background-image: url('/assets/img/packs/bestsellerbg3.jpg');"></div>
															<img class="lzy_img" data-src="/assets/img/packs/pack2bundle.svg" alt="default box">
															<span class="prd-tit">Impact Pack | 3600 elements</span>
															<span class="prd-tit-blue">Impact Sound Effects</span>
														</a>

														<div class="prd-sndcld">
															<iframe width="100%" height="166" scrolling="no" frameborder="no" allow="autoplay" class="lazy-frame" data-src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/211157423&color=%23000000&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
														</div>

														<div class="prd-ft">
															<div class="prd-ft-lt">
																<div class="prd-price">from <b>$200</b></div>
																<div class="prd-stars">
																	<div class="stars"></div>
																	<span class="prd-stars-cnt">87</span>
																</div>
																<div class="prd-seles">122Seles</div>
															</div>

															<div class="prd-ft-rt">
																<button class="btn-purp-grad prd-buy act-buy">ADD TO CART</button>
																<a href="#" class="prd-more">More details about pack</a>
															</div>
														</div>
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
						<div class="has-subscr-item premium">
								<h2 class="container-title secondary-title">
									<div class="gradient-title shadowed">
										Available on premium subscription<br>
										<span class="underlined">from 1.03 to 1.04</span>
									</div>
								</h2>
								<div class="sounds-pack-slider">
									<!-- Swiper -->
									<div class="swiper-container premium-packs-wrapper">
												<div class="swiper-wrapper">
													<div class="swiper-slide">
															<div class="product-block">
																<img width="100%" class="lzy_img" data-src="/assets/img/basic-libary.png"/>
																<div class="product-title">BASIC LIBRARY | 360 elements</div>
																<a href="#" class="btn-purp-grad">Download</a>
															</div>
													</div>
													<div class="swiper-slide">
														<div class="product-block">
																<img width="100%" class="lzy_img" data-src="/assets/img/one-any-pack.png"/>
																<div class="product-title">
																	ONE ANY FREE PACK
																	<svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 0 24 24" width="12px" fill="#f9ed1d"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/></svg>
																</div>
																<a href="#" class="btn-purp-grad">Choose pack in shop</a>
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
					<div class="has-subscr-item no-padding">
						<h2 class="container-title secondary-title">
							<div class="gradient-title">
								Received packs<br>
								by premium subscription
							</div>
						</h2>
						<div class="cart-items">
							<div class="cart-item">
								<img class="lzy_img" data-src="/assets/img/packs/product-default.svg" width="70" height="56"/>
								<div class="product-name">
									<a href="#">Product name link</a>
								</div>
								<div class="item-info">
									<div class="label">Downloads remaining:</div>
									<div class="text">3 downloads</div>									
								</div>
								<div class="item-info">
									<div class="label">Expires:</div>
									<div class="text">Never</div>								
								</div>
								<div class="product-actions">
									<a href="#" class="btn-purp-grad">Download</a>
								</div>
							</div>
							<div class="cart-item">
								<img class="lzy_img" data-src="/assets/img/packs/construction-default-min.svg" width="70" height="56"/>
								<div class="product-name">
									<a href="#">Product name link</a>
								</div>
								<div class="item-info">
									<div class="label">Downloads remaining:</div>
									<div class="text">2 downloads</div>									
								</div>
								<div class="item-info">
									<div class="label">Expires:</div>
									<div class="text">Never</div>								
								</div>
								<div class="product-actions">
									<a href="#" class="btn-purp-grad">Download</a>
								</div>
							</div>
						</div>
					</div>
					<div class="has-subscr-item has-padding">
						<h2 class="container-title secondary-title">
							<div class="gradient-title">
								Subscription details
							</div>
						</h2>
						<div class="plan-details-line">
							<div class="plan">
								Your plan: <span>PREMIUM</span>										
							</div>
							<div class="expires">
								Your plan: <span>15.11.2020</span>	
							</div>
						</div>
						<div class="yellow-subtitle">Subscription renew automatically</div>
						<div class="plan-details-actions">
							<a href="#" class="btn-purp-grad">
								<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="12px" viewBox="0 0 24 24" width="12px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/><path d="M12,20c-4.41,0-8-3.59-8-8s3.59-8,8-8s8,3.59,8,8S16.41,20,12,20 M12,22c5.52,0,10-4.48,10-10c0-5.52-4.48-10-10-10 C6.48,2,2,6.48,2,12C2,17.52,6.48,22,12,22L12,22z M11,12l0,4h2l0-4h3l-4-4l-4,4H11z"/></g></svg>
								Change plan
							</a>
							<a href="#" class="btn-blue-grad">
								<svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="12px" viewBox="0 0 24 24" width="12px" fill="#FFFFFF"><g><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/><rect fill="none" height="24" width="24"/></g><g><g/><path d="M12,5V1L7,6l5,5V7c3.31,0,6,2.69,6,6s-2.69,6-6,6s-6-2.69-6-6H4c0,4.42,3.58,8,8,8s8-3.58,8-8S16.42,5,12,5z"/></g></svg>
								Renew your subscription
								<span class="desktop"> for 3-12 months with a discount of up to 30%</span>
							</a>
							<a href="#" class="btn-gray">
								<svg xmlns="http://www.w3.org/2000/svg" height="12px" viewBox="0 0 24 24" width="12px" fill="#F21E73"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg>
								Cancel subscription
							</a>
						</div>
						<div class="change-plan-container">
							<div class="title">Change streaming plan</div>
							<div class="item">
								<div class="plan-name">PREMIUM
									<div class="plan-price">
										$15.50<span>/mo</span>							
									</div>
								</div>
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
								<div class="plan-actions">
									<a href="#" class="btn-purp-grad current">
										<img width="78" class="lzy_img" data-src="/assets/img/current-badge.png"/>
										<span class="mobile">$15.50<span>/mo</span></span>
										<span class="desktop">Your current plan</span>
									</a>
								</div>
							</div>
							<div class="item">
								<div class="plan-name">STANDARD
									<div class="plan-price">
										$9.00<span>/mo</span>							
									</div>
								</div>
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
								<div class="plan-actions">
									<a href="#" class="btn-purp-grad">
										<img width="78" class="lzy_img" data-src="/assets/img/current-badge.png"/>
										<span class="mobile">$9.00<span>/mo</span></span>
										<span class="desktop">Select this plan</span>	
									</a>
								</div>
							</div>
							<div class="recommendations-container">
								<div class="title">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#4c4f57"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92C13.45 12.9 13 13.5 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41 0-1.1-.9-2-2-2s-2 .9-2 2H8c0-2.21 1.79-4 4-4s4 1.79 4 4c0 .88-.36 1.68-.93 2.25z"/></svg>
									what happens after you change your plan?
								</div>
								<div class="descr">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#4c4f57"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
									The existing plan is canceled, and you get the applicable refund for it.								
								</div>
								<div class="descr">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#4c4f57"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
									The new plan is effective immediately, and you receive a charge for the new plan.								
								</div>
								<div class="descr">
									<svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#4c4f57"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z"/></svg>
									Your monthly billing date changes to the date you change your plan.								
								</div>
							</div>										
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
