<?php
/*
Template Name: WDPI
Template Post Type: page
*/

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

get_header(); ?>

<div class="page <?php echo $post->post_name; ?>">
  <section class="container-fluid first-fluid" style="background-image: url('http://bhfp.local/wp-content/uploads/2021/09/Header.png');">
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

          <h2 class="text-center">How Do We Design Our Plans</h2>
          <h4>We work with hundreds of designers and architects to provide you with over 18,000 home designs. Each plan has been designed to meet
            industry housing standards. Due to the wide variety of plans we offer, you will find that each package of plans is unique to some extent in the
            specific accompanying blueprints and architectural drawings. Complete specifications for each plan are presented on each plan detail page,
            including a list of included architectural drawings and any unique terms.<br><br>

            It is important to note that the plan details pages display simplified floor plans and elevation drawings for preview, rather than the level of detail
            shown in actual shop drawings. The plans you receive will include fully defined blueprints for each sheet included in the plan, be it exterior
            elevations, a foundation plan, or separate floor plans for each level.
          </h4>
        </div>
      </div>
    </section>
    <div class="bg-container" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/hands-of-engineer-working-on-blueprint-construction-concept-engineering-tools-vintage-tone-retro-filter-effect-soft-focus-selective-focus.jpg');">
      <section class="container aop-2-content-1">
        <div class="row text-center">
          <div class="col-md-6 col-12">
            <h3>Simplified Floor Plan Image</h3>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Simplified-Floor-Plan-Image.jpg" alt="">
          </div>
          <div class="col-md-6 col-12">
            <h3>Actual Blueprints</h3>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Actual-Blueprints.jpg" alt="">
          </div>
          <div class="col-12">
            <h3>It's important to check the plan detail page to see what's included with each plan</h3>
          </div>
      </section>
    </div>
    <section class="aop-2-plans container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">What Do Plans Typically Include?</h2>
          <h4 class="text-center">Though each plan includes a different combination of sheets, the majority of our plans come with the following:</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-12">
          <div>
            <h3>Exterior Elevations</h3>
            <p>Display the layout of the building from the outside perspective. This
              typically includes the front, sides, and rear elevation as well as windows,
              doors, and exterior materials (such as siding, brick, etc.)</p>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_1.jpg" alt="">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_2.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div>
            <h3>Floor Plans</h3>
            <p>Focus on the view of the house as if it were sliced horizontally
              at a level that would include all doors and window openings.</p>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_3.jpg" alt="">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_4.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-12">
          <div>
            <h3>Foundation Plan</h3>
            <p>Present a top view of the footings, foundation walls, and the
              location of posts, beams, and load bearing walls as necessary.</p>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_5.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6 col-12">
          <div>
            <h3>Electrical Plan</h3>
            <p>Shows the location and type of all lighting fixtures, switches,
              receptacles, and wiring necessary for the house.</p>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_6.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div>
            <h3>Miscellaneous Details</h3>
            <p>Includes construction details that can include framing details, wall sections, stair sections, etc.</p>
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_7.jpg" alt="">
            <img src="<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Typically_Plan_Pic_8.jpg" alt="">
          </div>
        </div>
      </div>
    </section>
    <section class="container aop-2-why">
      <h2 class="text-center">What Do Plans Typically Not Include?</h2>
      <p>The following sections are usually not included in our plans, but many plans include these additional sections. While our home plans include all the information
        you need to build your home, some of these additional items may be required by your local municipality. Before purchasing a set of home plans, we recommend
        that you contact your builder, local engineer, and building officials to find out the building codes for your city, county, and state. Cross-reference the plan detail
        page to determine what else is needed.
      </p>
      <p><b>Some items you may need to acquire in addition to your house plan include:</b></p>
      <h3>Architectural or Engineering Stamp</h3>
      <p>Depending on the city, county, and state building requirements, house plans may need to be reviewed by an architect or engineer for structural details and code
        standards. <br>
        Contact a local architect or engineer to verify the requirements for your location.</p>
      <h3>Site Plan</h3>
      <p>A site plan essentially shows how the house will fit on the lot between the building lines and the setbacks. This document also shows, based on the typography
        of the land, which side the garage should be built on and where parking, drainage, sewer lines, water lines, lighting, landscaping, and walkways should be
        constructed.<br>
        Contact a civil engineer to obtain the site plan. </p>
      <h3>Mechanical Drawings</h3>
      <p>These types of technical drawings show information about heating, ventilation, and air conditioning.<br>
        Contact a local HVAC company to obtain mechanical drawings.</p>
      <h3>Plumbing Drawings</h3>
      <p>These drawings show the location of all plumbing materials through the house and outside.<br>
        Contact a local plumbing contractor.</p>
      <h3>Energy Calculations</h3>
      <p>These calculations determine how energy efficient your new home will be.<br>
        Contact your local engineer to dictate these calculations.</p>
      <h3>Truss Packages</h3>
      <p>This information determines the structural framework of the timbers used to build the home.<br>
        Contact a local truss company.</p>
      <h3>Materials List</h3>
      <p>This is a complete list of the materials needed to build this specific home. A material list is offered by some of our designers at an additional cost.<br>
        Contact a local building supply company to create this list.</p>
    </section>
    <div class="bg-container" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/top-view-of-a-hand-making-an-architect-drawing.jpg');">
      <section class="container aop-2-content-1">
        <h2 class="text-center">Are Your Plans Being Implemented By An Architect Or Engineer?</h2>
        <p>Standard house plans are not signed by an architect or engineer. Although our plans are based on national building codes; some municipalities
          may require a licensed architect or civil engineer in your area to review the plan. Check with your local building authority to determine if an
          architect stamp is required, and if so, you will need to ask the local architect to do so before starting construction.</p>
      </section>
    </div>
  </section>
</div>

<script>

</script>
<?php get_footer() ?>
