<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy 
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary">
<main id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<!-- menu -->
<?php echo get_template_part( 'template-parts/content', 'home-menu-editorials' ) ?>
<!-- end menu -->


<section class="w-100">
<?php echo do_shortcode( '[rev_slider alias="home"][/rev_slider]' ); ?>
</section>

<!-- news -->
<?php echo get_template_part( 'template-parts/content', 'news' ) ?>
<!-- end news -->

<!-- about -->
<?php echo get_template_part( 'template-parts/content', 'about' ) ?>
<!-- end about -->

<!-- blog -->
<?php echo get_template_part( 'template-parts/content', 'blog' ) ?>
<!-- end blog -->

<!-- banner materials -->
<?php echo get_template_part( 'template-parts/content', 'banner-materials' ) ?>
<!-- end banner materials -->

<!-- calendar -->
<?php echo get_template_part( 'template-parts/content', 'calendar' ) ?>
<!-- end calendar -->

<!-- gallery -->
<?php echo get_template_part( 'template-parts/content', 'gallery' ) ?>
<!-- end gallery -->

<!-- photos -->
<?php echo get_template_part( 'template-parts/content', 'photos' ) ?>
<!-- end photos -->

<!-- banners -->
<?php echo get_template_part( 'template-parts/content', 'banners' ) ?>
<!-- end banners -->

<!-- our presence -->
<?php echo get_template_part( 'template-parts/content', 'our-presence' ) ?>
<!-- end our presence -->

<!-- <img
class="img-fluid"
data-src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas"> -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
