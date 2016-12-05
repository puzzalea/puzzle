<?php

/*
 * Puzzle
 * Theme Customizations
 */

/* Register theme customizations */
function puzzle_customize_register($wp_customize) {
    /* Colors */
    $colors = puzzle_default_colors();
    
    $wp_customize->add_section('puzzle_colors' , array(
        'title'      => _x('Colors', 'plural noun', 'puzzle'),
        'priority'   => 200
    ));
    
    foreach($colors as $color) {
        $wp_customize->add_setting($color['id'], array(
            'default'           => $color['default'],
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh'
        ));
        
        $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, $color['id'], array(
            'label'         => $color['label'],
            'section'       => 'puzzle_colors',
            'settings'      => $color['id']
        )));
    }
    
    /* For nav and footer */
    $background_color_options = array(
        'primary'       => __('Primary Color', 'puzzle'),
        'secondary'     => __('Secondary Color', 'puzzle'),
        'white'         => __('White', 'puzzle'),
        'gray'          => __('Gray', 'puzzle')
    );
    
    /* Navigation Bar */
    $wp_customize->add_section('puzzle_nav', array(
        'title'      => __('Navigation Bar', 'puzzle'),
        'priority'   => 200
    ));
    
    $wp_customize->add_setting('nav_background_color', array(
        'default'           => 'primary',
        'sanitize_callback' => 'esc_attr',
        'transport'         => 'refresh'
    ));
    
    $wp_customize->add_control('nav_background_color', array(
        'label'             => __('Background Color', 'puzzle'),
        'section'           => 'puzzle_nav',
        'settings'          => 'nav_background_color',
        'type'              => 'select',
        'choices'           => $background_color_options
    ));
    
    /* Footer */
    $wp_customize->add_section('puzzle_footer', array(
        'title'      => 'Footer',
        'priority'   => 210,
    ));
    
    $wp_customize->add_setting('footer_background_color', array(
        'default'           => 'primary',
        'sanitize_callback' => 'esc_attr',
        'transport'         => 'refresh'
    ));
    
    $wp_customize->add_control('footer_background_color', array(
        'label'             => __('Background Color', 'puzzle'),
        'section'           => 'puzzle_footer',
        'settings'          => 'footer_background_color',
        'type'              => 'select',
        'choices'           => $background_color_options
    ));
    
    $wp_customize->add_setting('footer_content', array(
        'default'           => '',
        'sanitize_callback' => 'esc_html',
        'transport'         => 'refresh'
    ));
    
    $wp_customize->add_control('footer_content', array(
        'label'             => __('Content', 'puzzle'),
        'section'           => 'puzzle_footer',
        'settings'          => 'footer_content',
        'type'              => 'textarea'
    ));
}
add_action('customize_register', 'puzzle_customize_register');

/* Save custom CSS using user-defined colors */
function puzzle_save_custom_style() {
    ob_start();
    require(get_stylesheet_directory() . '/theme/miscellaneous/custom_style.php');
    $css = ob_get_clean();
    
    global $wp_filesystem;
    
    if (empty($wp_filesystem)) {
        require_once(ABSPATH .'/wp-admin/includes/file.php');
        WP_Filesystem();
    }
    
    if (!$wp_filesystem->put_contents(get_stylesheet_directory() . '/assets/css/custom.css', $css)) {
        return true;
    }
}
add_action('customize_save_after', 'puzzle_save_custom_style');

/* Checks if the custom CSS exists. If it does not, create it. */
function puzzle_check_if_custom_style_exists() {
    if (!file_exists(get_stylesheet_directory() . '/assets/css/custom.css')) {
        puzzle_save_custom_style();
    }
}

?>
