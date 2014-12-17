<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_theme_style' );
function enqueue_parent_theme_style() {
    wp_enqueue_style( 'responsive-mobile', get_template_directory_uri().'/style.css' );
}

if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'column-third', 285, 190, true ); //(cropped)
}
add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
$addsizes = array(
"column-third" => __( "1/3 Column")
);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}