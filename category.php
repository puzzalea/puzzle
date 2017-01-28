<?php
get_header();
$cat_title = single_cat_title('', false);

get_template_part_pass_vars(
    'theme/partials/blog-layout',
    array(
        'title'             => sprintf(__('Category: %s', 'puzzle'), $cat_title),
        'subtitle'          => sprintf(
                                    _x('%1$s categorized as %2$s', '# categorized as Category', 'puzzle'),
                                    pluralize(
                                        $wp_query->found_posts,
                                        _x('post', 'noun', 'puzzle'),
                                        _x('posts', 'plural noun', 'puzzle')
                                    ),
                                    $cat_title
                                ),
        'no_results_msg'    => sprintf(_x('Sorry, no posts categorized as %s.', 'category title', 'puzzle'), $cat_title)
    )
);

get_footer();
?>
