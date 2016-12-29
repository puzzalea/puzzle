    </main>
    <?php
    $footer = get_theme_mod('footer_content');

    if ($footer) : ?>
        <footer class="main-footer">
            <div class="row">
                <div class="col xs-12">
                    <div class="col-inner">
                        <?php echo apply_filters('like_the_content', wp_kses_post($footer)); ?>
                    </div>
                </div>
            </div>
        </footer>
    <?php
    endif;
    
    wp_footer();
    ?>
</body>
</html>
