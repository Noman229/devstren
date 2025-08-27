<?php 
/*
 * Template Name: Home
 */
    get_header();
?>
    <!-- Hero Section Start -->
    <section class="hero-sec vh-100 d-flex align-items-center position-relative" style="background-image: url('<?php echo get_template_directory_uri() . '/images/hero-banner.webp' ?>')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 position-relative">
                    <h1 class="fw-medium text-white">Smart, Scalable & Future Ready Software Solutions</h1>
                    <p class="fw-normal lh-base text-white">We design, engineer, and deliver tailored IT solutions — from web apps to enterprise software — helping businesses grow with secure, scalable, and user-friendly technology.</p>
                    <div class="d-flex align-items-center gap-2">
                        <a href="#" class="btn custom-cta">Get Started</a>
                        <a href="#" class="btn custom-cta bg-transparent">Explore Services</a>
                    </div>
                    <img src="<?php echo get_template_directory_uri() . '/images/scroll-right.png' ?>" class="position-absolute scroll-right" width="123" alt="scroll-right-img">
                </div>
                <div class="col-lg-5 position-relative"></div>
            </div>
            <div class="optimize-business position-absolute">
                <ul class="list-unstyled ps-0 d-flex align-items-center">
                    <li><img src="<?php echo get_template_directory_uri() . '/images/man-1.png' ?>" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/woman.png' ?>" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/man-2.png' ?>" alt=""></li>
                    <li><img src="<?php echo get_template_directory_uri() . '/images/man-3.png' ?>" alt=""></li>
                </ul>
                <p class="fs-6 fw-light lh-sm mb-0 text-white">Optimize your business with Devstren</p>
            </div>
            <div class="grow-business position-absolute">
                <img src="<?php echo get_template_directory_uri() . '/images/arrow-up.png' ?>" class="mb-3" alt="">
                <p class="fs-6 fw-light lh-sm mb-0 text-white">Grow Your Business</p>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- About Us Section -->
    <?php get_template_part( 'loop-templates/about-us' ); ?>
    <!-- About Us Section -->

    <!-- Services Section -->
    <section class="our-services">
        <div class="content" >
            <h2>Our Core Services</h2>
            <p>Our services cover every stage of the digital journey — from design to development to optimization —
                ensuring your technology is as future-ready as your vision.</p>
        </div>
    </section>

    <!-- Swiper -->
    <div class="parent-slider">
        <div class="our-services swiper myService">
            <div class="service-slider swiper-wrapper">
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
                <div class="service-card swiper-slide">
                    <div class="images">
                        <img src="<?php echo get_template_directory_uri() . '/images/service-one.png' ?>" alt="first-service">
                    </div>
                    <div class="innerContent">
                        <h2>Software Engineering</h2>
                        <p>Our team develops robust, business-driven applications that streamline operations and
                            solve
                            complex challenges. From enterprise-level systems to custom tools, we focus on clean
                            code,
                            long-term reliability, and seamless integration with your existing tech stack.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Projects Section Start -->
    <?php get_template_part( 'loop-templates/project-slider' ); ?>
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
    <?php get_template_part( 'loop-templates/testimonial-slider' ); ?>
    <!-- Testimonials Area End -->
    
    <!-- Blogs Area Start -->
    <?php get_template_part( 'loop-templates/blogs' ); ?>
    <!-- Blogs Area End -->
    
<?php get_footer(); ?>  