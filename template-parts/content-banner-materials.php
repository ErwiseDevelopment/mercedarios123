<section>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 px-0">

                <!-- swiper -->
                <div class="swiper-container js-swiper-banner-materials">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php
                            if( have_rows( 'banners_materiais', 'option' ) ) :
                                while( have_rows( 'banners_materiais', 'option' ) ) : the_row();
                        ?>
                            <div class="swiper-slide">
                                <a href="<?php echo get_field('link_banner', 'option')?>" <?php if (get_field('nova_guia_banner', 'option') == '1') :?>  target="_blank" <?php endif; ?>>
                                    <img
                                    class="img-fluid w-100"
                                    src="<?php echo get_field('banner' ,'option')?>"
                                    alt="Banner Material">
                                </a>
                            </div>
                        <?php
                                endwhile;
                            endif;
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
            </div>
        </div>
    </div>
</section>