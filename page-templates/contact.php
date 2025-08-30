<?php 
/* 
 * Template Name: Contact us
 */
    get_header();
?>
    <!-- Page Hero Area Start  -->
    <?php get_template_part( 'loop-templates/page-hero-section' ); ?>
    <!-- Page Hero Area End  -->

<section class="contact-form position-relative">
        <div class="position-absolute contact-center-logo">
            <img src="<?php echo get_template_directory_uri() . '/images/center-logo.png' ?>" width="123" alt="center-logo">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 h-100 position-relative contact-lef-col">
                    <img src="<?php echo get_template_directory_uri() . '/images/contact-left-img.png' ?>" alt="Contact-right-hand-image" class="">
                    <h2 class="position-absolute text-white fw-semibold lh-sm">Get in Touch</h2>
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
                <div class="col-lg-6">
                    <div class="form-container rounded-5 h-100" style="background: #E7FAF9;">
                        <div class="row g-3">
                            <div class="col-6 mb-3">
                                <label for="first-name" class="lh-1 fw-medium mb-3" style="font-size:14px">First Name</label>
                                <input type="text" id="first-name" class="form-control bg-transparent border-0 border-bottom ps-0" placeholder="First Name" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="last-name" class="lh-1 fw-medium mb-3" style="font-size:14px">Last Name</label>
                                <input type="text" id="last-name" class="form-control bg-transparent border-0 border-bottom ps-0" placeholder="Last Name" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="email" class="lh-1 fw-medium mb-3" style="font-size:14px">Email</label>
                                <input type="email" id="email" class="form-control bg-transparent border-0 border-bottom ps-0" placeholder="Enter email" required>
                            </div>
                            <div class="col-6 mb-3">
                                <label for="phone-number" class="lh-1 fw-medium mb-3" style="font-size:14px">Phone Number</label>
                                <input type="tel" class="form-control bg-transparent border-0 border-bottom ps-0" placeholder="Enter number" required id="phone-number">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="project-type" class="lh-1 fw-medium mb-3" style="font-size:14px">Project Type</label>
                                <select class="form-select bg-transparent border-0 border-bottom ps-0" required id="project-type">
                                    <option value="" disabled selected>Select your project</option>
                                    <option value="web">Web Development</option>
                                    <option value="app">App Development</option>
                                    <option value="ui-ux-design">UI UX Design</option>
                                    <option value="seo">SEO</option>
                                </select>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="message" class="lh-1 fw-medium mb-3" style="font-size:14px">Message</label>
                                <textarea id="message" class="form-control bg-transparent border-0 border-bottom ps-0" rows="3" placeholder="What Can We Help You With?"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn custom-cta">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>