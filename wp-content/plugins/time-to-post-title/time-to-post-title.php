<?php
/*
Plugin Name: Time to Post Title
Plugin URI: https://example.com/
Version: 1.0
Author: M.A.I.
Author URI: https://example.com/
Text Domain: time-to-post-title
License: GPL2
 */

function time_to_post_content($title)
{
    echo '<div class="time">' . __('Time of post creation: ', 'time-to-post-title') . get_the_time() . __("Date of post creation:", 'time-to-post-title') . get_the_date() . '</div>';
}
add_filter('the_content', 'time_to_post_content');

// add_action('plugins_loaded', function () {
//     load_plugin_textdomain('time-to-post-title', false, dirname(plugin_basename(__FILE__)) . '/languages');
// });

add_action('plugins_loaded', 'true_load_plugin_textdomain');

function true_load_plugin_textdomain()
{
    load_plugin_textdomain('time-to-post-title', false, dirname(plugin_basename(__FILE__)) . '/languages/');
}