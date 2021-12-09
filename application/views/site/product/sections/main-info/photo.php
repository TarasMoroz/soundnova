<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="photo-wrapper">
  <? if($product['adv1']||$product['adv2']||$product['adv3']): ?>
    <div class="main-pack-slider-texts">
        <? if($product['adv1']): ?>
        <div class="main-pack-slider-texts-col">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          <span><?=$product['adv1']?></span>
        </div>
        <? endif; ?>
        <? if($product['adv2']): ?>		
        <div class="main-pack-slider-texts-col">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          <span><?=$product['adv2']?></span>
        </div>
        <? endif; ?>
        <? if($product['adv3']): ?>	
        <div class="main-pack-slider-texts-col">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"><path d="M13.3 4L6 11.3 2.7 8" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
          <span><?=$product['adv3']?></span>
        </div>
        <? endif; ?>
    </div>
  <? endif; ?>

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

    $im = '/assets/img/packs/main-pack-min.svg'; // Это для тестов
  ?>

  <img src="<?=$im?>" alt="Product Name" class="product-image">

  <? if($mainVariant['price_old'] > $mainVariant['price']): ?>
    <div class="discount">-<?=ceil(($mainVariant['price_old']-$mainVariant['price'])/($mainVariant['price_old']/100))?>%</div>
  <? endif; ?>
</div>