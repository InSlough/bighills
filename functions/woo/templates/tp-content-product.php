<?php if (!defined('ABSPATH')) exit;

// ?
// add_action('woocommerce_HOOK', function () {}, 5);
// add_action('woocommerce_HOOK', function () {}, 200);
// !

// ? add container for shop_loop_item - image container
add_action('woocommerce_before_shop_loop_item', function () {
  echo '<div class="products-item-image-container">';
}, 3);
add_action('woocommerce_before_shop_loop_item_title', function () {
  echo '</div>';
}, 205);
// !

// ? add container for shop_loop_item - link & image
add_action('woocommerce_before_shop_loop_item', function () {
  echo '<div class="products-item-image">';
}, 4);
add_action('woocommerce_before_shop_loop_item_title', function () {
  echo '</div>';
}, 28);
// !

// ? add container for shop_loop_item - controls
add_action('woocommerce_before_shop_loop_item_title', function () {
  echo '<div class="products-item-controls"><div>';
}, 30);
add_action('woocommerce_after_shop_loop_item', function () {
  echo '</div></div>';
}, 30);
// !

// ? add container for shop_loop_item_title - info container
add_action('woocommerce_after_shop_loop_item', function () {
  echo '<div class="products-item-info-container">';
}, 40);
add_action('woocommerce_after_shop_loop_item', function () {
  echo '</div>';
}, 200);
// !

// ? add container for shop_loop_item_title - title
add_action('woocommerce_after_shop_loop_item', function () {
  echo '<div class="products-item-title">';
}, 49);
add_action('woocommerce_after_shop_loop_item', function () {
  echo '</div>';
}, 51);
// !

// ? add container for shop_loop_item_title - info
add_action('woocommerce_after_shop_loop_item', function () {
  echo '<div class="products-item-info">';
}, 54);
add_action('woocommerce_after_shop_loop_item', function () {
  echo '</div>';
}, 56);
// !

// ? add custom short descriptions
/* add_action('woocommerce_shop_loop_item_title', function () {
  echo '<p class="woocommerce-loop-product__short-desc">'.get_field('prod-short-desc', $post->ID).'</p>';
}, 20); */
// !
