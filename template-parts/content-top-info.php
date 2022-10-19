<section class="u-bg-folk-light-gray py-4">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row justify-content-between">

                    <div class="col-xl-4 order-2 order-xl-1 mt-3 mt-xl-0">

                        <ul class="mb-0 pl-0">
                            <li class="u-list-style-none mb-2">
                                <a 
                                class="d-flex text-decoration-none"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    <span class="px:u-w-30 px:u-h-30 u-icon__free u-icon__envelope rounded-pill u-border-2 u-border-color-dark-marron d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-semibold u-color-folk-dark-marron hover:u-color-folk-white hover:u-bg-folk-dark-marron">
                                        E-mail
                                    </span>

                                    <div class="u-line-height-100 d-flex flex-column pl-2">
                                        <span class="u-font-size-12 u-font-weight-regular u-color-folk-gray">
                                            Email
                                        </span>

                                        <span class="u-font-size-14 u-font-weight-semibold u-color-folk-dark-blue">
                                            <?php echo get_field('e-mail_cabecalho', 'option')?>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="u-list-style-none mb-2">
                                <a 
                                class="d-flex text-decoration-none"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    <span class="px:u-w-30 px:u-h-30 u-icon__free u-icon__phone rounded-pill u-border-2 u-border-color-dark-marron d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-semibold u-color-folk-dark-marron hover:u-color-folk-white hover:u-bg-folk-dark-marron">
                                        Telefone
                                    </span>

                                    <div class="u-line-height-100 d-flex flex-column pl-2">
                                        <span class="u-font-size-12 u-font-weight-regular u-color-folk-gray">
                                            Telefone
                                        </span>

                                        <span class="u-font-size-14 u-font-weight-semibold u-color-folk-dark-blue">
                                            <?php echo get_field('telefone_cabecalho', 'option')?>
                                        </span>
                                    </div>
                                </a>
                            </li>

                            <li class="u-list-style-none mb-2">
                                <a 
                                class="d-flex text-decoration-none"
                                href="#"
                                target="_blank"
                                rel="noreferrer noopener">
                                    <span class="px:u-w-30 px:u-h-30 u-icon__free u-icon__map rounded-pill u-border-2 u-border-color-dark-marron d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-semibold u-color-folk-dark-marron hover:u-color-folk-white hover:u-bg-folk-dark-marron">
                                        Mapa
                                    </span>

                                    <div class="u-line-height-100 d-flex flex-column pl-2">
                                        <span class="u-font-size-12 u-font-weight-regular u-color-folk-gray">
                                            Endereço
                                        </span>

                                        <span class="u-font-size-14 u-font-weight-semibold u-color-folk-dark-blue">
                                           <?php echo get_field('endereco-reduzido', 'option')?> 
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-xl-4 order-1 order-xl-2 d-flex justify-content-center align-items-center">

                        <a href="<?php echo get_home_url(); ?>">
                            <img
                            class="img-fluid"
                            src="<?php echo get_field('logo', 'option')?>"
                            alt="">
                        </a>
                    </div>

                    <div class="col-xl-4 order-3 d-flex justify-content-center align-items-center mt-3 mt-xl-0">

                        <ul 
                        class="w-100 px:u-border-radius-24 overflow-hidden d-flex justify-content-around align-items-center u-bg-cover u-bg-no-repeat js-icon-search mb-0 p-3"
                        style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/social-media-overlay.png)">
                                
                            <li class="u-list-style-none">
                                <p class="px:u-w-32 px:u-h-32 u-icon__free u-icon__search rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-bold text-decoration-none u-color-folk-dark-marron u-bg-folk-white u-cursor-pointer mb-0">
                                    Pesquisa
                                </p>
                            </li>

                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__spotify rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"
                                href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Spotify
                                </a>
                            </li>

                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__facebook rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"
                                href="<?php echo get_field('facebook_redes', 'option')?>" <?php if (get_field('nova_guia_face', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Facebook
                                </a>
                            </li>

                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__instagram rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"
                                href="<?php echo get_field('instagram_redes', 'option')?>" <?php if (get_field('nova_guia_insta', 'option') == '1') :?>  target="_blank" <?php endif; ?>
                                rel="noreferrer noopener">
                                    Instagram
                                </a>
                            </li>

                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__youtube rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"
                                href="<?php echo get_field('youtube_redes', 'option')?>" <?php if (get_field('nova_guia_yt', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Youtube
                                </a>
                            </li>

                            <li class="u-list-style-none">
                                <a 
                                class="px:u-w-32 px:u-h-32 u-icon__brands u-icon__whatsapp rounded-pill d-flex justify-content-center align-items-center u-font-size-0 before::u-font-size-18 u-font-weight-regular text-decoration-none u-color-folk-dark-marron u-bg-folk-white"
                                href="<?php echo get_field('whatsapp_redes', 'option')?>" <?php if (get_field('nova_guia_wpp', 'option') == '1') :?>  target="_blank" <?php endif; ?> rel="noreferrer noopener">
                                    Whatsapp
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>