<div class="catalog-top-sales-block">
  <div class="catalog-top-sales-inner mobile p-1">
    <div class="bundle-title mb-1 mt-1">BLACK FRIADAY SALE</div>
    <div class="d-flex ai-center">
      <div class="flex-1 mr-1">
        <div class="image-wrapper">
          <div class="shadow"></div>
          <img class="lzy_img" data-src="/assets/img/catalog-sales-bundle-min.svg">
        </div>
      </div>
      <div class="flex-1">
        <a href="#" class="btn-purp-grad btn-main-sale"><small>BUY</small><span>$299</span><small class="txt-line-through">$1000</small></a>
        <? $this->load->view('modules/sale-timer', [
          'type' => 'simple',
          'title' => null
        ]); ?>
      </div>
    </div>
  </div>

  <div class="catalog-top-sales-inner desktop">
    <div class="catalog-sales-left">
      <!-- <img class="lzy_img" data-src="/assets/img/summer_sale.svg"> -->
      <div>
        <div class="bundle-title">BLACK FRIADAY SALE</div>
        <div class="bundle-title-blue">Ultimate bundle offer</div>
      </div>
      <div>
        <a href="#" class="btn-purp-grad btn-main-sale"><small>BUY</small><span>$299</span><small class="txt-line-through">$1000</small><span>SAVE -71%</span></a>
      </div>
    </div>
    <div class="catalog-sales-middle">
      <div class="shadow"></div>
      <img class="lzy_img" data-src="/assets/img/catalog-sales-bundle-min.svg">
    </div>
    <div class="catalog-sales-right">
      <? $this->load->view('modules/sale-timer', [
          'type' => 'normal',
          'title' => 'BLACK FRIDAY'
        ]); ?>
    </div>
  </div>
</div>