<?php 
/*
 * Template Name: Home
 */
    get_header();
?>
    <!-- Hero Section Start -->
    <section class="hero-sec vh-100 d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri() . '/images/hero-banner.png' ?>')">
        <div class="container">
            <div class="col-lg-7 position-relative">
                <h1 class="fw-medium text-white">Smart, Scalable & Future Ready Software Solutions</h1>
                <p class="fw-normal lh-base text-white">We design, engineer, and deliver tailored IT solutions — from web apps to enterprise software — helping businesses grow with secure, scalable, and user-friendly technology.</p>
                <div class="d-flex align-items-center gap-2">
                    <a href="#" class="btn custom-cta">Get Started</a>
                    <a href="#" class="btn custom-cta bg-transparent">Explore Services</a>
                </div>
                <img src="<?php echo get_template_directory_uri() . '/images/scroll-right.png' ?>" class="position-absolute scroll-right" width="123" alt="scroll-right-img">
            </div>
        </div>
    </section>
    <!-- Hero Section End -->
    
    <!-- Projects Section Start -->
     <section class="project-sec">
        <h2 class="section-title text-center">Our Projects</h2>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/images/project-1.png' ?>" alt="project-title">
                    <div class="d-flex justify-content-between mt-3">
                        <h3 class="fw-semibold lh-base w-50">Blanco Marino</h3>
                        <p class="fw-normal lh-sm w-50">We believe every business deserves technology that’s not only reliable but also scalable and future-ready. That’s why we work closely with startups and established brands alike, tailoring our approach to fit each client’s unique goals and challenges.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/images/project-1.png' ?>" alt="project-title">
                    <div class="d-flex justify-content-between mt-3">
                        <h3 class="fw-semibold lh-base w-50">Blanco Marino</h3>
                        <p class="fw-normal lh-sm w-50">We believe every business deserves technology that’s not only reliable but also scalable and future-ready. That’s why we work closely with startups and established brands alike, tailoring our approach to fit each client’s unique goals and challenges.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/images/project-1.png' ?>" alt="project-title">
                    <div class="d-flex justify-content-between mt-3">
                        <h3 class="fw-semibold lh-base w-50">Blanco Marino</h3>
                        <p class="fw-normal lh-sm w-50">We believe every business deserves technology that’s not only reliable but also scalable and future-ready. That’s why we work closely with startups and established brands alike, tailoring our approach to fit each client’s unique goals and challenges.</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri() . '/images/project-1.png' ?>" alt="project-title">
                    <div class="d-flex justify-content-between mt-3">
                        <h3 class="fw-semibold lh-base w-50">Blanco Marino</h3>
                        <p class="fw-normal lh-sm w-50">We believe every business deserves technology that’s not only reliable but also scalable and future-ready. That’s why we work closely with startups and established brands alike, tailoring our approach to fit each client’s unique goals and challenges.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next">
                <img src="<?php echo get_template_directory_uri() . '/images/drag.png' ?>" alt="">
            </div> 
        </div>
     </section>
    <!-- Projects Section End -->

    <!-- Why choose Area Start -->
     <section class="why-choose-sec overflow-hidden position-relative" style="background-image: url('<?php echo get_template_directory_uri() . '/images/why-choose-banner.webp' ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="fw-semibold text-white">Why Choose Devstren</h2>
                </div>
                <div class="col-lg-6">
                    <p class="fw-normal text-white">Choosing the right technology partner is critical for long-term success. At Devstren, we combine technical expertise, creative thinking, and a client-first approach to deliver solutions that don’t just work today — they keep working for years to come.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <ul class="list-unstyled ps-0">
                        <li class="py-4 border-bottom ">
                            <h3 class="fw-semibold lh-sm mb-3 text-white">Clean & Scalable Code</h3>
                            <p class="fw-medium lh-sm mt-1 mb-2 text-white ">Built to grow with your business without unnecessary complexity.</p>
                        </li>
                        <li class="py-4 border-bottom ">
                            <h3 class="fw-semibold lh-sm mb-3 text-white">Secure & Future-Proof</h3>
                            <p class="fw-medium lh-sm mt-1 mb-2 text-white ">Modern frameworks and best practices that keep your product reliable.</p>
                        </li>
                        <li class="py-4 border-bottom ">
                            <h3 class="fw-semibold lh-sm mb-3 text-white">Experienced Team</h3>
                            <p class="fw-medium lh-sm mt-1 mb-2 text-white ">Developers and designers who combine technical skill with creativity.</p>
                        </li>
                        <li class="py-4">
                            <h3 class="fw-semibold lh-sm mb-3 text-white">Flexible Approach</h3>
                            <p class="fw-medium lh-sm mt-1 mb-2 text-white ">Tailored solutions that fit both startups and established enterprises.</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="marquee position-absolute">
                <div class="marquee-content">
                    <h4>Devstren</h4>
                </div>
            </div>
        </div>
     </section>
    <!-- Why choose Area End -->

    <!-- Testimonials Area Start -->
     <section class="testimonials-sec" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/testimonials-bg.png')">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="text-center">What Our Clients Say</h2>
                </div>
            </div>
            <div class="swiper mySwiperTestimonials">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-item p-4 rounded-pill text-center">
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri() . '/images/testimonial-img.png' ?>" alt="project-title">
                            <b class="d-block client-name">kevinvollq</b>
                            <span class="d-block">Denmark</span>
                            <p>It’s always a pleasure to work with Usman. He quickly delivers and fixes code and other website issues for me. Highly recommend!</p>
                            <img class="d-block" src="<?php echo get_template_directory_uri() . '/images/star.svg' ?>" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testimonial-item p-4 rounded-pill text-center">
                            <img class="d-block mx-auto" src="<?php echo get_template_directory_uri() . '/images/testimonial-2.png' ?>" alt="project-title">
                            <b class="d-block client-name">Jonh David</b>
                            <span class="d-block">United state</span>
                            <p>It’s always a pleasure to work with Usman. He quickly delivers and fixes code and other website issues for me. Highly recommend!</p>
                            <img class="d-block" src="<?php echo get_template_directory_uri() . '/images/star.svg' ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="swiper-button-next testi-next">
                    <img src="<?php echo get_template_directory_uri() . '/images/arrow-right.png' ?>" alt="">
                </div>
                <div class="swiper-button-prev testi-prev">
                    <img src="<?php echo get_template_directory_uri() . '/images/arrow-left.png' ?>" alt="">
                </div>
            </div>
        </div>
     </section>
    <!-- Testimonials Area End -->
    
    <!-- Blogs Area Start -->
     <section class="blog-sec">
        <h2 class="fw-semibold lh-base text-center">Our Latest blog and Insights</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card border-0  shadow p-2 rounded-3">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-img-1.png' ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold lh-sm">Understanding the Full Spectrum of Services</h5>
                            </a>
                            <p class="card-date d-flex align-items-center gap-2">
                                <span class="lh-1"><img src="<?php echo get_template_directory_uri() . '/images/Calendar.png' ?>" width="20" alt=""></span>
                                <span class="lh-sm">July 20, 2025</span>
                            </p>
                            <p class="card-text">Myriam was first trained as a sculptor in Montreal and then in Helsinki, Finland. She is now based in Quebec but works for clients all around the...</p>
                            <a href="#" class="btn custom-cta">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0  shadow p-2 rounded-3">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-img-2.png' ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold lh-sm">Understanding the Full Spectrum of Services</h5>
                            </a>
                            <p class="card-date d-flex align-items-center gap-2">
                                <span class="lh-1"><img src="<?php echo get_template_directory_uri() . '/images/Calendar.png' ?>" width="20" alt=""></span>
                                <span class="lh-sm">July 20, 2025</span>
                            </p>
                            <p class="card-text">Myriam was first trained as a sculptor in Montreal and then in Helsinki, Finland. She is now based in Quebec but works for clients all around the...</p>
                            <a href="#" class="btn custom-cta">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0  shadow p-2 rounded-3">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri() . '/images/blog-img-3.png' ?>" class="card-img-top" alt="...">
                        </a>
                        <div class="card-body">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title fw-bold lh-sm">Understanding the Full Spectrum of Services</h5>
                            </a>
                            <p class="card-date d-flex align-items-center gap-2">
                                <span class="lh-1"><img src="<?php echo get_template_directory_uri() . '/images/Calendar.png' ?>" width="20" alt=""></span>
                                <span class="lh-sm">July 20, 2025</span>
                            </p>
                            <p class="card-text">Myriam was first trained as a sculptor in Montreal and then in Helsinki, Finland. She is now based in Quebec but works for clients all around the...</p>
                            <a href="#" class="btn custom-cta">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Blogs Area End -->
    




<?php get_footer(); ?>
<script>
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

  </script>
  