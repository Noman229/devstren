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

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- footer -->
    <footer>
        <section class="section-footer">
            <div class="textcontnet">
                <div class="heading">
                    <h1>Let’s Build Something Great Together</h1>
                </div>
                <div class="content">
                    <p>Ready to bring your ideas to life? Partner with Devstren and get a reliable tech team that
                        designs, develops, and delivers digital solutions that truly perform.</p>
                    <button>Start your project</button>
                    <button class="dark">get in touch</button>
                </div>
            </div>

            <div class="branding-section">
                <div class="left-hand">
                    <img src="<?php echo get_template_directory_uri() . '/images/hand-left.png' ?>" alt="left-hand">
                </div>
                <div class="logo">
                    <img src="<?php echo get_template_directory_uri() . '/images/center-logo.png' ?>" alt="footer-Logo">
                </div>
                <div class="right-hand">
                    <img src="<?php echo get_template_directory_uri() . '/images/hand-right.png' ?>" alt="right-hand">
                </div>
            </div>
            <div class="flex footer-information">
                <div class="flex menu">
                    <ul class="flex">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="logo">
                    <a href="/"> <img src="<?php echo get_template_directory_uri() . '/images/logo.png' ?>" alt="footer-image"></a>
                </div>
                <div class="social">
                    <ol class="flex">
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/facebook.png' ?>" alt="social-image"></a>
                        </li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/insta.png' ?>" alt="social-image"></a>
                        </li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/linkedin.png' ?>" alt="social-image"></a>
                        </li>
                        <li><a href="#"><img src="<?php echo get_template_directory_uri() . '/images/youtube.png' ?>" alt="social-image"></a>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <h1 class="back-heading">devstren</h1>
    </footer>

<div class="wrapper d-none" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!-- col -->

		</div><!-- .row -->

	</div><!-- .container(-fluid) -->

</div><!-- #wrapper-footer -->

<?php // Closing div#page from header.php. ?>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>

