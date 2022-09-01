<section>
    
    <div class="container">

        <div class="row">

            <div class="col-12 d-flex justify-content-center my-5">
                
                <h2 class="c-title-pattern pb-2">
                    Galeria    

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <div>
                    <iframe class="l-gallery__video" src="https://www.youtube.com/embed/B4_ebHwysE8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>

            <div class="col-12">

                <div class="row">

                    <!-- loop -->
                    <?php for( $i = 0; $i < 3; $i++ ) { ?>
                        <div class="col-4 my-3">
                            
                            <div>
                                <iframe class="w-100" height="240" src="https://www.youtube.com/embed/B4_ebHwysE8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                    <?php } ?>
                    <!-- end loop -->
                </div>
            </div>

            <div class="col-12 mt-5">

                <div class="row">

                    <div class="col-9 d-flex justify-content-center align-items-center">
                        <div class="w-100 u-border-b-5 u-border-color-dark-marron"></div>
                    </div>

                    <div class="col-3">

                        <div class="row">

                            <div class="col-12">
                                <a
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="#">
                                    Todos os Vídeos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>