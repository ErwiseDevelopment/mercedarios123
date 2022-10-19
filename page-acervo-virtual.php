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
<section class="mt-3 py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php 
                        $args = array(
                            'posts_per_page' => -1,
                            'post_type'      => 'acervo'
                        );

                        $collections = new WP_Query( $args );
                        

                        if( $collections->have_posts()):
                            while ($collections->have_posts()) : $collections->the_post();
                    ?>
                                <div class="col-lg-6 my-4 py-3">

                                <img 
                                    
                                 src=" <?php echo get_field('imagem_destaque');?>"> 
                                

                                    <a 
                                    class="h-100 position-relative d-block text-decoration-none pt-5 pb-5 px-4"
                                     href="<?php echo get_field( 'acessar' ) ?>"
                                    target="<?php echo get_field( 'nova_guia' ) ?>"
                                    rel="noreferrer noopener">
                                        <span class="l-collection__icon-download">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/icon-download.png"
                                            alt="Ícone download">
                                        </span>

                                        <h4 class="u-font-size-18 xl:u-font-size-22 xxl:u-font-size-32 u-font-weight-regular u-font-family-lato text-center u-color-folk-white mt-3">
                                            
											 <?php $texto = get_field( 'descricao' ); 
												if (empty ($texto) ):{
									   					echo the_title();}
									   else: echo $texto;
									   
									   endif;
													?>
											
                                        </h4>

                                        <p class="l-collection__access u-font-size-22 u-font-weight-bold u-font-family-lato text-center u-color-folk-white u-bg-folk-golden hover:u-bg-folk-dark-marron mb-0 py-1 px-4">
                                            Acessar
                                        </p>
                                    </a>
                                </div>
                        
                    <?php 
                            endwhile; 
                        endif; 
                        
                        wp_reset_query();
                    ?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->



</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
