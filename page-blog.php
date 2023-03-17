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

<section class="py-5">

    <div class="container-fluid">

        <div class="row">

        <?php 
                if( isset( $_GET['cat'] ) ) {
                    foreach( get_categories() as $category) {
                        if( $_GET['cat'] == $category->slug )
                            $category_current = $category->slug; 
                    }
                } else {
                    $category_current = 'blog-destaque';
                }
        ?>
            <div class="col-lg-9 pl-lg-0">
                
                <div class="h-100 u-bg-folk-bold-marron py-4">

                    <div class="col-12">

                        <?php 
                            $args = array(
                                'posts_per_page' => 1,
                                'post_type'      => 'post',
                                'category_name'  => $category_current . ',+blog',
                                'order'          => 'DESC',
                            );

                            $contents = new WP_Query( $args );
                            $posts_current = array();

                            if( $contents->have_posts()):
                                while ($contents->have_posts()) : $contents->the_post();
                                    array_push($posts_current, get_the_ID());
                        ?>
                                    <div class="row">

                                        <div class="col-xl-7">
                                            <?php
                                                $alt_title = get_the_title();
                                                the_post_thumbnail('post-thumbnail', 
                                                    array(
                                                        'class' => 'img-fluid w-100 h-100',
                                                        'alt'   => $alt_title
                                                    ));
                                            ?>
                                        </div>

                                        <div class="col-xl-5 mt-3 mt-xl-0">
                                            
                                            <p class="u-line-height-100 u-font-size-19 xxl:u-font-size-22 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden mb-4">
                                                <span class="u-font-weight-medium u-font-family-lato">por</span>  <?php echo get_the_author_meta( 'user_firstname' ) ?> <br>
                                                <?php echo get_the_date( 'd/m/Y', $post )?>
                                            </p>

                                            <h3 class="u-font-size-20 xl:u-font-size-26 xxl:u-font-size-32 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                                                <?php echo the_title() ?> 
                                            </h3>

                                            <span class="u-font-size-16 xl:u-font-size-20 xxl:u-font-size-26 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-white">
                                                <?php the_excerpt() ?>
                                            </span>

                                            <div class="row">

                                                <div class="col-8 col-xl-6 mt-3">
                                                    <a
                                                    class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-2"
                                                    href="<?php the_permalink() ?>">
                                                        Ler mais
                                                    </a>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        <?php 
                                endwhile;
                            endif;

                            wp_reset_query();
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 pt-3">
                
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
                                    href="<?php echo get_home_url( null, '/blog/?cat=institucional' ) ?>">
                                        Institucional
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/blog/?cat=vocacional' ) ?>">
                                        Vocacional
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/blog/?cat=educacao' ) ?>">
                                        Educação
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/blog/?cat=paroquias' ) ?>">
                                        Paróquias
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/blog/?cat=caridade' ) ?>">
                                        Caridade
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/blog/?cat=dom-inocencio' ) ?>">
                                        Dom Inocêncio
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/blog/?cat=pastoral' ) ?>">
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

<section class="py-5">

    <div class="container">

        <div class="row">
        <?php 
                if( isset( $_GET['cat'] ) ) {
                    foreach( get_categories() as $category) {
                        if( $_GET['cat'] == $category->slug )
                            $category_current = $category->slug; 
                    }
                } else {
                    $category_current = 'blog';
                }
        ?>                     
            <div class="col-12">
   
                <div class="row">

                    <?php 
                        $args = array(
                            'posts_per_page' => 3,
                            'post_type'      => 'post',
                            'category_name'  => $category_current . ',+blog',
                            'order'          => 'DSC',
                            'post__not_in'   => $posts_current,
                        );

                        $contents = new WP_Query( $args );

                        if( $contents->have_posts()):
                            while ($contents->have_posts()) : $contents->the_post();
                                
                    ?>
                                <div class="col-md-4 mb-5">

                                    <a 
                                    class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                    href="<?php the_permalink() ?>">

                                        <div class="card-img">
                                            <?php
                                                $alt_title = get_the_title();
                                                the_post_thumbnail('post-thumbnail', 
                                                    array(
                                                    'class' => 'img-fluid w-100 u-h-100 lg:px:u-h-320 u-object-fit-cover',
                                                    'alt'   => $alt_title
                                                ));
                                            ?>
                                        </div>

                                        <div class="card-body">

                                            <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                                <span class="u-font-weight-medium">por</span>  <?php echo get_the_author_meta('user_firstname') ?> <br>
                                                <?php echo get_the_date('d/m/Y', $post)?>
                                            </p>

                                            <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                                <?php echo the_title()?>
                                            </h4>

                                            <span class="u-font-size-14 xxl:u-font-size-16 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
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
                </div>
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">
                        <div class="col-12 load-more-posts-container">
    <button class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2 load-more-posts-button">Carregar Mais</button>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endwhile; ?>
<script>
    jQuery(document).ready(function($){
        var page = 1;
        var loading = false;
        var $loadMoreButton = $('.load-more-posts-button');
        var $postContainer = $('.row');

        $loadMoreButton.on('click', function(){
            if (!loading) {
                loading = true;
                $loadMoreButton.html('Carregando...');
                var data = {
                    'action': 'load_more_posts',
                    'page': page + 1,
                    'args': {
                        'posts_per_page': 2,
                        'post_type': 'post',
                        'category_name': '<?php echo $category_current . ',+blog'; ?>',
                        'order': 'DSC',
                        'post__not_in': <?php echo json_encode( $posts_current ); ?>
                    }
                };
                $.post('<?php echo admin_url('admin-ajax.php'); ?>', data, function(response) {
                    if (response) {
                        $postContainer.append(response);
                        loading = false;
                        page++;
                        $loadMoreButton.html('Carregar Mais');
                    } else {
                        $loadMoreButton.html('Não há mais posts');
                    }
                });
            }
        });
    });
</script>
</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
