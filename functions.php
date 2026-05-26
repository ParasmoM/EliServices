<?php

function eli_services_enqueue_assets()
{
    wp_enqueue_style(
        'eli-services-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style(
        'eli-services-main',
        get_template_directory_uri() . '/assets/css/style.css',
        array(),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'eli_services_enqueue_assets');
