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

