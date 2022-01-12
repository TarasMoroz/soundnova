<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<h2 class="txt-uppercase txt-center"><span class="gradient-title"><?= $title ?></span></h2>

<div class="text-and-video">
  <div class="text"><?= $text ?></div>
  <div class="video">
    <div class="content" style="background-image: url('/assets/<?= $videoImage ? 'media/video_preview/' . $videoImage : 'img/no-video.jpg'  ?>');">
      <? if($videoSource): ?>
        <button class="bundle-play video-open" data-code="<?= $videoSource ?>">
          <div class="inner">
            <i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
          </div>
        </button>
      <? endif; ?>
    </div>
  </div>
</div>
