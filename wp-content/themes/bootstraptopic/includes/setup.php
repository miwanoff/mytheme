<?php
function bootstraptopic_setup_theme()
{
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Important primary Menu', 'bootstraptopic'));
}