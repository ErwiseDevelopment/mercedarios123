<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
  
    <?php get_template_part( 'footer-widget' ); ?>
    
    <!-- <footer id="colophon" class="site-footer <php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
        <div class="container pt-3 pb-3">
            <div class="site-info">
                &copy; <php echo date('Y'); ?> <php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
                <span class="sep"> | </span>
                <a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div>
        </div>
    </footer> #colophon -->

    <!-- newsletter -->
    <?php 
        if( $post->post_name == 'inicio' ) :
            echo get_template_part( 'template-parts/content', 'newsletter' );
        else :
            echo get_template_part( 'template-parts/content', 'banner-materials' );
            echo get_template_part( 'template-parts/content', 'newsletter-general' );
        endif; 
    ?>
    <!-- end newsletter -->

    <footer 
    class="u-bg-cover u-bg-no-repeat py-5"
    style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/footer-background.png)">
        
        <div class="container">

            <div class="row justify-content-center">

                <div class="col-6 col-lg-3 mb-4">
                    <a href="#">
                        <img
                        class="img-fluid w-100"
                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/logo-footer.png"
                        alt>
                    </a>
                </div>

                <div class="col-12 mt-3">
                    
                    <div class="row">

                        <div class="col-lg-4 my-2 my-lg-0">

                            <!-- <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-white pl-4">
                                Cúria Provincial do Brasil
                            </h4> -->

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__local before::u-font-size-20 u-font-weight-semibold u-color-folk-white"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">
                                    <?php echo get_field('endereco', 'option')?>
                                </span>
                            </p>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__phone before::u-font-size-20 u-font-weight-semibold u-color-folk-white"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">
                                     <?php echo get_field('telefone_cabecalho', 'option')?>
                                </span>
                            </p>

                            <p class="d-flex">
                                <span class="u-icon__free u-icon__envelope before::u-font-size-20 u-font-weight-semibold u-color-folk-white"></span>
                                <span class="u-font-size-14 u-font-weight-medium u-font-family-lato u-color-folk-white pl-2">
                                    <?php echo get_field('e-mail_cabecalho', 'option')?>
                                </span>
                            </p>
                        </div>

                        <div class="col-lg-4 my-2 my-lg-0">

                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-white">
                                Nossas áreas
                            </h4>

                            <div class="d-flex">
                                <ul class="mb-0 pl-0">
                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_institucional', 'option')?>">
                                            Institucional
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_vocacional', 'option')?>">
                                            Vocacional
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_educacao', 'option')?>">
                                            Educação
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_paroquias', 'option')?>">
                                             Paróquias
                                        </a>
                                    </li>
                                </ul>

                                <ul class="mb-0">
                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_caridade', 'option')?>">
                                            Ação Redentora
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_dominocencio', 'option')?>">
                                            Dom Inocêncio
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_revistamerce', 'option')?>">
                                            Revista Mercê
                                        </a>
                                    </li>

                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_empreendedor', 'option')?>">
                                            Pastoral do Empreendedor
                                        </a>
                                    </li>
                                    <li class="u-list-style-none mb-2">
                                        <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white"
                                        href="<?php echo get_field('editoria_acervo', 'option')?>">
                                        Ação Redentora
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4 my-2 my-lg-0">
                            <h4 class="u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-white">
                                Links
                            </h4>

                            <ul class="mb-0 pl-0">
                                <li class="u-list-style-none mb-2">
                                    <a class="u-font-size-14 u-font-weight-medium u-font-family-lato text-decoration-none u-color-folk-white">
                                       <?php echo get_field('links', 'option') ?>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-end">

                <div class="col-lg-4 mt-4 mt-lg-0">
                    <ul 
                        class="d-flex justify-content-center justify-content-xl-start mb-0 pl-0">
                            
                            <?php if (!empty(get_field('spotify_redes', 'option'))):{?>
                            <li class="u-list-style-none pr-2">
                            <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__spotify rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('spotify_redes', 'option')?>" <?php if (get_field('nova_guia_stf', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Spotify
                                </a>
                            </li>
                            <?php } else: endif;?>   
                                <?php if (!empty(get_field('facebook_redes', 'option'))):{?>        
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Facebook
                                </a>
                            </li>
                             <?php } else: endif;?>     
                             <?php if (!empty(get_field('instagram_redes', 'option'))):{?>  
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram  rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"  rel="noreferrer noopener"
                                href="<?php echo get_field('instagram_redes', 'option')?>" <?php if (get_field('nova_guia_insta', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Instagram
                                </a>
                            </li>
                            <?php } else: endif;?>   
                            <?php if (!empty(get_field('youtube_redes', 'option'))):{?>       
                            <li class="u-list-style-none pr-2">
                                 <a class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white" rel="noreferrer noopener"
                                href="<?php echo get_field('youtube_redes', 'option')?>" <?php if (get_field('nova_guia_yt', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Youtube
                                </a>
                            </li>
                            <?php } else: endif;?>   
                            <?php if (!empty(get_field('whatsapp_redes', 'option'))):{?>       
                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white" rel="noreferrer noopener"
                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Whatsapp
                                </a>
                            </li>
                            <?php } else: endif;?>   
                        </ul>
                </div>
            </div>
            					<!-- footer logos -->
                                <div class="col-12 my-4">
                        
                        <div class="row">

                            <div class="col-lg-8 d-flex align-items-center">
                                <p class="u-line-height-100 u-font-weight-semibold text-center text-md-left u-color-folk-white mb-0" style= "font-size: 13px;">
                                    <?php echo get_field('rodape_ass', 'option') ?> © <?php echo date('Y'); ?> TODOS OS DIREITOS RESERVADOS.
                                </p>
                            </div>

                            <div class="col-lg-4">
                            
                                <div class="row">

                                    <div class="col-6">
                                        <a 
                                        href="https://www.dominuscomunicacao.com/" 
                                        target="_blank" 
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid my-3 my-md-0"
                                            src="https://erwise.com.br/wp-content/uploads/2022/06/dominus.png"
                                            alt="Dominus">
                                        </a>
                                    </div>

                                    <div class="col-6">
                                        <a 
                                        href="https://www.erwise.com.br" 
                                        target="_blank" 
                                        rel="noreferrer noopener">
                                            <img
                                            class="img-fluid my-3 my-md-0"
                                            src="https://erwise.com.br/wp-content/uploads/2022/06/erwise.png"
                                            alt="Erwise">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<!-- end footer logo -->
        </div>
    </footer>

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>