<?php

/*
 * Puzzle
 * Helper functions
 */

// Determines classes for a section. Can be edited on a theme-by-theme basis.
//
// $page_section - array of data pertaining to the section
//
// Returns a string of classes for a section
function section_classes($page_section) {
    $puzzle_options_data = $page_section['options'];
    
    $section_classes  = 'puzzle-' . $page_section['type'];
    $section_classes .= (!empty($puzzle_options_data['background_color']) ? ' ' . $puzzle_options_data['background_color'] . '-background' : '');
    $section_classes .= (!empty($puzzle_options_data['text_color_scheme']) ? ' ' . $puzzle_options_data['text_color_scheme'] . '-text-color-scheme' : '');
    $section_classes .= (!empty($puzzle_options_data['padding_top']) ? ' ' . $puzzle_options_data['padding_top'] . '-padding-top' : '');
    $section_classes .= (!empty($puzzle_options_data['padding_bottom']) ? ' ' . $puzzle_options_data['padding_bottom'] . '-padding-bottom' : '');
    $section_classes .= (!empty($puzzle_options_data['open_one_at_a_time']) ? ' puzzle-accordions-one-open' : '');
    
    return $section_classes;
}

// Determines the ID for a section. Can be edited on a theme-by-theme basis.
//
// $s - integer, the section number we are on
// $page_section - array of data pertaining to the section
//
// Returns a string of the ID for a section
function section_id($s, $page_section) {
    $puzzle_options_data = $page_section['options'];
    
    $section_id = 'section-' . ($s + 1);
    if (!empty($puzzle_options_data['id'])) {
        $section_id = to_slug($puzzle_options_data['id']);
    } else if (!empty($puzzle_options_data['headline'])) {
        $section_id = to_slug($puzzle_options_data['headline']);
    }
    
    return $section_id;
}

?>