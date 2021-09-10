<?php

/**
 * ? Loop (Start)
 */
if (!function_exists('woocommerce_page_title')) {
  /**
   * Page Title function.
   *
   * @param  bool $echo Should echo title.
   * @return string
   */
  function woocommerce_page_title($echo = true)
  {
    if (is_search()) {
      /* translators: %s: search query */
      $page_title = sprintf(__('Search results: &ldquo;%s&rdquo;', 'woocommerce'), get_search_query());

      if (get_query_var('paged')) {
        /* translators: %s: page number */
        $page_title .= sprintf(__('&nbsp;&ndash; Page %s', 'woocommerce'), get_query_var('paged'));
      }
    } elseif (is_tax()) {
      $page_title = single_term_title('', false);
    } else {
      $shop_page_id = wc_get_page_id('shop');
      $page_title   = get_the_title($shop_page_id);
    }
    $page_title = apply_filters('woocommerce_page_title', $page_title);
    if ($echo) {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $page_title;
    } else {
      return $page_title;
    }
  }
}

if (!function_exists('woocommerce_product_loop_start')) {
  /**
   * Output the start of a product loop. By default this is a UL.
   *
   * @param bool $echo Should echo?.
   * @return string
   */
  function woocommerce_product_loop_start($echo = true)
  {
    ob_start();
    wc_set_loop_prop('loop', 0);
    wc_get_template('loop/loop-start.php');
    $loop_start = apply_filters('woocommerce_product_loop_start', ob_get_clean());
    if ($echo) {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $loop_start;
    } else {
      return $loop_start;
    }
  }
}

if (!function_exists('woocommerce_product_loop_end')) {
  /**
   * Output the end of a product loop. By default this is a UL.
   *
   * @param bool $echo Should echo?.
   * @return string
   */
  function woocommerce_product_loop_end($echo = true)
  {
    ob_start();
    wc_get_template('loop/loop-end.php');
    $loop_end = apply_filters('woocommerce_product_loop_end', ob_get_clean());
    if ($echo) {
      // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      echo $loop_end;
    } else {
      return $loop_end;
    }
  }
}
if (!function_exists('woocommerce_template_loop_product_title')) {
  /**
   * Show the product title in the product loop. By default this is an H2.
   */
  function woocommerce_template_loop_product_title()
  {
    global $product;
    $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
    // echo '<a href="' . esc_url($link) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
    echo '<h2 class="' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '"><a href="' . esc_url($link) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">' . get_the_title() . '</a></h2>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
  }
}
if (!function_exists('woocommerce_template_loop_category_title')) {
  /**
   * Show the subcategory title in the product loop.
   *
   * @param object $category Category object.
   */
  function woocommerce_template_loop_category_title($category)
  {
?>
    <h2 class="woocommerce-loop-category__title">
      <?php
      echo esc_html($category->name);
      if ($category->count > 0) {
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo apply_filters('woocommerce_subcategory_count_html', ' <mark class="count">(' . esc_html($category->count) . ')</mark>', $category);
      }
      ?>
    </h2>
<?php
  }
}

if (!function_exists('woocommerce_template_loop_product_link_open')) {
  /**
   * Insert the opening anchor tag for products in the loop.
   */
  function woocommerce_template_loop_product_link_open()
  {
    global $product;
    $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
    echo '<a href="' . esc_url($link) . '" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">';
  }
}

if (!function_exists('woocommerce_template_loop_product_link_close')) {
  /**
   * Insert the closing anchor tag for products in the loop.
   */
  function woocommerce_template_loop_product_link_close()
  {
    echo '</a>';
  }
}

if (!function_exists('woocommerce_template_loop_category_link_open')) {
  /**
   * Insert the opening anchor tag for categories in the loop.
   *
   * @param int|object|string $category Category ID, Object or String.
   */
  function woocommerce_template_loop_category_link_open($category)
  {
    echo '<a href="' . esc_url(get_term_link($category, 'product_cat')) . '">';
  }
}

