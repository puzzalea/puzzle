<?php
// Puzzle Pieces required settings
function puzzle_config_location() { return 'theme/settings/puzzle_config.php'; }
require_once('puzzle_pieces/puzzle_pieces.php');

// Register Menus
function puzzle_menus() {
    register_nav_menus( array(
        'primary'   => 'Primary Menu'
    ));
}
add_action('after_setup_theme', 'puzzle_menus');

// Initialize sidebar widget
function sidebar_widget_init() {
    register_sidebar(array(
        'name'          => 'Main Sidebar',
        'id'            => 'main-sidebar',
        'before_widget' => '<div class="sidebar-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'sidebar_widget_init');

// Add Styles and Scripts
function puzzle_scripts() {
    wp_enqueue_style('google-fonts-open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    $puzzle_style_location = '/assets/css/main.css';
    wp_enqueue_style('puzzle-style', get_template_directory_uri() . $puzzle_style_location, array(), filemtime(get_stylesheet_directory() . $puzzle_style_location));
    
    $puzzle_custom_style_location = '/assets/css/custom.css';
    if (!file_exists(get_stylesheet_directory() . $puzzle_custom_style_location)) {
        puzzle_save_custom_style();
    }
    wp_enqueue_style('puzzle-custom-style', get_template_directory_uri() . $puzzle_custom_style_location, array(), filemtime(get_stylesheet_directory() . $puzzle_custom_style_location));
    
    $puzzle_script_location = '/assets/js/main.js';
    wp_enqueue_script('puzzle-script', get_template_directory_uri() . $puzzle_script_location, array('jquery'), filemtime(get_stylesheet_directory() . $puzzle_script_location));
}
add_action('wp_enqueue_scripts', 'puzzle_scripts');

// Set $content_width variable
if (!isset($content_width)) $content_width = 1200;

?>