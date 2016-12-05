<?php
get_header();
the_post();
?>
<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
                <div class="single-post-meta">
                    <?php the_title('<h2>', '</h2>'); ?>
                    <h4><?php the_time(get_option('date_format')); ?>, by <?php the_author(); ?></h4>
                    <?php
                    $categories = get_the_category();
                    if (get_the_category()) : ?>
                        <h5><?php _e('Categories:', 'puzzle'); ?></h5>
                        <h5><?php the_category(', '); ?></h5>
                    <?php endif; ?>
            
                    <?php if (has_tag()) : ?>
                    <h6><?php the_tags(); ?></h6>
                    <?php endif; ?>
                </div>
            
                <div class="single-post-content<?php if (comments_open()) echo ' comments-open'; ?>">
                    <?php
                    the_content();
                    
                    $args = array(
                        'before'            => '<p class="single-post-page-links">' . __('Pages:', 'puzzle'),
                        'after'             => '</p>',
                        'link_before'       => '<span>',
                        'link_after'        => '</span>'
                    );
                    wp_link_pages($args);
                    ?>
                </div>
                
                <?php if (comments_open()) comments_template(); ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
<?php get_footer(); ?>
