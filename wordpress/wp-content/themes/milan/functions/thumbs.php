<?php 

add_theme_support('post-thumbnails');

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'brand', 600, 600, false );
	add_image_size( 'hero_image', 1300, 506, true );
	add_image_size( 'insurance_home', 900, 800, true );
	add_image_size( 'top_image', 1300, 210, true );
	add_image_size( 'about_image', 1300, 720, true );
	add_image_size( 'medium_new', 735, 500, true );
	add_image_size( 'post', 850, 430, true );
}

add_filter( 'image_size_names_choose', 'my_custom_sizes' );

function my_custom_sizes( $sizes ) {
    return array_merge( $sizes, array(
		'brand' => __('Brand Logo'),
		'hero_image' => __('Hero image'),
		'insurance_home' => __('Insurance image'),
		'top_image' => __('Top image'),
		'about_image' => __('About image'),
		'medium_new' => __('Medium image'),
		'post' => __('Post image')
	) );
}


?>