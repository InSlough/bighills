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

// Create id attribute allowing for custom "anchor" value.
$id = 'reviews-' . $block['id'];
if ( ! empty($block['anchor'] ) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$classes = 'block-reviews';
if ( ! empty( $block['className'] ) ) {
    $classes .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $classes .= ' align' . $block['align'];
}
?>

<style type="text/css">
	<?php echo '#' . $id; ?> {
		/* Add styles that use ACF values here */
	}
</style>

<section id="<?php echo esc_attr( $id ); ?>" class="container reviews_section <?php echo esc_attr( $classes ); ?>">
    <div class="row">
      <div class="col-12">
        <h2><?php the_field( 'title' ); ?></h2>
        <p style="font-size:20px;"><?php the_field( 'text' ); ?></p>
      </div>
    </div>
  </section>
