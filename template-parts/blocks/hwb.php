<?php

/**
 * Block template file: template-parts/blocks/hwb.php
 *
 * Home Why Block Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'home-why-block-' . $block['id'];
if (!empty($block['anchor'])) {
  $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-home-why-block';
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

<section id="<?php echo esc_attr($id); ?>" class="why-section <?php echo esc_attr($classes); ?>">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="ta-c"><?php the_field('title'); ?></h2>
        <div class="why-r">
          <?php if (have_rows('repeater')) : ?>
            <?php while (have_rows('repeater')) : the_row(); ?>
              <div class="why-c">
                <?php if (get_sub_field('img')) : ?>
                  <img src="<?php the_sub_field('img'); ?>" />
                <?php endif ?>
                <h3><?php the_sub_field('h'); ?></h3>
                <p><?php the_sub_field('text'); ?></p>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <?php // no rows found
            ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
