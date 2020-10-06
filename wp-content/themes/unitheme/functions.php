<?php

function university_files(){
    wp_enqueue_style('font-awesome','//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('google-custom-font','https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic');
    wp_enqueue_style('university_main_style',get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','university_files');

function university_features(){
    add_theme_support('title-tag');
}
add_action('after_setup_theme','university_features');



?>