<?php
get_header();

get_template_part_pass_vars(
    'theme/partials/blog-layout',
    array(
        'title' => is_front_page() ? get_bloginfo() : __('Blog', 'puzzle')
    )
);

get_footer();
?>
