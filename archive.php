<?php
get_header();
$month = single_month_title(' ', false);

get_template_part_pass_vars(
    'theme/partials/blog-layout',
    array(
        'title'             => sprintf(__('Date: %s', 'puzzle'), $month),
        'subtitle'          => sprintf(
                                    _x('%1$s in %2$s', '# posts in Month', 'puzzle'),
                                    pluralize(
                                        $wp_query->found_posts,
                                        _x('post', 'noun', 'puzzle'),
                                        _x('posts', 'plural noun', 'puzzle')
                                    ),
                                    $month
                                ),
        'no_results_msg'    => sprintf(_x('Sorry, no posts in %s.', 'month', 'puzzle'), $month)
    )
);

get_footer();
?>
