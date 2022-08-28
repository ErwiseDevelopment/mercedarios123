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
<?php echo get_template_part( 'template-parts/content', 'menu-editorials' ) ?>
<!-- end menu -->

<!-- banner -->
<?php echo get_template_part( 'template-parts/content', 'banner' ) ?>
<!-- end banner -->

<!-- news -->
<?php echo get_template_part( 'template-parts/content', 'news' ) ?>
<!-- end news -->

<section>
    <div class="container" style="background:yellow">
        
        <div class="row">

            <div class="col-6 bg-info">
                aa
            </div>

            <div class="col-6 bg-primary">
                bb
            </div>
        </div>
    </div>
</section>
<img
class="img-fluid"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();