<?php
/*
 Plugin Name: Custom Sidebar Plugin
 description: create new sidebar
 Version: 1.0
 Author: <a href="https://applerinquest.com/">Apple Rinquest</a>
*/

// add new sidebar
add_action('widgets_init', 'ar_news_sidebars');
function ar_news_sidebars()
{
    register_sidebar(array(
        'name' => __('Left Link Sidebar'),
        'id' => 'ar-news-sidebar',
        'description' => __('Show news on sidebar'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    /**
    // add another new sidebar
    register_sidebar(array(
    'name' => __('Another New Sidebar'),
    'id' => 'ar-another-sidebar',
    'description' => __('Another New Sidebar'),
    'description'   => '',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
    ));
     */
}