<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="product-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main class="main-content <?= $mainVariant['variant'] ?>">
  
			<div class="bg-castle backround-transition">

				<!-- LOAD MAIN PRODUCT INFO -->
				<div class="full-width-container">
					<div class="inner-content-container w-md">
						<? $this->load->view($basePath . 'sections/main-info'); ?>
					</div>
				</div>

				<!-- PRODUCT DESCRIPTION -->
				<div class="full-width-container">
					<div class="inner-content-container">
						<? $this->load->view('modules/text-and-video', [
							'title' => $product['name'] . ' sound element',
							'text' => $product['cont_description'],
							'videoImage'	=> substr($product['cont_v_img_preview'], 0, -4).'_570.jpg',
							'videoSource'	=> $product['cont_v_src']
						]); ?>
					</div>
				</div>

			</div>

			<!-- WHAT INSIDE A PRODUCT -->
			<div class="full-width-container">
				<div class="inner-content-container w-md">
					<? $this->load->view($basePath . 'sections/file-details'); ?>
				</div>
			</div>

			<!-- PRODUCT DESCRIPTION -->
			<div class="full-width-container">
				<div class="inner-content-container">
					<? $this->load->view('modules/text-and-background', [
						'title' => $mainVariant['cont3_title'],
						'text' => $mainVariant['cont3_desc'],
						'backgroundImage'	=> $mainVariant['cont3_img_bg'],
						'prodVariants' => $prodVariants
					]); ?>
				</div>
			</div>

  </main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>