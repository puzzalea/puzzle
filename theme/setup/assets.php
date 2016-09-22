<?php

/*
 * Puzzle
 * Assets
 */

/* Add styles and scripts */
function puzzle_scripts() {
    /* Google fonts */
    wp_enqueue_style('puzzle-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i');
    
    /* Main styles */
    $puzzle_style_location = '/assets/css/main.css';
    wp_enqueue_style('puzzle-style', get_template_directory_uri() . $puzzle_style_location, array(), filemtime(get_stylesheet_directory() . $puzzle_style_location));
    
    /* Custom styles generated from user options */
    $puzzle_custom_style_location = '/assets/css/custom.css';
    puzzle_check_if_custom_style_exists();
    wp_enqueue_style('puzzle-custom-style', get_template_directory_uri() . $puzzle_custom_style_location, array(), filemtime(get_stylesheet_directory() . $puzzle_custom_style_location));
    
    /* Main script */
    $puzzle_script_location = '/assets/js/main.js';
    wp_enqueue_script('puzzle-script', get_template_directory_uri() . $puzzle_script_location, array('jquery'), filemtime(get_stylesheet_directory() . $puzzle_script_location));
}
add_action('wp_enqueue_scripts', 'puzzle_scripts');

?>
