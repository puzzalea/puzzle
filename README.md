# README #

This is my personal starter theme called Puzzle. It also uses a framework that I created called Puzzle Pieces.

### How to set up ###

1. Create an installation of Wordpress.
1. Add contents of the starter theme into your own theme directory and delete this README (eventually).
1. Customize the theme name and description in style.css.
1. The SASS/CSS is deliberately scant so that creating unique looks is relatively easy.
1. The 'theme' directory contains the custom files for the theme which you may edit as needed.
    - 'models' directory - If you need sections to have different options/fields, edit their objects in these files. If you are sure you will not need a section, you can delete its related file in the 'models' directory and delete its related SCSS.
        - If you need to create a new section, see the 'How to make a new section' section below.
    - 'loops' directory - If you need to edit the markup for columns inside sections, edit their related loops here.
        - Be wary of editing the markup of accordions. They need a certain structure and certain classes for the JavaScript opening and closing functionality to work (see 'puzzle\_pieces/assets/js/frontend-script.js'). If you drastically change the markup of the accordions, you will likely need to write custom JavaScript to make opening and closing work again.
    - 'settings' - Various settings for the theme
        - 'custom\_style.php' - Generates custom CSS using the settings that the user can change through Appearance > Customize
        - 'customize\_theme.php' - The settings available through Appearance > Customize
        - 'puzzle\_colors.php' - Settings for the theme colors
        - 'puzzle\_config.php' - Miscellaneous settings such as using the icon library, etc.
1. Towards the end of the coding/design process, create a screenshot of the theme, name it 'screenshot.png', and place it in the root directory of the theme. Screenshots are 880x660 pixels.

### Puzzle Pieces ###

- Puzzle Pieces is a library of frequently used components in my Wordpress themes, including my page builder, FontAwesome, mobile menu functionality, Owl Carousel, and more.
- Puzzle Pieces will be used by many themes, so do not add theme-specific code to it.
- If you make commits to the Puzzle Pieces submodule, themes that use it will need to pull the repo on an individual basis and be tested to make sure the latest Puzzle Pieces update did not break them.

### How to make a new section ###

1. Create a new php file in 'theme/models/' and name it 'your\_section\_name.php' where 'your\_section\_name' is the name of your new section.
1. Reference the documentation in the 'PuzzleSection' model in 'puzzle\_pieces/php/classes/section.php' for the different attributes to set, as well as referencing already-exising objects in 'theme/models/' to help you get started.
    - The page builder was created with [object-oriented programming](http://en.wikipedia.org/wiki/Object-oriented_programming) in mind, so there are [setter and getter functions](http://en.wikipedia.org/wiki/Mutator_method) for each variable.
1. Create a new php file in 'theme/loops/' and name it 'your\_section\_name.php' where 'your\_section\_name' is the name of your section. This will be used by 'section.php' to output the markup for each of the section's columns on the frontend of the website.

### What's included ###

- Page builder
    - Created by me
- [FontAwesome](http://fortawesome.github.io/Font-Awesome/)
    - Icon library
- [Responsive Multi-Level Menu](http://tympanus.net/codrops/2013/04/19/responsive-multi-level-menu/)
    - Drop down menu for mobile
- [Owl Carousel](http://owlgraphic.com/owlcarousel/)
    - Carousel slider
    - The Owl Carousel built into the theme has been hacked slightly because of bugginess with Google Chrome, so use caution if updating this library.