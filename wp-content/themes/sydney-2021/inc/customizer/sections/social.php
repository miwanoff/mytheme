<?php
Kirki::add_section('social_settings', array(
    'title' => esc_attr__('Social settings', 'sydney2021'),
    'priority' => 1,
    'capability' => 'edit_theme_options',
));

Kirki::add_field('sydney2021', [
    'type' => 'repeater',
    'label' => esc_html__('Social links', 'sydney2021'),
    'section' => 'social_settings',
    'row_label' => [
        'type' => 'field',
        'value' => esc_html__('Your item', 'sydney2021'),
        'field' => 'link_text',
    ],
    'button_label' => esc_html__('Add new', 'sydney2021'),
    'settings' => 'social-links',
    'default' => [
        [
            'link_text' => esc_html__('Facebook', 'sydney2021'),
            'link_url' => '#',
            'link_icon' => 'fa fa-facebook',
        ], [
            'link_text' => esc_html__('Twitter', 'sydney2021'),
            'link_url' => '#',
            'link_icon' => 'fa fa-twitter',
        ], [
            'link_text' => esc_html__('Instagram', 'sydney2021'),
            'link_url' => '#',
            'link_icon' => 'fa fa-instagram',
        ], [
            'link_text' => esc_html__('YouTube', 'sydney2021'),
            'link_url' => '#',
            'link_icon' => 'fa fa-youtube',
        ],
    ],
    'fields' => [
        'link_text' => [
            'type' => 'text',
            'label' => esc_html__('Link Text', 'sydney2021'),
            'description' => esc_html__('This will be the label for your link', 'sydney2021'),
            'default' => '',
        ],
        'link_icon' => [
            'type' => 'text',
            'label' => esc_html__('Icon - class name', 'kirki'),
            'description' => 'example: fa fa-facebook
    You will find More icons here',
            'default' => 'fa fa-facebook',
        ],
        'link_url' => [
            'type' => 'link',
            'label' => esc_html__('Link URL', 'kirki'),
            'description' => esc_html__('This will be the link URL', 'sydney2021'),
            'default' => '#',
        ],
        'link_target' => [
            'type' => 'checkbox',
            'label' => esc_html__('Open link in new tab ?', 'kirki'),
            'default' => true,
        ],
    ],
]);