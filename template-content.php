<?php

/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fabio Melo Dev
 *
 * Template Name: Modelo Conteúdo
 * Template Post Type: page
 */

get_header();
?>

<div id="primary">
<main id="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- banner -->
<section 
class="l-template-content__banner d-flex justify-content-center align-items-center u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/template-content-banner.png)">

    <div class="container">

        <div class="row">

            <div class="col-12 px-0">
                <h1 class="l-template-content__banner__title position-relative u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white pb-4">
                    <?php the_title() ?>
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section class="mt-3 py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12">

                <span class="l-template-content__content d-block u-font-family-lato">
                    <?php the_content() ?>
                </span>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<!-- banner materials -->
<?php echo get_template_part( 'template-parts/content', 'banner-materials' ) ?>
<!-- end banner materials -->

<?php endwhile; endif; ?>
</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
