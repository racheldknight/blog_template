<?php
/*-------------- Sidebar Widget --------------- */

function blank_widgets_init() {
    register_sidebar( array(
        'name' => ('First Widget'),
        'id' => 'first-widget',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
        ));
}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*-------------- Enable Featured Images --------------- */

add_theme_support('post-thumbnails');

/*-------------- Enable Read More to excerpts --------------- */

function new_excerpt_more( $more ) {
    return ' <p> <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read More >') . '</a> </p>';
}

add_filter( 'excerpt_more', 'new_excerpt_more' );