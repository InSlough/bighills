<?php if (!defined('ABSPATH')) exit;

// ? Styles for WP Admin panel
add_action('admin_enqueue_scripts', function () {
  f_add_c_style("admin-style", "/assets/admin-style.css");
});

// ? remove style files
add_action('wp_enqueue_scripts', function () {
  wp_dequeue_style('wp-block-library'); // WordPress
  wp_dequeue_style('wp-block-library-theme'); // WordPress
  wp_dequeue_style('wc-block-style'); // WordPress
  wp_dequeue_style('woocommerce-general'); // WooCommerce
  wp_dequeue_style('storefront-gutenberg-blocks'); // Storefront theme
}, 100);


add_action('wp_enqueue_scripts', function () {
  // ?? Add to Site Header
  if (GV('critical') == true) f_add_c_style("critical", "/assets/critical.css");
});
add_action('get_footer', function () {
  // ?? Add to Site Footer
  wp_enqueue_style('main', getUrl('/dist/css/main.css') , NULL);
  wp_enqueue_style('libs', getUrl('/dist/css/libs.min.css') , NULL);
});


// ? Add custom styles to page/post/...
add_action('ac_css', function ($slug = '', $url = '', $min = false) {
  wp_enqueue_style("$slug-", getUrl($url . ($min ? ".min" : "") . ".css"), NULL);
}, 50, 3);

// ?
add_action('get_header', function () {
  remove_action('wp_head', '_admin_bar_bump_cb');
});
add_action('wp_head', function () {
  if (is_admin_bar_showing()) :
?>
    <style type="text/css">
      #wpadminbar {
        top: calc(var(--menu-h, 70px) + 5px);
        left: 5px;
        min-width: auto;
        max-width: 260px;
      }

      @media (max-width: 1024px) {
        #wpadminbar {
          display: none !important;
        }
      }

      #wp-admin-bar-customize {
        display: none;
      }

      #wpadminbar:not(:hover) {
        opacity: 0.15;
      }

      #wpadminbar .quicklinks>ul>li>a {
        font-size: 0;
        padding-right: 1px;
      }

      #wpadminbar .quicklinks>ul>li#wp-admin-bar-my-account>a {
        padding-right: 7px;
        padding-left: 1px;
      }

      #wp-admin-bar-search,
      #wp-admin-bar-wp-logo,
      #wp-admin-bar-my-account .display-name,
      #wp-admin-bar-new-content .ab-label {
        display: none;
      }

      #wp-admin-bar-clearfy-menu .wbcr-clearfy-admin-bar-menu-title {
        display: none !important;
      }

      #wpadminbar #wp-admin-bar-my-account.with-avatar>.ab-empty-item img,
      #wpadminbar #wp-admin-bar-my-account.with-avatar>a img {
        margin: 7px 1px 0 6px;
      }

      #wp-admin-bar-my-account:not(.with-avatar)>.ab-item {
        display: block;
      }
    </style>
<?php endif;
});
