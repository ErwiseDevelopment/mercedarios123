<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
                    Nossas Devoções
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<!-- content -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <ul class="d-lg-flex pl-0">

                    <li class="u-list-style-none mb-2 mr-1">
                        <a
                        class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                        href="<?php echo get_home_url( null, '/' ) ?>">
                            Home
                        </a>
                    </li>

                    <li class="u-list-style-none mb-2 mr-1">
                        <a
                        class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                        href="<?php echo get_home_url( null, 'vocacional' ) ?>">
                            > Vocacional
                        </a>
                    </li>

                    <li class="u-list-style-none mb-2 mr-1">
                        <a
                        class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                        href="<?php echo get_home_url( null, 'nossas-devocoes' ) ?>">
                            > Nossas Devoções
                        </a>
                    </li>

                    <li class="u-list-style-none mb-2 mr-1">
                        <?php
                            $post_categories = get_the_terms( $post->ID, 'santos' );
                            $single_category = $post_categories[0];
                        ?>

                        <a
                        class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                        href="<?php echo $single_category ? get_home_url( null, 'nossas-devocoes/?id=' . $single_category->term_id ) : '#'; ?>">
                            <!-- Santos da Ordem > -->
                            <?php echo '> ' . $single_category->name; ?>
                        </a>
                    </li>

                    <li class="u-list-style-none mb-2 mr-1">
                        <a
                        class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                        href="<?php the_permalink() ?>">
                            <!-- Santos da Ordem > -->
                            <?php echo '> ' . $post->post_title; ?>
                        </a>
                    </li>
                </ul>

                <h2 class="u-font-size-34 xxl:u-font-size-45 u-font-weight-bold u-font-family-cinzel u-color-folk-bold-marron mb-3">
                    <!-- São Raimundo Nonato -->
                    <?php the_title() ?>
                </h2>

                <div class="row">

                    <?php $post_thumbnail_url = get_the_post_thumbnail_url(); ?>

                    <div class="<?php echo $post_thumbnail_url ? 'col-lg-4' : 'd-none'; ?>">

                        <?php
                            $alt_title = get_the_title();

                            the_post_thumbnail( 'post-thumbnail',
                                array(
                                    'class' => 'img-fluid w-100 u-object-fit-cover',
                                    'style' => 'height:343px',
                                    'alt'   => $alt_title
                                ));
                        ?>
                    </div>

                    <div class="<?php echo $post_thumbnail_url ? 'col-lg-8 mt-4 mt-lg-0' : 'col-12'; ?>">
                        <span class="d-block u-font-size-14 xl:u-font-size-18 xxl:u-font-size-20 u-font-weight-regular u-font-family-lato u-color-folk-bold-gray">
                            <?php the_content() ?>
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <div class="row">

                    <?php
                    $posts_current = array();
                   array_push($posts_current, get_the_ID()); 
              
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => $post->post_type,
                            'order'          => 'DESC',
                            'post__not_in'   => array( $post->ID ),
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'santos',
                                    'field'    => 'slug',
                                    'terms'    => array( $single_category->slug )
                                )
                            )
                        );

                        $other_posts = new WP_Query( $args );

                        if( $other_posts->have_posts() ) :
                            while( $other_posts->have_posts() ) : $other_posts->the_post();
                    ?>
                                <div class="col-lg-4 my-2">
                                    <a href="<?php the_permalink() ?>">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        style="height:234px"
                                        src="<?php echo get_field( 'imagem' ) ?>"
                                        alt="<?php the_title() ?>">
                                    </a>
                                </div>
                    <?php
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                </div>  
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
