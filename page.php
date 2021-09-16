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
    <div class="container-fluid first-section bg" style="background-image: url('<?php echo get_site_url();
                                                                                ?>/wp-content/uploads/2021/09/Background.png');">
      <div class="row align-items-center h-100">
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
  <?php } else { ?>
    <section class="container-fluid first-fluid" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Header.png');">
      <div class="row">
        <div class="col-12 text-center">
          <h1><?php echo the_title(); ?></h1>
        </div>
      </div>
    </section>
  <?php } ?>

  <section>
    <div class="page-content page">
      <?php the_content(); ?>
    </div>
  </section>
  <?php get_footer(); ?>
