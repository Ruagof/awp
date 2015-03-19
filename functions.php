<?php

add_theme_support('menus');
// we have to add this, it's not there automatically




function register_theme_menus() {
    register_nav_menus(
        //accepts an array of nav menus we want to have on the site
        array(
            'primary-menu' => __('Primary Menu'),
            'menu_class'      => 'menu',
            
            // I only have one menu, but addding menus this way makes it more expandable
            
        )
    );
}
add_action('init', 'register_theme_menus');
// add when WordPress is first initializing, then we get a manage locations section    


// this is a good way to load dependent files
function rua_theme_styles(){
    wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
    // main css file
    wp_enqueue_style('secondary_css', get_template_directory_uri().'/css/secondary.css');
    // I've added this in case I want a second css file
}
add_action('wp_enqueue_scripts', 'rua_theme_styles');
// these css files are added with this line


function rua_theme_js(){
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/app.js', array('jquery', 'foundation.min.js'), '', true);
    wp_enqueue_script('modernizr_js', get_template_directory_uri().'/js/modernizr.js', '', '', false);
    // this is the http://modernizr.com/ file that detects HTML5 and CSS3 features in the user’s browser
    //wp_enqueue_script('foundation_js', get_template_directory_uri().'/js/foundation.min.js', array('jquery'), '', true);
    //I'm looking into Foundation at the moment, may not use it.  
}
add_action('wp_enqueue_scripts', 'rua_theme_js');
// these js files are added with this line

?>