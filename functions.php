<?php

function enqueue_theme_styles()
{

    wp_enqueue_style(
        'stylesheet-handle',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0',
        'all'
    );
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');

function enqueue_custom_scripts()
{
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');