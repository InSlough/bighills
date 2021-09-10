<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bighills
 */

if (!defined('ABSPATH')) exit; ?>

<div class="post-single <?php echo $post->post_name; ?>">
  <section class="container-fluid first-fluid" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Header.png');">
    <div class="row">
      <div class="col-12 text-center">
        <h1>News</h1>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 style="margin-top: 0;">
            <?php the_title(); ?>
          </h2>
          <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
        </div>
      </div>

      <div class="row post-content">
        <div class="col-12">
          <div class="post-info">
          <div class="meta-p"><?php echo get_the_date(); if (get_the_date()!=9 && the_author()!=0) {echo' | ';} the_author() ?></div>
          </div>
        </div>
        <?php $permalink = get_the_permalink() ?>
        <div class="col-12 post-share">
          <a href="https://facebook.com/sharer/sharer.php?u=<?php echo $permalink ?>">
            <img src="<?php tUrl(); ?>/img/f.svg" alt="">
          </a>
          <a href="https://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $permalink ?>">
            <img src="<?php tUrl(); ?>/img/in.svg" alt="">
          </a>
          <a href="https://twitter.com/intent/tweet/?url=<?php echo $permalink ?>">
            <img src="<?php tUrl(); ?>/img/tv.svg" alt="">
          </a>
        </div>
        <div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
  // if ('' != locate_template('template-parts/contact_form_wrapper.php')) {
  //   get_template_part('template-parts/contact_form_wrapper');
  // }
  ?>
  <div class="container">
    <div class="row">
      <?php
      $args = array(
        'posts_per_page' => 3
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) {
        $index = 0;
        while ($query->have_posts()) {
          $index++;
          $query->the_post();
      ?>

          <div class="col-lg-4 col-12">
            <div class="post-block">
            <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
              <div class="content">
                <h3><?php the_title(); ?></h3>
                <?php the_excerpt(); ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read the story</a>
              </div>
            </div>
          </div>
          <?php

          ?>

      <?php
        }
      } else {
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</div>
