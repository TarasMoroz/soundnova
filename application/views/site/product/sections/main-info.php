<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  // Get path to the section folder, for load additional views
  $pathToCurrentSection = $basePath . basename(__DIR__) . DIRECTORY_SEPARATOR . basename(__FILE__, ".php");

  // TODO: CAN WE USE $deviceType PARAM for load view properly???
  // $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . $deviceType); // Load view by device type "desktop" or "mobile"
        
?>
<div class="full-width-container <?= $deviceType ?>">
  <div class="inner-content-container w-md">

    <section class="main-info">
      <h1 class="container-title text-uppercase mb-2">
        <span class="gradient-title"><?=$product['name']?></span>
      </h1>

      <div class="product-preview">
        <!-- PHOTO AREA -->
        <div class="photo">
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'photo'); ?>
        </div>

        <!-- DETAILS AREA -->
        <div class="details">
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'price'); ?>
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'edition-select'); ?>
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'review-stars'); ?>
        </div>

        <!-- BUY AREA  -->
        <div class="buy">
            <!-- Player Here - Must Be Global -->
            <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'content-info'); ?>
        </div>
      </div>

    </section>
  </div>
</div>