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
      <div class="card dark">
        <h1 class="container-title product-title text-uppercase mb-1 mt-1">
          <span class="gradient-title"><?=$product['name']?></span>
        </h1>
        <div class="d-flex jc-between ai-center">
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'price'); ?>
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'review-stars'); ?>
        </div>
        <div class="mt-1">
          <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'edition-select'); ?>
        </div>
        <div style="margin:0 5px;">
          <!-- TODO: Music player here, do it global! -->
          <div class="mt-1">
            <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'sale-timer'); ?>
          </div>
          <div class="mt-2">
            <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . 'buy-buttons'); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>