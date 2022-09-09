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
<section 
class="w-100"
style="height:100vh;background:red">
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
                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/about-image.png"
                            alt="">
                        </div>
                    </div>

                    <div class="col-xl-5 order-1 order-xl-2">

                        <h3 class="u-font-size-40 xl:u-font-size-60 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                            Quem são os
                            Mercedários?
                        </h3>

                        <p class="u-font-size-14 xl:u-font-size-16 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-folk-white">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam est erat, efficitur eget sollicitudin non, scelerisque quis lacus. Phasellus finibus maximus metus, vitae viverra leo egestas sed. Sed lacinia in mauris et dignissim. Aliquam efficitur eleifend ultricies. Morbi porttitor tortor nibh, ac hendrerit ligula interdum vel. Curabitur vestibulum felis tellus, feugiat lobortis leo gravida et. Nunc a nisl porta, aliquam erat sit amet, consectetur arcu. Nunc tellus dolor, sodales sit amet varius non, laoreet a felis. Nunc quis varius turpis, eget ornare justo. Pellentesque urna dui, ultricies sit amet porttitor non, placerat sit amet neque. In consequat malesuada ipsum, non rutrum ante. Curabitur eleifend accumsan elit a faucibus. Donec laoreet, nulla eu dictum fermentum, erat metus scelerisque sem, et ullamcorper diam ipsum ut orci. Quisque eleifend nunc ac massa sagittis congue. Sed in sollicitudin orci. Aenean vel nisi condimentum, tincidunt purus quis, finibus ipsum.
                        </p>

                        <div class="row justify-content-end">

                            <div class="col-6 col-xl-4">
                                <a
                                class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-2"
                                href="#">
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
                        href="#">
                            <div class="p-2">
                                <img
                                class="img-fluid"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-seja-voluntario.png"
                                alt="Seja Voluntário">
                            </div>
                            <p class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                Seja <br>
                                Voluntário
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center my-3 my-lg-0">
                        <a
                        class="l-shortcut__item l-shortcut__item--center d-flex flex-column justify-content-center align-items-center text-decoration-none p-5"
                        href="#">
                            <div class="p-2">
                                <img
                                class="img-fluid"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-seja-voluntario.png"
                                alt="Seja Voluntário">
                            </div>
                            <p class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                Seja <br>
                                Voluntário
                            </p>
                        </a>
                    </div>

                    <div class="col-lg-4 d-flex justify-content-center my-3 my-lg-0">
                        <a
                        class="l-shortcut__item d-flex flex-column justify-content-center align-items-center text-decoration-none p-5"
                        href="#">
                            <div class="p-2">
                                <img
                                class="img-fluid"
                                src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-seja-voluntario.png"
                                alt="Seja Voluntário">
                            </div>
                            <p class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                Seja <br>
                                Voluntário
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

                        <!-- slide <php for( $i = 0; $i < 8; $i++ ) { ?> -->
                        
                            <div class="swiper-slide">
                                <?php 
                                 $args = array(
                                    'post_per_page' => 3,
                                    'post_type'     => 'post',
                                    'category_name' => 'noticia-caridade',
                                    'order'         => 'DESC',
                                 );
                                    $contents = new WP_Query( $args );
                                    $cats = array();

                                    if( $contents->have_posts()):
                                        while ($contents->have_posts()) : $contents->the_post();
                                ?>
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
                                            <span class="u-font-weight-medium">por</span> Redação <br>
                                            <!-- 06 de Maio de 2021 -->
                                            <?php echo get_date_format('d/m/Y', $post)?>
                                        </p>

                                        <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                            <!-- Mensagem do Provincial
                                            Dia de São Pedro Nolasco -->
                                        <?php the_title() ?>
                                        </h4>

                                        <p class="u-font-size-14 xxl:u-font-size-17 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                            <!-- Lorem ipsum dolor sit amet, consectetur 
                                            adipiscing elit. Mauris lectus dolor, semper 
                                            vitae libero se,d, ornare tempus dui. Donec 
                                            efficitur, dui et facilisis commodo, mauris 
                                            massa mollis nisi, ornare egestas lectus 
                                            turpis tempus dolor. Aliquam.[...] -->
                                            <?php the_excerpt()?>
                                        </p>
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
                                href="#">
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
                        <?php for( $i = 0; $i < 8; $i++ ) { ?>
                            <div class="swiper-slide">
                                <a 
                                class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                href="#">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100"
                                        src="http://mercedarios.erwisedev-hml.com.br/wp-content/uploads/2022/08/news-post-1.png"
                                        alt="">
                                    </div>

                                    <div class="card-body">

                                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                            <span class="u-font-weight-medium">por</span> Redação <br>
                                            06 de Maio de 2021
                                        </p>

                                        <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                            Mensagem do Provincial
                                            Dia de São Pedro Nolasco
                                        </h4>

                                        <p class="u-font-size-14 xxl:u-font-size-17 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                            Lorem ipsum dolor sit amet, consectetur 
                                            adipiscing elit. Mauris lectus dolor, semper 
                                            vitae libero se,d, ornare tempus dui. Donec 
                                            efficitur, dui et facilisis commodo, mauris 
                                            massa mollis nisi, ornare egestas lectus 
                                            turpis tempus dolor. Aliquam.[...]
                                        </p>
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
                        <?php } ?>
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
                <div class="swiper-pagination swiper-pagination-blogs w-100 js-swiper-pagination-blogs"></div>
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
                                href="#">
                                    Todas os conteúdos
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

<!-- our construction -->
<section class="py-5">

    <div class="container">

        <div class="row">
            
            <div class="col-12 d-flex justify-content-center my-5">
                
                <h2 class="c-title-pattern pb-2">
                    Nossas obras   

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-our-construction">

                    <div class="swiper-wrapper">
                        
                        <!-- slide -->
                        <?php for( $i = 0; $i < 6; $i++ ) { ?>
                            <div class="swiper-slide">

                                <a 
                                class="card border-0 text-decoration-none"
                                href="#">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/our-construction-photo-1.png"
                                        alt="">
                                    </div>

                                    <div class="card-body mt-n5">
                                        <div class="u-bg-folk-dark-marron py-3">
                                            <h3 class="u-font-size-22 xxl:u-font-size-28 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-white">
                                                Recanto Mercê
                                            </h3>

                                            <div class="u-bg-folk-golden mx-auto" style="width:calc(100% - 150px);height:2px"></div>

                                            <p class="u-font-size-17 u-font-weight-regular u-font-family-lato text-center u-color-folk-white mt-2">
                                                Recuperação de dependentes
                                            </p>

                                            <p 
                                            class="position-absolute u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden mb-0 py-2 px-5"
                                            style="bottom:0;left:50%;transform:translateX(-50%)">
                                                Conhecer
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-blogs d-none d-xl-flex js-swiper-button-prev-our-construction">
                    <img
                    class="img-fluid w-100 h-100"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-left.png"
                    alt="Seta Esquerda">
                </div>

                <div class="swiper-button-next swiper-button-next-blogs d-none d-xl-flex js-swiper-button-next-our-construction">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-right.png"
                    alt="Seta Direita">
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
<!-- end our construction -->

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
                            <?php for( $i = 0; $i < 6; $i++ ) { ?>
                                <div class="col-md-4 my-2">
                                    <a 
                                    class="l-photos__photo overflow-hidden position-relative d-block" 
                                    href="#">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
                                        alt="Foto 1">
                                    </a>
                                </div>
                            <?php } ?>
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
                                href="#">
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

<!-- newsletter -->
<section 
class="py-5"
style="background-image: linear-gradient(to right, #D99D31, #946918)">

    <div class="container-fluid">

        <div class="row justify-content-center">

            <div class="col-11">

                <div class="row">

                    <div class="col-lg-3 mb-4 mb-lg-0">

                        <div class="row">

                            <div class="col-12 d-flex justify-content-center">
                    
                                <h2 class="c-title-pattern c-title-pattern--light u-font-size-22 u-color-folk-white pb-4">
                                    Inscreva-se em <br>    
                                    Nossa newsletter!
                                    <span class="c-title-pattern__underline"></span>
                                </h2>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-9 d-flex flex-column justify-content-center">

                        <form>

                            <div class="row">

                                <div class="col-lg-5 my-2 my-lg-0 pr-0">
                                    <input 
                                    class="w-100 h-100 border-0 d-block u-font-size-14 u-font-weight-regular u-color-folk-gray py-2 px-3"
                                    type="text"
                                    placeholder="Nome completo">
                                </div>

                                <div class="col-lg-5 my-2 my-lg-0 pr-0">
                                    <input 
                                    class="w-100 h-100 border-0 d-block u-font-size-14 u-font-weight-regular u-color-folk-gray py-2 px-3"
                                    type="email"
                                    placeholder="E-mail">
                                </div>

                                <div class="col-6 col-lg-2 my-2 my-lg-0">
                                    <input 
                                    class="w-100 border-0 d-block u-font-size-20 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron p-2"
                                    type="submit"
                                    value="Enviar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end newsletter -->

<?php endwhile; ?>

</main><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
