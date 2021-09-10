<?php
/*
Template Name: LBC
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
          <h2 class="text-center">Does My Plan Comply With Local Building Codes?</h2>
          <h4>Our plans are drawn to commonly accepted code standards. However, it is not uncommon for state, county, and local governments to have
            additional requirements that must be met in order to build a home in your area. So how do you find out what your municipality requires?
            Consultation with your builder is always recommended, but a quick Google search is another great place to start!</h4>
          <h4><b>Google Search: {CITY, COUNTY, STATE + "SINGLE FAMILY RESIDENTIAL BUILDING PERMIT CHECKLIST"}</b></h4>
          <h4>FOR EXAMPLE: a search for Milton Georgia might look like this:
            "MILTON FULTON GEORGIA SINGLE FAMILY RESIDENTIAL BUILDING PERMIT CHECKLIST"
            And return this result: <span style="text-transform: uppercase;color:#BB9A61;text-decoration:underline;">MILTON GA CHECKLIST.</span> </h4>
        </div>
      </div>
    </section>
    <div class="bg-container" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/architectural-project-with-different-tools-composition-with-copy-space.jpg);">
      <section class="container aop-4-content-1">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">Common Code Requirements</h2>
            <p><b>Building permits from your municipality may require one or more of the following items that are not included with our plans:</b></p>
            <h3>Professional Stamp</h3>
            <p>If you are required to have a professional stamp on your house plans, you must take those plans to a licensed local engineer or architect to review and either
              stamp with approval or propose changes.</p>
            <h3>Foundation Soil Testing</h3>
            <p>Depending on where you decide to build your home, soil samples might need to be taken by a local soil laboratory in order to solidify your foundation plan.
              The results of the soil testing might require modifications to the foundation plan.</p>
            <h3>Site Plan</h3>
            <p>You may also need your home builder or surveyor to create a site plan that displays where the house will be built on the land.</p>
            <h3>Septic Tank</h3>
            <p>Another element that you might need assistance with is the placement and design of the septic tank.</p>
            <h3>Framing Plan</h3>
            <p>If your county requires framing plans, take your house plan to a local building supply company or engineer and they can create framing plans that fit the city,
              county, and state standards. These may include beam sizes, locations, etc.</p>
            <h3>Mechanical Plan</h3>
            <p>These drawings display the location of heating and air equipment and the associated duct work.</p>
            <h3>Plumbing Plan</h3>
            <p>These drawings show the exact location of plumbing and include pipe sizes.</p>
            <p>After reviewing your city, county, and state's requirements, contact a local architect or engineer to discuss the changes and updates needed in order to move
              the home building process along. Once you've met all requirements, you can confidently begin the process of building your dream home from the ground up.</p>
          </div>
        </div>

      </section>
    </div>

  </section>
</div>

<script>

</script>
<?php get_footer() ?>
