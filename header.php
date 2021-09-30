<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bighills
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="http://fonts.cdnfonts.com/css/gotham-pro?styles=24950,24948,24951,24952,14946,24949,24953" rel="stylesheet">
  <style>
    @import url('http://fonts.cdnfonts.com/css/gotham-pro?styles=24950,24948,24951,24952,14946,24949,24953');
  </style>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php
                              $extra_classes = '';
                              if (is_page('home')) $extra_classes .= " page-home";
                              // if (is_page('contacts')) $extra_classes .= " page-contacts";
                              if (is_404()) $extra_classes .= " page-404";
                              if ($extra_classes) echo ' class="' . $extra_classes . '" ';

                              $site_name = esc_html(get_bloginfo('name'));
                              ?>>
  <div id="site-loader" data-nosnippet style="display: none;">
    <?php if (0) : ?>
      <img class="l" src="<?php tUrl('/dist/img/bb.svg'); ?>" alt="<?php echo $site_name; ?>" />
    <?php endif; ?>
    <div class="sl-progress">
      <span></span>
    </div>
    <noscript>
      <div>Your browser does not support or is blocking scripts, loading is not possible.</div>
    </noscript>
  </div>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'bighills'); ?></a>

    <header class="site-header" role="banner" style="display: none;">
      <div class="container">
        <div class="row">
          <div class="col-auto">
            <?php
            if (has_custom_logo()) {
              the_custom_logo();
            } elseif ($site_name) {
            ?>
              <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php esc_attr_e('Home',); ?>" rel="home">
                  <?php echo esc_html($site_name); ?>
                </a>
              </h1>
            <?php } ?>
          </div>
          <div class="col">
            <nav role="navigation">
              <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>
            </nav>
          </div>
          <div class="col-auto btn-hblock">
            <a class="btn-acc" href="<?php echo wc_get_page_permalink('myaccount') ?>"><img src="<?php tUrl() ?>/dist/img/acc-14.svg" alt=""><span>My account</span></a>
            <!-- <a href="<?php //echo get_site_url() ?>/cart" class="btn-cart">
              <img src="<?php //tUrl() ?>/dist/img/shopping-cart.svg" alt="">
            </a> -->
            <?php echo do_shortcode('[floating_cart_wop class="btn-cart"]') ?>
          </div>
          <div class="col-auto">
            <button aria-label="Menu" class="menu-icon">
              <div class="lines"></div>
              <div class="lines"></div>
              <div class="lines"></div>
            </button>
          </div>
        </div>
      </div>

      <nav class="nav">
        <div class="nav__content">
          <?php wp_nav_menu(array('theme_location' => 'main_menu')); ?>


        </div>
      </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

    <div class="viewport">
      <div class="scroll-container">

        <main id="main-content" role="main" data-page-slug="<?php echo $post->post_name; ?>">
