<?php
function post_featured_image_json( $data, $post, $context ) {
    $featured_image_id = $data->data['featured_media'];
    $featured_image_url = wp_get_attachment_image_src( $featured_image_id, 'original' );

    if( $featured_image_url ) {
        $data->data['featured_image_src'] = $featured_image_url[0];
    }
  
    return $data;
}
add_filter( 'rest_prepare_post', 'post_featured_image_json', 10, 3 );

function get_image_src( $object, $field_name, $request ) {
    $feat_img_array = wp_get_attachment_image_src(
        $object['featured_media'],
        'full', 
        true
    );
    return $feat_img_array[0];
}

function add_post_date_rest_api( $data, $post ) {
    $data->data['post_date'] = get_the_date( 'd/m/Y', $post->ID );

    return $data;
}
add_filter('rest_prepare_post', 'add_post_date_rest_api', 10, 3);

function add_post_excerpt_rest_api( $data ) {
    $data->data['post_excerpt'] = limit_words(get_the_excerpt(), 20);

    return $data;
}
add_filter('rest_prepare_post', 'add_post_excerpt_rest_api', 10, 3);

function add_categories_rest_api( $data ) {
    if (!empty($data->data['categories'])) {
        $cats = array();
    
        foreach($data->data['categories'] as $category_id) {
            $category = get_category($category_id);
            array_push($cats, $category->name);
        
            $data->data['child_category'] = $cats;
            
        }
    }

    return $data;
};


