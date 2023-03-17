<?php

function get_date_format( $date ) {
    list($data_day, $data_month, $data_year) = explode('/', $date); 

    $months = array(
        '01' => 'janeiro',
        '02' => 'fevereiro',
        '03' => 'março',
        '04' => 'abril',
        '05' => 'maio',
        '06' => 'junho',
        '07' => 'julho',
        '08' => 'agosto',
        '09' => 'setembro',
        '10' => 'outubro',
        '11' => 'novembro',
        '12' => 'dezembro',
    );

    foreach( $months as $key => $value ) {
        if( $key == $data_month ) {
            $date_format = $data_day . ' de ' . $value . ' de ' . $data_year; 
        }
    }

    return $date_format;
}

function limit_words($string, $word_limit) {  
    $words = explode(' ', $string, ($word_limit + 1));  

    if(count($words) > $word_limit)
        array_pop($words); array_push($words, "...");  

    return implode(' ', $words);
}

//Logo pagina login

function logoadmin() {
echo " <style>
body.login #login h1 a {
background: url('https://erwise.com.br/wp-content/uploads/2022/04/login-wp.jpg') no-repeat scroll center top transparent;
height: 90px;
width: 250px;
}
</style>
";
}
add_action("login_head", "logoadmin");

// Customizar o Footer do WordPress
function remove_footer_admin () {
    echo '© <a href="https://api.whatsapp.com/send?phone=%205511937008521&text=Olá!/">Suporte</a> - Desenvolvimento e Criação Erwise Dev ME';
}
add_filter('admin_footer_text', 'remove_footer_admin');

// Retirar logo do Wordpress admin
 function wps_admin_bar (){
     global $wp_admin_bar;
     $wp_admin_bar -> remove_menu ('wp-logo');
     $wp_admin_bar -> remove_menu ('about');
     $wp_admin_bar -> remove_menu ('wporg');
     $wp_admin_bar -> remove_menu ('documentation');
     $wp_admin_bar -> remove_menu ('support-forums');
     $wp_admin_bar -> remove_menu ('feedback');
     $wp_admin_bar -> remove_menu ('view-site');
 }
add_action ('wp_before_admin_bar_render', 'wps_admin_bar');

// removendo campo comentarios admin wp

add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}

add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}

function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

register_nav_menus(array(
	'acao-redentora'       => 'Menu Acao',
    'educacao'       => 'Menu Educação',
    'institucional'  => 'Menu Institucional',
    'paroquias'      => 'Menu Paróquias',
    'vocacional'     => 'Menu Vocacional',
    'dom-inocencio'  => 'Menu Dom Inocencio',
    'pastoral'       => 'Menu pastoral',
));


function mantenedora_cmp( $a, $b ) {
    $t1 = strtotime($a['data']);
    $t2 = strtotime($b['data']);
    return $t1 - $t2;
}
function load_more_posts() {
    $args = $_POST['args'];
    $args['paged'] = $_POST['paged'];
    $query = new WP_Query( $args );
    
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            
            // Aqui está o bloco de código que exibe o HTML para cada post
            ?>
            <div class="col-md-4 mb-5">
                <a class="card h-100 u-border-color-dark-golden rounded-0 text-decoration-none" href="<?php the_permalink(); ?>">
                    <div class="card-img">
                        <?php the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid w-100 u-h-100 lg:px:u-h-320 u-object-fit-cover', 'alt' => get_the_title())); ?>
                    </div>
                    <div class="card-body">
                        <p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden">
                            <span class="u-font-weight-medium">por</span>  <?php echo get_the_author_meta('user_firstname'); ?> <br>
                            <?php echo get_the_date('d/m/Y'); ?>
                        </p>
                        <h4 class="u-font-size-18 xxl:u-font-size-22 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray"><?php the_title(); ?></h4>
                        <span class="u-font-size-14 xxl:u-font-size-16 u-font-weight-light u-font-style-italic u-font-family-lato u-color-folk-dark-gray"><?php the_excerpt(); ?></span>
                    </div>
                    <div class="c-card-footer-absolute card-footer">
                        <div class="row justify-content-center">
                            <div class="col-6">
                                <p class="u-font-size-12 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-bold-marron hover:u-bg-folk-dark-golden mb-0 py-2">Ler mais</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <?php
        }
    }
    
    wp_reset_postdata();
    wp_die();
}
add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );