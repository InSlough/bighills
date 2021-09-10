<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bighills
 */
?>

<div class="page-archive">
  <section class="container-fluid first-fluid" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Header.png');">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php echo get_the_title() ?></h1>
      </div>
    </div>
  </section>
  <section>
    <div class="container">
      <div class="row">
        <?php
        $args = array(
          'posts_per_page' => 9
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          while ($query->have_posts()) {
            $query->the_post();
        ?>
            <div class="col-lg-4 col-12">
              <div class="post-block">
                <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                <div class="content">
                  <?php echo $data ?>
                  <h3><?php the_title(); ?></h3>
                  <div class="meta-p"><?php echo the_date(); if (get_the_date()!=0 && the_author()!=0) {echo' | ';} echo the_author(); ?></div>
                  <?php the_excerpt(); ?>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">Read the story</a>
                </div>
              </div>
            </div>
        <?php    }
        } else {
        }

        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
</div>

<?php wp_link_pages(); ?>

<?php
global $wp_query;
if ($wp_query->max_num_pages > 1) :
?>
  <nav class="pagination" role="navigation">
    <?php /* Translators: HTML arrow */ ?>
    <div class="nav-previous"><?php next_posts_link(sprintf(__('%s older', ), '<span class="meta-nav">&larr;</span>')); ?></div>
    <?php /* Translators: HTML arrow */ ?>
    <div class="nav-next"><?php previous_posts_link(sprintf(__('newer %s', ), '<span class="meta-nav">&rarr;</span>')); ?></div>
  </nav>
<?php endif; ?>
</div>
<?php
