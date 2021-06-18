if (window.innerWidth < 800) {
    let swiperSoundDesign =  new Swiper('.why-important-wrapper', {
      slidesPerView: 1,
      spaceBetween: 45,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    }); 
    let swiper4 =  new Swiper('.testimonials-video-wrapper-mobile', {
      slidesPerView: 1,
      spaceBetween: 35,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    }); 
    let videotTestimonials4 =  new Swiper('.video-testimonials', {
      slidesPerView: 1,
      spaceBetween: 35,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    });
  } else {
    let swiperSoundDesign =  new Swiper('.why-important-wrapper', {
        slidesPerView: 3,
        spaceBetween: 25,
        navigation: 'hide'
      }); 

      let swiper3 =  new Swiper('.testimonials-video-wrapper-mobile', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
      }); 
      let videotTestimonials3 =  new Swiper('.video-testimonials', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
      });
  }

  //our works filters

	if($(window).width() < 1023){
    $(document).on('click', '.choosen-filter', function(event){
      $(this).toggleClass('act');
      $('.filters-dropdown').toggle();
    });
    $('.filters-dropdown .btn').on('click',function() {
      let filterName = $(this).text();
      $('.choosen-filter .text').text(filterName);
      $('.filters-dropdown').hide();
      $('.choosen-filter').removeClass('act');
    });
	}



  'use strict';

var Shuffle = window.Shuffle;

var Demo = function (element) {
  this.categories = Array.from(document.querySelectorAll('.js-colors button'));

  this.shuffle = new Shuffle(element, {
    easing: 'cubic-bezier(0.165, 0.840, 0.440, 1.000)', // easeOutQuart
    sizer: '.the-sizer',
  });

  this.filters = {
    categories: [],
  };

  this._bindEventListeners();
};

/**
 * Bind event listeners for when the filters change.
 */
Demo.prototype._bindEventListeners = function () {
  this._onColorChange = this._handleColorChange.bind(this);


  this.categories.forEach(function (button) {
    button.addEventListener('click', this._onColorChange);
  }, this);
};


/**
 * Get the values of each `active` button.
 * @return {Array.<string>}
 */
Demo.prototype._getCurrentColorFilters = function () {
  return this.categories.filter(function (button) {
    return button.classList.contains('active');
  }).map(function (button) {
    return button.getAttribute('data-value');
  });
};



/**
 * A color button was clicked. Update filters and display.
 * @param {Event} evt Click event object.
 */
Demo.prototype._handleColorChange = function (evt) {
  var button = evt.currentTarget;

  // Treat these buttons like radio buttons where only 1 can be selected.
  if (button.classList.contains('active')) {
    button.classList.remove('active');
  } else {
    this.categories.forEach(function (btn) {
      btn.classList.remove('active');
    });

    button.classList.add('active');
  }

  this.filters.categories = this._getCurrentColorFilters();
  this.filter();
};

/**
 * Filter shuffle based on the current state of filters.
 */
Demo.prototype.filter = function () {
  if (this.hasActiveFilters()) {
    this.shuffle.filter(this.itemPassesFilters.bind(this));
  } else {
    this.shuffle.filter(Shuffle.ALL_ITEMS);
  }
};

/**
 * If any of the arrays in the `filters` property have a length of more than zero,
 * that means there is an active filter.
 * @return {boolean}
 */
Demo.prototype.hasActiveFilters = function () {
  return Object.keys(this.filters).some(function (key) {
    return this.filters[key].length > 0;
  }, this);
};

/**
 * Determine whether an element passes the current filters.
 * @param {Element} element Element to test.
 * @return {boolean} Whether it satisfies all current filters.
 */
Demo.prototype.itemPassesFilters = function (element) {
  var categories = this.filters.categories;
  var category = element.getAttribute('data-category');


  // If there are active color filters and this color is not in that array.
  if (categories.length > 0 && !categories.includes(category)) {
    return false;
  }

  return true;
};

document.addEventListener('DOMContentLoaded', function () {
  window.demo = new Demo(document.querySelector('.js-shuffle'));
});