<?php

/**
 * Empty cart page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart-empty.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.5.0
 */

defined('ABSPATH') || exit;

/*
 * @hooked wc_empty_cart_message - 10
 */
do_action('woocommerce_cart_is_empty');

if (wc_get_page_id('shop') > 0) :
  do_action('woocommerce_before_cart');
  if (is_user_logged_in()) {
?>

    <div class="no-login">
      <span color="#BD3A3A">There are no plans in your cart. Please choose a plan if you need it.</span><a href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">

        <?php
        /**
         * Filter "Return To Shop" text.
         *
         * @since 4.6.0
         * @param string $default_text Default text.
         */
        echo esc_html(apply_filters('woocommerce_return_to_shop_text', __('CHOOSE A PLAN', 'woocommerce')));
        ?>
      </a>
    </div> <?php } else { ?>
    <div class="no-login">
      <div><a href="<?php echo wc_get_page_permalink('myaccount'); ?>">Login </a>to apply account discounts and save your transaction history</div>
      <span color="#BD3A3A">There are no plans in your cart. Please choose a plan if you need it.</span><a href="<?php echo esc_url(apply_filters('woocommerce_return_to_shop_redirect', wc_get_page_permalink('shop'))); ?>">

        <?php
            /**
             * Filter "Return To Shop" text.
             *
             * @since 4.6.0
             * @param string $default_text Default text.
             */
            echo esc_html(apply_filters('woocommerce_return_to_shop_text', __('CHOOSE A PLAN', 'woocommerce')));
        ?>
      </a>
    </div>
<?php }
          do_action('woocommerce_after_cart');
        endif; ?>
