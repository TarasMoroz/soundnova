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
let blogSliderTwo = new Swiper('.category-posts-wrapper-two', {
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
let blogSliderThree = new Swiper('.category-posts-wrapper-three', {
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