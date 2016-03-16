<?php
get_header();



if ( strpos(segment(0), 'menu') !== FALSE ) {
    $menu = segment(0);
    include get_template_directory() . "/page/$menu.php";
}
else if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        get_template_part( 'content', get_post_format() );
    }
}

get_footer();