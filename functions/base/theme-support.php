<?php if (!defined('ABSPATH')) exit;

add_theme_support('title-tag');
add_theme_support('post-thumbnails');
add_theme_support('widgets');
add_theme_support( 'custom-logo' );
add_theme_support('category-thumbnails');

// REMOVE EMOJI ICONS
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
