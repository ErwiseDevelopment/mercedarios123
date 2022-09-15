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
                                    width: 540px;
                                    bottom: -40px;
                                    right: -20%;
                                    position: absolute;
                                }

                                .l-communities__box__title::before {
                                    content: '';
                                    width: calc(100% - 1rem);
                                    height: 4px;
                                    top: 100%;
                                    left: 50%;
                                    transform: translateX(-50%);
                                    position: absolute;
                                    background-color: #D99D32;
                                }
                            </style>

                            <!-- loop -->
                            <div class="col-12">

                                <img
                                class="img-fluid w-100 u-object-fit-cover"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/sal.png"
                                alt="Single Temas">

                                <div class="l-communities__box d-flex flex-column justify-content-center align-items-center u-bg-folk-dark-marron py-4">
                                    <h4 class="l-communities__box__title position-relative d-inline-block u-font-size-28 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-white pb-3">
                                        PARÓQUIA NOSSA <br>
                                        SENHORA DA LUZ
                                    </h4>

                                    <p class="u-font-size-28 u-font-weight-regular u-font-family-lato text-center u-color-folk-white">
                                        Pituba - BA
                                    </p>

                                    <div class="w-100">

                                        <div class="row justify-content-center">

                                            <div class="col-5">

                                                <a
                                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center u-color-folk-white u-bg-folk-dark-golden py-1"
                                                href="#">
                                                    Saiba mais
                                                </a>
                                            </div>
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
