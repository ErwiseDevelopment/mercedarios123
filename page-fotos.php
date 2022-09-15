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

<section 
class="l-template-content__banner d-flex justify-content-center align-items-center u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/template-content-banner.png)">

    <div class="container">

        <div class="row">

            <div class="col-12 px-0">
                <h1 class="l-template-content__banner__title position-relative u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white pb-4">
                    GALERIA
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="mb-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <!-- <img
                class="img-fluid"
                src=""
                alt="<php the_title() ?>"> --><!-- adadad -->

                <?php
                    $alt_title = get_the_title();

                    echo get_the_post_thumbnail( 303, 'post-thumbnail', array( 'class' => 'img-fluiw w-100', 'style' => 'object-fit:cover', 'alt' => $alt_title) ); ?>
            </div>
        </div>
    </div>
</section>

<!-- gallery -->
<section class="l-page-photos mt-3">

    <div class="container">

        <div class="row">
        <?php 
                if( isset( $_GET['cat'] ) ) {
                   $image_current = $_GET['cat'];
                   
                } else {
                    $image_current = 'home';
                }
        ?>
            <div class="col-12">

                <div class="row">   

                    <!-- loop -->
                    <?php
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'album',
                            'order'          => 'DESC',
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'categoria-foto',
                                    'field'    => 'slug',
                                    'terms'    => array($image_current)
                                )
                            )
                        );

                        $galleries = new WP_Query( $args );

                        if( $galleries->have_posts() ) :
                            while( $galleries->have_posts() ) : $galleries->the_post();
                    ?>
                                <div class="col-3 my-3">

                                    <a 
                                    class="card border-0 text-decoration-none"
                                    href="<?php the_permalink() ?>">

                                        <div class="l-page-photos__card-img card-img">

                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_field( 'capa_do_album' ) ?>"
                                            style="height:296px"
                                            alt="<?php the_title() ?> ">
                                        </div>

                                        <div class="card-body pt-2 pl-0">
                                            <h6 class="l-news__small__card-title u-line-height-100 u-font-weight-extrabold mb-1">
                                                <?php the_title() ?>                                                           
                                            </h6>
                                        </div>
                                    </a>
                                </div>
                    <?php   endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end gallery -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
