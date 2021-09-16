<?php
/**
 * Block template file: template-parts/blocks/hr.php
 *
 * Reviews Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */


if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<section class="container reviews_section">
    <div class="row">
      <div class="col-12">
        <h2><?php the_field( 'title' ); ?></h2>
        <p style="font-size:20px;"><?php the_field( 'text' ); ?></p>
      </div>
    </div>
  </section>
