<?php

/* adding layout_front_page section*/
Kirki::add_section('layout_front_page', array(
    'title' => __('Front page'),
    'description' => __('Front page layout.'),
    'panel' => 'layout', // Not typically needed.
    'priority' => 160,
    'capability' => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
));