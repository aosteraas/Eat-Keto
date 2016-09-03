<?php

// CSS
function my_scripts_and_styles() {
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js');
}
add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles' );