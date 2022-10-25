<?php

//register post ACF
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/register-post-types.php';
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/register-create-pages.php';

//single functions
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/single-functions.php';

//single files
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/single-files.php';

//rest api
require get_template_directory() . '/../wp-bootstrap-starter-child/inc/rest-api.php';

function my_excerpt_length ( $length ){ return 20; } add_filter ( 'excerpt_length', 'my_excerpt_length' ) ;