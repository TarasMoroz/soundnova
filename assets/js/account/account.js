$('.choosen-value').on('click',function() {
    $('.dropdown ul').toggle();
})


if (window.innerWidth >= 768) {
    let accountSubscrSlider = new Swiper('.sounds-pack-wrapper', {
        slidesPerView: 2,
        spaceBetween: 40,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          pagination: {
            el: '.swiper-pagination',
          },
    });
  } else {
    let accountSubscrSlider = new Swiper('.sounds-pack-wrapper', {
        slidesPerView: 1,
        spaceBetween: 45,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          pagination: {
            el: '.swiper-pagination',
          },
    });
  }

  if (window.innerWidth >= 768) {
    let accountproductSlider = new Swiper('.premium-packs-wrapper', {
        slidesPerView: 2,
        spaceBetween: 40,
    });
  } else {
    let accountproductSlider = new Swiper('.premium-packs-wrapper', {
        slidesPerView: 1,
        spaceBetween: 45,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          pagination: {
            el: '.swiper-pagination',
          },
    });
  }


//switch payment method tabs
jQuery('#payment-tabs li a:not(:first)').addClass('inactive');
jQuery('.payment-tab-container').hide();
jQuery('.payment-tab-container:first').show();

jQuery('#payment-tabs li a').click(function(){

    var t = jQuery(this).parent().index();
  if(jQuery(this).hasClass('inactive')){ //this is the start of our condition 
    jQuery('#payment-tabs li a').addClass('inactive');           
    jQuery(this).removeClass('inactive');
    
    jQuery('.payment-tab-container').hide();
    jQuery('.payment-tab-container').eq(t).fadeIn('slow');
 }
  });

  jQuery('.switcher .checkbox').on('click',function() {
      jQuery(this).toggleClass('active');
  })