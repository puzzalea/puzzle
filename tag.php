<?php
get_header();
$tag_title = single_tag_title('', false);
?>
<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
                <?php if (have_posts()) : ?>
                    <h1><?php printf(__('Tag: %s', 'puzzle'), $tag_title); ?></h1>
                    <h4><?php
                        printf(
                            _x('%1$s tagged as %2$s', '# posts tagged as Tag Title', 'puzzle'),
                            pluralize(
                                $wp_query->found_posts,
                                _x('post', 'noun', 'puzzle'),
                                _x('posts', 'plural noun', 'puzzle')
                            ),
                            $tag_title
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
                    <p><?php printf(_x('Sorry, no posts tagged as %s.', 'tag title', 'puzzle'), $tag_title); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>