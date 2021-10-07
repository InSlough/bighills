<?php

/**
 * Block template file: template-parts/blocks/hpb.php
 *
 * Home Post Block Block Template.
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


<section class="homs-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h2><?php the_field('title'); ?></h2>
        <p style="font-size:20px;"><?php the_field('text'); ?>
        </p>
      </div>
      <div class="col-md-6 col-12 jc-fe ai-c" style="display:flex;">
        <div> <a href="<?php the_field('button_link'); ?>"><button type="button" class="btn s-btn nc-b btn-hb">Browse More Plans</button></a></div>
      </div>
    </div>
    <div class="row">
      <?php if (have_rows('repeater')) :
        $index = 0;
        while (have_rows('repeater')) : the_row(); ?>
       <?php $post = get_sub_field( 'post' ); ?>
			<?php if ( $post ) : ?>
          <?  $index++;
            if ($index == 1) { ?>
              <div class="col-lg-8 col-12">
                <a href="<?php echo get_permalink($post); ?>">
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
              </a>
              </div>
            <?php  } ?>
            <?php if ($index == 2 || $index == 3) {
            if ($index == 2) { ?>
              <div class="col-lg-4 col-12">
              <? } ?>
              <a href="<?php echo get_permalink($post); ?>">
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
              </a>
                <? if ($index == 3) { ?>
                </div>
              <? } ?>
             <?php } ?>

            <?php if ($index == 4 || $index == 5) { ?>
              <div class="col-lg-6 col-12">
                <a href="<?php echo get_permalink($post); ?>">
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
                </a>
              </div>
            <? } ?>

          <?php endif; ?>
        <?php endwhile; ?>
      <?php else : ?>
        <?php // no rows found
        ?>
      <?php endif; ?>
    </div>
  </div>
</section>
