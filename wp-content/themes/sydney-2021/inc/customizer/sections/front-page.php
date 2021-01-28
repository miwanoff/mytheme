<?php
Kirki::add_panel('header', array(
    'priority' => 10,
    'title' => __('Header', 'theme_slug'),
    'description' => __('This panel will provide all the options of the header.', 'theme_slug'),
));

/* adding layout_front_page section*/
Kirki::add_section('layout_front_page', array(
    'title' => esc_attr__('Front page', 'sydney2021'),
    'description' => __('Front page layout.'),
    'panel' => 'header',
    'priority' => 160,
    'capability' => 'edit_theme_options',
));

/* adding layout_front_page_slider_image_one_setting field */
Kirki::add_field('sydney2021', array(
    'settings' => 'layout_front_page_slider_image_one_setting',
    'label' => __('First image of the slider', 'theme_slug'),
    'section' => 'layout_front_page',
    'type' => 'image',
    'priority' => 10,
    'default' => '',
));

/* adding layout_front_page_slider_image_two_setting field */
Kirki::add_field('sydney2021', array(
    'settings' => 'layout_front_page_slider_image_two_setting',
    'label' => __('Second image of the slider', 'theme_slug'),
    'section' => 'layout_front_page',
    'type' => 'image',
    'priority' => 10,
    'default' => '',
));
/* adding layout_front_page_slider_image_three_setting field */
Kirki::add_field('sydney2021', array(
    'settings' => 'layout_front_page_slider_image_three_setting',
    'label' => __('Third image of the slider', 'theme_slug'),
    'section' => 'layout_front_page',
    'type' => 'image',
    'priority' => 10,
    'default' => '',
));