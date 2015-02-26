<?php

function rua_theme_styles(){
    wp_enqueue_style('secondary_css', get_template_directory_uri().'/css/secondary.css');
    wp_enqueue_style('main_css', get_template_directory_uri().'/style.css');
}

add_action('wp_enqueue_scripts', rua_theme_styles);

?>