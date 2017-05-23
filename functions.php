<?php

function sweets_resources() {

    wp_enqueue_style('dashicons');
    wp_enqueue_style('style', get_stylesheet_uri(), 'dashicons');
    wp_enqueue_script('jquery');
    wp_enqueue_script('main', get_template_directory_uri() . '/main.js', array ( 'jquery' ), true);

}

add_action('wp_enqueue_scripts', 'sweets_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu'),
    'footer' => __('Footer Menu'),
));

add_theme_support('html5', array('search-form'));

?>