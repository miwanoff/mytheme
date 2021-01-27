<?php

function bootstraptopic_enqueue()
{
    $url = get_theme_file_uri();

    $ver = BOOTSTRAPTOPIC_DEV_MODE ? time() : false;

    wp_register_style('bootstraptopic_google_fonts', 'https://fonts.googleapis.com/css?family=Open+Sans&display=swap', [], $ver); // Google fonts

    wp_register_style('bootstraptopic_bootstrap', $url . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], $ver); // bootstrap.min.css
    wp_register_style('bootstraptopic_modern_business', $url . '/assets/css/modern-business.css', [], $ver); // modern-business.cs
    wp_register_style('bootstraptopic_font-awesome_fonts',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', [], $ver);

    wp_register_script('bootstraptopic_bootstrap', $url . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', 'jquery', $ver, true);

    wp_enqueue_style('bootstraptopic_bootstrap');
    wp_enqueue_style('bootstraptopic_modern_business');
    wp_enqueue_style('bootstraptopic_google_fonts');
    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstraptopic_bootstrap');
    wp_enqueue_style('bootstraptopic_font-awesome_fonts');

}