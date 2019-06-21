<?php

// add the css and js files
function petem_setup()
{
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, 1.0);
    wp_enqueue_style('normalize', get_theme_file_uri('/css/normalize.css'), NULL, 1.0);
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, 1.0, true);
}

// add action
add_action('wp_enqueue_scripts', 'petem_setup');

// add theme support
function petem_init()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support(
        'html5',
        array('comment-list', 'comment-form', 'search-form')
    );
}

// add action
add_action('after_setup_theme', 'petem_init');

// Custom post types
function petem_post_types()
{

    // Main/Landing Post Types
    register_post_type(
        'main_post',
        array(
            'rewrite' => array('slug' => 'main_posts'),
            'labels' => array(
                'name' => 'Main Posts',
                'singular_name' => 'Main Post',
                'add_new_item' => 'Add New Main Post',
                'edit_item' => 'Edit Main Post'
            ),
            'menu_icon' => 'dashicons-format-gallery',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
                'thumbnail'
            )
        )
    );

    // Band Post Types
    register_post_type(
        'band',
        array(
            'rewrite' => array('slug' => 'bands'),
            'labels' => array(
                'name' => 'Bands',
                'singular_name' => 'Band',
                'add_new_item' => 'Add New Band',
                'edit_item' => 'Edit Band'
            ),
            'menu_icon' => 'dashicons-playlist-audio',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'excerpt',
                'editor',
                'thumbnail'
            )
        )
    );

    // Commercial Post Types
    register_post_type(
        'commercial',
        array(
            'rewrite' => array('slug' => 'commercials'),
            'labels' => array(
                'name' => 'Commercials',
                'singular_name' => 'Commercial',
                'add_new_item' => 'Add New Commercial',
                'edit_item' => 'Edit Commercial'
            ),
            'menu_icon' => 'dashicons-format-video',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt'
            )
        )
    );

    // Production Post Types
    register_post_type(
        'production',
        array(
            'rewrite' => array('slug' => 'productions'),
            'labels' => array(
                'name' => 'Productions',
                'singular_name' => 'Production',
                'add_new_item' => 'Add New Production',
                'edit_item' => 'Edit Production'
            ),
            'menu_icon' => 'dashicons-album',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt',
            )
        )
    );

    // Show Post Types
    register_post_type(
        'show',
        array(
            'rewrite' => array('slug' => 'shows'),
            'labels' => array(
                'name' => 'Shows',
                'singular_name' => 'Show',
                'add_new_item' => 'Add New Show',
                'edit_item' => 'Edit Show'
            ),
            'menu_icon' => 'dashicons-controls-volumeon',
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'excerpt'
            )
        )
    );
}

// add action 
add_action('init', 'petem_post_types');
