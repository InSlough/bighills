<?php
/*
Template Name: Modifications
Template Post Type: page
*/

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
  <section class="container tabs_section">
    <div class="row">
      <div class="col-12">
      <div class="tab">
          <a href="/about-our-plans/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/1.svg" alt="">About Our Plans</button>
            <a href="/what-plans-include/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/2.svg" alt="">What Do Plans Include</a>
            <a href="/plan-options/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/3.svg" alt="">Plan Options</a>
            <a href="/local-building-codes/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/4.svg" alt="">Local Building Codes</a>
            <a href="#" class="tablinks"><img src="<?php tUrl() ?>/dist/img/5.svg" alt="">Finding The Right Plan</a>
            <a href="/modifications/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/6.svg" alt="">Modification Services</a>
            <a href="/the-purchase-agreement/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/7.svg" alt="">The Purchase Agreement</a>
            <a href="/estimating-costs/" class="tablinks"><img src="<?php tUrl() ?>/dist/img/8.svg" alt="">Estimating Costs</a>
        </div>


      </div>
    </div>
  </section>
  <section class="aop-content">
    <section class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">What Can You Get If You Choose Our Modifications</h2>
          <h4>Our company offers a service to modify EVERY plan on our website, making the options for your home plan limitless. Need to change your home
            plan from a garage in front of a side entrance garage? Looking to remodel your kitchen to fit your family's needs? We can make all of these
            changes and more. Follow these simple steps to get your free modification quote today!
          </h4>
        </div>
      </div>
    </section>
    <div class="bg-container" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/architectural-project-with-different-tools-composition-with-copy-space.jpg);">
      <section class="container aop-5-content-1">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">The Process In 4 Easy Steps</h2>
            <h3>Tell Us About The Modifications You Want</h3>
            <p>Once you've found a plan you want to modify, navigate to the plan detail page and click on the 'Modify This Plan' button. Next, you will describe the changes
              you want to make, using the form provided. It may be helpful to download the floor plan drawings and mark them up to show your changes visually. Marking
              up images is easy with this free online tool: JPG/PDF EDITOR. You can even merge several files together if needed.<br><br>

              Once you've filled in the form with a description of the changes and any marked up files, click send. It's that easy! We will send you a confirmation email
              letting you know we are working on a quote.<br><br>

              Files can also be sent using the confirmation email you receive, or by faxing the images and a copy of the confirmation email to 1-678-388-9651.
            </p>
            <h3>Review Your No-Obligation Quote</h3>
            <p>One of our designers will review your request and provide a custom quote within 3 business days. The quote will include the price for the modifications, plus
              the time frame needed to complete the changes.</p>
            <h3>Submit Payment & Hire A Designer</h3>
            <p>If you decide to accept the quote, you will submit payment for the plan and the modifications, and your designer will immediately get to work!</p>
            <h3>Receive Your Modified Plans</h3>
            <p>Custom modifications typically take 3-4 weeks to complete, but can vary depending on the volume and complexity of the changes. The exact time frame to
              complete your plans will be specified in the quote. Before sending the completed plans, the designer will send you a draft of the changes to ensure they are
              correct.</p>
          </div>
        </div>

      </section>
    </div>
    <section class="container aop-5-example">
      <div class="row">
        <div class="col-12">
          <h2>Example Modificatios</h2>
        </div>
        <div class="col-md-5 col-12">
            <h4><b>Modified Plan: 10001</b></h4>
            <p><b><i>Description:</i></b></p>
            <ul>
              <li>Extend garage to make it a 3 car garage</li>
              <li>Extend bedroom 2 so that it is aligned with the rear of the home</li>
              <li>Use extra space from bedroom 2 to enlarge the laundry room</li>
              <li>Modify kitchen cabinets and remove island</li>
            </ul>
          </div>
          <div class="col-md-5 offset-md-1 col-12">
           <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Modification_Pic_1.jpg" alt="">
          </div>
      </div>
    </section>
    <section class="container aop-5-reviews">
      <div class="row">
        <div class="col-12 text-center">
          <h2>Reviews</h2>
          <h3 style="font-weight: normal;">We've helped over 75,000 people shop for a new plan</h3>
        </div>
    </section>

  </section>
</div>

<script>

</script>
<?php get_footer() ?>
