<?php if (!defined('ABSPATH')) exit;


// ? change sale flash
if (!function_exists('woocommerce_show_product_loop_sale_flash')) {
  function woocommerce_show_product_loop_sale_flash()
  {
    // wc_get_template('loop/sale-flash.php');
    global $post, $product;
    if ($product->is_on_sale())
      echo apply_filters('woocommerce_sale_flash', '<span class="onsale">' . esc_html__('Sale', ) . '</span>', $post, $product);
  }
}
if (!function_exists('woocommerce_show_product_sale_flash')) {
  function woocommerce_show_product_sale_flash()
  {
    // wc_get_template('single-product/sale-flash.php');
    global $post, $product;
    if ($product->is_on_sale())
      echo apply_filters('woocommerce_sale_flash', '<span class="onsale">' . esc_html__('Sale!', 'woocommerce') . '</span>', $post, $product);
  }
}
// !

// ? override woo wrappers
if (!function_exists('woocommerce_output_content_wrapper')) {
  function woocommerce_output_content_wrapper()
  {
    // wc_get_template('global/wrapper-start.php');
    echo '<div class="shop">';
    if (function_exists('yoast_breadcrumb') && !is_shop()) yoast_breadcrumb('<section class="container breadcrumbs">', '</section>');
    echo '<section><div class="container">';
  }
}
if (!function_exists('woocommerce_output_content_wrapper_end')) {
  function woocommerce_output_content_wrapper_end()
  {
    // wc_get_template('global/wrapper-end.php');
    echo '</div></section></div>';
  }
}
// !
