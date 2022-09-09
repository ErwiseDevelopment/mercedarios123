<!-- about -->
<section
class="u-bg-cover u-bg-no-repeat py-5"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/about-background.png);">
    
    <div class="container-fluid">

        <div class="row">

            <div class="col-12 py-5">

                <div class="row">

                    <div class="col-xl-6 order-2 order-xl-1 d-flex justify-content-center align-items-center">
                        <div>
                            <img
                            class="img-fluid w-100 u-object-fit-cover"
                            src=" <?php echo get_field('imagem')?>"
                            alt="">
                        </div>
                    </div>

                    <div class="col-xl-5 order-1 order-xl-2">

                        <h3 class="u-font-size-40 xl:u-font-size-60 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                            <?php echo get_field('titulo_mecedarios') ?>
                        </h3>

                        <p class="u-font-size-14 xl:u-font-size-16 xxl:u-font-size-22 u-font-weight-regular u-font-family-lato u-color-folk-white">
                        <?php echo get_field('descricao_mecedarios') ?>
                        </p>

                        <div class="row justify-content-end">

                            <div class="col-6 col-xl-4">
                                <a
                                class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-2"
                                href="<?php echo get_home_url( null,'/') .  get_field('btn_saiba_mais')?>">
                                    Saiba mais
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end about -->