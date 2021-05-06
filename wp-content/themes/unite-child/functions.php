<?php

function uniteChildScripts() {
  wp_enqueue_style('unite-child', get_stylesheet_directory_uri() . '/assets/css/main.css');
}

add_action('wp_enqueue_scripts', 'uniteChildScripts');

include_once __DIR__ . '/inc/post-type.php';
include_once __DIR__ . '/inc/films-shortcode.php';
include_once __DIR__ . '/inc/pagination.php';
