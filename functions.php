<?php

/*
 * Puzzle
 */

/* Puzzle Pieces required file */
require_once('puzzle_pieces/puzzle_pieces.php');

/*
 * Puzzle Page Builder config
 * Only include if the plugin is active
 */
if (class_exists('PuzzlePageBuilder')) require_once('theme/miscellaneous/puzzle_config.php');

/*
 * Glob everything in the /theme/setup/ directory.
 * Require order does not matter.
 */
foreach (glob(get_stylesheet_directory() . '/theme/setup/*.php') as $filename) {
    require_once($filename);
}

?>
