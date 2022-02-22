<div id="reviews-container">
  <h2 class="txt-uppercase txt-center mb-4">
    <div class="gradient-title">Customer reviews</div>
  </h2>
  <div id="product-reviews">
    <div class="product-reviews-title"><b>17</b> reviews for <b>MAGIC PACK</b></div>
    <? for ($i=1; $i <= 3; $i++): ?>
    <div class="prod-rev">
      <div class="prod-rev-dash"></div>
      <div class="prod-rev-pic">
        <img src="/assets/img/avatar<?=$i?>.gif">
      </div>
      <div class="prod-rev-cont">
        <div class="prod-rev-name"><b>Stefan</b> Buyer</div>
        <div class="stars"></div>

        <div class="prod-rev-text">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
        </div>
      </div>
    </div>
    <? endfor; ?>
  </div>

  <button id="show-more-reviews">
    <i class="refreshsvg"></i>
  </button>

  <form id="add-review">
    <div class="add-review-inf">Your email address will not be published.<br> Required fields are marked <sup>*</sup></div>
    <div class="add-review-select-rate">
      <span>Your rating</span>
      <div class="starsadd">
        <i data-value="1" class="starsvg" data-active="1"></i>	
        <i data-value="2" class="starsvg"></i>	
        <i data-value="3" class="starsvg"></i>	
        <i data-value="4" class="starsvg"></i>	
        <i data-value="5" class="starsvg"></i>
      </div>
    </div>

    <div class="add-review-row">
      <div class="add-review-label">Name <sup>*</sup></div> 
      <input type="text" name="name" placeholder="Name *">
    </div>

    <div class="add-review-row">
      <div class="add-review-label">Email <sup>*</sup></div> 
      <input type="text" name="email" placeholder="Email *">
    </div>

    <div class="add-review-row">
      <div class="add-review-label">Your review <sup>*</sup></div> 
      <textarea name="review" placeholder="Your review *"></textarea>
    </div>
    <div class="add-review-row">
      <div class="add-review-label"></div> 
      <button class="btn-purp-grad btn-main-sale">Submit</button>
    </div>
  </form>
</div>