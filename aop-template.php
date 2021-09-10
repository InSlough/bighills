<?php
/*
Template Name: AOP
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
          <h2 class="text-center">Your Dream Home Starts With Us</h2>
          <h4>Building a new home can be daunting and frustrating, especially when you have a million questions and don't know where to find the answers.
            We're here to relieve some of that stress by starting the home building process on the right foot.</h4>
        </div>
      </div>
    </section>
    <div class="bg-container" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/white-wall-empty-room-with-plants-on-a-floor-3d-rendering.png');">
      <section class="container aop-content-1">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">Common Questions</h2>
          </div>

          <div class="col-md-5 col-12">
            <h3>How Is Square Footage Calculated?</h3>
            <p>Square footage calculations shown on our website include only
              living (heated/cooled) spaces and are calculated from the outside
              perimeter of the exterior walls. They do not include decks, porches,
              garages, basements, attics, fireplaces, etc. and the non-heated
              spaces in the house will be listed separately on the plan detail
              page. Two story, vaulted areas and staircases are only included
              once in the first floor area. Brick is not counted in our square
              footage calculations.</p>
          </div>
          <div class="col-md-5 offset-md-1 col-12">
            <h3>Can I Find Out If A Plan Was Built In My Area?</h3>
            Due to privacy issues, we are unable to provide any information
            regarding the location of homes that have been built from our
            house plans. However, if we have a photo of a home built from one
            of our plans it will available on our site.
          </div>
          <div class="col-12">
            <h3>Can You Recommend A Plan To Me?</h3>
            <p>We are always glad to help our customers find just the right plan! Use our chat service or give us a call and we'll be happy to assit you.</p>
          </div>
      </section>
    </div>
    <section class="aop-why container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">Why Choose Us?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-5 col-12">
          <h2>The Best Plans</h2>
          <p>With America's Best House Plans, you can explore over 18,000
            house plans ranging from tiny houses to large mansions and
            everything in between. We offer over 40 different styles that cover
            the classics like Craftsman and Colonial styles to the more unique
            homes, such as Contemporary and Modern house plans. With over
            17,000 options to choose from, you are guaranteed/bound to find
            the right home for you and your family.</p>
        </div>
        <div class="col-lg-5 offset-lg-1 col-12">
          <h2>The Best Prices</h2>
          <p>Not only do we offer free shipping on all orders, but we also
            guarantee the lowest price possible. With our price matching
            policy, if you find one of our plans on a competitor's website for
            less, let us know and we'll beat their price by 10%! Additionally, if a
            competitor is offering a percent off discount, we will match the
            competitor's sale price. We also offer affordable customizations
            that make it easy to modify a house plan to fit your needs.</p>
        </div>
        <div class="col-12">
          <h2>The Best Service</h2>
          <p>Our customers are our top priority! With over 30 years in the industry, we know the importance of giving our customers the best service possible.
            We offer a live chat directly on our website where you can personally speak with a customer service representative and you can also call us
            directly! As a family owned and operated company, we do our best to treat you like you are family.</p>
        </div>
      </div>
    </section>
  </section>
</div>

<script>

</script>
<?php get_footer() ?>
