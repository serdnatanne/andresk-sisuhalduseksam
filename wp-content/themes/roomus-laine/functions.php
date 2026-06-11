<?php

function roomus_laine_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'roomus_laine_setup');

function roomus_laine_assets() {
    wp_enqueue_style('roomus-laine-style', get_stylesheet_uri(), array(), '1.1');

    wp_enqueue_script(
        'roomus-laine-darkmode',
        get_template_directory_uri() . '/assets/js/darkmode.js',
        array(),
        '1.0',
        true
    );
}

add_action('wp_enqueue_scripts', 'roomus_laine_assets');
