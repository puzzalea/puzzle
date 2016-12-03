<nav class="main-nav">
    <div class="row">
        <?php if (has_custom_logo()) : ?>
        <div class="col">
            <a href="<?php echo get_site_url(); ?>">
                <?php the_custom_logo(); ?>
            </a>
        </div>
        <?php endif; ?>
        
        <?php if (has_nav_menu('primary')) : ?>
        <div class="col xs-fill">
            <?php
            $args = array(
                'theme_location'  => 'primary',
                'container_id'    => 'desktop-nav-menu',
                'container_class' => 'desktop-nav-menu'
            );
            wp_nav_menu($args);
            
            $args = array(
                'theme_location'  => 'primary',
                'container_id'    => 'dl-menu',
                'container_class' => 'dl-menuwrapper',
                'items_wrap'      => '<button class="dl-trigger">Open Menu</button><ul class="dl-menu">%3$s</ul>'
            );
            wp_nav_menu($args);
            ?>
        </div>
        <?php endif; ?>
    </div>
</nav>