if (!function_exists('woocommerce_template_loop_category_link_close')) {
  /**
   * Insert the closing anchor tag for categories in the loop.
   */
  function woocommerce_template_loop_category_link_close()
  {
    echo '</a>';
  }
}

if (!function_exists('woocommerce_taxonomy_archive_description')) {
  /**
   * Show an archive description on taxonomy archives.
   */
  function woocommerce_taxonomy_archive_description()
  {
    if (is_product_taxonomy() && 0 === absint(get_query_var('paged'))) {
      $term = get_queried_object();
      if ($term && !empty($term->description)) {
        // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
        echo '<div class="term-description">' . wc_format_content($term->description) . '</div>';
      }
    }
  }
}

if (!function_exists('woocommerce_product_archive_description')) {
  /**
   * Show a shop page description on product archives.
   */
  function woocommerce_product_archive_description()
  {
    // Don't display the description on search results page.
    if (is_search()) {
      return;
    }
    if (is_post_type_archive('product') && in_array(absint(get_query_var('paged')), array(0, 1), true)) {
      $shop_page = get_post(wc_get_page_id('shop'));
      if ($shop_page) {
        $description = wc_format_content($shop_page->post_content);
        if ($description) {
          // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
          echo '<div class="page-description">' . $description . '</div>';
        }
      }
    }
  }
}

if (!function_exists('woocommerce_template_loop_add_to_cart')) {
  /**
   * Get the add to cart template for the loop.
   *
   * @param array $args Arguments.
   */
  function woocommerce_template_loop_add_to_cart($args = array())
  {
    global $product;
    if ($product) {
      $defaults = array(
        'quantity'   => 1,
        'class'      => implode(
          ' ',
          array_filter(
            array(
              'button',
              'product_type_' . $product->get_type(),
              $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
              $product->supports('ajax_add_to_cart') && $product->is_purchasable() && $product->is_in_stock() ? 'ajax_add_to_cart' : '',
            )
          )
        ),
        'attributes' => array(
          'data-product_id'  => $product->get_id(),
          'data-product_sku' => $product->get_sku(),
          'aria-label'       => $product->add_to_cart_description(),
          'rel'              => 'nofollow',
        ),
      );
      $args = apply_filters('woocommerce_loop_add_to_cart_args', wp_parse_args($args, $defaults), $product);
      if (isset($args['attributes']['aria-label'])) {
        $args['attributes']['aria-label'] = wp_strip_all_tags($args['attributes']['aria-label']);
      }
      wc_get_template('loop/add-to-cart.php', $args);
    }
  }
}

if (!function_exists('woocommerce_template_loop_product_thumbnail')) {
  /**
   * Get the product thumbnail for the loop.
   */
  function woocommerce_template_loop_product_thumbnail()
  {
    // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
    echo woocommerce_get_product_thumbnail('medium');
  }
}

if (!function_exists('woocommerce_template_loop_price')) {
  /**
   * Get the product price for the loop.
   */
  function woocommerce_template_loop_price()
  {
    wc_get_template('loop/price.php');
  }
}

if (!function_exists('woocommerce_template_loop_rating')) {
  /**
   * Display the average rating in the loop.
   */
  function woocommerce_template_loop_rating()
  {
    wc_get_template('loop/rating.php');
  }
}

if (!function_exists('woocommerce_show_product_loop_sale_flash')) {
  /**
   * Get the sale flash for the loop.
   */
  function woocommerce_show_product_loop_sale_flash()
  {
    wc_get_template('loop/sale-flash.php');
  }
}

if (!function_exists('woocommerce_get_product_thumbnail')) {
  /**
   * Get the product thumbnail, or the placeholder if not set.
   *
   * @param string $size (default: 'woocommerce_thumbnail').
   * @param int    $deprecated1 Deprecated since WooCommerce 2.0 (default: 0).
   * @param int    $deprecated2 Deprecated since WooCommerce 2.0 (default: 0).
   * @return string
   */
  function woocommerce_get_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0)
  {
    global $product;
    $image_size = apply_filters('single_product_archive_thumbnail_size', $size);
    return $product ? $product->get_image($image_size) : '';
  }
}

