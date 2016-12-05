<?php
get_header();
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
                <?php if (have_posts()) : ?>
                    <h2><?php printf(__('Author: %s', 'puzzle'), $curauth->display_name); ?></h2>
                    <h4><?php
                        printf(
                            _x('%1$s written by %2$s', '# posts written by Author Name', 'puzzle'),
                            pluralize(
                                $wp_query->found_posts,
                                _x('post', 'noun', 'puzzle'),
                                _x('posts', 'plural noun', 'puzzle')
                            ),
                            $curauth->display_name
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
                    <p><?php printf(_x('Sorry, no posts by %s.', 'author name', 'puzzle'), $curauth->display_name); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
