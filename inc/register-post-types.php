<?php

//Função para criar post type:
function erwise_create_post_type() { 

	register_post_type( 'ebook', array(
		'labels' 		=> array( 'name' => 'E-book', 'singular_name' => 'E-book', 'all_items' => 'Todos os E-books' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-book',
		'supports' 		=> array( 'title',  'thumbnail')
	) );

	register_post_type( 'Comunidades', array(
		'labels' 		=> array( 'name' => 'Comunidades', 'singular_name' => 'Comunidade', 'all_items' => 'Todas Comunidades' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-admin-home',
		'supports' 		=> array( 'title', 'thumbnail', 'author' )
	) );
	
		register_post_type( 'Evento', array(
		'labels' 		=> array( 'name' => 'Eventos', 'singular_name' => 'Eventos', 'all_items' => 'Todos Eventos' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-calendar-alt',
		'supports' 		=> array( 'title', 'thumbnail', 'editor' ) 
	) );

	register_post_type( 'Galeria', array(
		'labels' 		=> array( 'name' => 'Galerias', 'singular_name' => 'Galeria', 'all_items' => 'Todas Galerias' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-images-alt2',
		'supports' 		=> array( 'title', 'thumbnail' ) 
	) );
	register_post_type( 'obras', array(
		'labels' 		=> array( 'name' => 'Nossas Obras', 'singular_name' => 'Nossa Obra', 'all_items' => 'Nossas Obras' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-universal-access-alt',
		'supports' 		=> array( 'title', 'thumbnail' ) 
	) );
	register_post_type( 'acervo', array(
		'labels' 		=> array( 'name' => 'Acervo', 'singular_name' => 'Acervo', 'all_items' => 'Acervo' ),
		'public' 		=> true,
		'has_archive'	=> true,
		'menu_icon'		=> 'dashicons-media-spreadsheet',
		'supports' 		=> array( 'title' ) 
	) );
	register_post_type( 'devocoes', array(
		'labels' 		=> array( 'name' => 'Nossas Devoções', 'singular_name' => 'Nossa Devoção', 'all_items' => 'Nossas Devoções' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-open-folder',
		'supports' 		=> array( 'title', 'editor', 'thumbnail', 'revisions', 'author' )
	) );
	register_post_type( 'governo', array(
		'labels' 		=> array( 'name' => 'Governo', 'singular_name' => 'Governo', 'all_items' => 'Governo' ),
		'public' 		=> true,
		'has_archive' 	=> true,
		'menu_icon' 	=> 'dashicons-businessperson',
		'supports' 		=> array( 'title',  'thumbnail',  )
	) );


	

}
add_action( 'init', 'erwise_create_post_type' );

//Criar taxonomia:
function erwise_create_taxonomy() {
	register_taxonomy( 'agendacidade', 'agendas', array( 'labels' => array( 'name' => 'Cidades', 'singular_name' => 'Cidade' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'tipoevento', 'agendas', array( 'labels' => array( 'name' => 'Tipo Evento', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'categoria-datas-especiais', 'datas-especiais', array( 'labels' => array( 'name' => 'Tipo da Data', 'singular_name' => 'Tipo da Data' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    register_taxonomy( 'ebook-categoria', 'ebook', array( 'labels' => array( 'name' => 'Editoria E-book', 'singular_name' => 'Editoria E-book' ), 'hierarchical' => true, 'show_admin_column' => true ) );
    register_taxonomy( 'comunidades-categoria', 'comunidades', array( 'labels' => array( 'name' => 'Tipo Comunidade', 'singular_name' => 'Tipo Comunidade' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'comunidades-estados', 'comunidades', array( 'labels' => array( 'name' => 'Estados', 'singular_name' => 'Estados' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'galeria-categoria', 'galeria', array( 'labels' => array( 'name' => 'Tipo Categoria', 'singular_name' => 'Categoria' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'santos', 'devocoes', array( 'labels' => array( 'name' => 'Tipo de devoção', 'singular_name' => 'Tipo de devoção' ), 'hierarchical' => true, 'show_admin_column' => true ) );
	register_taxonomy( 'atuacoes', 'governo', array( 'labels' => array( 'name' => 'Cargo', 'singular_name' => 'Cargo' ), 'hierarchical' => true, 'show_admin_column' => true ) );

}
add_action( 'init', 'erwise_create_taxonomy' );

