<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- MOBILE -->
<section class="main-info">
  <h1 class="container-title txt-uppercase mb-2">
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
      <div class="mt-2">
        <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'edition-select'); ?>
      </div>
      <div class="mt-2">
        <? $this->load->view('modules/review-stars', [
          'starsCount' => 4,
          'reviewsCount' => $product['cnt_reviews']
        ]); ?>
      </div>
    </div>

    <!-- BUY AREA  -->
    <div class="buy">
        <!-- TODO: Music player here, do it global! -->
        <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'content-info'); ?>
        <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'sale-timer'); ?>
        <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'buy-buttons'); ?>
    </div>
  </div>
</section>