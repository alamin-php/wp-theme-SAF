<?php
function saf_bootstraping(){
    load_theme_textdomain("saf");
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails" );
}
add_action( "after_setup_theme", "saf_bootstraping");

function saf_assets() {
    wp_enqueue_style( "bootstrap", "//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style( "saf-style", get_stylesheet_uri() );
    // wp_enqueue_script( "script-name", get_template_directory_uri() . "/js/example.js", array(), "1.0.0", true );
}
add_action( "wp_enqueue_scripts", "saf_assets" );

function saf_sidebar(){
        register_sidebar( 
            array(
            'name'          => __( 'Single Page Sidebar', 'saf' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'saf' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widgettitle">',
            'after_title'   => '</h2>',
        ) 
    );        
    register_sidebar( 
            array(
            'name'          => __( 'Footer Left Widget', 'saf' ),
            'id'            => 'footer-left',
            'description'   => __( 'Widgets for Footer Left', 'saf' ),
            'before_widget' => '<div id="%1s" class="widget %2s">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) 
    );    
    register_sidebar( 
            array(
            'name'          => __( 'Footer Right Widget', 'saf' ),
            'id'            => 'footer-right',
            'description'   => __( 'Widgets for Footer Right', 'saf' ),
            'before_widget' => '<div id="%1s" class="widget %2s float-right">',
            'after_widget'  => '</div>',
            'before_title'  => '',
            'after_title'   => '',
        ) 
    );
}
add_action( "widgets_init", "saf_sidebar" );