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

