//load images and iframes deffered

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