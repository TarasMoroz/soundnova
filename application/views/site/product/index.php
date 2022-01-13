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
					<? $this->load->view($basePath . 'sections/file-details', [
						'direction' => 'left'
					]); ?>
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

			<!-- INCLUDED SOUNDS -->
			<div class="full-width-container bg-blue-wave">
				<div class="inner-content-container">
					<? $this->load->view('modules/list-of-sounds', [
						'title' => 'INCLUDED SOUNDS',
						'text' => 'you can purchase each sound of this pack individually for $3',
					]); ?>
				</div>
			</div>

			<!-- WHAT INSIDE A PRODUCT -->
			<div class="full-width-container">
				<div class="inner-content-container w-md">
					<? $this->load->view($basePath . 'sections/file-details', [
						'direction' => 'right'
					]); ?>
				</div>
			</div>

			<!-- COMPATIBLE SOFTWARE -->
			<div class="full-width-container compatible-software-container">
				<div class="inner-content-container">
					<? $this->load->view($basePath . 'sections/compatible-software'); ?>
				</div>
			</div>

  </main>

	<div id="popup-tooltip-wrapper">
		<div id="popup-tooltip">
			<div id="popup-tooltip-head">
				<span id="popup-tooltip-head-text">
				DESIGNED, CONSTRUCTION KIT, BUNDLE - WHAT'S THE DIFFERENCE?
									</span>
				<div id="popup-tooltip-close">
					<i class="closesvg"></i>
				</div>
			</div>

			<div id="popup-tooltip-content">
				<div class="title-descr-block">
					<h3>CONSTRUCTION KIT – THE SOURCE SOUNDS</h3>
					A CONSTRUCTION KIT generally contains thousands of sounds as raw as possible and only as processed as needed for a specific topic, perfectly organized to make it easy for you to use them. Carefully selected, those sounds give you all the freedom and possibilities you need to design your own sounds within the given topic from scratch. For some topics it is difficult to provide recordings only, so you will find some pre-processed or synthesizer based sounds in those collections as well, but still only basic material, since we don’t want to offer it compressed to the maximum or similarly mutated. After all, the CONSTRUCTION KIT serves as such for ourselves, namely in the following process of creating the respective DESIGNED collection.
				</div>
				<div class="title-descr-block">
					<h3>DESIGNED – THE PRE-DESIGNED & READY-TO-USE SOUNDS</h3>
					The DESIGNED collections feature fully designed sounds which originate from the CONSTRUCTION KIT stock. The sounds are of a specific topic and ready to use: mixed, processed, compressed, mastered etc. They can be easily put into all kind of projects, for example trailers, commercials, movies, TV shows and so forth or used as in-game sounds. This collection provides a quick and easy workflow and you can still use those sounds as a basic and layer, stretch or otherwise adjust them to suit your specific needs.
				</div>
				<div class="title-descr-block">
					<h3>BUNDLE – THE MONEY-SAVER</h3>
					The bundle is the best option as it contains both, the DESIGNED and the CONSTRUCTION KIT at a reduced price.
				</div>
			</div>
		</div>
	</div>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>