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


    if (window.innerWidth > 800) {
      let swiper3 =  new Swiper('.testimonials-video-wrapper-mobile', {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
      }); 
    } else {
      let swiper4 =  new Swiper('.testimonials-video-wrapper-mobile', {
        slidesPerView: 1,
        spaceBetween: 35,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
      }); 
    }
  


    
//SALE COUNTER

let countDownDate = new Date("Apr 25, 2021 15:37:25").getTime();

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

	daysContainer[1].innerHTML = days;
	hoursContainer[1].innerHTML = hours;
	minutesContainer[1].innerHTML = minutes;
	secondsContainer[1].innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(timerUpdate);
  }
}, 1000);


//load iframes deffered



document.addEventListener("DOMContentLoaded", function() {
  const imageObserver = new IntersectionObserver((entries, imgObserver) => {
      entries.forEach((entry) => {
          if (entry.isIntersecting) {
              const lazyImage = entry.target
              console.log("lazy loading ", lazyImage)
              lazyImage.src = lazyImage.dataset.src
              lazyImage.classList.remove("lzy_img");
              imgObserver.unobserve(lazyImage);
          }
      })
  });
  const arr = document.querySelectorAll('img.lzy_img')
  arr.forEach((v) => {
      imageObserver.observe(v);
  })


  const iframeObserver = new IntersectionObserver((entries, iframeObserver) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            const lazyIframe = entry.target
            console.log("lazy loading ", lazyIframe)
            lazyIframe.src = lazyIframe.dataset.src
            lazyIframe.classList.remove("lazy-frame");
            iframeObserver.unobserve(lazyIframe);
        }
    })
});

const array = document.querySelectorAll('iframe.lazy-frame')
array.forEach((n) => {
      imageObserver.observe(n);
  })
})

