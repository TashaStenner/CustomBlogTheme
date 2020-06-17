<?php

function link_assets() {
    wp_enqueue_style('custom_font_title', '//fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
    wp_enqueue_style('custom_font', '//fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet');
    wp_enqueue_style('font_awesomes', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css');
    wp_enqueue_style('main_style_sheet', get_stylesheet_uri());

    wp_enqueue_script('main_js', get_theme_file_uri('main.js') , NULL , '1.0' , true);
}

add_action('wp_enqueue_scripts', 'link_assets');
?>