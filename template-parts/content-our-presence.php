<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-xl-6">

                        <div class="row">

                            <div class="col-12 d-flex justify-content-center my-5">
                    
                                <h2 class="c-title-pattern u-color-folk-dark-golden pb-4">
                                    Nossa <br>    
                                    Presença
                                    <span class="c-title-pattern__underline"></span>
                                </h2>
                            </div>

                            <!-- loop -->
                            <?php for( $i = 0; $i < 3; $i++ ) { ?>
                                <div class="l-our-presence__column-child col-xl-4 d-flex flex-column align-items-center my-3 my-xl-0">
                                    <div class="l-our-presence__item rounded-circle">
                                        <p class="u-font-size-64 u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white mb-0">
                                            04
                                        </p>                                    
                                    </div>

                                    <p class="l-our-presence__item__title u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center mt-3">
                                        continentes
                                    </p>
                                </div>
                            <?php } ?>
                            <!-- end loop -->

                            <div class="col-12">
                                <div 
                                class="w-100 d-flex justify-content-center align-items-center p-2"
                                style="background-image: linear-gradient(to right, #D99D31, #946918)">
                                    <p class="u-font-size-20 u-font-family-cinzel text-center u-color-folk-white mb-0">
                                        800 frades e estudantes de votos solenes
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 pt-5">
                        
                        <p class="u-font-size-28 u-font-weight-bold u-font-family-cinzel text-center u-color-folk-bold-marron">
                            Brasil
                        </p>

                        <img
                        class="img-fluid"
                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/brazil-map.png"
                        alt="Brasil mapa">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>