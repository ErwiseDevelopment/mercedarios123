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

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

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
<section>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-9">

                        <div class="row">

                            <style>
                                .l-communities__box {
                                    bottom: -40px;
                                    right: -20%;
                                    position: absolute;
                                    background: red;
                                }
                            </style>

                            <!-- loop -->
                            <div class="col-12">

                                <img
                                class="img-fluid w-100 u-object-fit-cover"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/sal.png"
                                alt="Single Temas">

                                <div class="l-communities__box">
                                    <h4 class="l-communities__box__title u-font-size-28 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                        PARÓQUIA NOSSA
                                        SENHORA DA LUZ
                                    </h4>

                                    <p>
                                        Pituba - BA
                                    </p>

                                    <div class="row">

                                        <div class="col-12">

                                            <a
                                            class=""
                                            href="#">
                                                Saiba mais
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<img
class="img-fluid"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php

get_footer();
