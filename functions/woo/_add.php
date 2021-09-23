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
    'name'           => __('Right sidebar category',),
    'id'             => "shop-sidebar",
    'description'    => __('This category product',),
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
    'name'           => __('Right sidebar filter',),
    'id'             => "shop-filter",
    'description'    => __('This filters product',),
    // 'class'          => '',
    'before_widget'  => '<div id="%1$s" class="widget %2$s">',
    'after_widget'   => "</div>\n",
    'before_title'   => '<h2 class="widgettitle">',
    'after_title'    => "</h2>\n",
    'before_sidebar' => '<div class="shop-sidebar-filter %2$s">', // WP 5.6
    'after_sidebar'  => "</div>\n", // WP 5.6
  ));
});

add_action('description_init', function () {
  if (is_product_taxonomy() && 0 === absint(get_query_var('paged'))) {
    $term = get_queried_object();

    if ($term && !empty($term->description)) {
      echo '<div class="term-description">' . wc_format_content(wp_kses_post($term->description)) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    }
  }
});

// add_action( 'woocommerce_account_edit-address_endpoint', 'new_edit_address' );

add_filter('woocommerce_account_menu_items', 'remove_edit_address_my_account', 999);

function remove_edit_address_my_account($items)
{
  unset($items['edit-address']);
  return $items;
}

add_filter('woocommerce_account_menu_items', 'remove_downloads_my_account', 999);

function remove_downloads_my_account($items)
{
  unset($items['downloads']);
  return $items;
}


// add_action( 'woocommerce_account_edit-account_endpoint', 'woocommerce_account_edit_address' );
// add_action( 'woocommerce_account_ENDPOINTSLUG_endpoint', 'woocommerce_account_edit_account' );

// Account Edit Adresses: Remove and reorder addresses fields
add_filter('woocommerce_default_address_fields', 'custom_default_address_fields', 20, 100);
function custom_default_address_fields($fields)
{
  unset($fields['address_2']);

  $sorted_fields = array('first_name', 'last_name', 'company', 'address_1', 'country', 'postcode', 'city', 'state');

  $new_fields = array();
  $priority = 0;

  foreach ($sorted_fields as $key_field) {
    $priority += 10;

    if ($key_field == 'company')
      $priority += 20;

    $new_fields[$key_field] = $fields[$key_field];
    $new_fields[$key_field]['priority'] = $priority;
  }
  return $new_fields;
}

add_filter('woocommerce_billing_fields', 'custom_billing_fields', 20, 1);
function custom_billing_fields($fields)
{

  $fields['billing_email']['priority'] = 30;
  $fields['billing_email']['class'] = array('form-row-first');
  $fields['billing_phone']['priority'] = 40;
  $fields['billing_phone']['class'] = array('form-row-last');

  return $fields;
}


add_filter('woocommerce_my_account_my_address_formatted_address', 'my_account_address_formatted_addresses', 20, 3);
function my_account_address_formatted_addresses($address, $customer_id, $address_type)
{
  unset($address['address_2']);
  return $address;
}

add_action( 'new_woocommerce_view_order', 'woocommerce_order_details_table', 10 );

// add_shortcode('edit_account', 'display_myaccount_edit_account');
// function display_myaccount_edit_account()
// {
//     return WC_Shortcode_My_Account::edit_account();
// }
