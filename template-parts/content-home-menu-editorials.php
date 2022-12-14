<section class="position-relative py-4 px-3 px-xl-5">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-xl-2 d-flex justify-content-center align-items-center">
                        <p class="u-line-height-100 u-font-size-26 xxl:u-font-size-32 u-font-weight-regular u-font-family-cinzel u-color-folk-dark-marron mb-0">
                            o que você <br>
                            <span class="u-font-weight-bold u-font-family-cinzel">deseja ver?</span>
                        </p>
                    </div>

                    <div class="col-xl-8 mt-3 mt-xl-0 px-0">

                        <div class="row">

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#af0202"
                                href="<?php echo get_field('editoria_institucional', 'option') ?>">
                                    institucional
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#940302"
                                href="<?php echo get_field('editoria_vocacional', 'option')?>">
                                    vocacional
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#840203"
                                href="<?php echo get_field('editoria_educacao', 'option')?>">
                                    educação
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#720302"
                                href="<?php echo get_field('editoria_paroquias', 'option')?>">
                                    paróquias
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#af0202"
                                href="<?php echo get_field('editoria_caridade', 'option')?>">
                                 Ação Redentora
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#940302"
                                href="<?php echo get_field('editoria_dominocencio', 'option')?>">
                                    dom inocêncio
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                                style="background-color:#840203"
                                href="<?php echo get_field('editoria_revistamerce', 'option')?>">
                                    revista mercê
                                </a>
                            </div>

                            <div class="col-6 col-lg-3 my-1">
                                <a
                                class="w-100 h-100 u-box-shadow-pattern d-block u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-0"
                                style="background-color:#720302"
                                href="<?php echo get_field('editoria_empreendedor', 'option')?>">
                                    pastoral do empreendedor
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 py-1 px-0 px-lg-3">
                        <a
                        class="w-100 h-100 d-flex justify-content-center align-items-center u-font-size-14 xxl:u-font-size-17 u-font-weight-regular u-font-family-cinzel text-center text-uppercase text-decoration-none u-color-folk-white hover:u-bg-folk-dark-golden py-2"
                        style="background-color:#640000"
                        href="<?php echo get_field('editoria_acervo', 'option')?>">
                            Acervo virtual <br>
                            (NOssa história)
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- form search -->        
     <?php 
        if( $post->post_title == 'Início' )
            echo get_template_part( 'template-parts/content', 'box-search' );
    ?>
    <!-- end form search -->
</section>