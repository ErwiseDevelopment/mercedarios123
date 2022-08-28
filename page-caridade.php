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


<section 
class="l-template-content__banner u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png)">
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">
                <h1>
                    Quem somos
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="mt-3 pb-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10">

                <?php the_content() ?>
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
