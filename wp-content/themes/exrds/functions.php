<?php
/**
 * ExRDS Functions
 *
 */

// Register Custom Navigation Walker
if ( ! file_exists( get_template_directory() . '/wp-bootstrap-navwalker.php' ) ) {
    // file does not exist... return an error.
    return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // file exists... require it.
    require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}

function exrds_add_bootstrap() {
    wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true );
}
add_action('wp_enqueue_scripts', 'exrds_add_bootstrap');

function exrds_styles() {
    wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'exrds_styles');

function register_menu() {
    register_nav_menu('header-menu',__('Header Menu'));
}
add_action('init', 'register_menu');

if ( function_exists('register_sidebar') )
    register_sidebar(array(
            'name' => 'ExRDS Instagram Feed',
            'before_widget' => '<div class = "widgetizedArea">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        )
    );


function posts_sidebar() {
    register_sidebar(
        array(
            'name' =>'ExRDS Posts Sidebar',
            'id' => 'posts-side-bar',
            'description' => 'ExRDS Posts Sidebar',
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

add_action('widgets_init', 'posts_sidebar');