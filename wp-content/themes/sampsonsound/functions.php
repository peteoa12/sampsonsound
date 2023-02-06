
<?php


function sampson_theme_enqueue_styles() {
    //parent styles
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // gulp compiled main.css
    $modified = date('YmdHi', filemtime(get_stylesheet_directory() . '/dist/css/main.css'));
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/dist/css/main.css', array('parent-style'), $modified);
}
add_action( 'wp_enqueue_scripts', 'sampson_theme_enqueue_styles' );

function sampson_theme_enqueue_scripts() {
    // gulp compiled main.js
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/dist/js/main.js', false, '', true);
}
add_action( 'wp_enqueue_scripts', 'sampson_theme_enqueue_scripts' );
