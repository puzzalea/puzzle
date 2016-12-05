<?php get_header(); ?>
<section>
    <div class="row">
        <div class="col xs-12">
            <div class="col-inner">
                <h1><?php _e('404', 'puzzle'); ?></h1>
                <h2><?php _e('Page not found!', 'puzzle'); ?></h2>
                <p><?php _e('We are sorry. We couldn\'t find the page you were looking for.', 'puzzle'); ?></p>
                <a class="pz-button" href="<?php echo get_site_url(); ?>"><?php _e('Go Back Home', 'puzzle'); ?></a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
