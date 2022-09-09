<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-center mb-5 my-xl-5">
                
                <h2 class="c-title-pattern pb-2">
                    Blog    

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-blogs pb-5">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php for( $i = 0; $i < 6; $i++ ) { ?>
                            <div class="swiper-slide">
                                <a 
                                class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                href="#">

                                    <div class="card-img">
                                        <img
                                        class="img-fluid w-100"
                                        src="http://mercedarios.erwisedev-hml.com.br/wp-content/uploads/2022/08/news-post-1.png"
                                        alt="">
                                    </div>

                                    <div class="card-body">

                                        <p class="u-font-size-12 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                            <span class="u-font-weight-medium">por</span> Redação <br>
                                            06 de Maio de 2021
                                        </p>

                                        <h4 class="u-font-size-18 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                            Mensagem do Provincial
                                            Dia de São Pedro Nolasco
                                        </h4>

                                        <p class="u-font-size-14 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                            Lorem ipsum dolor sit amet, consectetur 
                                            adipiscing elit. Mauris lectus dolor, semper 
                                            vitae libero se,d, ornare tempus dui. Donec 
                                            efficitur, dui et facilisis commodo, mauris 
                                            massa mollis nisi, ornare egestas lectus 
                                            turpis tempus dolor. Aliquam.[...]
                                        </p>
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
                        <?php } ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-blogs d-none d-xl-flex js-swiper-button-prev-blog">
                    <img
                    class="img-fluid w-100 h-100"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-left.png"
                    alt="Seta Esquerda">
                </div>

                <div class="swiper-button-next swiper-button-next-blogs d-none d-xl-flex js-swiper-button-next-blog">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-right.png"
                    alt="Seta Direita">
                </div>

                <!-- pagination -->
                <div class="swiper-pagination swiper-pagination-blogs w-100 js-swiper-pagination-blogs"></div>
                <!-- end swiper -->
            </div>

            <div class="col-12 mt-5">

                <div class="row justify-content-center">

                    <div class="col-9 d-none d-xl-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-9 col-xl-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden hover:u-bg-folk-dark-marron py-2"
                                href="#">
                                    Todas os conteúdos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>