<?php

// Add bootstrap cdns
function add_bootstrap() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js');
    wp_enqueue_script( 'bootstrap-js-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap' );

// Add style.css
function add_stylesheet() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

// Enable thumbs nos posts
add_theme_support( 'post-thumbnails' );

?>