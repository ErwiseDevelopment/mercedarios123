<section class="l-news">

    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-center my-5">
                
                <h2 class="c-title-pattern pb-2">
                    Notícias    

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>
        </div>  
    </div>

    <div class="l-news__background position-relative py-4">

        <div class="container">

            <div class="row">

                <div class="col-12">

                    <div class="row">

                        <div class="col-7">
                            <img
                            class="img-fluid w-100"
                            src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/news-photo-1.png"
                            alt="">
                        </div>

                        <div class="col-5">
                            
                            <p class="u-line-height-100 u-font-size-19 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden mb-4">
                                <span class="u-font-weight-medium u-font-family-lato">por</span> Redação <br>
                                06 de Maio de 2021
                            </p>

                            <h3 class="u-font-size-26 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                                Sequência da Solenidade
                                de São Pedro Nolasco    
                            </h3>

                            <p class="u-font-size-20 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-white">
                                Lorem ipsum dolor sit amet, consectetur 
                                adipiscing elit. Mauris lectus dolor, semper 
                                vitae libero se,d, ornare tempus dui. Donec 
                                efficitur, dui et facilisis commodo, mauris 
                                massa mollis nisi, ornare egestas lectus 
                                turpis tempus dolor. Aliquam.[...]
                            </p>

                            <div class="row">

                                <div class="col-6 mt-3">
                                    <a
                                    class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-3"
                                    href="#">
                                        Ler mais
                                    </a>    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-12 py-5">

                <div class="row">

                    <div class="col-4 pt-3">

                        <div class="row">

                            <!-- loop -->
                            <?php for( $i = 0; $i < 3; $i++ ) { ?>
                                <div class="col-12 mb-4">

                                    <h3 class="l-news__medium-post__title position-relative d-inline-block u-font-weight-bold u-font-family-cinzel-decorative text-uppercase u-color-folk-dark-golden pb-2">
                                        Colégios
                                    </h3>
                                    
                                    <!-- loop -->
                                    <?php for( $j = 0; $j < 3; $j++ ) { ?>
                                        <a  
                                        class="d-block text-decoration-none"
                                        href="#">
                                            <p class="u-font-size-18 u-font-weight-semibold u-font-family-lato u-color-folk-dark-gray mt-2 mb-0">
                                                Campanha de doação de sangue
                                            </p>

                                            <p class="u-font-size-14 u-font-weight-bold u-font-style-italic u-font-family-lato hover:u-text-decoration-underline u-color-folk-dark-golden mb-0">
                                                Ler mais
                                            </p>
                                        </a>
                                    <?php } ?>
                                    <!-- end loop -->
                                </div>
                            <?php } ?>
                            <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-8">
                        
                        <div class="row">

                            <?php for( $i = 0; $i < 4; $i++ ) { ?>
                                <div class="col-6 mb-5">

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
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">

                <div class="row">

                    <div class="col-9 d-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="#">
                                    Todas as Notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>