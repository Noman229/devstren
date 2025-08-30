<?php 
/* 
 * Template Name: Blogs
 */
    get_header();
?>
    <!-- Page Hero Area Start  -->
    <?php get_template_part( 'loop-templates/page-hero-section' ); ?>
    <!-- Page Hero Area End  -->

    <!-- Blogs Area Start  -->
    <?php get_template_part( 'loop-templates/blogs' ); ?>
    <!-- Blogs Area End  -->
    

<?php get_footer(); ?>