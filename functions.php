<?php

//custom css for our theme


function iblog_custom_css(){
    wp_enqueue_style('iblog_main_css',get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts','iblog_custom_css');