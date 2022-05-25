<?php
function add_theme_scripts() {
    wp_enqueue_style( 'style-name',get_template_directory_uri() . "style.css" );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function wpb_custom_new_menu() {
    register_nav_menu('my-custom-menu',__( 'My Custom Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );