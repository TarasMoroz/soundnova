let swiper1 = new Swiper(".main-pack-wrapper", {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let swiper2 = new Swiper(".new-products-wrapper", {
    slidesPerView: 1,
    spaceBetween: 35,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
    },
});

if (window.innerWidth > 800) {
    let swiper3 = new Swiper(".testimonials-video-wrapper-mobile", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    let videotTestimonials3 = new Swiper(".video-testimonials", {
        slidesPerView: 3,
        spaceBetween: 30,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
} else {
    let swiper4 = new Swiper(".testimonials-video-wrapper-mobile", {
        slidesPerView: 1,
        spaceBetween: 35,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    let videotTestimonials4 = new Swiper(".video-testimonials", {
        slidesPerView: 1,
        spaceBetween: 35,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
}

//SALE COUNTER

// Update the count down every 1 second
let timerUpdate = setInterval(function () {
    // Get today's date and time
    let currentDate = new Date().getTime();

    // Find the distance between now and the count down date
    let distance = countDownDate - currentDate;

    // Time calculations for days, hours, minutes and seconds
    let days = Math.floor(distance / (1000 * 60 * 60 * 24));
    let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    let seconds = Math.floor((distance % (1000 * 60)) / 1000);

    let daysContainer = document.getElementsByClassName("days");
    let hoursContainer = document.getElementsByClassName("hours");
    let minutesContainer = document.getElementsByClassName("minutes");
    let secondsContainer = document.getElementsByClassName("seconds");
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
