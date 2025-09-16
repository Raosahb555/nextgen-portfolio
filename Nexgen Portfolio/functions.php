<?php
function nextgen_assets() {
     wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false ); 
    wp_enqueue_style('nextgen-style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', 'all');
    wp_enqueue_script('nextgen-script', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'nextgen_assets');

function nextgen_setup() {
    add_theme_support('title-tag');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'nextgen-portfolio'),
    ));
}
add_action('after_setup_theme', 'nextgen_setup');
function load_fontawesome_cdn() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'load_fontawesome_cdn' );
