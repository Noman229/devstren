<?php 
/* 
 * Template Name: About us 
 */
    get_header();
?>
    <!-- Page Hero Area Start  -->
    <?php get_template_part( 'loop-templates/page-hero-section' ); ?>
    <!-- Page Hero Area End  -->

    <!-- About Us Section -->
    <?php get_template_part( 'loop-templates/about-us' ); ?>
    <!-- About Us Section -->
    
    <!-- Mission Area Start -->
    <section class="mission-sec" style="background-image: url('<?php echo get_template_directory_uri() . '/images/mission-line.png' ?>')">
        <div class="w-75 mx-auto text-center" style="background-image: url('<?php echo get_template_directory_uri() . '/images/mission-bg.png' ?>')">
            <h2 class="fw-bold lh-sm text-white">Our Mission</h2>
            <p class="fw-normal lh-sm text-white">At Devstren, our mission goes beyond writing code — it’s about creating technology that drives real change. We aim to deliver future-ready digital solutions that not only solve today’s challenges but also prepare businesses for tomorrow’s opportunities. We empower companies to innovate with confidence, scale with ease, and connect with their customers in meaningful ways. By blending strategy, design, and engineering, we help transform ideas into digital experiences that are secure, intuitive, and built for long-term success.</p>
        </div>
    </section>
    <!-- Mission Area End -->

    <!-- Values Area Start -->
    <section class="our-value">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="fw-bold lh-sm">Our Values</h1>
                </div>
                <div class="col-lg-6">
                    <p class="fw-normal lh-sm">At Devstren, our work is guided by principles that shape every project and partnership. These values define who we are and how we deliver.</p>
                </div>
            </div>
            <div class="values-container">
                <div class="circle-wrapper position-relative d-flex align-items-center justify-content-center">
                    <!-- Center Logo -->
                    <div class="circle-center">
                        <img src="<?php echo get_template_directory_uri() . '/images/about-us-center-logo.png' ?>" alt="Logo">
                    </div>
                    <div class="value-card value-card-1 d-flex align-items-center gap-4 position-absolute">
                        <img src="<?php echo get_template_directory_uri() . '/images/blub.png' ?>" class="shadow rounded-pill" alt="Impact">
                        <div class="content">
                            <h5 class="fs-4 fw-semibold lh-1 mb-1">Innovation First</h5>
                            <p class="fw-normal lh-sm mb-0">Creative ideas & new tech.</p>
                        </div>
                    </div>
                    <div class="value-card value-card-2 d-flex align-items-center gap-4 position-absolute">
                            <img src="<?php echo get_template_directory_uri() . '/images/quality.png' ?>" class="shadow rounded-pill" alt="Innovation">
                            <div class="content">
                                <h5 class="fs-4 fw-semibold lh-sm">Quality Always</h5>
                                <p class="fw-normal lh-sm mb-0">Reliable design every time.</p>
                            </div>
                        </div>
                        <div class="value-card value-card-3 d-flex align-items-center gap-4 position-absolute">
                            <img src="<?php echo get_template_directory_uri() . '/images/clinet.png' ?>" class="shadow rounded-pill" alt="Quality">
                            <div class="content">
                                <h5 class="fs-4 fw-semibold lh-sm">Client-Centric</h5>
                                <p class="fw-normal lh-sm mb-0">Your goals shape our solutions.</p>
                            </div>
                        </div>
                        <div class="value-card value-card-4 d-flex align-items-center gap-4 position-absolute">
                            <div class="text-end">
                                <h5 class="fs-4 fw-semibold lh-sm">Impact-Driven</h5>
                                <p class="fw-normal lh-sm mb-0">Focused on results that matter.</p>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/images/impact.png' ?>" class="shadow rounded-pill" alt="Transparency">
                        </div>
                        <div class="value-card value-card-5 d-flex align-items-center gap-4 position-absolute">
                            <div class="text-end">
                                <h5 class="fs-4 fw-semibold lh-sm">Transparency</h5>
                                <p class="fw-normal lh-sm mb-0">Open and clear communication.</p>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/images/transparency.png' ?>" class="shadow rounded-pill" alt="Collaboration">
                        </div>
                        <div class="value-card value-card-6 d-flex align-items-center gap-4 position-absolute">
                            <div class="text-end">
                                <h5 class="fs-4 fw-semibold lh-sm">Collaboration</h5>
                                <p class="fw-normal lh-sm mb-0">Teamwork drives results.</p>
                            </div>
                            <img src="<?php echo get_template_directory_uri() . '/images/collaboration.png' ?>" class="shadow rounded-pill" alt="Client">
                        </div>
                        
                        
                </div>
            </div>
        </div>
    </section>
    <!-- Values Area End -->

    <!-- Why Business Area Start -->
    <?php get_template_part( 'loop-templates/why-business' ); ?>
    <!-- Why Business Area End -->

    <!-- Testimonial Area Start -->
    <?php get_template_part( 'loop-templates/testimonial-slider' ); ?>
    <!-- Testimonial Area End -->

    <!-- Blogs Area Start -->
    <?php get_template_part( 'loop-templates/blogs' ); ?>
    <!-- Blogs Area End -->
<?php get_footer(); ?>