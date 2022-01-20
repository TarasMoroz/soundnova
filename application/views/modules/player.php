<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php 
  if (isset($sound['id']) && $key) {
?>
  <div id="sound_<?= $key ?>" class="player">
    <div class="btn-play">
      <button class="paused">
        <div class="inner">
          <i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
          <i class="pausesvg"><svg height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path d="M224,435.8V76.1c0-6.7-5.4-12.1-12.2-12.1h-71.6c-6.8,0-12.2,5.4-12.2,12.1v359.7c0,6.7,5.4,12.2,12.2,12.2h71.6   C218.6,448,224,442.6,224,435.8z"/><path d="M371.8,64h-71.6c-6.7,0-12.2,5.4-12.2,12.1v359.7c0,6.7,5.4,12.2,12.2,12.2h71.6c6.7,0,12.2-5.4,12.2-12.2V76.1   C384,69.4,378.6,64,371.8,64z"/></g></svg></i>
        </div>
      </button>
    </div>
    <div class="equalizer flex-1">
      <div class="progressbar"></div>
    </div>
    <?php if ($artist_name || $track_title) { ?>
      <div class="name d-flex flex-1">
        <?php if ($artist_name) { ?>
          <div class="artist">Sound Nova</div>
        <?php } ?>
        <?php if ($track_title) { ?>
          <div class="title"> 
            <span>Some Sound Effect Long Naming</span>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
    <div class="time d-flex ai-center jc-center">4:05</div>
    <?php if ($buy_button) { ?>
      <div class="btn-buy d-flex ai-center jc-center">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="shopping-cart" class="icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
          <path fill="currentColor" d="M528.12 301.319l47.273-208C578.806 78.301 567.391 64 551.99 64H159.208l-9.166-44.81C147.758 8.021 137.93 0 126.529 0H24C10.745 0 0 10.745 0 24v16c0 13.255 10.745 24 24 24h69.883l70.248 343.435C147.325 417.1 136 435.222 136 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-15.674-6.447-29.835-16.824-40h209.647C430.447 426.165 424 440.326 424 456c0 30.928 25.072 56 56 56s56-25.072 56-56c0-22.172-12.888-41.332-31.579-50.405l5.517-24.276c3.413-15.018-8.002-29.319-23.403-29.319H218.117l-6.545-32h293.145c11.206 0 20.92-7.754 23.403-18.681z"></path>
        </svg>
      </div>
    <?php } ?>
  </div>

  <script>
    (function () {
      let playerSoundId = null;
      let soundPreviewLink = '<?= $sound['preview'] ?>';
      let player = document.getElementById("sound_<?= $key ?>");
      let soundTitle = player.querySelector('.name .title');
      let playButton = player.querySelector(".btn-play button");

      if (soundTitle.clientWidth < soundTitle.scrollWidth) soundTitle.classList.add("runline"); 

      playButton.addEventListener('click', event => {
        playerSoundId = SoundnovaPlayer.playAudio(soundPreviewLink, player);
        // console.log("player_" + playerSoundId);
        // player.classList.add("player_" + playerSoundId);
      });
    })();
  </script>
<?php } else { ?>
  <div class="player error">SOUND NOT FOUND</div>
<?php } ?>