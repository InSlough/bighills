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


if (!empty($block['align'])) {
  $classes .= ' align' . $block['align'];
}
?>
<section class="why-section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="ta-c"><?php the_field('title'); ?></h2>
        <div class="why-r row">
          <?php if (have_rows('repeater')) : ?>
            <?php while (have_rows('repeater')) : the_row(); ?>
              <div class="why-c col">
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
