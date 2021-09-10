<?php

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="page <?php echo $post->post_name; ?>">
  <section class="container-fluid first-fluid" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Header.png');">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="container about-first">
    <div class="row">
      <div class="col-lg-5 col-12">
        <h2>Who We Are</h2>
        <h4>Confident, talented and constantly tested, we are a
          company specializing in high quality home projects that
          have been bought and built in the state of North Carolina
          in the US. Our highly experienced business invites you to
          create with us, using your vision and innovative spirit to
          design your dream home. America's best home plans and
          the American dream of home ownership are two ideas
          intertwined like apple pie and the American flag.</h4>
      </div>
      <div class="col-lg-5 offset-2 col-12">
        <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Who-We-Are-Pic.jpg" alt="">
      </div>
    </div>
  </section>
  <div class="bg-container" style="background: #EDEDED;">
    <section class="container about-last">
      <div class="row">
        <div class="col-lg-5 col-12">
          <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Our-Vision-Pic-1.jpg" alt="">
        </div>
        <div class="col-lg-5 offset-2 col-12">
          <h2>Our Vision</h2>
          <h4>We partner with hundreds of architects and designers to
            capture the imaginations and pioneering spirit that define
            the dream of owning a home. Our designs are easy to read,
            versatile and affordable. This creative spirit helps our
            clients discover the perfect home plan, giving them full
            choice and control over the outcome of their projects.
            Our extensive collection of home plans suits any lifestyle,
            with over 1,000 home plans, easy to view and available as
            you begin the process of building your dream home.</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-7 col-12">
          <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Our-Vision-Pic-2.jpg" alt="">
        </div>
        <div class="col-lg-5 col-12">
          <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Our-Vision-Pic-3.jpg" alt="">
        </div>
      </div>
    </section>
  </div>

  </section>
</div>

<script>

</script>
<?php get_footer() ?>
