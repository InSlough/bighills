<?php if (!defined('ABSPATH')) exit;

// ? Register Navigation Menus
add_action('after_setup_theme', function () {
  register_nav_menus(array(
    'main_menu' => __('Main menu', ),
    'first_footer_menu' => __('Footer col 1', ),
    'second_footer_menu' => __('Footer col 2', ),
    // 'link_menu' => __('Link_menu', ),
  ));
});
