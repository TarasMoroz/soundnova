<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="product-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main class="main-content <?= $mainVariant['variant'] ?>">
  
			<div class="bg-castle">
				<!-- LOAD MAIN PRODUCT INFO -->
      	<? $this->load->view($basePath . 'sections/main-info'); ?>
      	<div class="mt-11">
					<? $this->load->view('modules/text-and-video'); ?>
				</div>
			</div>

  </main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>