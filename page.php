<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bighills
 */

if (!defined('ABSPATH')) exit;
get_header(); ?>

<div class="page-single <?php echo $post->post_name; ?>">
  <?php if (is_page('home') || is_home()) { ?>
    <div class="container-fluid first-section bg" style="background-image: url('<?php if ( has_post_thumbnail()) {
   $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large');
   echo '<a href="' . $full_image_url&#91;0&#93; . '">';
   the_post_thumbnail('thumbnail');
   echo '</a>';
} else {echo get_site_url();}?>/wp-content/uploads/2021/09/Background.png');">
      <div class="row align-items-center">
        <div class="col">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="first-section-content">
                  <h1>Discover Your Next Home</h1>
                  <h2>We'll help you find the perfect plan</h2>
                  <p>Search nearly 40,000 floor plans and find your dream home today</p>
                  <div class="fb-block">
                    <button type="button" class="btn btn-light">Bedrooms</button>
                    <button type="button" class="btn btn-light">Bathrooms</button>
                    <button type="button" class="btn btn-light">Stories</button>
                    <button type="button" class="btn btn-light">Garages</button>
                  </div>
                  <button type="button" class="btn s-btn">SEARCH PLANS</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php } elseif (is_cart() || is_checkout()) { ?>
    <section class="container-fluid first-cart first-fluid" style="">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Secure Checkout</h2>
          <div class="cart-button"><a href="/cart" class="<?php if (is_cart()) {echo'active-page';} ?>">Shopping Cart</a><a href="/checkout" class="<?php if (is_checkout() && !is_order_received_page()) {echo'active-page';} ?>">Billing Details</a><a href="/cart" class="<?php if (is_order_received_page()) {echo'active-page';} ?>">Review Order</a></div>
        </div>
      </div>
    </section>
  <?php } else { ?>
    <section class="container-fluid first-fluid" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Header.png');">
      <div class="row">
        <div class="col-12 text-center">
          <h1><?php echo the_title(); ?></h1>
        </div>
      </div>
    </section>
  <?php } ?>

  <section class="content-section">
    <div class="page-content page">
      <?php the_content(); ?>
    </div>
  </section>
  <?php get_footer(); ?>
