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
                    <?php 
                            $editorial_slug_current = 'home';
                            //strtolower(get_the_title());

                            $args = array(
                                'posts_per_page' => 1,
                                'post_type'      => 'album',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'categoria-foto',
                                        'field'    => 'slug',
                                        'terms'    => array( $editorial_slug_current )
                                    )
                                )
                            );

                            $gallery = new WP_Query( $args );
                            $count = 0;

                            if( $gallery->have_posts() ) :
                                while( $gallery->have_posts() ) : $gallery->the_post();

                                    $photos = get_field( 'galeria' );

                                    if( $photos ) :
                                        foreach( $photos as $photo ) :     
                                            $count++;
                     ?>
                                <div class="col-xl-6 my-2">
                                    <a 
                                    class="l-photos__photo overflow-hidden position-relative d-block" 
                                    href="<?php the_permalink() ?>">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        style="height:296px"
                                        src="<?php echo $photo['url'] ?>"
                                        alt="<?php echo $photo['title']; ?>">
                                    </a>
                                </div>
                    <?php
                                        if( $count == 6 )
                                            break;
                                    endforeach;
                                endif;
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
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
                            <?php
                            $args = array(
                                'posts_per_page' => 3,
                                'post_type'      => 'album',
                                'order'          => 'DESC'
                            );

                            $galeries = new WP_Query( $args );

                            if( $galeries->have_posts() ) :
                                while( $galeries->have_posts() ) : $galeries->the_post();
                        ?>
                                <div class="col-12 my-2">
                                    <a
                                    class="l-photos__album overflow-hidden position-relative d-block text-decoration-none"
                                    href="<?php the_permalink() ?>">
                                        <img
                                        class="img-fluid w-100 u-object-fit-cover"
                                        style="height:296px"
                                        src="<?php echo get_field( 'capa_do_album' ) ?>"
                                            alt="<?php the_title() ?>">

                                        <p class="l-photos__album__name u-font-size-20 u-font-weight-bold u-font-style-italic u-font-family-lato u-color-folk-white">
                                        <?php the_title() ?>
                                        </p>
                                    </a>
                                </div>
                                <?php
                                endwhile;
                            endif;
                            
                            wp_reset_query();
                        ?>
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
                                href="<?php echo get_home_url(null ,'/fotos') ?>">
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