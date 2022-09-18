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

        <?php 
                if( isset( $_GET['cat'] ) ) 
                    foreach( get_categories() as $category) {
                        if( $_GET['cat'] == $category->slug )
                            $category_current = $category->slug; 
                    }
               
        ?>

<section class="my-5 pt-4">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-md-9">
                       <a href="<?php echo get_field('link_imagem_destaque', 'option') ?>"> <img
                        class="img-fluid"
                        src="<?php echo get_field('imagem_destaque','option') ?>"
                        alt="destaque"></a>
                    </div>
                    
                    <div class="col-3 pt-3">
                
                <div class="row">

                    <div class="col-12">

                        <div class="border py-4 px-3">

                            <div class="row">

                            <div class="col-12 mb-3">

                                <form method="GET" action="<?php echo get_home_url( null, '/' ) ?>">
                                    <input
                                    class="c-input-search py-3 px-2"
                                    type="search"
                                    name="s">
                                    
                                    <input 
                                    class="d-none"
                                    type="submit"
                                    id="submit">

                                    <label 
                                    class="c-input-search__icon"
                                    for="submit">
                                        Ícone pesquisa
                                    </label>
                                </form>
                            </div>

                            <div class="col-12 my-2">
                                <h5 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-dark-golden">
                                    Categorias
                                </h5>
                            </div>

                            <!-- loop -->
                            
                            <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=institucional' ) ?>">
                                        Institucional
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=vocacional' ) ?>">
                                        Vocacional
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=educacao' ) ?>">
                                        Educação
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=paroquias' ) ?>">
                                        Paróquias
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=caridade' ) ?>">
                                        Caridade
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=dom-inocencio' ) ?>">
                                        Dom Inocêncio
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/materiais/?cat=pastoral' ) ?>">
                                        Pastoral
                                    </a>
                                </div>
                            <!-- end loop -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-11">

                <div class="row">

                    <?php 
                       
                       if( isset( $_GET[ 'cat' ] ) ) {
                           $category_current = $_GET[ 'cat' ];

                           $args = array(
                               'posts_per_page' => -1,
                               'post_type'      => 'ebook',
                               'order'          => 'DESC',
                               'tax_query'      => array(
                                   array(
                                       'taxonomy' => 'ebook-categoria',
                                       'field'    => 'slug',
                                       'terms'    => array( $category_current )
                                   )
                               )
                           );
                       } else {
                           $args = array(
                               'posts_per_page' => -1,
                               'post_type'      => 'ebook',
                               'order'          => 'DESC'
                           );
                       }


                        $ebooks = new WP_Query( $args );

                        if( $ebooks->have_posts() ) :
                            while( $ebooks->have_posts() ) : $ebooks->the_post();
                    ?>
                                <div class="col-md-6 col-lg-4 my-3">

                                    <span
                                    class="card border-0 text-decoration-none"
                                   >

                                        <div class="l-our-materials__card-img card-img d-flex justify-content-center align-items-center p-3">
                                            <!-- <img
                                            class="img-fluid"
                                            src="<php echo get_home_url( null, '/wp-content/uploads/2022/06/mockup-1.png' ) ?>"
                                            alt=""> -->

                                            <?php 
                                                $alt_title = get_the_title();

                                                the_post_thumbnail( 'post-thumbnail',
                                                    array(
                                                        'class' => 'img-fluid',
                                                        'alt'   => $alt_title
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-body">

                                            <p class="l-our-materials__category u-font-weight-semibold text-center u-color-folk-dark-gray">
                                                E-book
                                            </p>

                                            <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                                <!-- Oração Pessoal - Guia
                                                para Iniciantes -->
                                                <?php the_title() ?>
                                            </h4>

                                            <div class="row justify-content-center">

                                                <div class="col-8 mt-3">
                                                    <a href="<?php echo get_field('link_ebook') ?>" 
                                                    <?php if('nova_guia_mat' == '1'):?> target="_blank"
                                                    <?php endif;?>>
                                                        <p class="u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron hover:u-bg-folk-dark-golden mb-0 py-2">
                                                            Baixar
                                                        </p>
                                                    </a>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        
                                        </span> 
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

<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
