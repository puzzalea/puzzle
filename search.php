<?php
get_header();

get_template_part_pass_vars(
    'theme/partials/blog-layout',
    array(
        'title'             => sprintf(__('Search: %s', 'puzzle'), get_search_query()),
        'subtitle'          => pluralize(
                                    $wp_query->found_posts,
                                    _x('result', 'noun', 'puzzle'),
                                    _x('results', 'plural noun', 'puzzle')
                                ),
        'no_results_msg'    => sprintf(
                                    _x('Sorry, no posts found for %s.', 'search query', 'puzzle'),
                                    '&ldquo;' . get_search_query() . '&rdquo;'
                                )
    )
);

get_footer();
?>
