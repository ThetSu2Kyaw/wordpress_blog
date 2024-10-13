<?php

function load_css() {
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css', array(), '4.1.3', 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css', array(), '5.4.1', 'all');
    wp_enqueue_style('fontawesome');

    wp_register_style('mytheme', get_template_directory_uri().'/css/style.css', array(), false, 'all');
    wp_enqueue_style('mytheme');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js() {
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.slim.min.js', array(), '3.3.1', true);
    wp_enqueue_script('jquery');

    wp_register_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), '1.14.3', true);
    wp_enqueue_script('popper');

    wp_register_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', array('jquery', 'popper'), '4.1.3', true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');


//custom excerpt length
function custom_excerpt_length($length) {
    return 20; // Change this value to the desired number of words
}
add_filter('excerpt_length', 'custom_excerpt_length');

//thumbnail
add_theme_support('post-thumbnails');

//set image size
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 160, 160, true);

//logo
add_theme_support( 'custom-logo' );

function theme_prefix_setup() {
    add_theme_support('custom-logo', array(
        'height'      => 40,
        'width'       => 130,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    ));
}
add_action('after_setup_theme', 'theme_prefix_setup');

//menu
function my_theme_setup() {
    register_nav_menus(array(
        'primary-menu' => 'primary menu on navbar',
        'sub-menu' => 'secondary side menu', 
    ));
}
add_action('after_setup_theme', 'my_theme_setup');



