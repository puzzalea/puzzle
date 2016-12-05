<?php

/*
 * Puzzle
 * Default Colors
 */

function puzzle_default_colors() {
    return array(
        array(
            'id'        => 'primary_color',
            'label'     => __('Primary Color', 'puzzle'),
            'default'   => '#314887'
        ),
        array(
            'id'        => 'secondary_color',
            'label'     => __('Secondary Color', 'puzzle'),
            'default'   => '#4b97e3'
        ),
        array(
            'id'        => 'headline_dark',
            'label'     => __('Dark Headlines', 'puzzle'),
            'default'   => '#333'
        ),
        array(
            'id'        => 'text_dark',
            'label'     => __('Dark Body Text', 'puzzle'),
            'default'   => '#555'
        ),
        array(
            'id'        => 'headline_light',
            'label'     => __('Light Headlines', 'puzzle'),
            'default'   => '#fff'
        ),
        array(
            'id'        => 'text_light',
            'label'     => __('Light Body Text', 'puzzle'),
            'default'   => '#fff'
        )
    );
}

/* Returns the user-set colors */
function puzzle_theme_colors() {
    $theme_colors = array();
    $default_colors = puzzle_default_colors();
    
    foreach ($default_colors as $default_color) {
        $theme_colors[$default_color['id']] = get_theme_mod(
            $default_color['id'],
            $default_color['default']
        );
    }
    
    return $theme_colors;
}

?>
