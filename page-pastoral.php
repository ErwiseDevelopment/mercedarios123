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
<?php echo do_shortcode( '[rev_slider alias="dom-inocencio"][/rev_slider]' ); ?>
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

                        <!-- slide <php for( $i = 0; $i < 8; $i++ ) { ?> -->
                        
                            
                                <?php 
                                 $args = array(
                                    'post_per_page' => 21,
                                    'post_type'     => 'post',
                                    'category_name' => 'pastoral+noticias',
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
                                href="<?php the_permalink() ?>">

                                    <div class="card-img">
                                        <!-- <img
                                        class="img-fluid w-100"
                                        src="http://mercedarios.erwisedev-hml.com.br/wp-content/uploads/2022/08/news-post-1.png"
                                        alt=""> -->

                                        <?php 
                                        $alt_title = get_the_title();
                                        the_post_thumbnail('post-thumbnail', 
                                        array(
                                            'class' => 'img-fluid w-100 h-100',
                                            'alt'   => $alt_title
                                            ))
                                        ?>
                                    </div>

                                    <div class="card-body">

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                            <span class="u-font-weight-medium">por</span> <?php echo get_the_author_meta('user_firstname') ?> <br>
                                            <!-- 06 de Maio de 2021 -->
                                            <?php echo get_date_format('d/m/Y', $post)?>
                                        </p>

                                        <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                            <!-- Mensagem do Provincial
                                            Dia de São Pedro Nolasco -->
                                        <?php the_title() ?>
                                        </h4>

                                        <span class="u-font-size-14 xxl:u-font-size-17 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                            <!-- Lorem ipsum dolor sit amet, consectetur 
                                            adipiscing elit. Mauris lectus dolor, semper 
                                            vitae libero se,d, ornare tempus dui. Donec 
                                            efficitur, dui et facilisis commodo, mauris 
                                            massa mollis nisi, ornare egestas lectus 
                                            turpis tempus dolor. Aliquam.[...] -->
                                            <?php the_excerpt()?>
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
                            
                            <!--  <php } ?>end slide -->
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
                                href="<?php echo get_home_url( null, 'noticias/?=pastoral' ) ?>">
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
                    $editorial_slug_current = 'pastoral';
                    //strtolower(get_the_title());

                    $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'Galeria',
                    'tax_query'      => array(
                        array(
                            'taxonomy' => 'galeria-categoria',
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
    href="<?php echo get_home_url( null, 'galeria/?=caridade' ) ?>">
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
