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