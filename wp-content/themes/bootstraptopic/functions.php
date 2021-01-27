<?php

// Setup
define('BOOTSTRAPTOPIC_DEV_MODE', true);

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/setup.php');
include get_theme_file_path('includes/custom-nav-walker.php');
include get_theme_file_path('includes/widgets.php');
include get_theme_file_path('includes/taxonomies.php');
include get_theme_file_path('includes/custom-post-types.php');
include get_theme_file_path('includes/theme-customizer.php');
include get_theme_file_path('includes/customizer/social.php');
include get_theme_file_path('includes/customizer/misc.php');
// Hooks
add_action('wp_enqueue_scripts', 'bootstraptopic_enqueue');
add_action('after_setup_theme', 'bootstraptopic_setup_theme');
add_action('widgets_init', 'bootstraptopic_widgets');
add_action('init', 'bootstraptopic_taxonomies');
add_action('init', 'bootstraptopic_register_post_type_init');
add_action('customize_register', 'bootstraptopic_customize_register');
// Shortcodes

function true_custom_fields()
{
    add_post_type_support('movies', 'custom-fields');
}

add_action('init', 'true_custom_fields');