<?php
function bootstraptopic_widgets()
{
    register_sidebar([
        'name' => __('Bootstraptopic first Sidebar', 'bootstraptopic'),
        'id' => 'bootstraptopic_sidebar',
        'description' => __('Bootstraptopic first Sidebar for something.'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',

    ]);

    register_sidebar([
        'name' => 'Bootstraptopic second Sidebar',
        'id' => 'bootstraptopic_sidebar_2',
        'description' => __('Bootstraptopic second Sidebar for something.'),
        'before_widget' => '<div id="%1$s" class="backgroundlist %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ]);

}