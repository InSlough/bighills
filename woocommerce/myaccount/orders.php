<?php

/**
 * Orders
 *
 * Shows orders on the account page.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/orders.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

do_action('woocommerce_before_account_orders', $has_orders); ?>
<div class="woo_content__block woo_content__block_<?php echo subpage_link_class(); ?>">
  <?php if ($has_orders) : ?>
    <div>
      <h4>Order history</h4>
    </div>

    <table class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">

      <tbody>
        <?php
        foreach ($customer_orders->orders as $customer_order) {
          $order      = wc_get_order($customer_order); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited
          $item_count = $order->get_item_count() - $order->get_item_count_refunded();
          do_action('woocommerce_view_order', $order_id);
        ?>

          <tr class="woocommerce-orders-table__row woocommerce-orders-table__row--status-<?php echo esc_attr($order->get_status()); ?> order">
            <?php foreach (wc_get_account_orders_columns() as $column_id => $column_name) :
              if (strcasecmp($column_name, 'status') !== 0 && strcasecmp($column_name, 'total') !== 0) {
            ?>
                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-<?php echo esc_attr($column_id); ?>" data-title="<?php echo esc_attr($column_name); ?>">
                  <?php if (has_action('woocommerce_my_account_my_orders_column_' . $column_id)) : ?>
                    <?php do_action('woocommerce_my_account_my_orders_column_' . $column_id, $order); ?>

                  <?php elseif ('order-date' === $column_id) : ?>
                    <time datetime="<?php echo esc_attr($order->get_date_created()->date('n/j/Y')); ?>"><?php echo esc_html(wc_format_datetime($order->get_date_created(), 'n/j/Y')); ?></time>

                  <?php elseif ('order-number' === $column_id) : ?>
                    <?php echo esc_html(_x('Order ', 'hash before order number', 'woocommerce') . $order->get_order_number()); ?>

                  <?php elseif ('order-actions' === $column_id) : ?>
                    <?php
                    $actions = wc_get_account_orders_actions($order);

                    if (!empty($actions)) {
                      foreach ($actions as $key => $action) {
                        if ($key == 'view') {
                          echo '<h4 class="woocommerce-button button ' . sanitize_html_class($key) . '">' . esc_html($action['name']) . '</h4>';
                        }
                      }
                    }
                    ?>
                  <?php endif; ?>
                </td>
            <?php
              }
            endforeach;

            ?>
          </tr>
          <tr class="order content-one">
            <?php


            foreach ($order->get_items() as $item_key => $item) :
              echo '<td class="woocommerce-orders-table__cell-order-plan">Plan 1001</td>';
              $actions = wc_get_account_orders_actions($order);

              if (!empty($actions)) {
                foreach ($actions as $key => $action) {
                  if ($key == 'invoice') {

                    echo '<td class="woocommerce-orders-table__cell-order-invoice"><a href="' . esc_url($action['url']) . '" class="' . sanitize_html_class($key) . '"><h4>PDF</h4></a><p>Slab Foundation</p></td>';
                  }
                }
              }
              echo '<td class="woocommerce-orders-table__cell-order-total"><h4>$' . $item->get_total() . '.00</h4><p>$0.00</p></td>';
            ?>

          </tr> <?php
              endforeach; ?>

        <tr class="order content-two">

          <?php

          foreach ($order->get_items() as $item_key => $item) :
            echo '<td class="woocommerce-orders-table__cell-order-price">
            <div><span>Subtotal:</span><span>' . $item->get_subtotal() . '</span></div>
            <div><span>Shipping:</span><span>' . $order->get_total_shipping() . '</span></div>
            <div><span>Total:</span><span>'; if ($item->get_total() == 0) {
              echo 'Free!';
            } else {
             echo $item->get_total();
            }
            echo '</span></div></td>';

          ?>

        </tr>

        <?php
            endforeach;
          }


              ?>
      </tbody>
    </table>

    <?php do_action('woocommerce_before_account_orders_pagination'); ?>

    <?php if (1 < $customer_orders->max_num_pages) : ?>
      <div class="woocommerce-pagination woocommerce-pagination--without-numbers woocommerce-Pagination">
        <?php if (1 !== $current_page) : ?>
          <a class="woocommerce-button woocommerce-button--previous woocommerce-Button woocommerce-Button--previous button" href="<?php echo esc_url(wc_get_endpoint_url('orders', $current_page - 1)); ?>"><?php esc_html_e('Previous', 'woocommerce'); ?></a>
        <?php endif; ?>

        <?php if (intval($customer_orders->max_num_pages) !== $current_page) : ?>
          <a class="woocommerce-button woocommerce-button--next woocommerce-Button woocommerce-Button--next button" href="<?php echo esc_url(wc_get_endpoint_url('orders', $current_page + 1)); ?>"><?php esc_html_e('Next', 'woocommerce'); ?></a>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  <?php else : ?>
    <div class="woocommerce-message woocommerce-message--info woocommerce-Message woocommerce-Message--info woocommerce-info">
      Orders you place with Big Hills Floor Plans will be available here.
    </div>
  <?php endif; ?>
</div>
<?php do_action('woocommerce_after_account_orders', $has_orders); ?>
