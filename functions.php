<?php 
    function smm_files() {
        wp_enqueue_style('main-styles', get_stylesheet_uri());
    }
    add_action('wp_enqueue_scripts', 'smm_files');

    function smm_features() {
        add_theme_support('title-tag');
        register_nav_menu('headerMenuLocation', 'Header Menu Location');
    }
    add_action('after_setup_theme', 'smm_features');
?>