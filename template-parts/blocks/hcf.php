<?php
/**
 * Block template file: template-parts/blocks/hcf.php
 *
 * Contact Form Block Template.
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

<section class="contact_home_section nm-p"  style="background-image: url('<?php the_field( 'img' ); ?>')">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2><?php the_field( 'title' ); ?></h2>
          <? echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
