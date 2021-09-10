<?php if (!defined('ABSPATH')) exit;

// if (!is_admin()) add_filter('script_loader_tag', function ($tag) {
//   // if (is_user_logged_in()) return $tag; // don't break WP Admin
//   if (FALSE === strpos($tag, '.js')) return $tag;
//   if (strpos($tag, 'jquery') || strpos($tag, 'jquery-3.5.1.min.js')) return $tag;
//   return str_replace(' src', ' defer src', $tag);
// }, 60);

add_action('wp_enqueue_scripts', function () {
  // ?? Scripts for Site (Header)
  // f_add_script('script_file_name', 0||1, false);

  // ?? Scripts for Site (Footer)
  wp_enqueue_script("focus-visible", getUrl("/assets/focus-visible.js"), null, '5.2.0', true);
  // f_add_script('libs', 0, 1);
  wp_enqueue_script("libs",getUrl("/dist/js/libs/libs.js"),array('jquery'),GV('ver'),true);

  // global $wp_query;
  wp_register_script("main", getUrl("/dist/js/main.js"), array('jquery'), GV('ver'), true);
  wp_enqueue_script('main');
  // ?? свои параметры для файла "main-script"
  wp_localize_script('main', 'siteVars', array(
    // 'query' => array(
    // 'raw' => $wp_query->query_vars,
    // 'vars' => json_encode($wp_query->query_vars), // everything about your loop is here
    // 'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
    // 'max_page' => $wp_query->max_num_pages,
    // ),
    'site' => array(
      'url' => site_url(),
      'ajax' => admin_url('admin-ajax.php'),
    ),
    'translate' => array(
      'wl_add_text' => __("Добавлено в список желаний", ),
      // 'wl_add_text' => __("Added to the wish list", ),
      'wl_remove_text' => __("Удалено из списка желаний", ),
      // 'wl_remove_text' => __("Removed from the wish list", ),
      'shop_alert__add_to_cart' => __("Товар добавлен в корзину", ),
      // 'shop_alert__add_to_cart' => __("The product was added to the cart", ),
    ),
  ));
  //
}, 50);

// ? Add custom scripts  to page/post/...
add_action('ac_js', function ($slug = '', $url = '', $min = false) {
  // ?? add_custom_javascript
  wp_enqueue_script("$slug-", getUrl($url . ($min ? ".min" : "") . ".js"), array('jquery'), GV('ver'), true);
}, 50, 3);
