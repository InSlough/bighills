<?php
if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header();
?>

<div class="page-single <?php echo $post->post_name; ?>">
  <section class="container-fluid first-fluid" style="background-image: url('http://bhfp.local/wp-content/uploads/2021/09/Header.png');">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
  </section>
  <section class="contact-info container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 contact-col">
        <img src="<?php tUrl(); ?>/dist/img/address.svg" alt="">
        <div class="contact-text">
          <h3>Address</h3>
          <p>1797 Lance Rd,<br>
            Arden, NC 28704</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 contact-col">
        <img src="<?php tUrl(); ?>/dist/img/email.svg" alt="">
        <div class="contact-text">
          <h3>Phone</h3>
          <p>(828) 220-4400</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-12 contact-col">
        <img src="<?php tUrl(); ?>/dist/img/phone.svg" alt="">
        <div class="contact-text">
          <h3>Email</h3>
          <p>contact@bighillsfloorplans.com</p>
        </div>
      </div>
    </div>
  </section>

  <div class="bg-container contact-feedback">
  <section class="container">
  <div class="row">
    <div class="col-12">
      <h3 class="text-center">Feedback Form</h3>
      <? echo do_shortcode('[contact-form-7 id="100" title="Contact page"]'); ?>
    </div>
  </div>
  </section>
  </div>

</div>

<?php get_footer() ?>
