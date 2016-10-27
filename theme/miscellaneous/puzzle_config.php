<?php

/*
 * Puzzle Page Builder
 * Config
 */

/* General settings */
function puzzle_modify_settings($settings) {
    /*
     * Set if button formats are available in the formats dropdown in the
     * WYSIWYG editor.
     * Default is true, button formats are available.
     */
    $settings->set_button_formats(true);

    /*
     * Choose which post types the page builder is available for.
     * Takes an array of post types.
     * Default is array('page'), the page builder is only available for pages.
     */
    $settings->set_page_builder_post_types(array('page'));
    
    /*
     * Alter how sections appear on the page on the frontend.
     *
     * Default is 'plugin_template', the template built into the plugin will
     * be used, which combines the active theme's header.php and footer.php
     * with the sections.
     *
     * Also accepts these arguments:
     * - 'the_content' - sections will replace the main content of a page,
     *   using the theme's templates
     * - 'custom' - the user can set a specific one of their theme's templates,
     *   and sections will replace the content (this template can be set in the
     *   'set_custom_template' function)
     */
    $settings->set_display_sections_in('plugin_template');
    
    /*
     * Set a theme's template to be used for page builder sections on the
     * front end. Sections will be inserted in 'the_content()'. Will only take
     * effect if 'set_display_sections_in' is set to 'custom'.
     */
    // $settings->set_custom_template('my-theme-template.php');

    /*
     * Set directory that contains section template parts.
     * Default is '' (empty string), template parts are located in the root
     * directory of the theme.
     */
    $settings->set_templates_directory('');

    /*
     * Add Owl Carousel
     * Default is true, Owl Carousel functionality is available.
     */
    $settings->set_owl_carousel(true);

    /*
     * Add icon library to page builder
     * Default is true, icon library is available.
     */
    $settings->set_icon_library(true);
}
add_action('ppb_modify_settings', 'puzzle_modify_settings');

/*
 * Icon library modifications
 * This will only take effect if the icon library is active.
 */
function puzzle_modify_puzzle_icon_libraries($libraries) {
    /* Remove libraries by their slugs */
    // $libraries->remove_library('font-awesome');
    // $libraries->remove_libraries(array('font-awesome', 'elegant-icons'));

    /*
     * Set default icon in page builder
     * Default is 'ei ei-star-alt'
     */
    $libraries->set_default_icon('ei ei-star-alt');

    /*
     * Add a "no icon" choice to Icon Library
     * Default is false, users do not have a "no icon" choice
     */
    $libraries->set_choice_none(false);
    
    /* Add new libraries */
    // foreach (glob(get_stylesheet_directory() . '/theme/icon_libraries/*.php') as $filename) {
    //     include $filename;
    // }
}
add_action('ppb_modify_icon_libraries', 'puzzle_modify_puzzle_icon_libraries');

/* Field modifications */
function puzzle_modify_puzzle_fields($f) {
    /* Add field modifications here */
    // $f->field('background_color', false)
    //     ->remove_option('gray');
    
    /* Add new fields */
    // foreach (glob(get_stylesheet_directory() . '/theme/fields/*.php') as $filename) {
    //     include $filename;
    // }
}
add_action('ppb_modify_fields', 'puzzle_modify_puzzle_fields');

/* Section modifications */
function puzzle_modify_puzzle_sections($puzzle_sections, $f) {
    /* Remove sections by their slugs */
    // $puzzle_sections->remove_section('accordions');
    // $puzzle_sections->remove_sections(array('accordions', 'carousel'));
    
    /* Add new sections */
    // foreach (glob(get_stylesheet_directory() . '/theme/sections/*.php') as $filename) {
    //     include $filename;
    // }
}
add_action('ppb_modify_sections', 'puzzle_modify_puzzle_sections', 10, 2);

?>
