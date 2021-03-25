<?php
/*
Plugin Name: Kit Booking
Plugin URI: https://github.com/miwanoff/kitbook
Description: Booking plugin.
Version: 1.0
Author: MAI
Author URI: https://github.com/miwanoff/
License: GPLv2 or later
Text Domain: kitbooking
 */
if (!function_exists('add_action')) {
    die;
}
function kitbooking_say_hello()
{
    echo "Kitbooking say Hello!";
}
add_action('admin_init', 'kitbooking_say_hello');

// class KitBooking
// {
//     public function __construct($string)
//     {
//         echo $string;
//     }
// }

// if (class_exists('KitBooking')) {
//     new KitBooking("Hello!");
// }