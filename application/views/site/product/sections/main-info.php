<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="full-width-container">
  <div class="inner-content-container w-md">
    <section class="product main-info <?= $deviceType ?>">

      <?php
        // Get path to the section folder, for load additional views
        $pathToCurrentSection = $basePath . basename(__DIR__) . DIRECTORY_SEPARATOR . basename(__FILE__, ".php");

        // TODO: CAN WE USE $deviceType PARAM for load view properly???
        // $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . $deviceType); // Load view by device type "desktop" or "mobile"
      ?>

      <!-- PHOTO AREA -->
      <div class="photo">
        <? 
          $im = '/assets/img/packs/product-default.svg';
          if($mainVariant['img_box']) $im = '/assets/media/product_variant-img_box/'.substr($mainVariant['img_box'], 0, -4).'.svg'; 
          
          // дефолтный бокс бандла
          if(!$mainVariant['img_box'] && isset($prodVariants['bundle'])){
            $im = '/assets/img/packs/main-pack-min.svg';
          }
          // дефолтный бокс десигн
          if(!$mainVariant['img_box'] && isset($prodVariants['design'])){
            $im = '/assets/img/packs/product-default.svg';
          }
          // дефолтный бокс конструкт
          if(!$mainVariant['img_box'] && isset($prodVariants['construct'])){
            $im = '/assets/img/packs/construction-default-min.svg';
          }
        ?>

        <img src="<?=$im?>" alt="Product Name" class="product-image">

        <? if($mainVariant['price_old'] > $mainVariant['price']): ?>
          <div class="discount">-<?=ceil(($mainVariant['price_old']-$mainVariant['price'])/($mainVariant['price_old']/100))?>%</div>
        <? endif; ?>
      </div>

      <!-- DETAILS AREA -->
      <div class="details">
        <? $this->load->view($pathToCurrentSection . DIRECTORY_SEPARATOR . '/price'); ?>
      </div>

      <!-- BUY AREA  -->
      <div class="buy">
          13231
      </div>

    </section>
  </div>
</div>