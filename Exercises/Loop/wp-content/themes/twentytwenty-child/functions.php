<?php
function enqueue_parent_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

add_action('widgets_init', 'twentytwenty_child_widgets_init');

function twentytwenty_child_widgets_init()
{
    register_sidebar(array(
        'name' => __('N413 Sidebar', 'twentytwenty-child'),
        'id' => 'n413sidebar',
        'description' => 'A WordPress Sidebar',
        'class' => 'sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}

//include widget class
include("widgets/Hello_world_widget.php");
//Register the widget
function register_hello_world()
{
    register_widget('hello_world_widget');
}
add_action('widgets_init', 'register_hello_world');
