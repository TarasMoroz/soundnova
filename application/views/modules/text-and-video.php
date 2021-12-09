<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div class="full-width-container">
  <div class="inner-content-container">

    <h2 class="gradient-title txt-uppercase txt-center"> <?=$product['name']?> sound element</h2>

    <div class="text-and-video">
      <div class="text"><?=$product['cont_description']?></div>
      <div class="video">
        <? if($product['cont_v_src']): ?>
          <div class="content" style="background-image: url('/assets/media/video_preview/<?= substr($product['cont_v_img_preview'], 0, -4).'_570.jpg'?>');">
            <button class="bundle-play video-open" data-code="<?=$product['cont_v_src']?>">
              <div class="inner">
                <i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
              </div>
            </button>
          </div>
        <? endif; ?>
      </div>
    </div>

  </div>
</div>