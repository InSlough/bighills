<?php if (!defined('ABSPATH')) exit;

// add_action('hook_name', 'func_name', 10);

add_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_link_close', 20);

add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_title', 50);
add_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_price', 55);

// add_action('woocommerce_before_shop_loop', function () {
//   echo '<div class="products-filters-toggle--container"><button type="button" class="btn products-filters-toggle">';
//   _e('Filter', );
//   echo '</button></div>';
// }, 20);

// ? Relocate product tabs
add_action('woocommerce_single_product_summary', 'woocommerce_output_product_data_tabs', 70);

// ? Actions with meta boxes
add_action('add_meta_boxes_product', function () {
  remove_meta_box('postexcerpt', 'product', 'normal'); // ? remove default short description
  // remove_meta_box('woocommerce-product-images', 'product', 'side'); // ? remove default product gallery
}, 9999);

// ? Clear cache results of heavy queries to database (product counts query)
add_action('wp', function () {
  if (!wp_next_scheduled('wcpf_clear_cache')) wp_schedule_event(time(), 'daily', 'wcpf_clear_cache');
  if (!wp_next_scheduled('clear_cache_tool')) wp_schedule_event(time(), 'daily', 'clear_cache_tool');
});

// ? Remove cart from checkout page
add_action('wp_enqueue_scripts', function () {
  if (is_checkout())
    if (wp_script_is('wc-cart', 'registered') && !wp_script_is('wc-cart', 'enqueued'))
      wp_enqueue_script('wc-cart');
});

// ? Register shop-sidebar
add_action('widgets_init', function () {
  register_sidebar(array(
    'name'           => __('Right sidebar category', ),
    'id'             => "shop-sidebar",
    'description'    => __('This category product', ),
    // 'class'          => '',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => "</div>\n",
    'before_title'   => '<h2 class="widgettitle">',
    'after_title'    => "</h2>\n",
    'before_sidebar' => '<div class="shop-sidebar %2$s">', // WP 5.6
    'after_sidebar'  => "</div>\n", // WP 5.6
  ));
});
add_action('widgets_init', function () {
  register_sidebar(array(
    'name'           => __('Right sidebar filter', ),
    'id'             => "shop-filter",
    'description'    => __('This filters product', ),
    // 'class'          => '',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => "</div>\n",
    'before_title'   => '<h2 class="widgettitle">',
    'after_title'    => "</h2>\n",
    'before_sidebar' => '<div class="shop-sidebar-filter %2$s">', // WP 5.6
    'after_sidebar'  => "</div>\n", // WP 5.6
  ));
});

add_action('description_init', function() {
  if ( is_product_taxonomy() && 0 === absint( get_query_var( 'paged' ) ) ) {
    $term = get_queried_object();

    if ( $term && ! empty( $term->description ) ) {
      echo '<div class="term-description">' . wc_format_content( wp_kses_post( $term->description ) ) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
  }
});
