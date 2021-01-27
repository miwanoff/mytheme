<?php

function bootstraptopic_misc_customizer_section($wp_customize)
{
    $wp_customize->add_section('bootstraptopic_misc_section', [
        'title' => __('Bootstraptopic Additional Settings', 'bootstraptopic'),
        'priority' => 40,
    ]);

    $wp_customize->add_setting('bootstraptopic_header_show_search', [
        'default' => 'yes',
        // 'transport' => 'postMessage',
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootstraptopic_header_show_search_input',
        array(
            'label' => __('Show Search Button in Header', 'udemy'),
            'section' => 'bootstraptopic_misc_section',
            'settings' => 'bootstraptopic_header_show_search',
            'type' => 'checkbox',
            'choices' => [
                'yes' => 'Yes',
            ],
        )
    ));

}