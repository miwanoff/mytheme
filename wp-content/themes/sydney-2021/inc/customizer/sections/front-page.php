<?php

/* adding layout_front_page section*/
Kirki::add_section('layout_front_page', array(
    'title' => esc_attr__('Front page', 'sydney2021'),
    'description' => __('Front page layout.'),
    'priority' => 160,
    'capability' => 'edit_theme_options',
));