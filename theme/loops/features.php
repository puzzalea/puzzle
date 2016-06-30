<?php
$link_target = (!empty($puzzle_column['open_link_in_new_tab']) ? ' target="_blank"' : '');

$icon_link_start = '';
$icon_link_end = '';
if (!empty($puzzle_column['link']) && !empty($puzzle_column['icon_link'])) {
    $icon_link_start = '<a class="puzzle-icon-link" href="' . $puzzle_column['link'] . '"' . $link_target . '>';
    $icon_link_end = '</a>';
}
?>
<div class="column <?php echo $span_classes; echo ($puzzle_options_data['layout'] == 'rows' ? ' icon-row' : ' icon-column'); if (!empty($puzzle_column['button_text'])) echo ' has-button'; ?>">
    <div class="column-inner">
        <?php echo $icon_link_start; ?><i class="puzzle-main-icon <?php echo $puzzle_column['icon']; ?>"></i><?php echo $icon_link_end; ?>
        <div class="puzzle-feature-column-content">
            <?php
            if (!empty($puzzle_column['headline'])) {
                $headline_tag = ($puzzle_options_data['layout'] == 'columns' ? 'h4' : 'h3');
                echo '<' . $headline_tag . '>' . $puzzle_column['headline'] . '</' . $headline_tag . '>';
            }
            ?>
            
            <?php echo apply_filters('the_content', $puzzle_column['content']); ?>
        </div>
        <?php if (!empty($puzzle_column['button_text'])) : ?>
        <a class="puzzle-button puzzle-feature-main-button" href="<?php echo $puzzle_column['link']; ?>"<?php echo $link_target; ?>><?php echo $puzzle_column['button_text']; ?></a>
        <?php endif; ?>
    </div>
</div>