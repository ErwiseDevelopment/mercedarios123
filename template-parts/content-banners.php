<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-xl-6">

                        <div class="row">

                            <div class="col-12 my-2">
                                <a href="<?php echo get_field('link_Imagem esquerda cima', 'option')?>" <?php if (get_field('nova_guia_Imagem esquerda cima', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                    <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    style="max-height:346px"
                                    src="<?php echo get_field('imagem_esquerda_cima', 'option' )?>"
                                    alt="Banner Vocacional">
                                </a>
                            </div>

                            <div class="col-12 my-2">
                            <a href="<?php echo get_field('link_Imagem_esquerda_baixo', 'option')?>" <?php if (get_field('nova_guia_Imagem_esquerda_baixo', 'option') == '1') :?>  target="_blank" <?php endif; ?>>                                    <img
                                    class="img-fluid w-100 u-object-fit-cover"
                                    style="max-height:346px"
                                    src="<?php echo get_field('imagem_esquerda_baixo','option' )?>"
                                    alt="Banner Eventos">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 d-flex flex-column justify-content-center">
<!-- 
                        <h5 class="text-center mb-3 mb-xl-0 pt-4">
                            <span class="d-block u-font-size-28 xl:u-font-size-34 u-font-weight-regular u-font-family-cinzel u-color-folk-dark-marron">Baixe agora mesmo a</span>
                            <span class="u-font-size-42 xl:u-font-size-52 u-font-family-cinzel-decorative u-color-folk-dark-golden">Revista Mercê</span>
                        </h5> -->

                        <a href="<?php echo get_field('link_Imagem_direita', 'option')?>" <?php if (get_field('nova_guia_direita', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                            <img
                            class="img-fluid w-100"
                            src="<?php echo get_field('imagem_direita','option' )?>"
                            alt="Banner Revistas">
                        </a>

                        <div class="row justify-content-center">

                            <div class="col-8 col-5 mt-5 mt-xl-2">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-1"
                                href="<?php echo get_field('link_Imagem_direita', 'option')?>" <?php if (get_field('nova_guia_direita', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                    Baixar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>