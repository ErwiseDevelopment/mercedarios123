<section>

    <div class="container">

        <div class="row">

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-blogs">

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

                                    <div class="card-footer">

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
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>