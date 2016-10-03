<?php
$disable_smooth_scroll = get_theme_mod('disable_smooth_scroll');
if ($disable_smooth_scroll) {
    $smooth_scroll_class = 'smooth-scroll-disabled';
} else {
    $smooth_scroll_class = 'smooth-scroll-enabled';
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title(''); ?></title>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class($smooth_scroll_class); ?>>
    <?php if (has_custom_logo() || has_nav_menu('primary')) get_template_part('theme/partials/nav'); ?>
    <main>
