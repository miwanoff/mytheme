<?php
/**
 * Plugin Name: Hooks example
 * Description: Hooks example
 * Version: 1.0
 * Author: M.A.I.
 */

function hooked_title($title)
{
    return 'Hooked ' . $title;
}

add_filter('the_title', 'hooked_title');

function added_footer()
{
    echo 'Added to footer by hook-example plugin ';
}

add_action('wp_footer', 'added_footer');

//-----------my hook-----------

function my_footer()
{
    do_action('wp_hook_footer');
}

add_action('wp_footer', 'my_footer');

function hello_footer()
{
    echo 'Hello ';
}

add_action('wp_hook_footer', 'hello_footer');