<?php

function attaches_theme_settings()
{
    function defines_excerpts_word_count() {return 16;}
    add_filter('excerpt_length', 'defines_excerpts_word_count');
}

function attaches_theme_assets() 
{
    add_theme_support('title-tag');
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri());
    wp_enqueue_style('magic', get_template_directory_uri() . '/not_static/css/magic.css');
    wp_enqueue_script('main', get_template_directory_uri() . '/not_static/javascript/main.js');
}

function completes_setup()
{
    attaches_theme_settings();
    attaches_theme_assets();
}

add_action('after_setup_theme', 'completes_setup');

?>