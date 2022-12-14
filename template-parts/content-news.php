<section class="l-news py-5">

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

                    <?php 
                        $args = array(
                            'posts_per_page' => 1,
                            'post_type'      => 'post',
                            'category_name'  => 'noticia-destaque',
                            'order'          => 'DESC',
                        );

                        $contents = new WP_Query( $args );
                        $posts_current = array();

                        if( $contents->have_posts()):
                            while ($contents->have_posts()) : $contents->the_post();
                                array_push($posts_current, get_the_ID());
                    ?>
                                <div class="row">

                                    <div class="col-xl-7">
                                        <?php
                                            $alt_title = get_the_title();
                                            the_post_thumbnail('post-thumbnail', 
                                                array(
                                                    'class' => 'img-fluid w-100 u-h-100 lg:px:u-h-420',
                                                    'alt'   => $alt_title
                                                ));
                                        ?>
                                    </div>

                                    <div class="col-xl-5 mt-3 mt-xl-0">
                                        
                                        <p class="u-line-height-100 u-font-size-19 xxl:u-font-size-22 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden mb-4">
                                            <span class="u-font-weight-medium u-font-family-lato">por</span>  <?php echo get_the_author_meta( 'user_firstname' ) ?> <br>
                                            <?php echo get_the_date( 'd/m/Y', get_the_ID() ); ?>
                                        </p>

                                        <h3 class="u-font-size-20 xl:u-font-size-26 xxl:u-font-size-32 u-font-weight-bold u-font-family-cinzel u-color-folk-white">
                                            <?php echo the_title() ?> 
                                        </h3>

                                        <span class="u-font-size-14 sm:u-font-size-16 xl:u-font-size-20 xxl:u-font-size-26 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-white">
                                            <?php the_excerpt() ?>
                                        </span>

                                        <div class="row">

                                            <div class="col-8 col-xl-6 mt-3">
                                                <a
                                                class="w-100 d-block u-font-size-18 u-font-weight-bold u-font-family-nunito text-center text-decoration-none u-color-folk-white u-bg-folk-golden py-3"
                                                href="<?php the_permalink() ?>">
                                                    Ler mais
                                                </a>    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php 
                            endwhile;
                        endif;

                        wp_reset_query();
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <div class="row">

            <div class="col-12 py-5">

                <div class="row">

                    <div class="col-xl-4 order-2 order-xl-1 mt-4 mt-xl-0 pt-3">

                        <div class="row">

                            <!-- loop -->
                            <div class="col-12 mb-4">

                                <h3 class="l-news__medium-post__title position-relative d-inline-block u-font-weight-bold u-font-family-cinzel-decorative text-uppercase u-color-folk-dark-golden pb-2">
                                    Colégios
                                </h3>
                                
                                <?php 
                                    $args = array(
                                        'posts_per_page' => 3,
                                        'post_type'      => 'post',
                                        'category_name'  => 'educacao+noticias',
                                        'order'          => 'DESC',
                                    );
                                    
                                    $contents = new WP_Query( $args );

                                    if( $contents->have_posts() ):
                                        while ($contents->have_posts() ) : $contents->the_post();
                                ?>                                     
                                            <a  
                                            class="d-block text-decoration-none"
                                            href="<?php the_permalink()?>">
                                                <p class="u-font-size-18 xxl:u-font-size-24 u-font-weight-semibold u-font-family-lato u-color-folk-dark-gray mt-2 mb-0">
                                                    <?php echo get_the_title() ?>
                                                </p>

                                                <p class="u-font-size-14 xxl:u-font-size-16 u-font-weight-bold u-font-style-italic u-font-family-lato hover:u-text-decoration-underline u-color-folk-dark-golden mb-0">
                                                    Ler mais
                                                </p>
                                            </a>
                                <?php 
                                        endwhile;
                                    endif;

                                    wp_reset_query();
                                ?>
                            </div>
                            <!-- end loop -->

                            <div class="col-12 mb-4">

                                <h3 class="l-news__medium-post__title position-relative d-inline-block u-font-weight-bold u-font-family-cinzel-decorative text-uppercase u-color-folk-dark-golden pb-2">
                                    PROVÍNCIA
                                </h3>

                                <?php 
                                    $args = array(
                                        'posts_per_page' => 3,
                                        'post_type'      => 'post',
                                        'category_name'  => 'institucional+noticias',
                                        'order'          => 'DESC',
                                    );

                                    $contents = new WP_Query( $args );

                                    if( $contents->have_posts() ):
                                        while ( $contents->have_posts() ) : $contents->the_post();
                                ?>                                     
                                            <a  
                                            class="d-block text-decoration-none"
                                            href="<?php the_permalink()?>">
                                                <p class="u-font-size-18 xxl:u-font-size-24 u-font-weight-semibold u-font-family-lato u-color-folk-dark-gray mt-2 mb-0">
                                                    <?php echo get_the_title() ?>
                                                </p>

                                                <p class="u-font-size-14 xxl:u-font-size-16 u-font-weight-bold u-font-style-italic u-font-family-lato hover:u-text-decoration-underline u-color-folk-dark-golden mb-0">
                                                    Ler mais
                                                </p>
                                            </a>
                                <?php 
                                        endwhile;
                                    endif;

                                    wp_reset_query();
                                ?>
                                            <!-- end loop -->
                            </div>
                                
                            <div class="col-12 mb-4">

                                <h3 class="l-news__medium-post__title position-relative d-inline-block u-font-weight-bold u-font-family-cinzel-decorative text-uppercase u-color-folk-dark-golden pb-2">
                                    OBRAS SOCIAIS
                                </h3>

                                <?php 
                                    $args = array(
                                        'posts_per_page' => 3,
                                        'post_type'      => 'post',
                                        'category_name'  => 'caridade+noticias',
                                        'order'          => 'DESC',
                                    );

                                    $contents = new WP_Query( $args );
                                    
                                    if( $contents->have_posts()):
                                        while ($contents->have_posts()) : $contents->the_post();
                                ?>                                     
                                            <a  
                                            class="d-block text-decoration-none"
                                            href="<?php the_permalink()?>">
                                                <p class="u-font-size-18 xxl:u-font-size-24 u-font-weight-semibold u-font-family-lato u-color-folk-dark-gray mt-2 mb-0">
                                                    <?php echo get_the_title() ?>
                                                </p>

                                                <p class="u-font-size-14 xxl:u-font-size-16 u-font-weight-bold u-font-style-italic u-font-family-lato hover:u-text-decoration-underline u-color-folk-dark-golden mb-0">
                                                    Ler mais
                                                </p>
                                            </a>
                                <?php 
                                        endwhile;
                                    endif;

                                    wp_reset_query();
                                ?>
                            </div>
                             <!-- end loop -->
                        </div>
                    </div>

                    <div class="col-xl-8 order-1 order-xl-2">
                        
                        <div class="row">

                            <?php 
                                $args = array(
                                    'posts_per_page' => 4,
                                    'post_type'      => 'post',
                                    'category_name'  => 'noticia-destaque',
                                    'order'          => 'DESC',
                                    'post__not_in'   => $posts_current,
                                );

                                $contents = new WP_Query( $args );

                                if( $contents->have_posts()):
                                    while ($contents->have_posts()) : $contents->the_post();
                                        
                            ?>
                                        <div class="col-md-6 mb-5">

                                            <a 
                                            class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none"
                                            href="<?php the_permalink() ?>">

                                                <div class="card-img">
                                                    <?php
                                                        $alt_title = get_the_title();
                                                        the_post_thumbnail('post-thumbnail', 
                                                            array(
                                                            'class' => 'img-fluid w-100 u-h-100 lg:px:u-h-264',
                                                            'alt'   => $alt_title
                                                            ));
                                                    ?>
                                                </div>

                                                <div class="card-body">

                                                    <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                                                        <span class="u-font-weight-medium">por</span>  <?php echo get_the_author_meta('user_firstname') ?> <br>
                                                        <?php echo get_the_date('d/m/Y', $post)?>
                                                    </p>

                                                    <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
                                                        <?php echo the_title()?>
                                                    </h4>

                                                    <span class="u-font-size-14 xxl:u-font-size-16 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray">
                                                        <?php the_excerpt()?>
                                                    </span>
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
                            <?php 
                                    endwhile;
                                endif;
                                
                                wp_reset_query(); 
                            ?>
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
                                href="<?php echo get_home_url( null, '/noticias' ) ?>">
                                    Todos as Notícias
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>