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


<!-- banner -->
<section class="w-100">
    <?php echo do_shortcode( '[rev_slider alias="vocacional"][/rev_slider]' ); ?>
</section>
<!-- end banner -->

<!-- about -->
<section
class="u-bg-cover u-bg-no-repeat py-5"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/about-background.png);">
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 py-5">

                <div class="row">

                    <div class="col-xl-6 order-2 order-xl-1 d-flex justify-content-center align-items-center">
                        <div>
                            <img
                            class="img-fluid w-100 u-object-fit-cover"
                            src=" <?php echo get_field('imagem')?>"
                            alt="">
                        </div>
                    </div>

                    <div class="col-xl-5 order-1 order-xl-2">

                        <h3 class="u-font-size-40 xl:u-font-size-60 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                            <?php echo get_field('titulo_mecedarios') ?>
                        </h3>

                        <p class="u-font-size-14 xl:u-font-size-16 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-folk-white">
                        <?php echo get_field('descricao_mecedarios') ?>
                        </p>

                        <div class="row justify-content-end">

                            <div class="col-6 col-xl-4">
                                <a
                                class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-2"
                                href="<?php echo get_home_url( null,'/') .  get_field('btn_saiba_mais')?>">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->

<!-- shortcut -->
<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-11">

                <div class="row">
                   
                    <div class="col-lg-4 d-flex justify-content-center my-3 my-lg-0">
                        <a
                        class="l-shortcut__item d-flex flex-column justify-content-center align-items-center text-decoration-none p-5"
                        style="background-image: linear-gradient(to right, #D99D31, #966B19);"
                        href="<?php echo get_field('botao1')?>" <?php if (get_field('nova_guia1') == '1') :?>  target="_blank" <?php endif; ?>>
                            <div class="p-2">
                                <img
                                class="img-fluid"
                                src="<?php echo get_field('icone1')?>"
                                alt="Seja Voluntário">
                            </div>

                            <p class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                <?php echo get_field('escrita1')?>
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center my-3 my-lg-0">
                        <a
                        class="l-shortcut__item l-shortcut__item--center d-flex flex-column justify-content-center align-items-center text-decoration-none p-5"
                        style="background-image: linear-gradient(to right, #D99D31, #966B19);"
                        href="<?php echo get_field('botao2')?>"  <?php if (get_field('nova_guia2') == '1') :?>  target="_blank" <?php endif; ?>>
                            <div class="p-2">
                                <img
                                class="img-fluid"
                                src="<?php echo get_field('icone2')?>"
                                alt="Seja Voluntário">
                            </div>

                            <p class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                <?php echo get_field('escrita2')?>
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center my-3 my-lg-0">
                        <a
                        class="l-shortcut__item d-flex flex-column justify-content-center align-items-center text-decoration-none p-5"
                        style="background-image: linear-gradient(to right, #D99D31, #966B19);"
                        href="<?php echo get_field('botao3')?>"  <?php if (get_field('nova_guia3') == '1') :?>  target="_blank" <?php endif; ?>>
                            <div class="p-2">
                                <img
                                class="img-fluid"
                                src="<?php echo get_field('icone3')?>"
                                alt="Seja Voluntário">
                            </div>

                            <p class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                <?php echo get_field('escrita3')?>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end shortcut -->

<!-- news -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-center my-5">
                
                <h2 class="c-title-pattern pb-2">
                    Notícias    

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-editorial-news pb-5">

                    <div class="swiper-wrapper">

                        <?php 
                            $args = array(
                                'post_per_page' => -1,
                                'post_type'     => 'post',
                                'category_name' => 'noticias+vocacional',
                                'order'         => 'DESC',
                            );

                            $contents = new WP_Query( $args );
                            $cats = array();

                            if( $contents->have_posts() ):
                                while ( $contents->have_posts() ) : $contents->the_post();
                        ?>
                                    <div class="swiper-slide">    
                                        <a 
                                        class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                        href="<?php the_permalink() ?>">

                                            <div class="card-img">
                                             
                                                <?php 
                                                    $alt_title = get_the_title();
                                                    the_post_thumbnail('post-thumbnail', 
                                                        array(
                                                            'class' => 'img-fluid w-100 u-h-100 lg:px:u-h-252 u-object-fit-cover',
                                                            'alt'   => $alt_title
                                                    ))
                                                ?>
                                            </div>

                                            <div class="card-body">

                                                <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                                    <span class="u-font-weight-medium">por</span> <?php echo get_the_author_meta('user_firstname') ?> <br>
                                                    <?php echo get_the_date( 'd/m/Y', get_the_ID() ); ?>
                                                </p>

                                                <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                                    <?php the_title() ?>
                                                </h4>

                                                <span class="d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">

                                                    <?php echo the_excerpt()?>

                                                </span>
                                            </div>

                                            <div class="c-card-footer-absolute card-footer">

                                                <div class="row justify-content-center">

                                                    <div class="col-6">
                                                        <p class="u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron hover:u-bg-folk-dark-golden mb-0 py-2">
                                                            Ler mais
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                            
                        <?php 
                                endwhile;
                            endif;

                            wp_reset_query();
                        ?>
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-editorial-news d-none d-xl-flex js-swiper-button-prev-editorial-news">
                    <img
                    class="img-fluid w-100 h-100"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-left.png"
                    alt="Seta Esquerda">
                </div>

                <div class="swiper-button-next swiper-button-next-editorial-news d-none d-xl-flex js-swiper-button-next-editorial-news">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-right.png"
                    alt="Seta Direita">
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="<?php echo get_home_url( null, '/noticias/?cat=vocacional' ) ?>">
                                    Todas os Notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end news -->

