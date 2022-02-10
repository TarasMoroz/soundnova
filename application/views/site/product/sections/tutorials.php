
<h2 class="txt-uppercase txt-center mb-4">
  <span class="gradient-title shadowed">Tutorials</span>
</h2>
<div class="overviews-slider">
    <!-- Swiper -->
    <div class="swiper-container overviews-wrapper">
      <div class="swiper-wrapper">
      <? for ($i=1; $i <= 3; $i++): ?>

        <div class="swiper-slide">
          <div class="product-video">
            <div class="prod-vid" style="background-image: url('/assets/img/reviews/<?=$i?>.jpg');">
              <button class="bundle-play video-open" data-code="kPkKeGBSbCc">
                <div class="inner">
                  <i class="playsvg"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 16 16"><path d="M15 8L3 14V2l12 6zm0 0" fill-rule="evenodd"></path></svg></i>
                </div>
              </button>
            </div>
          </div>
            <div class="subtext">
            Title of the tutorial <?=$i?>
            </div>
        </div>
      <? endfor; ?>
      </div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
  </div>
</div>