<?php

/**
 * Block template file: template-parts/blocks/hwo.php
 *
 * Offer Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>



<section class="wwo_section nm-p>" style="background-image: url('<?php the_field('image'); ?>');">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center"><?php the_field('title'); ?></h2>
        <div>
          <div class="blur-o"></div>
          <p><?php the_field('text'); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>