<!-- blog -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-center my-5">
                
                <h2 class="c-title-pattern pb-2">
                    Blog   

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-blogs pb-5">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php 
                            $args = array(
                                'post_per_page' =>  9,
                                'post_type'     => 'post',
                                'category_name' => 'blog+vocacional',
                                'order'         => 'DESC',
                            );

                            $contents = new WP_Query( $args );
                            $cats = array();

                            if( $contents->have_posts()):
                                while ($contents->have_posts()) : $contents->the_post();
                        ?>
                                    <div class="swiper-slide">
                                        <a 
                                        class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                        href="<?php the_permalink()?>">

                                            <div class="card-img">
                                                <?php
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail('post-thumbnail', 
                                                        array(
                                                            'class' => 'img-fluid w-100 u-h-100 lg:px:u-h-252 u-object-fit-cover',
                                                            'alt'   => $alt_title
                                                        ));
                                                ?>
                                            </div>

                                            <div class="card-body">

                                                <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                                    <span class="u-font-weight-medium">por</span> <?php echo get_the_author_meta('user_firstname') ?>  <br>
                                                    <?php echo get_the_date( 'd/m/Y', get_the_ID() ); ?>
                                                </p>

                                                <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                                    <?php echo get_the_title()?>
                                                </h4>

                                                <span class="d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                                    <?php echo limit_words( get_the_excerpt(), 32); ?>
                                                </span>
                                            </div>

                                            <div class="c-card-footer-absolute card-footer">

                                                <div class="row justify-content-center">

                                                    <div class="col-6">
                                                        <p class="u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron hover:u-bg-folk-dark-golden mb-0 py-2">
                                                            Ler mais
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                        <?php 
                                endwhile;
                            endif;

                            wp_reset_query();
                        ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-blogs d-none d-xl-flex js-swiper-button-prev-blogs">
                    <img
                    class="img-fluid w-100 h-100"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-left.png"
                    alt="Seta Esquerda">
                </div>

                <div class="swiper-button-next swiper-button-next-blogs d-none d-xl-flex js-swiper-button-next-blogs">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-right.png"
                    alt="Seta Direita">
                </div>

                <!-- pagination -->
                <div class="swiper-pagination swiper-pagination-blogs w-100 js-swiper-pagination-blogs" style="left:0"></div>
                <!-- end swiper -->
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="<?php echo get_home_url( null, '/blog/?cat=vocacional' ) ?>">
                                    Todos os conteúdos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end blog -->

<!-- places -->
<style>
    .l-places::before,
    .l-places::after {
        content: '';
        width: 100%;        
        left: 0;
        position: absolute;
        background-color: #FFF;
    }

    .l-places::before {
        height: 30px;
        top: 0;
    }

    .l-places::after {
        height: 140px;
        bottom: 0;
    }

    @media screen and (max-width: 991px) {
        .l-places::after {
            display: none;
        }
    }

    @media screen and (min-width: 1600px) {
        .l-places::before {
            top: -1px;
        }

        .l-places::after {
            bottom: -1px;
        }
    }
</style>

