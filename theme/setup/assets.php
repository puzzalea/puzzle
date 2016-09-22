<?php

/*
 * Puzzle
 * Assets
 */

/* Add styles and scripts */
function puzzle_scripts() {
    /* Google fonts */
    wp_enqueue_style('puzzle-google-fonts', '//fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    
    /* Main styles */
    $puzzle_style_location = '/assets/css/main.css';
    wp_enqueue_style('puzzle-style', get_template_directory_uri() . $puzzle_style_location, array(), filemtime(get_stylesheet_directory() . $puzzle_style_location));
    
    /* Custom styles generated from user options */
    $puzzle_custom_style_location = '/assets/css/custom.css';
    if (!file_exists(get_stylesheet_directory() . $puzzle_custom_style_location)) {
        puzzle_save_custom_style();
    }
    wp_enqueue_style('puzzle-custom-style', get_template_directory_uri() . $puzzle_custom_style_location, array(), filemtime(get_stylesheet_directory() . $puzzle_custom_style_location));
    
    /* Main script */
    $puzzle_script_location = '/assets/js/main.js';
    wp_enqueue_script('puzzle-script', get_template_directory_uri() . $puzzle_script_location, array('jquery'), filemtime(get_stylesheet_directory() . $puzzle_script_location));
}
add_action('wp_enqueue_scripts', 'puzzle_scripts');

?>
