<?php

/*
 * Puzzle
 * Custom style colors using admin options
 *
 * The CSS here is converted into /assets/css/custom.css if the sheet does not
 * exist yet, and then is updated every time the user updates the theme
 * customizations (see /theme/setup/customize_theme.php).
 */

$theme_colors = puzzle_theme_colors();

$primary_color = $theme_colors['primary_color'];
$secondary_color = $theme_colors['secondary_color'];
$headline_dark = $theme_colors['headline_dark'];
$text_dark = $theme_colors['text_dark'];
$headline_light = $theme_colors['headline_light'];
$text_light = $theme_colors['text_light'];

$nav_background_color = get_theme_mod('nav_background_color', 'primary');
$footer_background_color = get_theme_mod('footer_background_color', 'primary');
?>
/* Text */

h1, h2, h3, h4, h5, h6, th {
    color: <?php echo $headline_dark; ?>;
}

body, p, li, td {
    color: <?php echo $text_dark; ?>;
}

/* Links */

a {
    color: <?php echo $primary_color; ?>;
}

a:hover, a:active {
    color: <?php echo $secondary_color; ?>;
}

/* Forms */

input, select, textarea {
    border-color: <?php echo $text_dark; ?>;
}

input:focus, select:focus, textarea:focus {
    border-color: <?php echo $primary_color; ?>;
}

/* Navigation Bar */
<?php
$nav_secondary_color = $primary_color;

if ($nav_background_color == 'secondary') {
    $nav_primary_color = $secondary_color;
    $nav_text_color = $text_light;
} elseif ($nav_background_color == 'gray') {
    $nav_primary_color = '#eee';
    $nav_text_color = $primary_color;
} elseif ($nav_background_color == 'white') {
    $nav_primary_color = '#fff';
    $nav_text_color = $primary_color;
} else {
    $nav_primary_color = $primary_color;
    $nav_secondary_color = $secondary_color;
    $nav_text_color = $text_light;
}
?>

.main-nav {
    background-color: <?php echo $nav_primary_color; ?>;
    background-color: rgba(<?php echo hex2rgb($nav_primary_color); ?>, 0.9);
}

.main-nav a {
    color: <?php echo $nav_text_color; ?>;
}

#dl-menu.dl-menuwrapper button {
    background: <?php echo $primary_color; ?>;
}

#dl-menu.dl-menuwrapper ul,
#dl-menu.dl-menuwrapper button.dl-active,
#dl-menu.dl-menuwrapper button:hover,
.main-nav__desktop-menu ul ul {
    background: <?php echo $nav_secondary_color; ?>;
}
<?php if ($nav_primary_color == '#fff' || $nav_primary_color == '#eee') : ?>

#dl-menu.dl-menuwrapper button {
    background-color: <?php echo $secondary_color; ?>;
}

#dl-menu.dl-menuwrapper li a,
.main-nav__desktop-menu ul ul li a {
    color: <?php echo $text_light; ?>;
}

#dl-menu.dl-menuwrapper li a:hover,
#dl-menu.dl-menuwrapper li a:active {
    color: <?php echo $primary_color; ?>;
}
<?php endif; ?>

#dl-menu.dl-menuwrapper button:active,
#dl-menu.dl-menuwrapper li a:hover,
#dl-menu.dl-menuwrapper li a:active {
    background: <?php echo $nav_primary_color; ?>;
}

/* Footer */
<?php
$footer_headline_color = $headline_light;
$footer_text_color = $text_light;

if ($footer_background_color == 'gray' || $footer_background_color == 'white') {
    $footer_headline_color = $headline_dark;
    $footer_text_color = $text_dark;
}

if ($footer_background_color == 'secondary') {
    $footer_primary_color = $secondary_color;
} elseif ($footer_background_color == 'gray') {
    $footer_primary_color = '#eee';
} elseif ($footer_background_color == 'white') {
    $footer_primary_color = '#fff';
} else {
    $footer_primary_color = $primary_color;
}
?>

.main-footer {
    background-color: <?php echo $footer_primary_color; ?>
}

.main-footer h1, .main-footer h2, .main-footer h3, .main-footer h4, .main-footer h5, .main-footer h6 {
    color: <?php echo $footer_headline_color; ?>;
}

.main-footer, .main-footer p, .main-footer li, .main-footer th, .main-footer td, .main-footer a {
    color: <?php echo $footer_text_color; ?>
}

/* Buttons */

button,
input[type='button'],
input[type='submit'],
.categories .cat-item a,
.single-post-page-links a:hover,
.comment-reply-link,
a.page-numbers:hover,
#cancel-comment-reply-link {
    background-color: <?php echo $primary_color; ?>;
    border-color: <?php echo $primary_color; ?>;
    color: #fff;
}

button:hover,
input[type='button']:hover,
input[type='submit']:hover,
.categories .cat-item a:hover,
#cancel-comment-reply-link:hover,
.comment-reply-link:hover {
    background-color: <?php echo $secondary_color; ?>;
    border-color: <?php echo $secondary_color; ?>;
    color: #fff;
}

/* Blog */

.puzzle-loop, .single-post-content, .single-post-content.comments-open {
    border-color: <?php echo $primary_color; ?>;
}

.single-post-page-links a, .page-numbers {
    color: <?php echo $text_dark; ?>
}

span.page-numbers.prev, span.page-numbers.next {
    color: rgba(<?php echo hex2rgb($text_dark); ?>, 0.65);
}

/* Contact Form 7 */

.wpcf7-form div.wpcf7-response-output.wpcf7-mail-sent-ok {
    background-color: <?php echo $primary_color; ?>;
    background-color: rgba(<?php echo hex2rgb($primary_color); ?>, 0.5);
}

.primary-background .wpcf7-form div.wpcf7-response-output.wpcf7-mail-sent-ok {
    background-color: <?php echo $secondary_color; ?>;
    background-color: rgba(<?php echo hex2rgb($secondary_color); ?>, 0.5);
}
