<?php if (!defined('ABSPATH')) exit;

// ?
// add_action('woocommerce_HOOK', function () {}, 5);
// add_action('woocommerce_HOOK', function () {}, 200);
// !
// navigation
add_action( 'woocommerce_before_account_navigation', 'account_info_before' );
function account_info_before(){
  $current_user = wp_get_current_user();
  echo '<div class="container-fluid"><div class="row"><div class="col-lg-2"><div class="account-panel"><div class="account-info">
  <div><img src="';tUrl(); echo '/dist/img/acc.svg" alt="">
  </div>
  <div><span>'.$current_user->user_login.'</span><span>'.$current_user->user_email.'</span>
  </div>
  </div>
  ';
}

function wc_get_account_custom_menu_items() {
	$endpoints = array(
		'orders'          => get_option( 'woocommerce_myaccount_orders_endpoint', 'orders' ),
		'edit-account'    => get_option( 'woocommerce_myaccount_edit_account_endpoint', 'edit-account' ),
		'customer-logout' => get_option( 'woocommerce_logout_endpoint', 'customer-logout' ),
	);

	$items = array(
		'dashboard'       => __( 'Dashboard', 'woocommerce' ),
		'orders'          => __( 'Purchase History', 'woocommerce' ),
		'edit-account'    => __( 'Update Profile', 'woocommerce' ),
		'customer-logout' => __( 'Log Out', 'woocommerce' ),
	);

	// Remove missing endpoints.
	foreach ( $endpoints as $endpoint_id => $endpoint ) {
		if ( empty( $endpoint ) ) {
			unset( $items[ $endpoint_id ] );
		}
	}

	// Check if payment gateways support add new payment methods.
	if ( isset( $items['payment-methods'] ) ) {
		$support_payment_methods = false;
		foreach ( WC()->payment_gateways->get_available_payment_gateways() as $gateway ) {
			if ( $gateway->supports( 'add_payment_method' ) || $gateway->supports( 'tokenization' ) ) {
				$support_payment_methods = true;
				break;
			}
		}

		if ( ! $support_payment_methods ) {
			unset( $items['payment-methods'] );
		}
	}

	return apply_filters( 'wc_get_account_custom_menu_items', $items, $endpoints );
}

add_action( 'woocommerce_after_account_navigation', 'account_info_after' );
function account_info_after(){
  echo '</div></div><div class="col-lg-10">';
}


// content

add_action( 'woocommerce_account_content', function () {
  echo'';
}, 0);
add_action( 'woocommerce_account_content', function () {
  echo '</div></div></div>';
}, 200);


