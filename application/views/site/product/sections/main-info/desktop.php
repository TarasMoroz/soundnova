<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- DESKTOP -->
<section class="main-info">
  <div class="product-preview">
    <!-- PHOTO AREA -->
    <div class="photo">
      <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'photo'); ?>
    </div>

    <!-- DETAILS AREA -->
    <div class="details">
      <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'content-info'); ?>
    </div>

    <!-- BUY AREA  -->
    <div class="buy">
      <div class="card dark space-bg sale">
        <h1 class="container-title product-title txt-uppercase b-margin">
          <span class="gradient-title"><?=$product['name']?></span>
        </h1>
        <div class="d-flex jc-between ai-center b-margin">
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'price'); ?>
          <? $this->load->view('modules/review-stars', [
            'starsCount' => 4,
            'reviewsCount' => $product['cnt_reviews']
          ]); ?>
        </div>
        <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'edition-select'); ?>
        <div style="margin:0 5px;">
          <!-- TODO: Music player here, do it global! -->
          <? $this->load->view('modules/sale-timer', [
            'type' => 'normal',
            'title' => 'BLACK FRIDAY'
          ]); ?>
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'buy-buttons'); ?>
        </div>
      </div>
    </div>
  </div>
</section>