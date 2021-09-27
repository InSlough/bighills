<?php

/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */
?>
<?php
defined('ABSPATH') || exit;
do_action('woocommerce_before_cart'); ?>
<?php if (is_user_logged_in()) {
  if (sizeof(WC()->cart->get_cart()) > 0) { ?>
    <form class="woocommerce-cart-form" action="<?php echo esc_url(wc_get_cart_url()); ?>" method="post">
      <?php do_action('woocommerce_before_cart_table'); ?>

      <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">

        <tbody>
          <?php do_action('woocommerce_before_cart_contents'); ?>

          <?php
          foreach (WC()->cart->get_cart() as $cart_item_key => $cart_item) {
            $_product   = apply_filters('woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key);
            $product_id = apply_filters('woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key);

            if ($_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters('woocommerce_cart_item_visible', true, $cart_item, $cart_item_key)) {
              $product_permalink = apply_filters('woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink($cart_item) : '', $cart_item, $cart_item_key);
          ?>
              <tr class="woocommerce-cart-form__cart-item order <?php echo esc_attr(apply_filters('woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key)); ?>">

                <td class="product-remove">
                  <?php
                  echo apply_filters( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    'woocommerce_cart_item_remove_link',
                    sprintf(
                      '<a href="%s" class="remove-cart" aria-label="%s" data-product_id="%s" data-product_sku="%s">Remove</a>',
                      esc_url(wc_get_cart_remove_url($cart_item_key)),
                      esc_html__('Remove this item', 'woocommerce'),
                      esc_attr($product_id),
                      esc_attr($_product->get_sku())
                    ),
                    $cart_item_key
                  );
                  ?>
                </td>

                <td class="product-thumbnail">
                </td>

                <td class="product-name" data-title="<?php esc_attr_e('Product', 'woocommerce'); ?>">
                </td>
              </tr>
              <tr class="order content-one">
                <?php

                echo '<td class="woocommerce-orders-table__cell-order-plan">Plan 1001</td>';

                echo '<td class="woocommerce-orders-table__cell-order-invoice"><a href="#" class="plan-pdf"><h4>PDF</h4></a><p>Slab Foundation</p></td>';

                echo '<td class="woocommerce-orders-table__cell-order-total"><h4>';
                echo apply_filters('woocommerce_cart_item_price', WC()->cart->get_product_price($_product), $cart_item, $cart_item_key);
                echo '</h4><p>$0.00</p></td>';
                ?>

              </tr>
              <tr class="order content-two">
                <?php
                echo '<td class="woocommerce-orders-table__cell-order-price">
            <div><span>Subtotal:</span><span>';
                echo apply_filters('woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal($_product, $cart_item['quantity']), $cart_item, $cart_item_key);
                echo '</span></div>
            <div><span>Shipping:</span><span>';
                echo WC()->cart->get_cart_shipping_total();
                echo '</span></div><div><span>Total:</span><span>$';
                echo WC()->cart->total;
                echo '</span></div></td>';
                ?>
              </tr>

          <?php
            }
          }
          ?>

          <?php do_action('woocommerce_cart_contents'); ?>

          <tr>
            <td colspan="6" class="actions">
              <?php if (wc_coupons_enabled()) { ?>
                <div class="coupon">
                  <span>Promo:</span>
                  <label for="coupon_code"><?php esc_html_e('Coupon:', 'woocommerce'); ?></label><input type="text" name="coupon_code" class="input-text" id="coupon_code" value="" placeholder="<?php esc_attr_e('', 'woocommerce'); ?>" /> <button type="submit" class="button" name="apply_coupon" value="<?php esc_attr_e('Apply coupon', 'woocommerce'); ?>"><?php esc_attr_e('Apply', 'woocommerce'); ?></button>
                  <?php do_action('woocommerce_cart_coupon'); ?>
                </div>
              <?php } ?>

              <!-- <button type="submit" class="button btn s-btn" name="update_cart" value="<? //php esc_attr_e('Update cart', 'woocommerce');
                                                                                            ?>"><?php //esc_html_e('Update cart', 'woocommerce');
                                                                                                                                                  ?></button> -->

              <?php //do_action('woocommerce_cart_actions');
              ?>
              <div class="wc-proceed-to-checkout">
                <?php do_action('woocommerce_proceed_to_checkout'); ?>
              </div>
              <?php wp_nonce_field('woocommerce-cart', 'woocommerce-cart-nonce'); ?>
            </td>
          </tr>

          <?php do_action('woocommerce_after_cart_contents'); ?>
        </tbody>
      </table>
      <?php do_action('woocommerce_after_cart_table'); ?>
    </form>

    <?php do_action('woocommerce_before_cart_collaterals'); ?>

    <div class="cart-collaterals">

      <?php
      /**
       * Cart collaterals hook.
       *
       * @hooked woocommerce_cross_sell_display
       * @hooked woocommerce_cart_totals - 10
       */
      //do_action('woocommerce_cart_collaterals');

      ?>
    </div>

<?php do_action('woocommerce_after_cart');
  }
} else {
  echo '<div class="no-login"><div><a href="' . wc_get_page_permalink('myaccount') . '">Login </a>to apply account discounts and save your transaction history</div></div>';
} ?>
