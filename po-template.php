<?php
/*
Template Name: PO
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
          <h2 class="text-center">What Options Should I Choose?</h2>
          <h4>When you purchase a house plan from us, you have a variety of options that allow you to customize the plan for your specific needs.</h4>
        </div>
      </div>
    </section>
    <div class="bg-container" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Image-from-iOS.jpg);">
      <section class="container aop-3-content-1">
        <div class="row">
          <div class="col-12">
            <h2 class="text-center">What Packages Format Types Can You Choose?</h2>
            <h4>The packages of the tariff plans are presented in various digital and physical formats, each with its own copyright restrictions. Most packages
              come with a one-time license, but some are also offered with an “unlimited” use option, so be sure to check the plan page for details.<br><br>

              The four main types of formats are listed below, but each vendor offers many different formats and licensing configurations. If you require a
              package or multipurpose license that is out of stock, please contact us for a quote.
            </h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5 col-12">
            <h3>PDF</h3>
            <p>PDF is our most popular package because it gives you the flexibility
              to print as many paper copies as you need for your project. When
              selecting this option, you will be emailed a full set of house plans in
              PDF format, along with a copyright release allowing you to print
              and send the plans to anyone who needs them.<br><br>

              The PDF license agreements is typically for building a single home
              if not specified, but some options exist for unlimited construction
              as well.</p>
          </div>
          <div class="col-md-5 offset-md-1 col-12">
            <h3>5 Sets</h3>
            <p>This package provides 5 complete sets of full-size working
              drawings, printed and mailed directly to you. It is a common
              amount of sets to provide you, your builder, subcontractors, and
              permit department each a set of full-size printed house plans.<br><br>

              Some designers offer a PDF + 5 Sets which gives you even more
              flexibility.</p>
          </div>
          <div class="col-md-5 col-12">
            <h3>8 Sets</h3>
            <p>8 Sets is an extended amount of printed house plans sent directly
              to you via the mail. This option gives you the flexibility to share the
              plans with more individuals.</p>
          </div>
          <div class="col-md-5 offset-md-1 col-12">
            <h3>Reproducible Set</h3>
            <p>The Reproducible Set is a single set of physical plans that are
              mailed to you with a copyright release, allowing you to copy the
              plans as many times as needed.</p>
          </div>
          <div class="col-12">
            <h3>CAD Files</h3>
            <p>CAD Files allow a design professional the freedom to make minor or major modifications to your plans using a CAD program. This electronic format
              comes with a copyright release giving you the full rights to customize the plans. You will need a design professional to open these files in a CAD
              program and modify and print the plans accordingly.<br><br>

              Some designers offer the CAD files plus a PDF.</p>
          </div>
        </div>
      </section>
    </div>
    <section class="container aop-2-why">
      <h2 class="text-center">How To Choose A Foundation?</h2>
      <p>Before choosing a foundation, contact your local builder to determine the best options for your state and the lot of land you plan to build on. Depending on
        the conditions of your lot, certain foundations will work better than others. The level of the water table in your state will determine which foundation is best
        for you. A water table refers to the depth of the soil where you find water.
      </p>
      <p><b>Depending on the designer and the home, there are usually three options for a foundation:</b></p>
      <h3>Slab Foundation</h3>
      <p>Slab foundations allow for no space under the home and are the most common type. These low maintenance foundations are popular on flat lots.</p>
      <h3>Crawl Space Foundation</h3>
      <p>Crawl Space foundations are elevated a few feet off the ground and offer accessibility to a small area under the home for storage.</p>
      <h3>Basement Foundations</h3>
      <p>Basement foundations are the most expensive because they offer more space in the home by going 8 feet or deeper, thus creating a larger square footage.
        Basements give you more square footage and the ability to use that space however you please.<br><br>

        We recommend asking your builder which foundation option is best for your home.</p>
    </section>
    <section class="aop-3-option container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">Additional Options</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-12">
          <div>
            <h3>Mirror Reverse and Right Reading Reverse</h3>
            <p><b>Right Reading Reverse</b> flips the entire plan so that the left side of the
              home is on the right, and the right is on the left. All of the text and
              dimensions have been re-drawn to make an entirely new plan but with
              the mirrored layout of the original.<br><br>

              <b>Mirror Reverse</b> also flips the entire plan to the reverse layout, but with
              backwards text and dimensions, as if the plan were viewed in a mirror.
              This option is less convenient to work with, and is primarily used when
              the original drawings do not have the re-drawn text and dimensions
              available but a reverse layout is required.<br><br>

              By clicking the REVERSE button below the house plan photos on each
              plan, you will be able to view the reversed floor plan. The Right Reading
              Reverse would have the same reversed layout, but with the text and
              dimensions redrawn for convenience.<br><br>

              IMPORTANT NOTE: If you purchase 5 sets of plans and indicate you
              want the mirror reverse included, you will receive 4 reversed sets and
              1 set of regular plans so you can correctly read the text and dimensions.
            </p>
          </div>
        </div>
        <div class="col-lg-6 col-12">
          <div>
            <h3>2x4 and 2x6 Conversion</h3>
            <p>While 2x4 construction is a more common option, the northern
              locations of the United States tend to use the 2x6 construction because
              this allows for more insulation for homes built in colder locations.
              Utilizing 2x6 construction costs more up front but also gives you a
              stronger structure to endure high winds, earthquakes, etc. and
              decreases heating and cooling costs by increasing insulation.<br><br>

              Some of our designers offer a 2x6 conversion, which updates the
              house plans to include the bigger size. Please check the additional
              options section to determine if that house plan offers a 2x6 conversion.
              If you don't see that option, you can also modify the plans to include
              a 2x6 conversion.</p>
          </div>
        </div>
        <div class="col-12">
          <div>
            <h3>Material List</h3>
            <p>These helpful lists include all the building materials needed to construct the house plan. Because not all designers offer these lists, if needed, it is
              recommended that you contact a local building supply company and have them create the list for you.</p>
          </div>
        </div>
      </div>
    </section>
  </section>
</div>

<script>

</script>
<?php get_footer() ?>
