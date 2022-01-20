<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="price">
  <div class="text">price</div>
  <div class="current">$<?=$mainVariant['price']?></div>
  
  <? if($mainVariant['price_old'] > $mainVariant['price']): ?>
    <div class="old">$<?=$mainVariant['price_old']?></div>
  <? endif; ?>
</div>