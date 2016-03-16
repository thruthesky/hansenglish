<?php
/**
 * @file functions.php
 */


/**
 * @return string - theme directory uri
 */
function td() {
    return get_template_directory_uri();
}

/**
 * @note it ECHOes image directory uri including ending slash.
 */
function id() {
    echo td() . '/img/';
}

/**
 * Echoes home page directory uri including slash.
 */
function hd() {
    echo esc_url( home_url( '/' ) );
}

/**
 * Get the Id of the ancestor page
 */
function get_top_ancestor_id() {
    global $post;
    if ($post->post_parent) {
        $ancestors = array_reverse(get_post_ancestors($post->ID));
        return $ancestors[0];
    }
    return $post->ID;
}

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'base', get_template_directory_uri() . '/css/base.css' );
    wp_enqueue_style( 'layout', get_template_directory_uri() . '/css/layout.css' );
    wp_enqueue_style( 'module', get_template_directory_uri() . '/css/module.css' );
    wp_enqueue_style( 'module.header', get_template_directory_uri() . '/css/module.header.css' );
    wp_enqueue_style( 'state', get_template_directory_uri() . '/css/state.css' );
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css' );
}

// if page has children
function has_children() {
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

// Theme Setup
function wordPressFeatureSetup() {
    // adding feature image support
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'wordPressFeatureSetup');


add_shortcode('intro', function ( ) {
    include get_template_directory() . '/page/intro.php';
});