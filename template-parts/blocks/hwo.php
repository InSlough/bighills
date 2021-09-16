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

// Create id attribute allowing for custom "anchor" value.
$id = 'offer-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-offer';
if (!empty($block['className'])) {
  $classes .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
  <?php echo '#' . $id; ?> {
    /* Add styles that use ACF values here */
  }
</style>

<section id="<?php echo esc_attr($id); ?>" class="wwo_section nm-p <?php echo esc_attr($classes); ?>" style="background-image: url('<?php the_field('image'); ?>');">
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
