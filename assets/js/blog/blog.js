$('.choosen-value').on('click',function() {
    $('.dropdown ul').toggle();
})

let blogSliderOne = new Swiper('.category-posts-wrapper-one', {
    slidesPerView: 1,
    spaceBetween: 40,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
    },
});