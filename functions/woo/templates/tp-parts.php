<?php if (!defined('ABSPATH')) exit;


// ? change sale flash
if (!function_exists('woocommerce_show_product_loop_sale_flash')) {
  function woocommerce_show_product_loop_sale_flash()
  {
    // wc_get_template('loop/sale-flash.php');
    global $post, $product;
    if ($product->is_on_sale())
      echo apply_filters('woocommerce_sale_flash', '<span class="onsale">' . esc_html__('Sale',) . '</span>', $post, $product);
  }
}
if (!function_exists('woocommerce_show_product_sale_flash')) {
  function woocommerce_show_product_sale_flash()
  {
    // wc_get_template('single-product/sale-flash.php');
    global $post, $product;
    if ($product->is_on_sale())
      echo apply_filters('woocommerce_sale_flash', '<span class="onsale">' . esc_html__('Sale!', 'woocommerce') . '</span>', $post, $product);
  }
}
// !

// ? override woo wrappers
if (!function_exists('woocommerce_output_content_wrapper')) {
  function woocommerce_output_content_wrapper()
  {
    // wc_get_template('global/wrapper-start.php');
    echo '<div class="shop">';
    if (function_exists('yoast_breadcrumb') && !is_shop()) yoast_breadcrumb('<section class="container breadcrumbs">', '</section>');
    echo '<section><div class="container">';
  }
}
if (!function_exists('woocommerce_output_content_wrapper_end')) {
  function woocommerce_output_content_wrapper_end()
  {
    // wc_get_template('global/wrapper-end.php');
    echo '</div></section></div>';
  }
}

if (!function_exists('body_container')) {
  function body_container()
  {
    if (is_woocommerce()) {
      $classes[] = 'container';
    }
  }
}

if (!function_exists('before_container_cart')) {
  function before_container_cart()
  {
    echo '<div class="container cart-content"><div class="row"><div class="col-12">';
  }
  function after_container_cart()
  {
    echo '</div></div></div>';
  }
}
if (!function_exists('before_container_checkout')) {
  function before_container_checkout()
  {
    echo '<div class="container checkout-content"><div class="row"><div class="col-12">';
  }
  function after_container_checkout()
  {
    echo '</div></div></div>';
  }
}
if (!function_exists('after_container_billing_checkout')) {
  function after_container_billing_checkout()
  {

    echo '<div class="col-12 col-lg-6 italic-text"><span>Your email and phone number will only be used to deliver your receipt or
    resolve problems with your order. Your information will never be used for
    marketing purposes without your consent.</span></div><div class="col-12"><h5 class="text-center">Please make sure your billing address matches your credit card.<h5></div>';
  }
}
if (!function_exists('before_shipping_title')) {
  function before_shipping_title()
  {

    echo '<h3>
    Shipping Details
    </h3><div>';
  }
}
if ( ! function_exists( 'new_woocommerce_checkout_payment' ) ) {

	/**
	 * Output the Payment Methods on the checkout.
	 */
	function new_woocommerce_checkout_payment() {
		if ( WC()->cart->needs_payment() ) {
			$available_gateways = WC()->payment_gateways()->get_available_payment_gateways();
			WC()->payment_gateways()->set_current_gateway( $available_gateways );
		} else {
			$available_gateways = array();
		}

		wc_get_template(
			'checkout/payment.php',
			array(
				'checkout'           => WC()->checkout(),
				'available_gateways' => $available_gateways,
				'order_button_text'  => apply_filters( 'woocommerce_order_button_text', __( 'Place order', 'woocommerce' ) ),
			)
		);
	}
}

if (!function_exists('before_container_cart_table')) {
  function before_container_cart_table()
  {
    echo '<h3>Shopping Cart</h3>';
  }
}

// !
