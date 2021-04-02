let swiper1 = new Swiper('.main-pack-wrapper', {
    slidesPerView: 5,
    spaceBetween: 25,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  });

let swiper2 =  new Swiper('.new-products-wrapper', {
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