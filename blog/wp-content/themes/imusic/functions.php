<?php
function themeslug_enqueue_style() {
    wp_enqueue_style( 'main_css', get_theme_file_uri( '/assets/main.css' ) );
}

function themeslug_enqueue_script() {
    wp_enqueue_script( 'main_js', get_theme_file_uri( '/assets/main.js' ) );
}

add_action( 'wp_enqueue_scripts', 'themeslug_enqueue_style' );
add_action( 'wp_footer', 'themeslug_enqueue_script' );
