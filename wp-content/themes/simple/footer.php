<div class="clear"></div>
<!-- Подвал сайта -->
<footer id="colophon" class="site-footer">
    <nav class="main-navigation">
        <?php wp_nav_menu(array('menu' => 'top-menu', 'menu_class' => 'top-menu'));?>
    </nav>
    <div class="site-info">
        <a href="<?php echo esc_url(__('http://wordpress.org/')); ?>">
            <?php echo 'KIT 2020'; ?>
        </a>
    </div><!-- .site-info -->
    <?php wp_footer();?>
</footer><!-- #colophon -->
</div><!-- #page -->
</body>

</html>