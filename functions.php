<?php
if(site_url( ) == "http://themedev.com"){
    define("VERSION", time());
}else{
    define("VERSION", wp_get_theme() -> get("Version"));
}
function saf_bootstraping(){
    load_theme_textdomain("saf");
    add_theme_support( "title-tag" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "post-formats", array("aside", "gallery", "link", "image", "quote", "status", "video", "audio", "chat") );
    register_nav_menu( "topmenu", __("Primary navigation menu", "saf") );
    $saf_custom_logo_size = array(
        'height' => 100,
        'width'  => 100,
    );
    add_theme_support( 'custom-logo', $saf_custom_logo_size );
    $saf_custom_header_details = array(
        "header-text" => true,
        "default-custom-color" => "#222",
        "width" => 1200,
        "height" => 600,
        "flex-width" => true,
        "flex-height" => true
    );
    add_theme_support( "custom-header", $saf_custom_header_details );
}
add_action( "after_setup_theme", "saf_bootstraping");

function saf_assets() {
    wp_enqueue_style( "bootstrap", get_theme_file_uri( "/assets/css/bootstrap.min.css" ), null, VERSION);
    wp_enqueue_style( "saf-style", get_stylesheet_uri() );
    wp_enqueue_style( "dashicons" );
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

function saf_menu_class_css($classes, $item){
    $classes[] = "list-inline-item";
    return $classes;
}
add_filter( 'nav_menu_css_class', 'saf_menu_class_css', 10, 2 );

function saf_about_page_template(){
    if(is_page( )){
        $saf_feat_image = get_the_post_thumbnail_url( null, "large" );
        ?>
            <style>
                .page-header{
                    background: url(<?php echo $saf_feat_image; ?>);
                    background-repeat: no-repeat;
                    background-position: center;
                    background-size: cover;
                }
            </style>
        <?php
    }

    if(is_front_page()){
        if(current_theme_supports( "custom-header")){
            ?>
                <style>
                    .header{
                        background: url(<?php header_image(  ); ?>);
                        background-repeat: no-repeat;
                        background-position: center;
                        background-size: cover;
                    }
                    .header h1.heading a, .header h3.tagline{
                        color: #<?php echo get_header_textcolor(  ); ?>
                    }
                    .custom-logo img{
                        border: 1px solid #<?php echo get_header_textcolor(  ); ?>
                    }                    
                    .post-author img{
                        border: 1px solid #<?php echo get_header_textcolor(  ); ?>
                    }
                </style>
            <?php
        }
    }

}
add_action( "wp_head", "saf_about_page_template", 11);