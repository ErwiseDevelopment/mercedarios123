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

                    <div class="col-lg-9">

                        <div class="row">

                            <style>
                                .l-communities__box {
                                    width: 540px;
                                    bottom: -40px;
                                    right: -270px;
                                    position: absolute;
                                }

                                @media screen and (max-width: 991px) {
                                    .l-communities__box {
                                        width: 100%;
                                        position: unset;
                                    }
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
                            $editorial_slug_current = 'comunidades';
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
                                                'terms'    => array( $editorial_slug_current)
                                            ),
                                            array(
                                                'taxonomy' => 'comunidades-estados',
                                                'field'    => 'slug',
                                                'terms'    => array( $category_current)
                                            )
                                        )
                                    );
                                } else {
                                    
                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'Comunidades',
                                        'order'          => 'DESC',
                                        'tax_query'      => array(
                                            array(
                                                'taxonomy' => 'comunidades-categoria',
                                                'field'    => 'slug',
                                                'terms'    => array( $editorial_slug_current )
                                            )
                                        )
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
                                                        'class' => 'img-fluid w-100 px:u-h-190 lg:px:u-h-550 u-object-fit-cover',
                                                        'alt'   => $alt_title
                                                    ));
                                            ?>

                                            <div class="l-communities__box d-flex flex-column justify-content-center align-items-center u-bg-folk-dark-marron py-4 px-3 px-lg-5">
                                                <h4 class="l-communities__box__title position-relative d-inline-block u-font-size-22 xl:u-font-size-28 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-white pb-3">
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

                                                    // "/n";
                                                    
                                                    // echo var_dump($post_categories)
                                                    ?>

                                                    <!-- Pituba - BA -->
                                                </p>

                                                <div class="w-100">

                                                    <div 
                                                    class="row w-100 position-absolute justify-content-center"
                                                    style="left:0">

                                                        <div class="col-8 col-lg-5">

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
                        </br>
                            </br>
                    </div>
                            
                    <div class="col-lg-3 pt-4 pb-4 pb-lg-0">
                        
                        <h5 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-dark-golden">
                            encontre-nos
                        </h5>

                        <!-- loop -->
                        <?php 
                        $categorie = array();
                            $terms = get_terms( 'comunidades-estados', array(
                                'hide_empty' => false,
                                 'parent' => 0,
                            ));
                            //$order = array($term->term_id);
                            foreach( $terms as $term )  {
                                if($term->term_id == 29 || $term->term_id == 31 || $term->term_id == 30 || $term->term_id == 26 || $term->term_id == 81 ) {
                                    array_push($categories, $term);
                                }
                            }
                                foreach($categories as $category) :;
                        ?>
                                <div class="col-12 my-1">
                                    <a 
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2" 
                                    href="<?php echo get_home_url( null, 'comunidade/?cat=' . $category->slug ); ?>">
                                        <!-- Institucional -->
                                        <?php echo $category->name; ?>
                                    </a>
                                </div>
                        <?php  endforeach;    ?>
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
