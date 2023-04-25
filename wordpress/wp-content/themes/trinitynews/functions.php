<?php

// Add bootstrap cdns
function add_bootstrap() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css' );
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

// Registrar menu 
function registrar_menu_principal() {
    register_nav_menu('menu-principal',__( 'Menu Principal' ));
}
add_action( 'init', 'registrar_menu_principal' );
  

function nome_da_area_widgets() {
    register_sidebar( array(
        'name' => __( 'Nome da Área de Widgets', 'text_domain' ),
        'id' => 'nome_da_area_widgets',
        'description' => __( 'Descrição da Área de Widgets', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'nome_da_area_widgets' );

?>