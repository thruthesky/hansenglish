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
    wp_enqueue_style( 'style', td() . '/style.css' );
    wp_enqueue_style( 'base', td() . '/css/base.css' );
    wp_enqueue_style( 'layout', td() . '/css/layout.css' );
    wp_enqueue_style( 'module', td() . '/css/module.css' );
    wp_enqueue_style( 'module.header', td() . '/css/module.header.css' );
    wp_enqueue_style( 'module.footer', td() . '/css/module.footer.css' );
    wp_enqueue_style( 'module.sidebar', td() . '/css/module.sidebar.css' );
    wp_enqueue_style( 'state', td() . '/css/state.css' );
    wp_enqueue_style( 'theme', td() . '/css/theme.css' );
}



/**
 * --------------------- F U N C T I O N S -----------------------
 */

if ( ! function_exists('di') ) {
    function di($o) {
        $re = print_r($o, true);
        $re = str_replace(" ", "&nbsp;", $re);
        $re = explode("\n", $re);
        echo implode("<br>", $re);
    }
}

if ( ! function_exists('segment') ) {
    function segments($n = NULL) {
        $u = strtolower(site_url());
        $u = str_replace("http://", '', $u);
        $u = str_replace("https://", '', $u);
        $r = strtolower($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        $uri = str_replace( "$u/", '', $r);
        $re = explode('/', $uri);
        if ( $n !== NULL ) return $re[$n];
        else return $re;
    }
    function segment($n) {
        return segments($n);
    }
}
