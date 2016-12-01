<?php
$prev_text = '<i class="ei ei-arrow-caret-left"></i> ' . __('Older', 'puzzle');
$next_text = __('Newer', 'puzzle') . ' <i class="ei ei-arrow-caret-right"></i>';

if (get_previous_posts_link() || get_next_posts_link()) : ?>
<div class="pagination">
    <?php if (!get_previous_posts_link()) : ?>
    <span class="prev page-numbers disabled"><?php echo $prev_text; ?></span>
    <?php endif; ?>
    
    <?php
    $args = array(
        'mid_size'  => 1,
        'prev_text' => $prev_text,
        'next_text' => $next_text
    );
    echo paginate_links($args);
    ?>
    
    <?php if (!get_next_posts_link()) : ?>
    <span class="next page-numbers disabled"><?php echo $next_text; ?></span>
    <?php endif; ?>
</div>
<?php endif; ?>
