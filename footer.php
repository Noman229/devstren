<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>


<!-- footer -->
<footer class="footer-sec position-relative overflow-hidden">
    <div class="container position-relative">
        <div class="row">
            <div class="col-lg-7">
                <h2 class="fw-semibold lh-sm">Let’s Build Something Great Together</h2>
            </div>
            <div class="col-lg-5">
                <p class="fw-medium lh-sm footer-header-text text-white mb-4">Ready to bring your ideas to life? Partner with Devstren and get a reliable tech team that designs, develops, and delivers digital solutions that truly perform.</p>
                <a href="#" class="btn custom-cta">Start your project</a>
                <a class="btn custom-cta bg-transparent">get in touch</a>
            </div>
        </div>
    </div>
    <div class="position-relative d-flex align-items-center justify-content-center" style="min-height:800px;">
        <img src="<?php echo get_template_directory_uri() . '/images/hand-left.png' ?>" class="left-hand position-absolute" alt="left-hand">
        <img src="<?php echo get_template_directory_uri() . '/images/center-logo.png' ?>" class="branding-logo" alt="footer-Logo">
        <img src="<?php echo get_template_directory_uri() . '/images/hand-right.png' ?>" class="right-hand position-absolute" alt="right-hand">
    </div>
    <div class="container">
        <hr class="border-top border-white mb-4">
        <div class="row">
            <div class="col-lg-5">
                <div class="footer-menus">
                    <ul class="list-unstyled ps-0 d-flex">
                        <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About us</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="logo">
                    <a href="/"> <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="footer-image"></a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="footer-menus">
                    <ul class="list-unstyled ps-0 d-flex align-items-center justify-content-end gap-2">
                        <li class="nav-item"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri() . '/images/facebook.png' ?>" width="40" alt="social-image"></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri() . '/images/insta.png' ?>" width="40" alt="social-image"></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri() . '/images/linkedin.png' ?>" width="40" alt="social-image"></a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><img src="<?php echo get_template_directory_uri() . '/images/youtube.png' ?>" width="40" alt="social-image"></a></li>
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    <div class="marquee position-absolute">
        <div class="marquee-content">
            <h4>Devstren</h4>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>

