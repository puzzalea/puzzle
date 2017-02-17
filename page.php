<?php
get_header();
the_post();
?>
<section>
    <div class="row pz-section-headline">
        <div class="col xs-12">
            <div class="col-inner">
                <?php the_title('<h1>', '</h1>'); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col xs-12">
            <div class="col-inner">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
