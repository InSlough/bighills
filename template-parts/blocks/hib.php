<?php

/**
 * Block template file: template-parts/blocks/hib.php
 *
 * Home Img Block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-img-block-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-home-img-block';
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






<section id="<?php echo esc_attr($id); ?>" class="sp-section <?php echo esc_attr($classes); ?>">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h2><?php the_field('title'); ?></h2>
        <p style="font-size:20px;"><?php the_field('text'); ?></p>
      </div>
      <div class="col-md-6 col-12 jc-fe ai-c" style="display:flex;">
        <div> <a href="<?php the_field('button-url'); ?>"><button type="button" class="btn s-btn nc-b">see more plans</button></a></div>
      </div>

    </div>
    <div class="row img-block">
      <?php if (have_rows('img')) : ?>
        <?php while (have_rows('img')) : the_row(); ?>
          <?php if (get_sub_field('image')) : ?>
            <div class="col-lg-6 col-12">
              <img src="<?php the_sub_field('image'); ?>" />
            </div>
          <?php endif ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php // no rows found
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>
