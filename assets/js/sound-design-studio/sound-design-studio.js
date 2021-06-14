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


  jQuery(document).ready(function() {    

    jQuery('#our-works-tabs li a:not(:first)').addClass('inactive');
    jQuery('.our-works-tab-container').hide();
    jQuery('.our-works-tab-container:first').show();
    jQuery('#our-works-tabs li a').click(function(){
        var t = jQuery(this).parent().index();
      if(jQuery(this).hasClass('inactive')){ //this is the start of our condition 
        jQuery('#our-works-tabs li a').addClass('inactive');           
        jQuery(this).removeClass('inactive');
        
        jQuery('.our-works-tab-container').hide();
        jQuery('.our-works-tab-container').eq(t).fadeIn('slow');
     }
      });
      
    });