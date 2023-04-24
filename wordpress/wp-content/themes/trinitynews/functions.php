<?php

function add_bootstrap_css() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_css' );

function add_bootstrap_js() {
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js');
    wp_enqueue_script( 'bootstrap-js-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js');
}
add_action( 'wp_enqueue_scripts', 'add_bootstrap_js' );

add_theme_support( 'post-thumbnails' );



?>