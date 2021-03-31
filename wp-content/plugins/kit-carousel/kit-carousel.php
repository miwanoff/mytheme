<?php
/*
 * Plugin Name: Kit Carousel
 * Plugin URI:
 * Description: Simple carousel
 * Version: 1.0
 * Author: MAI
 * Author URI: https://github.com/miwanoff/
 * License:           GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Setup
define('KC_PLUGIN_URL', __FILE__);

// Includes
include 'includes/front/enqueue.php';
include 'process/show_carousel.php';

// Hooks
add_action('wp_enqueue_scripts', 'kc_enqueue_scripts', 100);
add_filter('the_content', 'kc_show_carousel');

// Shortcodes