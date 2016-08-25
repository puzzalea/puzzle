<?php

/*
 * Puzzle
 */

/* Puzzle Pieces required file */
require_once('puzzle_pieces/puzzle_pieces.php');

foreach (glob(get_stylesheet_directory() . '/theme/setup/*.php') as $filename) {
    require_once($filename);
}

?>
