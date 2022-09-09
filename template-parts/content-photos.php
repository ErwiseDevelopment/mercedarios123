<section class="py-5">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <div class="row">

                    <div class="col-xl-8">

                        <div class="row">

                            <div class="col-12 d-flex justify-content-center my-4">

                                <h3 class="c-title-secondary">
                                    Fotos
                                </h3>
                            </div>
                        </div>

                        <div class="row">

                            <!-- loop -->
                            <?php for( $i = 0; $i < 6; $i++ ) { ?>
                                <div class="col-xl-6 my-2">
                                    <a 
                                    class="l-photos__photo overflow-hidden position-relative d-block" 
                                    href="#">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
                                        alt="Foto 1">
                                    </a>
                                </div>
                            <?php } ?>
                            <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-xl-4 my-3 my-xl-0">

                        <div class="row">

                            <div class="col-12 d-flex justify-content-center my-4">

                                <h3 class="c-title-secondary">
                                    Álbuns
                                </h3>
                            </div>
                        </div> 

                        <div class="row">

                            <!-- loop -->
                            <?php for( $i = 0; $i < 3; $i++ ) { ?>
                                <div class="col-12 my-2">
                                    <a
                                    class="l-photos__album overflow-hidden position-relative d-block text-decoration-none"
                                    href="#">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        src="<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/photo-1.png"
                                        alt="Foto 1">

                                        <p class="l-photos__album__name u-font-size-20 u-font-weight-bold u-font-style-italic u-font-family-lato u-color-folk-white">
                                            Novo Governo
                                            Provincial
                                        </p>
                                    </a>
                                </div>
                            <?php } ?>
                            <!-- end loop -->
                        </div>
                    </div>
                </div>
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
                                class="w-100 d-block u-font-size-22 u-font-weight-bold u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-golden py-2"
                                href="#">
                                    Todas as Fotos
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>