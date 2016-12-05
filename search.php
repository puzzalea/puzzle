<?php get_header(); ?>
<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
                <?php if (have_posts()) : ?>
                    <h1><?php printf(__('Search: %s', 'puzzle'), get_search_query()); ?></h1>
                    <h4><?php
                        echo pluralize(
                            $wp_query->found_posts,
                            _x('result', 'noun', 'puzzle'),
                            _x('results', 'plural noun', 'puzzle')
                        ); ?></h4>
                    <?php
                    while (have_posts()) {
                        the_post();
                        get_template_part('theme/partials/loop');
                    }
                
                    get_template_part('theme/partials/pagination');
                    ?>
                <?php else : ?>
                    <h1><?php _e('No results', 'puzzle'); ?></h1>
                    <p><?php printf(_x('Sorry, no posts found for %s.', 'search query', 'puzzle'), '&ldquo;' . get_search_query() . '&rdquo;'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
