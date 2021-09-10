<?php
/*
Template Name: Estimating Costs
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
          <h2 class="text-center">How Much Will The Construction Cost?</h2>
          <h4>One of the most important questions you will have is how much will this house plan cost to build. Along with StartBuild, a company that uses a
            state of the art estimator and an up-to-date list of current costs for materials and labor, we provide a helpful guide called a Cost to Build Report.<br>
            This document determines the overall and detailed costs of building your specific house plan in your exact location.<br><br>

            A significant factor that has a large influence on building costs are the materials choices made by the customer. Options like granite counter
            tops, tile roofs, high-end windows, or more exotic hardwood flooring can dramatically change the cost per square foot to construct a home -
            sometimes by more than 100% over the initial estimate. StartBuild's Cost-to-Build Estimator allows you to see how much these changes will cost
            upfront - well before breaking ground - making cost overruns a thing of the past.<br><br>

            Once purchased for $29.95, StartBuild will send you an email with login credentials, giving you access to your personal Cost to Build estimate.
            You have 30 days to access and download this report.</h4>
        </div>
      </div>
    </section>
    <section class="why-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="ta-c">Our Features</h2>
          <div class="why-r">
            <div class="why-c">
              <img src="<?php tUrl() ?>/dist/img/qi.svg" alt="">
              <h3>Quality craftsmanship</h3>
              <p>We create new value and always provide
                high-quality products to enrich the everyday
                lives of our consumers. </p>
            </div>
            <div class="why-c">
              <img src="<?php tUrl() ?>/dist/img/hi.svg" alt="">
              <h3>Comfortable style</h3>
              <p>With so many types of house styles,
                narrowing the list down to your favorite
                can be overwhelming.</p>
            </div>
            <div class="why-c">
              <img src="<?php tUrl() ?>/dist/img/si.svg" alt="">
              <h3>Get help when you need it</h3>
              <p>Have questions? Call 1-800-950-2155. Our
                customer support is the best in the business.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </section>
</div>

<script>

</script>
<?php get_footer() ?>
