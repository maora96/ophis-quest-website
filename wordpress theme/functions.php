<?php

function ophisquest_files() {
    wp_enqueue_script('font_awesome', '//kit.fontawesome.com/eb05d92dc2.js', NULL, '1.0', true);
    wp_enqueue_script('javascript', get_stylesheet_directory_uri() . '/main.js', array(), '1.0', true );
    wp_enqueue_style('custom_google_font', '//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i&display=swap');
    wp_enqueue_style('ophisquest_styles', get_stylesheet_uri());    
}

add_action('wp_enqueue_scripts', 'ophisquest_files');

function ophisquest_features() {
    add_theme_support( 'title-tag');
    register_nav_menu('headerMenuLocation', 'Header Menu');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(200, 175);
    add_image_size('homepage-archive', 200, 175);
    add_image_size('compendium', 200, 200);
    add_image_size('receive-follower-archive', 400, 420);
    add_image_size('race', 320, 300);
    add_image_size('icon', 60, 60);
}

add_action('after_setup_theme', 'ophisquest_features');


function ophisquest_sidebar() {
    register_sidebar(array(
        'id' => 'main',
        'name' => 'Main Sidebar', 
        'before-widget' => '<div class="sidebar">',
        'after_widget' => '</div></div>',
        'before_title' => '<div class="sidebar-box"><h1>',
        'after_title' => '</h1><div class="sidebar-text">'
    ));

}

add_action('widgets_init', 'ophisquest_sidebar');


function ophisquest_post_types() {
    register_post_type('equipament', array(
        'public' => true,
        'has_archive' => true,
        'supports' => array('thumbnail'),
        'labels' => array(
            'name' => 'Equipaments',
            'add_new_item' => 'Add New Equipment',
            'edit_item' => 'Edit Equipament',
            'all_items' => 'All Equipments',
            'singular_name' => 'Equipament',
            
        )
    ));

    register_post_type('skills', array(
        'public' => true,
        'has_archive' => true,
        'supports' => array('thumbnail'),
        'labels' => array(
            'name' => 'Skills',
            'add_new_item' => 'Add New Skill',
            'edit_item' => 'Edit Skill',
            'all_items' => 'All Skills',
            'singular_name' => 'Skill'
        )
    ));

    register_post_type('receivefollower', array(
        'public' => true,
        'has_archive' => true,
        'supports' => array('thumbnail'),
        'labels' => array(
            'name' => 'Receivable Follower',
            'add_new_item' => 'Add New Receivable Follower',
            'edit_item' => 'Edit Receivable Follower',
            'all_items' => 'All Receivable Followers',
            'singular_name' => 'Receivable Follower'
        )
    ));

    register_post_type('followers', array(
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title'),
        'labels' => array(
            'name' => 'Followers',
            'add_new_item' => 'Add New Follower',
            'edit_item' => 'Edit Follower',
            'all_items' => 'All Followers',
            'singular_name' => 'Follower'
        )
    ));

    register_post_type('race', array(
        'public' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'labels' => array(
            'name' => 'Races',
            'add_new_item' => 'Add New Race',
            'edit_item' => 'Edit Race',
            'all_items' => 'All Races',
            'singular_name' => 'Race'
        )
    ));

}

add_action('init', 'ophisquest_post_types');

?>