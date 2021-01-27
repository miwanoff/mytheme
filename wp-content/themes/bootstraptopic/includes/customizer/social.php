<?php
function bootstraptopic_social_customizer_section($wp_customize)
{

    $wp_customize->add_section('bootstraptopic_social_section', [
        'title' => __('Bootstraptopic Social Settings', 'bootstraptopic'),
        'priority' => 30,
    ]);

    $wp_customize->add_setting('bootstraptopic_facebook_handle', [
        'default' => '',
    ]);

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootstraptopic_social_facebook_input',
        array(
            'label' => __('Facebook', 'bootstraptopic'),
            'section' => 'bootstraptopic_social_section',
            'settings' => 'bootstraptopic_facebook_handle',
        )
    ));

    $wp_customize->add_setting('bootstraptopic_instagram_handle', array(
        'default' => '',
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'bootstraptopic_social_instagram_input',
        array(
            'label' => __('Instagram', 'bootstraptopic'),
            'section' => 'bootstraptopic_social_section',
            'settings' => 'bootstraptopic_instagram_handle',
            'type' => 'text',
        )
    ));

}