# Puzzle

v1.3.1

[![Code Climate](https://codeclimate.com/github/puzzalea/puzzle/badges/gpa.svg)](https://codeclimate.com/github/puzzalea/puzzle)

This is a starter WordPress theme called Puzzle. It is meant to be used with [Puzzle Page Builder](https://github.com/puzzalea/puzzle-page-builder) but can be used on its own.

One of these days I will make an even blanker starter theme, but that time is not now.

## Set up

1. Create an installation of [WordPress](https://wordpress.org/download/).
1. Add contents of the starter theme into your own theme directory and delete this README (eventually).
1. Customize the details in `style.css`.
1. Customize the text domain throughout translation functions in the theme.
1. Customize the function prefixes throughout the functionality (mostly files in `theme/setup`).
1. Optional: install the [Puzzle Page Builder](https://github.com/puzzalea/puzzle-page-builder) plugin.
1. Towards the end of the coding/design process, create a screenshot of the theme, name it `screenshot.png`, and place it in the root directory of the theme. [The recommended screenshot size is 1200x900 pixels](https://codex.wordpress.org/Theme_Development#Screenshot), although any 4:3 image size is technically acceptable.

## Customizing

- The SASS/CSS is minimal so that creating unique looks is relatively easy.
- `functions.php` is deliberately scant because `functions.php` can quickly spiral out of control. Most functionality is included in the `theme` directory, and `functions.php` includes these files as needed.
- The `theme` directory contains the custom files for the theme.
    - `miscellaneous` - Extra code
        - `custom_style.php` - Generates custom CSS using the settings that the user can change through Appearance > Customize
        - `puzzle_config.php` - Configurations for the Puzzle Page Builder plugin
    - `partials` - Various WordPress partials such as the post loop, navigation bar, and pagination
    - `settings` - Various settings for the theme. This entire directory is globbed by `functions.php`.
        - `assets.php` - Enqueues styles and scripts
        - `colors.php` - Sets default colors and utility functions for using theme colors
        - `customize_theme.php` - The settings available through Appearance > Customize
        - `editor_style.php` - Adds styles for the WordPress WYSIWYG editor
        - `helpers.php` - Miscellaneous helper functions
        - `logo.php` - Adds logo options to the theme customization
        - `menus.php` - Initializes menus
        - `sidebar.php` - Initializes sidebar widget area
        - `theme_support.php` - Adds various theme supports such as post thumbnails, comments JavaScript, etc.
