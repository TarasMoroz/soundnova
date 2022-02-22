<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  // [
  //   'productId' => 0,
  //   'productName' => 'Impacts Pack | 3600 elements',
  //   'productImg' => '/assets/img/packs/best1pack.svg',
  //   'backgroundImg' => '/assets/img/packs/bestsellerbg1-min.jpg',
  //   'label' => 'Best Seller',
  //   'price' => 72,
  //   'discount' => 50,
  //   'salesCount' => 335,
  //   'starsCount' => 146,
  // ]
?>

<div class="product-card">
  <?php if ($label) { ?>
    <div class="top-label right"><?= $label ?></div>
  <?php } ?>
  <?php if ($discount && $discount > 0) { ?>
    <div class="top-label left">-<?= $discount ?>%</div>
  <?php } ?>
  <a class="head" href="#">
    <div class="background" style="background-image: url(<?= $backgroundImg ?>);"></div>
    <img class="lzy_img product-image" data-src="<?= $productImg ?>" alt="default box">
    <span class="product-title"><?= $productName ?></span>
    <!-- <span class="prd-tit-blue">Impacts Sound Effects</span> -->
  </a>

  <div class="player-wrapper">
    <? $this->load->view('modules/player', [
      'key' => 'file_details',
      'buy_button' => false,
      'artist_name' => false,
      'track_title' => false,
      'sound' => [
        'id' => 0
      ]
    ]); ?>
  </div>

  <div class="cols">
    <div class="col">
      <?php if ($discount && $discount > 0) { ?>
        <div class="product-price">from <b>$<?= $price * ($discount / 100) ?></b><span class="price-crossed">$<?= $price ?></span></div>
      <?php } else { ?>
        <div class="product-price">from <b>$<?= $price ?></b></div>
      <?php } ?>
      <div class="product-stars">
        <div class="stars"></div>
        <span class="product-stars-count"><?= $starsCount ?></span>
      </div>
      <div class="product-seles"><?= $salesCount ?> Seles</div>
    </div>

    <div class="col">
      <button class="btn-purp-grad product-buy act-buy">ADD TO CART</button>
      <a href="#" class="product-more">More details about pack</a>
    </div>
  </div>
</div>