if (!function_exists('woocommerce_result_count')) {
  /**
   * Output the result count text (Showing x - x of x results).
   */
  function woocommerce_result_count()
  {
    if (!wc_get_loop_prop('is_paginated') || !woocommerce_products_will_display()) {
      return;
    }
    $args = array(
      'total'    => wc_get_loop_prop('total'),
      'per_page' => wc_get_loop_prop('per_page'),
      'current'  => wc_get_loop_prop('current_page'),
    );
    wc_get_template('loop/result-count.php', $args);
  }
}

if (!function_exists('woocommerce_catalog_ordering')) {
  /**
   * Output the product sorting options.
   */
  function woocommerce_catalog_ordering()
  {
    if (!wc_get_loop_prop('is_paginated') || !woocommerce_products_will_display()) {
      return;
    }
    $show_default_orderby    = 'menu_order' === apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby', 'menu_order'));
    $catalog_orderby_options = apply_filters(
      'woocommerce_catalog_orderby',
      array(
        'menu_order' => __('Default sorting', 'woocommerce'),
        'popularity' => __('Sort by popularity', 'woocommerce'),
        'rating'     => __('Sort by average rating', 'woocommerce'),
        'date'       => __('Sort by latest', 'woocommerce'),
        'price'      => __('Sort by price: low to high', 'woocommerce'),
        'price-desc' => __('Sort by price: high to low', 'woocommerce'),
      )
    );

    $default_orderby = wc_get_loop_prop('is_search') ? 'relevance' : apply_filters('woocommerce_default_catalog_orderby', get_option('woocommerce_default_catalog_orderby', ''));
    // phpcs:disable WordPress.Security.NonceVerification.Recommended
    $orderby = isset($_GET['orderby']) ? wc_clean(wp_unslash($_GET['orderby'])) : $default_orderby;
    // phpcs:enable WordPress.Security.NonceVerification.Recommended

    if (wc_get_loop_prop('is_search')) {
      $catalog_orderby_options = array_merge(array('relevance' => __('Relevance', 'woocommerce')), $catalog_orderby_options);

      unset($catalog_orderby_options['menu_order']);
    }

    if (!$show_default_orderby) {
      unset($catalog_orderby_options['menu_order']);
    }

    if (!wc_review_ratings_enabled()) {
      unset($catalog_orderby_options['rating']);
    }

    if (!array_key_exists($orderby, $catalog_orderby_options)) {
      $orderby = current(array_keys($catalog_orderby_options));
    }

    wc_get_template(
      'loop/orderby.php',
      array(
        'catalog_orderby_options' => $catalog_orderby_options,
        'orderby'                 => $orderby,
        'show_default_orderby'    => $show_default_orderby,
      )
    );
  }
}

if (!function_exists('woocommerce_pagination')) {
  /**
   * Output the pagination.
   */
  function woocommerce_pagination()
  {
    if (!wc_get_loop_prop('is_paginated') || !woocommerce_products_will_display()) {
      return;
    }
    $args = array(
      'total'   => wc_get_loop_prop('total_pages'),
      'current' => wc_get_loop_prop('current_page'),
      'base'    => esc_url_raw(add_query_arg('product-page', '%#%', false)),
      'format'  => '?product-page=%#%',
    );
    if (!wc_get_loop_prop('is_shortcode')) {
      $args['format'] = '';
      $args['base']   = esc_url_raw(str_replace(999999999, '%#%', remove_query_arg('add-to-cart', get_pagenum_link(999999999, false))));
    }
    wc_get_template('loop/pagination.php', $args);
  }
}
/**
 * ! Loop (END)
 */
