<?php

function roomus_laine_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'roomus_laine_setup');

function roomus_laine_styles() {
    wp_enqueue_style('roomus-laine-style', get_stylesheet_uri(), array(), '1.0');
}

add_action('wp_enqueue_scripts', 'roomus_laine_styles');
