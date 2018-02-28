<?php

function vishal_script_enqueue(){

    wp_enqueue_style('bootstrap', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0','all' );
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '1.0.0','all' );
    wp_enqueue_style('fontastic', get_template_directory_uri() . '/css/fontastic.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fontfamily', get_template_directory_uri() . '/css/fontfamily.css', array(), '1.0.0', 'all');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/vendor/@fancyapps/fancybox/jquery.fancybox.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('voilet', get_template_directory_uri() . '/css/style.violet.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom.voilet', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');

    wp_enqueue_script('javascript', get_template_directory_uri() . '/js/jquery-3.2.1.min.js
', array(), '3.3.4', true);


    wp_enqueue_script('popper', get_template_directory_uri() . '/js/popper.min.js', array(), '3.3.4', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.4', true);
    wp_enqueue_script('cookie', get_template_directory_uri() . '/js/jquery.cookie.js', array(), '3.3.4', true);
    wp_enqueue_script('fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(), '3.3.4', true);
wp_enqueue_script('self', get_template_directory_uri() . '/js/self.js', array(), '3.3.4', true);
wp_enqueue_script('front', get_template_directory_uri() . '/js/front.js', array(), '3.3.4', true);

}
add_action( 'wp_enqueue_scripts', 'vishal_script_enqueue' );
/*
Active Menus
*/
function vishal_theme_setup(){
    add_theme_support('menus');
    
    register_nav_menu( 'primary', 'Primary Header Navigation' );
    register_nav_menu('secondary','Footer Navigation');
}
add_action('init', 'vishal_theme_setup');

/*
Theme Support function
*/

add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'image', 'video'));

/*
Sidebar Function

*/

function awesome_widget_setup(){

    register_sidebar(array(

    )
);
}