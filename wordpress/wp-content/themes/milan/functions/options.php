<?php 
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Theme Footer Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Testimonials',
        'menu_title'    => 'Testimonials',
        'menu_slug'     => 'testimonial',
        'capability'    => 'edit_posts',
        'redirect'      => false,
        'icon_url' 		=> 'dashicons-format-aside',
		'position' 		=> 8
    ));

}

?>