
$(document).ready(function() {
	var prodsRow = new Swiper ('#user-reviews', {
        direction: 'horizontal',
        loop: false,
        autoHeight:false,
        centeredSlides: true,
        slidesPerView:3,
        spaceBetween:12,
        grapCursor:true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});