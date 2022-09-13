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
<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 pb-5">

                <div class="row">

                    <div class="col-6 pt-3">

                        <?php
                            if( isset( $_GET[ 'id' ] ) ) {
                                $category_current_id = $_GET[ 'id' ];
                                $category_current = get_term( $category_current_id );
                            }
                        ?>
                        
                        <ul class="d-flex pl-0">

                            <li class="u-list-style-none mr-1">
                                <a
                                class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                                href="<?php echo get_home_url( null, '/' ) ?>">
                                    Home
                                </a>
                            </li>

                            <li class="u-list-style-none mr-1">
                                <a
                                class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                                href="<?php echo get_home_url( null, 'vocacional' ) ?>">
                                    > Vocacional
                                </a>
                            </li>

                            <li class="u-list-style-none mr-1">
                                <a
                                class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                                href="<?php echo get_home_url( null, 'nossas-devocoes' ) ?>">
                                    > Nossas Devoções
                                </a>
                            </li>

                            <li class="u-list-style-none mr-1">
                                <a
                                class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-bold-gray"
                                href="<?php echo $category_current ? get_home_url( null, 'nossas-devocoes/?id=' . $category_current->term_id ) : '#'; ?>">
                                    <!-- Santos da Ordem > -->
                                    <?php echo '> ' . $category_current->name; ?>
                                </a>
                            </li>
                        </ul>

                        <!--
                            

                            // $args = array(
                            //     'posts_per_page' => -1,
                            //     'post_type'      => 'devocoes',
                            //     'order'          => 'DESC',
                            //     'tax_query'      => array(
                            //         array(
                            //             'taxonomy' => 'santos',
                            //             'field'    => 'slug',
                            //             'terms'    => array( $category_current->slug )
                            //         )
                            //     )
                            // );
                        -->

                        <h2 class="u-font-size-34 u-font-weight-bold u-font-family-cinzel u-color-folk-bold-marron mb-3">
                            <!-- Santos da Ordem -->
                            <?php echo $category_current->name; ?>
                        </h2>

                        <!-- <p class="u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-bold-gray">
                            A espiritualidade mercedária, vivida intensamente dia 
                            após dia nos conventos da Ordem, produziu frutos 
                            extraordinários de santidade silenciosa e feitos heroicos 
                            de martírio desde o início.
                            
                            <br><br>

                            A redenção dos cativos em terras mouriscas colocava 
                            constantemente os redentores mercedários em 
                            situações iminentes de total comunhão com os 
                            sofrimentos de Cristo Redentor.

                            <br><br>

                            São Pedro Nolasco proibiu categoricamente o uso dos 
                            fundos da Ordem para qualquer outra coisa que não a 
                            libertação de cativos cristãos. Fiel ao preceito de seu 
                            Fundador, a Ordem da Mercês nunca labutou ou gastou 
                            sua riqueza canonizando seus santos. E só os mártires 
                            mercedários são numerosos demais para serem 
                            contados! Os santos mercedários canonizados foram 
                            aclamados pela primeira vez como santos pelos cristãos. 
                            Só mais tarde a Sé Apostólica os elevou oficialmente 
                            aos altares.
                        </p> -->

                        <span class="d-block u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-bold-gray">
                            <?php echo get_field( 'descricao', $category_current ) ?>
                        </span>
                    </div>

                    <div class="col-6">
                        <img
                        class="img-fluid w-100 u-object-fit-cover"
                        src="<?php echo get_field( 'imagem_dev', $category_current ); ?>"
                        alt="">
                    </div>
                </div>
            </div>

            <div class="col-12">

<div class="row">

    <?php
        $args = array(
            'posts_per_page' => -1,
            'post_type'      => $post->post_type,
            'order'          => 'DESC',
            'post__not_in'   => array( $post->ID),
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

<img
class="img-fluid"
data-src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/banner-illustration.png"
alt="Single Temas">

<?php

get_footer();
