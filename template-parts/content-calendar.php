<section class="py-5">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-12 d-flex justify-content-center my-5">
                
                <h2 class="c-title-pattern pb-2">
                    Calendário    

                    <span class="c-title-pattern__underline"></span>
                </h2>
            </div>

            <div class="col-12">

                <!-- swiper -->
                <?php
                    $year_current = date( "Y" );

                    $array_meses = array (
                        '01' => 'Janeiro',
                        '02' => 'Fevereiro',
                        '03' => 'Março',
                        '04' => 'Abril',
                        '05' => 'Maio',
                        '06' => 'Junho',
                        '07' => 'Julho',
                        '08' => 'Agosto',
                        '09' => 'Setembro',
                        '10' => 'Outubro',
                        '11' => 'Novembro',
                        '12' => 'Dezembro'
                    );
                    
                ?>
                <div class="swiper-container swiper-container-months js-swiper-months">

                    <div class="swiper-wrapper">

                        <!-- slide -->
                        <?php foreach ( $array_meses as $mes => $meses ) : ?>
                            <div class="swiper-slide">
                                <h4 class="u-font-size-32 u-font-weight-regular u-font-family-cinzel text-uppercase text-center u-color-folk-dark-golden">
                                    <!-- echo $value; ?> | 2022 -->
                                    <?php echo $meses . ' | ' . $year_current; ?>
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
                        <?php 
                            setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
                            date_default_timezone_set('America/Sao_Paulo');
                                
                            $post_agenda_count = wp_count_posts( 'agendas' );
                            $post_agenda_count_current = intval( $post_agenda_count->publish );
                            $count = -1;

                            foreach ($array_meses as $mes => $meses): 
                                $date_current = (string) $mes;
                                $current_year = strftime('%Y', strtotime('today'));
                                $data_inicio = date('Y'.$date_current.'01');
                                $data_final = date('Y'.$date_current.'31');

                                $args = array (
                                    'post_type'       	=> 'Evento',
                                    'posts_per_page'	=> -1,
                                    'orderby'			=> 'meta_value',
                                    'order'				=> 'ASC',
                                    'meta_key'          => 'data_custom_post_agenda_inicio',
                                    'meta_query'		=> array (
                                        'relation'			=> 'AND',
                                        array (
                                            'key'			=> 'data_custom_post_agenda_inicio',
                                            'value'			=> $data_inicio,
                                            'compare'		=> '>=',
                                            'type'			=> 'DATE',
                                        ),
                                        array (
                                            'key'			=> 'data_custom_post_agenda_inicio',
                                            'value'			=> $data_final,
                                            'compare'		=> '<=',
                                            'type'			=> 'DATE',
                                        ),
                                    ),
                                );
                                
                                $agendas = new WP_Query($args);
                                
				                while( $agendas->have_posts()) : $agendas->the_post();
                                    $data = get_field( 'data_custom_post_agenda_inicio', get_the_ID() );
				                    $title = get_the_title();
				                    $excerpt = get_the_excerpt();
				                    $cidades = get_the_terms(get_the_ID(), 'tipoevento');
				                    list($data_day, $data_month, $data_year) = explode("/", $data);
				                    $array_agendas[] = array ( 'data' => $current_year.'-'.$data_month.'-'.$data_day, 'title' => $title, 'excerpt' => $excerpt, 'cidades' => $cidades );
                                endwhile; 
                                
                                wp_reset_postdata();

                                if ( !empty ( $array_agendas ) ) :
                                    usort ( $array_agendas, 'mantenedora_cmp' );
                        ?>
                                    <div class="swiper-slide flex-column align-items-start">

                                        <?php 
                                            foreach ( $array_agendas as $agenda ) :
                                                list($data_year, $data_month, $data_day) = explode("-", $agenda['data']);

                                                if ( $date_current == $data_month ) : 
                                                    $count = 0;
                                        ?>
                                                    <div>
                                                        <p class="u-font-size-18 u-font-weight-bold u-font-family-lato u-color-folk-dark-marron mb-0">
                                                            <!-- 02/echo '02'; -->
                                                            <?php echo $data_day . '/' . $data_month; ?>
                                                        </p>

                                                        <p class="u-font-size-18 u-font-weight-regular u-font-family-lato u-color-folk-dark-gray">
                                                            <!-- Aniversário Frei Adilson Ribeiro | (31 anos de V.R.C.) -->
                                                            <?php echo $agenda["title"]; ?>
                                                        </p>
                                                    </div>
                                        <?php 
                                                else : $count++; 
                                                    if( $count == $post_agenda_count_current ) {
                                                        $count = 0;
                                                        echo '<p>Não há eventos!</p>';
                                                    }
                                                endif;
                                            endforeach; 
                                        ?>
                                    </div>
                        <?php   else : ?>
                                    <div class="swiper-slide justify-content-start">
                                        <p class="u-color-folk-white">
                                            Não tem nenhum evento!
                                        </p>
                                    </div>
                        <?php   endif;
                            endforeach; 
                        ?>
                        <!-- end slide -->
                    </div>
                </div>
                <!-- end swiper -->
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
                                    Calendário Completo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
