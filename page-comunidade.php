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
                                    right: -270px;
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
                            <?php 
                                if( isset( $_GET[ 'cat' ] ) ) {
                                    $category_current = $_GET[ 'cat' ];

                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'Comunidades',
                                        'order'          => 'DESC',
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'comunidades-categoria',
                                                'field'    => 'slug',
                                                'terms'    => array( $category_current )
                                            )
                                        )
                                    );
                                } else {
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'Comunidades',
                                        'order'          => 'DESC'
                                    );
                                }

                                $posts_community = new WP_Query( $args );

                                if( $posts_community->have_posts() ) :
                                    while( $posts_community->have_posts() ) : $posts_community->the_post();
                            ?>
                                        <div class="col-12 my-5">

                                            <!-- <img
                                            class="img-fluid w-100 u-object-fit-cover"
                                            src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/sal.png"
                                            alt="Single Temas"> -->

                                            <?php
                                                $alt_title = get_the_title();

                                                the_post_thumbnail( 'post-thumbnail',
                                                    array(
                                                        'class' => 'img-fluid w-100 u-object-fit-cover',
                                                        'alt'   => $alt_title
                                                    ));
                                            ?>

                                            <div class="l-communities__box d-flex flex-column justify-content-center align-items-center u-bg-folk-dark-marron py-4 px-5">
                                                <h4 class="l-communities__box__title position-relative d-inline-block u-font-size-28 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-white pb-3">
                                                    <!-- PARÓQUIA NOSSA <br>
                                                    SENHORA DA LUZ -->
                                                    <?php the_title() ?>
                                                </h4>

                                                <p class="u-font-size-28 u-font-weight-regular u-font-family-lato text-center u-color-folk-white">
                                                    <?php
                                                        $post_categories = get_the_terms( get_the_ID(), 'comunidades-estados' );

                                                        foreach( $post_categories as $category ) :
                                                            if( $category->parent > 0 )
                                                                echo $category->name;
                                                        endforeach;
                                                    ?>
                                                    <!-- Pituba - BA -->
                                                </p>

                                                <div class="w-100">

                                                    <div 
                                                    class="row w-100 position-absolute justify-content-center"
                                                    style="left:0">

                                                        <div class="col-5">

                                                            <a
                                                            class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden hover:u-bg-folk-dark-marron py-1"
                                                            href="<?php echo get_field( 'ir_para_comunidade' ) ?>"
                                                            target="<?php echo get_field( 'nova_guia' ) ? '_blank' : ''; ?>">
                                                                Saiba mais
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                            <?php 
                                    endwhile;
                                endif;

                                wp_reset_query();
                            ?>
                            <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-3 pt-4">
                        
                        <h5 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-dark-golden">
                            encontre-nos
                        </h5>

                        <!-- loop -->
                        <?php 
                            $terms = get_terms( 'comunidades-estados', array(
                                'hide_empty' => false,
                                // 'parent' => 0,
                            ) );

                            foreach( $terms as $term ) :
                               if($terms->parent > 0)
                        ?>
                                <div class="col-12 my-1">
                                    <a 
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2" 
                                    href="<?php echo get_home_url( null, 'comunidade/?cat=' . $term->slug ); ?>">
                                        <!-- Institucional -->
                                        <?php echo $term->name; ?>
                                    </a>
                                </div>
                        <?php  
                        endforeach;
                         ?>
                        <!-- end loop -->
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

<?php

get_footer();
