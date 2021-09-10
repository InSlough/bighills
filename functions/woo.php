<?php if (!defined('ABSPATH')) exit;

add_action('after_setup_theme', function () {
  add_theme_support('woocommerce');
});

require_once(__DIR__ . '/woo/_remove.php');
require_once(__DIR__ . '/woo/_add.php');

require_once(__DIR__ . '/woo/templates/tp-parts.php');
require_once(__DIR__ . '/woo/templates/tp-archive-product.php');
require_once(__DIR__ . '/woo/templates/tp-content-product.php');

// require_once(__DIR__ . '/woo/templates/file_name.php');
// require_once(__DIR__ . '/woo/templates/file_name.php');
