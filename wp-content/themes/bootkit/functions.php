<?php

// Setup
define('BOOTKIT_DEV_MODE', true);

//add_theme_support('menus');

// Includes
include get_theme_file_path('includes/enqueue.php');
include get_theme_file_path('includes/setup.php');
include get_theme_file_path('includes/custom-nav-wolker.php');
include get_theme_file_path('includes/widgets.php');
include get_theme_file_path('includes/taxonomies.php');
include get_theme_file_path('includes/custom-post-types.php');
include get_theme_file_path('includes/theme-customizer.php');
include get_theme_file_path('includes/customizer/social.php');
include get_theme_file_path('includes/customizer/misc.php');
// include get_theme_file_path('includes/custom-massages.php');
// Hooks
add_action('wp_enqueue_scripts', 'bootkit_enqueue');
add_action('after_setup_theme', 'bootkit_setup_theme');
add_action('widgets_init', 'bootkit_widgets');
add_action('init', 'bootkit_taxonomies');
add_action('init', 'bootkit_register_post_type_init');

// Shortcodes

// add_filter('init', 'bootkit_post_type_messages');

function bootkit_custom_fields()
{
    add_post_type_support('movies', 'custom-fields');
}

add_action('init', 'bootkit_custom_fields');

// $bootkit_args = array(
//     'meta_query' => array(
//         array(
//             'key' => 'Mood',
//             'value' => 'Happy',
//         ),
//     ),
// );
// $bootkit_query = new WP_Query($bootkit_args);
//print_r($bootkit_query);

//add_action('customize_register', 'bootkit_customize_register');

//--------------customizer--------

add_action('customize_register', 'bootkit_customize_register');

add_action('wp_head', 'bootkit_customizer_css');
function bootkit_customizer_css()
{
    ?>
<style type="text/css">
a {
    color: #<?php echo get_theme_mod('bootkit_link_color', '#fff');
    ?>;
}
</style>
<?php
}

add_action('after_setup_theme', 'bootkit_load_theme_textdomain');

function bootkit_load_theme_textdomain()
{
    load_theme_textdomain('bootkit', get_template_directory() . '/languages');
}

function site_url_shortcode($atts)
{
    return site_url();
}

add_shortcode('myurl', 'site_url_shortcode');

// Ajax
add_action('wp_ajax_bootkit', 'bootkit_ajax');
add_action('wp_ajax_nopriv_bootkit', 'bootkit_ajax');

function bootkit_ajax()
{
    $summa = $_POST['param1'] + $_POST['param2']; // сумма двух чисел
    echo $summa;
    die;
}

//-----------template plugin

// add_action('template_include', 'my_template_include');
// function my_template_include($template)
// {

//     $file = dirname(__FILE__) . 'load-more-button/templates/template.php';
//     if (file_exists($file)) {
//         $template = $file;
//     }

//     return $template;

// }