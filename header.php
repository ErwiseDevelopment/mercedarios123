<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <!-- top info -->
    <?php echo get_template_part( 'template-parts/content', 'top-info' ) ?>
    <!-- end top info -->

    <!-- menu -->
    <?php 
        if( $post->post_title != 'Início' ) : 
            echo get_template_part( 'template-parts/content', 'menu-editorials' ) ;
        endif;
    ?>
    <!-- end menu -->
        
    <header id="masthead" class="<?php echo $post->post_title == 'Início'|| $post->post_title == 'Notícias' ? 'd-none' : ''; ?> header site-header navbar-static-top position-relative py-4 <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

        <div class="container">

            <nav class="l-navbar navbar navbar-expand-xl p-0">

                <div class="navbar-brand d-none">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <?php
                wp_nav_menu(array(
                'theme_location'    => $post->post_name,
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>

             <!-- form search -->        
             <div class="l-box-search js-box-search p-3">

                <div class="container">

                    <div class="row justify-content-center">

                        <div class="col-lg-8">

                            <form method="GET" action="<?php echo get_home_url( null, '/' ) ?>">

                                <div class="row justify-content-end">

                                    <div class="col-lg-8 mb-3 mb-lg-0">
                                        <input 
                                        class="w-100 border shadow-sm rounded-lg d-block u-font-weight-regular px-3"
                                        type="search"
                                        name="s"
                                        placeholder="...">
                                    </div>

                                    <div class="col-lg-3 mb-3 mb-lg-0 pl-lg-0">
                                        <input
                                        class="w-100 h-100 border-0 shadow-sm rounded-lg d-block u-font-size-12 u-font-weight-bold text-center text-uppercase u-color-folk-white u-bg-folk-golden" 
                                        type="submit"
                                        value="Pesquisar">
                                    </div>

                                    <div class="col-lg-1 d-flex justify-content-center align-items-center pl-lg-0">
                                        <span class="w-100 rounded-lg u-font-weight-bold text-center u-color-folk-white u-bg-folk-dark-marron u-cursor-pointer js-close-search">
                                            x
                                        </span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end form search -->
        </div>
    </header><!-- #masthead -->
    
    <?php endif; ?>