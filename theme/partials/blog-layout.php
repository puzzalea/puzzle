<section>
    <div class="row">
        <div class="col xs-12<?php if (is_active_sidebar('main-sidebar')) echo ' lg-8'; ?>">
            <div class="col-inner">
                <?php
                if (have_posts()) :
                    if (isset($title)) echo '<h1>' . $title . '</h1>';
                    if (isset($subtitle)) echo '<h4>' . $subtitle . '</h4>';
                    
                    while (have_posts()) {
                        the_post();
                        get_template_part('theme/partials/loop');
                    }
                    
                    get_template_part('theme/partials/pagination');
                else : ?>
                    <h1><?php _e('No results', 'puzzle'); ?></h1>
                    <p><?php
                        if (isset($no_results_msg)) {
                            echo $no_results_msg;
                        } else {
                            _e('Sorry, no posts found', 'puzzle');
                        }?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php if (is_active_sidebar('main-sidebar')) get_sidebar(); ?>
    </div>
</section>
