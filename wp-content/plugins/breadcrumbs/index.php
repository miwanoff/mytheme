<?php
/*
Plugin Name: Breadcrumbs
Plugin URI: https://example.com/
Description: Breadcrumbs,  navigation scheme that reveals the user's location in a website
Version: 1.0
Author: M.A.I.
Author URI: https://kitit/com.ua
License: GPL2
 */
function breadcrumbs()
{
    echo '<div class="breadcrumbs">';
    if (!is_front_page()) {
        echo '<a href="';
        echo get_option('home');
        echo '">Home</a> » ';
        if (is_category() || is_single()) {
            the_category(' ');
            if (is_single()) {
                echo " » ";
                the_title();
            }
        } elseif (is_page()) {
            echo the_title();
        }
    } else {
        echo 'Home';
    }
    echo '</div>';
}
add_filter('wp_head', 'breadcrumbs');