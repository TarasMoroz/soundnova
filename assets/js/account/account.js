$('.choosen-value').on('click',function() {
    $('.dropdown ul').toggle();
})


if (window.innerWidth >= 768) {
    let accountSubscrSlider = new Swiper('.sounds-pack-wrapper', {
        slidesPerView: 2,
        spaceBetween: 35,
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