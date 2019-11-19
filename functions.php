<?php

/*
 * Loading stylesheets 
 */
function load_stylesheets(){
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css',
    array(), false, 'all');
    wp_enqueue_style('stylesheet');
}

add_action('wp_enqueue_scripts','load_stylesheets');

/*
 * Customer menus 
 */
register_nav_menus( array(
    'primary' => __('Primary Menu','momit')
));

/*
 * Customer logo 
 */
function momit_custom_logo_setup() {
    $defaults = array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
   add_action( 'after_setup_theme', 'momit_custom_logo_setup' );

/*
 * Custom sidebars
 * Include footer and search bar 
 */
function momit_widgets_init(){
    register_sidebar( array(
        'name' => 'Footer Sidebar 1',
        'id' => 'footer-sidebar-1',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
        ) );
    register_sidebar( array(
        'name' => 'Footer Sidebar 2',
        'id' => 'footer-sidebar-2',
        'description' => 'Appears in the footer area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    register_sidebar( array(
        'name' => 'Navigation Search Bar',
        'id' => 'navigation-searchbar',
        'description' => 'Appears in the header area',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );
    

}
add_action('widgets_init','momit_widgets_init');

/*
 * Customer header 
 */
function momit_custom_header_setup(){
    $defaults = array(
        'default-image' => get_template_directory_uri() . 'img/something.jpeg',
        'default-text-color' => '000',
        'width' => 1000,
        'height' => 250,
        'flex-width' => true,
        'flex-height' => true,
    );
    add_theme_support('custom-header', $defaults);
}

add_action('after_setup_theme','momit_custom_header_setup');
