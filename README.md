# README #

This is my personal starter theme called Puzzle. It uses my personal library of common code for my WordPress themes called [Puzzle Pieces](https://github.com/caraheacock/puzzle_pieces), and it's meant to be used with my plugin [Puzzle Page Builder](https://github.com/caraheacock/puzzle-page-builder).

One of these days I will make an even blanker starter theme that does not have so much stuff that only I use for my personal projects, but that time is not now.

### How to set up ###

1. Create an installation of [WordPress](https://wordpress.org/download/).
1. Add contents of the starter theme into your own theme directory and delete this README (eventually).
1. Customize the theme name and description in `style.css`.
1. The SASS/CSS is deliberately scant so that creating unique looks is relatively easy.
1. `functions.php` is deliberately scant because `functions.php` can quickly spiral out of control. Most functionality is included in the `theme` directory, and `functions.php` includes these files as needed.
1. The `theme` directory contains the custom files for the theme.
    - `miscellaneous` - Extra code
        - `custom\_style.php` - Generates custom CSS using the settings that the user can change through Appearance > Customize
        - `helpers.php` - Miscellaneous helper functions
    - `partials` - Various WordPress partials such as the post loop, navigation bar, and pagination
    - `settings` - Various settings for the theme. This entire directory is globbed by `functions.php`.
        - `assets.php` - Enqueues styles and scripts
        - `customize\_theme.php` - The settings available through Appearance > Customize
        - `menus.php` - Initializes menus
        - `puzzle\_colors.php` - Settings for the theme colors
        - `sidebar.php` - Initializes sidebar widget area
1. Towards the end of the coding/design process, create a screenshot of the theme, name it `screenshot.png`, and place it in the root directory of the theme. Screenshots are 880x660 pixels.

### Puzzle Pieces ###

- Puzzle Pieces is a library of frequently used components in my WordPress themes. You can lift code out of the Puzzle Pieces submodule and include it directly in your theme if you don't want to be dependent on it. I would recommend against depending on Puzzle Pieces since it's my personal library and I make frequent changes to it.
