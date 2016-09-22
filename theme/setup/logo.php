<?php

/*
 * Puzzle
 * Custom logo
 */

/* Add custom logo */
function puzzle_custom_logo() {
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'flex-width'  => true
    ));
}
add_action('after_setup_theme', 'puzzle_custom_logo');

/* Backwards compatability for WordPress <4.5 */
if (!function_exists('the_custom_logo')) {
    function get_custom_logo() { return NULL; }
    function the_custom_logo() { return ''; }
    function has_custom_logo() { return false; }
}

?>
