<div class="photo-wrapper">
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