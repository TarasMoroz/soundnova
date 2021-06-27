let subscProducts =  new Swiper('.new-products-wrapper', {
    slidesPerView: 1,
    spaceBetween: 35,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
      },
  }); 

  if (window.innerWidth > 800) {
    let subscroverViews =  new Swiper('.overviews-wrapper', {
      slidesPerView: 3,
      spaceBetween: 45,
      navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
    }); 
  } else {
    let subscroverViewsMob =  new Swiper('.overviews-wrapper', {
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