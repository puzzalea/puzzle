<?php

/*
 * Puzzle
 * Menus
 */

/* Register menus */
function puzzle_menus() {
    register_nav_menus( array(
        'primary'   => __('Primary Menu', 'puzzle')
    ));
}
add_action('after_setup_theme', 'puzzle_menus');

?>
