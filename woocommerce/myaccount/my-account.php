<?php

/**
 * My Account page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account.php.
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

/**
 * My Account navigation.
 *
 * @since 2.6.0
 */
do_action('woocommerce_account_navigation'); ?>

<div class="woocommerce-MyAccount-content">
  <div class="myaccount_content__title">
    <?php
    global $wp;

    if (!empty($wp->query_vars)) {
      foreach ($wp->query_vars as $key => $value) {
        // Ignore pagename param.
        if ('pagename' === $key) {
          continue;
        }

        if ($key == 'orders') {
          echo '<h2>Purchase History</h2>
            <span> </span>';
        } elseif ($key == 'edit-account') {
          echo '<h2>My Account</h2>
            <span>The email address and password entered below are used to log into this account. Order notifications will also be delivered to this email address.</span>';
        } else {
          echo '<h2>Dashboard</h2>
            <span>Account Overview</span>';
        }
      }
    }
    ?>
  </div>
  <?php

  do_action('woocommerce_account_content');
  ?>
</div>
