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




  //Coupon counter


// Update the count down every 1 second
let timerUpdate = setInterval(function() {

  // Get today's date and time
  let currentDate = new Date().getTime();

  // Find the distance between now and the count down date
  let distance = countDownDate - currentDate;

  // Time calculations for days, hours, minutes and seconds
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);


  let daysContainer = document.getElementsByClassName('days');
  let hoursContainer = document.getElementsByClassName('hours');
  let minutesContainer = document.getElementsByClassName('minutes');
  let secondsContainer = document.getElementsByClassName('seconds');
	daysContainer[0].innerHTML = days;
	hoursContainer[0].innerHTML = hours;
	minutesContainer[0].innerHTML = minutes;
	secondsContainer[0].innerHTML = seconds;


  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(timerUpdate);
  }
}, 1000);