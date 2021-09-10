<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bighills
 */


if (!defined('ABSPATH')) exit;

get_header();

if (is_404()) {
  get_template_part('template-parts/404');
} elseif (is_page('wishlist')) {
  // get_template_part('template-parts/wishlist');
} elseif (is_page('news')) {
  get_template_part('template-parts/archive');
} elseif (is_page('discounts')) {
  // get_template_part('template-parts/discounts');
} elseif (is_page('checkout')) {
  // get_template_part('template-parts/checkout');
} elseif (is_page('home') || is_home()) {
  get_template_part('template/home');
} elseif (get_post_type() === 'post') {
  get_template_part('single');
} elseif (is_singular()) {
  get_template_part('page');
} elseif (is_archive()) {
  get_template_part('template-parts/archive');
 } elseif (is_search()) {
  get_template_part('search');
} else {
  get_template_part('template-parts/404');
}

get_footer();
