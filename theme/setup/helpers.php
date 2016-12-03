<?php

/*
 * Puzzle Pieces
 * Helper functions
 */

/*
 * Converts a hex value to rgb
 *
 * $hex - string, hex color, e.g. '#abc123'
 *
 * Returns a string of the color converted to rgb, with values separated by commas
 */
function hex2rgb($hex) {
    $hex = str_replace('#', '', $hex);

    if (strlen($hex) == 3) {
        $r = hexdec(substr($hex, 0, 1) . substr($hex, 0, 1));
        $g = hexdec(substr($hex, 1, 1) . substr($hex, 1, 1));
        $b = hexdec(substr($hex, 2, 1) . substr($hex, 2, 1));
    } else {
        $r = hexdec(substr($hex, 0, 2));
        $g = hexdec(substr($hex, 2, 2));
        $b = hexdec(substr($hex, 4, 2));
    }
    $rgb = array($r, $g, $b);
    
    return implode(', ', $rgb); // returns a string of the rgb values separated by commas
    // return $rgb; // returns an array with the rgb values
}

/*
 * Pluralizes a string
 *
 * $num - integer, the number to base the pluralization on
 * $word - string, the word to pluralize
 * $plural - string, the pluralized form of the word. If blank, an 's' is
 *      added to the end of $word
 *
 * Returns a string with the number and correctly pluralized word
 * e.g. '5 cats', '1 dog'
 */
function pluralize($num, $word, $plural = null) {
    if (!$plural) $plural = $word . 's';
    return $num . ' ' . ($num == 1 ? $word : $plural);
}

?>
