<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12">

                <!-- swiper -->
                <div class="swiper-container js-swiper-months">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php 
                            $all_months = array(
                                '1'  => 'Janeiro',
                                '2'  => 'Fevereiro',
                                '3'  => 'Março',
                                '4'  => 'Abril',
                                '5'  => 'Maio',
                                '6'  => 'Junho',
                                '7'  => 'Julho',
                                '8'  => 'Agosto',
                                '9'  => 'Setembro',
                                '10' => 'Outubro',
                                '11' => 'Novembro',
                                '12' => 'Dezembro',
                            );

                            foreach( $all_months as $key => $value ) :
                        ?>
                            <div class="swiper-slide">
                                <h4 class="u-font-size-32 u-font-weight-regular u-font-family-cinzel text-uppercase text-center u-color-folk-dark-golden">
                                    <?php echo $value; ?> | 2022
                                </h4>
                            </div>  
                        <?php endforeach; ?>
                        <!-- end slide -->
                    </div>
                </div>

                <!-- arrows -->
                <div class="swiper-button-prev swiper-button-prev-months js-swiper-button-prev-months">
                    <img
                    class="img-fluid w-100 h-100"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-left.png"
                    alt="Seta Esquerda">
                </div>

                <div class="swiper-button-next swiper-button-next-months js-swiper-button-next-months">
                    <img
                    class="img-fluid"
                    src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/arrow-right.png"
                    alt="Seta Direita">
                </div>
                <!-- end swiper -->
            </div>

            <div class="col-11">

                <!-- swiper -->
                <div class="swiper-container js-swiper-calendar">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php foreach( $all_months as $key => $value ) : ?>
                            <div class="swiper-slide flex-column align-items-start">

                                <?php for( $i = 0; $i < 6; $i++ ) { ?>
                                    <div>
                                        <p class="u-font-size-18 u-font-weight-bold u-font-family-lato u-color-folk-dark-marron mb-0">
                                            02/<?php echo $key; ?>
                                        </p>

                                        <p class="u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-dark-gray">
                                            Aniversário Frei Adilson Ribeiro | (31 anos de V.R.C.)
                                        </p>
                                    </div>
                                <?php } ?>
                            </div>
                        <?php endforeach; ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>
