<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="product-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main class="main-content <?= $mainVariant['variant'] ?>">
  
      <!-- LOAD MAIN PRODUCT INFO -->
			<div class="bg-castle bg-filter">
      	<? $this->load->view($basePath . 'sections/main-info'); ?>
			</div>

  </main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>