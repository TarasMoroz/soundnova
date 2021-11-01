//timerDate setting

let countDownDate = new Date("May 25, 2022 15:37:25").getTime();

//load images and iframes deffered

document.addEventListener("DOMContentLoaded", function () {
    const imageObserver = new IntersectionObserver(
        (entries, imgObserver) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    const lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lzy_img");
                    imgObserver.unobserve(lazyImage);
                }
            });
        },
        { rootMargin: "400px 0px" }
    );
    const arr = document.querySelectorAll("img.lzy_img");
    arr.forEach((v) => {
        imageObserver.observe(v);
    });

    const iframeObserver = new IntersectionObserver((entries, iframeObserver) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const lazyIframe = entry.target;
                console.log("lazy loading ", lazyIframe);
                lazyIframe.src = lazyIframe.dataset.src;
                lazyIframe.classList.remove("lazy-frame");
                iframeObserver.unobserve(lazyIframe);
            }
        });
    });

    const array = document.querySelectorAll("iframe.lazy-frame");
    array.forEach((n) => {
        imageObserver.observe(n);
    });
});

// youtube modal

var ytcode = false;
var player;
function open_video_popup() {
    $(".video-open").on("click", function (event) {
        event.preventDefault();
        player = "";
        $("#popup-player").remove();
        $("#popup-video").append('<div id="popup-player"></div>');
        video_open($(this));
    });

    $("#popup-video-close").on("click", function (event) {
        event.preventDefault();
        $(".video-open").removeClass("slide");
        bd.css("overflow", "auto");
        $("#popup-video-wrapper").removeClass("act");
        stopVideo();
    });
}

let modalBody = document.getElementById("popup-video-wrapper");

window.onclick = function (event) {
    if (event.target == modalBody) {
        bd.css("overflow-y", "auto");
        jQuery(".video-open").removeClass("slide");
        jQuery("#popup-video-wrapper").removeClass("act");
        stopVideo();
    }
};

function video_open(curr) {
    ytcode = curr.attr("data-code");

    bd.css("overflow-y", "hidden");
    popTop = getPopTop();
    $("#popup-video-wrapper").addClass("act");

    if (typeof YT == "undefined" || typeof YT.Player == "undefined") {
        $.getScript("https://www.youtube.com/iframe_api", function () {});
    } else {
        player = new YT.Player("popup-player", {
            height: "500px",
            width: "100%",
            videoId: ytcode,
            playerVars: {
                autoplay: 0,
                controls: 2,
                color: "white",
                fs: 1,
                iv_load_policy: 3,
                modestbranding: 1,
                rel: 0,
                showinfo: 0,
            },
            events: {
                onReady: onPlayerReady,
                onStateChange: onPlayerStateChange,
            },
        });
    }
}

function onYouTubeIframeAPIReady() {
    console.log("init code: " + ytcode);
    player = new YT.Player("popup-player", {
        height: "500px",
        width: "100%",
        videoId: ytcode,
        playerVars: {
            autoplay: 0,
            controls: 2,
            color: "white",
            fs: 1,
            iv_load_policy: 3,
            modestbranding: 1,
            rel: 0,
            showinfo: 0,
        },
        events: {
            onReady: onPlayerReady,
            onStateChange: onPlayerStateChange,
        },
    });
}

function onPlayerReady(event) {
    event.target.playVideo();
}

function playVideo() {
    player.playVideo();
}

var done = false;
function onPlayerStateChange(event) {
    if (event.data == YT.PlayerState.PLAYING && !done) {
        done = true;
    }
}

function stopVideo() {
    player.stopVideo();
}

//mobile menu and search

$(".open-burger-icon").click(function () {
    $(".mobile-menu-content").fadeIn("fast");
    $(this).hide();
    $(".mobile-burger .close-icon").show();
    $("body").css("overflow-y", "hidden");

    $(".mobile-search-content").fadeOut("fast");
    $(".open-search-icon").show();
    $(".close-search-icon").hide();
});
$(".mobile-burger .close-icon").click(function () {
    $(".mobile-menu-content").fadeOut("fast");
    $(".open-burger-icon").show();
    $(this).hide();
    $("body").css("overflow-y", "auto");
});
$(".open-search-icon").click(function () {
    $(".mobile-search-content").fadeIn("fast");
    $(this).hide();
    $(".close-search-icon").show();

    $(".mobile-menu-content").fadeOut("fast");
    $(".mobile-burger .close-icon").hide();
    $(".open-burger-icon").show();
});
$(".close-search-icon").click(function () {
    $(".mobile-search-content").fadeOut("fast");
    $(".open-search-icon").show();
    $(this).hide();
});
