<?php 

// Menu
function register_menus() {
    register_nav_menus(
        array(
            'main_menu' => __( 'Main Menu' ),
            'featured_menu' => __( 'Featured Menu' )
        )
    );
}
add_action( 'init', 'register_menus' );

?>