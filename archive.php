<?php
get_header();
$month = single_month_title(' ', false);
?>
<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
                <?php if (have_posts()) : ?>
                    <h1><?php printf(__('Date: %s', 'puzzle'), $month); ?></h1>
                    <h4><?php
                        printf(
                            _x('%1$s in %2$s', '# posts in Month', 'puzzle'),
                            pluralize(
                                $wp_query->found_posts,
                                _x('post', 'noun', 'puzzle'),
                                _x('posts', 'plural noun', 'puzzle')
                            ),
                            $month
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
                    <p><?php printf(_x('Sorry, no posts in %s.', 'month', 'puzzle'), $month); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
