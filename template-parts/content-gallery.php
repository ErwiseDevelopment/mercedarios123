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
                    <?php echo get_field('video_destaque')?>
                </div>
            </div>

            <div class="col-12">

                <div class="row">
                                       <!-- loop -->
                        <?php
                            if( have_rows( 'outros_videos' ) ) :
                                while( have_rows( 'outros_videos' ) ) : the_row();
                        ?>
                        <div class="col-xl-4 my-3">
                            
                            <div>
                            <?php echo get_sub_field( 'outros_videos_repetidor' ) ?>
                            </div>
                        </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                    <!-- end loop -->
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