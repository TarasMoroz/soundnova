<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<? $this->load->view('desktop/blocks/v_head'); ?>

<body id="product-page">

	<!-- header -->
	<? $this->load->view('desktop/blocks/v_header'); ?>

	<main class="main-content">
    <div class="full-width-container">
      <div class="inner-content-container w-md">
        
        <!-- LOAD MAIN PRODUCT INFO -->
        <? $this->load->view($basePath . 'sections/main-info'); ?>

      </div>
    </div>
  </main>

	<!-- footer -->
	<? $this->load->view('desktop/blocks/v_footer'); ?>
</body>
</html>