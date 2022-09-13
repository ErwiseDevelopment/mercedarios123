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
                                    'posts_per_page' => 99,
                                    'post_type'      => 'acervo');

                                    $contents = new WP_Query( $args );
                                   

                                    if( $contents->have_posts()):
                                        while ($contents->have_posts()) : $contents->the_post();
                                ?>
                        <div class="col-6">

                            <div class="u-bg-folk-dark-marron">
                                <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                      <?php  the_content();?>
                                 </h4>
                            </div>
                        </div>
                        
                    <?php endwhile; endif; wp_reset_query();?>
                    <!-- end loop -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end content -->

<!-- banner materials -->
<?php echo get_template_part( 'template-parts/content', 'banner-materials' ) ?>
<!-- end banner materials -->

</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
