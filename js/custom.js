jQuery(document).ready(function($) {
    // Project Slider
    var swiperProjects = new Swiper(".mySwiper", {
      slidesPerView: "auto",
      spaceBetween: 100,
      initialSlide: 1, 
      loop: true,
      freeMode: true,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".swiper-button-next", 
        prevEl: ".swiper-button-prev", 
        },
    });

    // Testimonial Slider
    var swiperTestimonials = new Swiper(".mySwiperTestimonials", {
        slidesPerView: 1, // testimonial usually 1 by 1 hota hai
        spaceBetween: 30,
        loop: true,
        freeMode: false,

        autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".testi-next",
            prevEl: ".testi-prev",
        },
    });

    var swiper = new Swiper(".myService", {
        slidesPerView: 2,
        initialSlide: 1,
        spaceBetween: 15,
        breakpoints: {
            320: {
                slidesPerView: 1.2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 2.2,
                spaceBetween: 15,
            },
            1024: {
                slidesPerView: 2.4,
                spaceBetween: 15,
            },
            1440: {
                slidesPerView: 4.10,
                spaceBetween: 15,
            }
        },
    });
});