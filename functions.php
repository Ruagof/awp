<?php
// this is a good way to load dependent files
function rua_theme_styles(){
    wp_enqueue_style('secondary_css', get_template_directory_uri().'/css/secondary.css');
    wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
}
add_action('wp_enqueue_scripts', 'rua_theme_styles');

function rua_theme_js(){
    
    wp_enqueue_script('modernizr_js', get_template_directory_uri().'/js/modernizr.js', '', '', false);
    wp_enqueue_script('foundation_js', get_template_directory_uri().'/js/foundation.js', array('jquery'), '', true);
    wp_enqueue_script('main_js', get_template_directory_uri().'/js/app.js', array('jquery', 'foundation.js'), '', true);
}
add_action('wp_enqueue_scripts', 'rua_theme_js');

?>