<?php

/*
 * Puzzle
 * Theme Support
 */

/* Add theme supports */
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links');
add_theme_support('title-tag');

/* Set $content_width variable */
if (!isset($content_width)) $content_width = 1200;

/* Add script for comments */
function puzzle_enqueue_comments_reply() {
    if (get_option('thread_comments')) wp_enqueue_script('comment-reply');
}
add_action('comment_form_before', 'puzzle_enqueue_comments_reply');

/*
 * Add like_the_content Filter
 *
 * Has the same actions as the_content but for times when running
 * the_content filter conflicts with plugins.
 * 
 * The only action this does not have is 'prepend_attachment' because
 * it causes attachment pages to show attachments in weird places.
 */
$actions = array('wptexturize', 'convert_smilies', 'convert_chars', 'wpautop', 'shortcode_unautop');
foreach ($actions as $action) {
    add_filter('like_the_content', $action);
}

/*
 * Add title for home page
 * Workaround for title being blank if the front page is
 * a custom home page.
 */
function puzzle_title_for_home($title) {
    if (empty($title) && (is_home() || is_front_page())) {
        return get_bloginfo() . ' | ' . get_bloginfo('description');
    }
    
    return $title;
}
add_filter('wp_title', 'puzzle_title_for_home');

/*
 * Alters formatting of excerpt_more
 * Default is [...]
 */
function puzzle_excerpt_more($more) {
    return '&hellip;';
}
add_filter('excerpt_more', 'puzzle_excerpt_more');

?>
