
//testominal------------------------
const swiper = new Swiper('.swiper', {
    // Optional parameters---
    loop: true,
    keyboard: {
        enabled: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
            spaceBetween: 30,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 30,
        }
    },
    autoplay : {
        delay: 2500,
        disableOnInteraction: false,
    }
});