<section class="l-places position-relative u-bg-folk-dark-marron pb-5 pb-lg-0">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-lg-7 h-100">

                        <!-- swiper -->
                        <div class="swiper-container js-swiper-places-images">

                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php
                                    $page_parent_id = [305,305];

                                    $args = array(
                                        'posts_per_page' => -1,
                                        'post_type'      => 'page',
                                        'post_parent'    => $page_parent_id,
                                        'order'          => 'DESC'
                                    );

                                    $places_pages = new WP_Query( $args );

                                    if( $places_pages->have_posts() ) :
                                        while( $places_pages->have_posts() ) : $places_pages->the_post();
                                ?>
                                            <div class="swiper-slide">
                                                <?php
                                                    $alt_title = get_the_title();

                                                    the_post_thumbnail( 'post-thubmnail',
                                                        array(
                                                            'class' => 'w-100 u-h-100 lg:px:u-h-488 u-object-fit-cover',
                                                            'alt'   => $alt_title 
                                                        )
                                                    );
                                                ?>

                                                <!-- <img
                                                class="w-100 u-h-100 lg:px:u-h-488 u-object-fit-cover"
                                                src="<php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/places-img-1.png"
                                                alt="<php the_title() ?>"> -->
                                            </div>
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>

                    <div class="col-lg-5 h-100 mt-5 pt-4">

                        <!-- swiper -->
                        <div class="swiper-container js-swiper-places-content">
                            
                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <?php 
                                    if( $places_pages->have_posts() ) :
                                        while( $places_pages->have_posts() ) : $places_pages->the_post();
                                ?>
                                            <a 
                                            class="swiper-slide text-decoration-none"
                                            href="<?php the_permalink() ?>">

                                                <div>
                                                    <p class="u-font-size-14 lg:u-font-size-18 xxl:u-font-size-22 u-font-weight-semibold u-font-family-lato u-color-folk-dark-golden mb-0">
                                                        Etapas de Formaçao
                                                    </p>

                                                    <h5 class="u-font-size-32 lg:u-font-size-38 xxl:u-font-size-45 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                                                        <!-- Postulantado -->
                                                        <?php the_title() ?>
                                                    </h5>

                                                    <!-- <p class="u-font-size-16 lg:u-font-size-18 xxl:u-font-size-26 u-font-weight-light u-font-family-lato u-font-style-italic u-color-folk-white">
                                                        Como o próprio nome já diz, aqui os jovens
                                                        postulam entrar na Ordem e se consagrarem.
                                                    </p> -->

                                                    <span class="d-block u-font-size-16 lg:u-font-size-18 xxl:u-font-size-26 u-font-weight-light u-font-family-lato u-font-style-italic u-color-folk-white">
                                                        <?php echo limit_words( get_the_excerpt(), 16); ?>
                                                    </span>

                                                    <p class="u-font-size-16 lg:u-font-size-18 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato text-right u-color-folk-dark-golden mb-4">
                                                        Saiba mais > 
                                                    </p>
                                                </div>
                                            </a>
                                <?php 
                                        endwhile;
                                    endif;
                                ?>
                                <!-- end slide -->
                            </div>
                        </div>

                        <!-- navigation -->
                        <div class="row">

                            <div class="col-6">
                                <div class="w-100 u-font-size-18 lg:u-font-size-22 xxl:u-font-size-26 u-font-weight-bold u-font-family-lato text-center u-color-folk-white hover:u-color-folk-dark-golden u-bg-folk-dark-golden hover:u-bg-folk-white u-cursor-pointer py-2 js-swiper-button-prev-places-content">
                                    Anterior
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="w-100 u-font-size-18 lg:u-font-size-22 xxl:u-font-size-26 u-font-weight-bold u-font-family-lato text-center u-color-folk-white hover:u-color-folk-dark-golden u-bg-folk-dark-golden hover:u-bg-folk-white u-cursor-pointer py-2 js-swiper-button-next-places-content">
                                    Próximo
                                </div>
                            </div>
                        </div>
                        <!-- end swiper -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end places -->

<!-- photos -->
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-12">

                        <div class="row">

                            <div class="col-12 d-flex justify-content-center my-4">

                                <h3 class="c-title-secondary">
                                    Fotos
                                </h3>
                            </div>
                        </div>

                        <div class="row">

                            <!-- loop -->
                            <?php 
                        $editorial_slug_current = 'vocacional';
                        //strtolower(get_the_title());

                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'album',
                            'tax_query'      => array(
                                array(
                                    'taxonomy' => 'categoria-foto',
                                    'field'    => 'slug',
                                    'terms'    => array( $editorial_slug_current )
                                )
                            )
                        );

                        $gallery = new WP_Query( $args );
                        $count = 0;

                        if( $gallery->have_posts() ) :
                            while( $gallery->have_posts() ) : $gallery->the_post();

                                $photos = get_field( 'galeria' );

                                if( $photos ) :
                                    foreach( $photos as $photo ) :     
                                        $count++;
                    ?>
                                <div class="col-md-4 my-2">
                                    <a 
                                    class="l-photos__photo overflow-hidden position-relative d-block" 
                                    href="<?php the_permalink() ?>">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        style="height:296px"
                                            src="<?php echo $photo['url'] ?>"
                                            alt="<?php echo $photo['title']; ?>">
                                    </a>
                                 </div>
                                <?php
                                        if( $count == 12 )
                                            break;
                                    endforeach;
                                endif;
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="<?php echo get_home_url( null, '/fotos/?cat=caridade' ) ?>">
                                    Todas as Fotos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end photos -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
