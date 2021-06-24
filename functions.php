<?php 
    function smm_files() {
        wp_enqueue_script('header-js', get_theme_file_uri('/js/header.js'), NULL, '1.0.0', true);
        wp_enqueue_style('main-styles', get_stylesheet_uri());
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Arsenal:ital,wght@0,400;0,700;1,400&display=swap');
    }
    add_action('wp_enqueue_scripts', 'smm_files');

    function smm_features() {
        add_theme_support('title-tag');
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
    }
    add_action('after_setup_theme', 'smm_features');
?>