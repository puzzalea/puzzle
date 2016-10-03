<?php
get_header();
the_post();
?>
<section>
    <div class="row puzzle-section-headline">
        <div class="column xs-span12">
            <div class="column-inner">
                <?php the_title('<h2>', '</h2>')?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="column xs-span12">
            <div class="column-inner">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
