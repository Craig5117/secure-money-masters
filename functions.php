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

    function smm_widgets_init() {

        register_sidebar( array(
            'name' => 'Footer Sidebar 1',
            'id' => 'footer-sidebar-1',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
            register_sidebar( array(
            'name' => 'Footer Sidebar 2',
            'id' => 'footer-sidebar-2',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
            register_sidebar( array(
            'name' => 'Footer Sidebar 3',
            'id' => 'footer-sidebar-3',
            'description' => 'Appears in the footer area',
            'before_widget' => '<aside id="%1$s" class="widget %2$s">',
            'after_widget' => '</aside>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            ) );
    }
    add_action( 'widgets_init', 'smm_widgets_init' );

    function smm_post_thumbnails() {
        add_theme_support( 'post-thumbnails' );
    }
    add_action( 'after_setup_theme', 'smm_post_thumbnails' );

//Page Slug Body Class
function add_slug_body_class( $classes ) {
    global $post;
    if ( isset( $post ) ) {
    $classes[] = $post->post_type . '-' . $post->post_name;
    }
    return $classes;
    }
    add_filter( 'body_class', 'add_slug_body_class' );
