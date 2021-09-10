<?php
/*
Template Name: Terms
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
          <h2 class="text-center">Terms & Conditions</h2>
          <h4>The purchase of any plan on our site comes with the terms and conditions listed below. In addition, some plans have additional state-specific
            conditions that are listed on the Plan Detail page. Please read them thoroughly!</h4>
        </div>
      </div>
    </section>
    <div class="bg-container bg-white" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/a-white-pen-isolated-on-white-writing-paper-background.jpg);">
      <section class="container aop-6-content-1">
        <div class="row">
          <div class="col-12">
            <h3>Building Codes</h3>
            <p>Plans purchased shall be in compliance with generally accepted zoning principles. These zoning principles may or may not be the same as the zoning laws and
              regulations in the locale where Customer will construct the plans. Our plans are designed to meet most national building codes at the time they were originally
              drawn. Many states and counties amend the codes for their area. It is the responsibility of the purchaser and/or builder to see that the structure is built to meet
              the codes of your area. Customer hereby indemnifies and holds Big Hills Floor Plans, Inc., its principals, employees and agents, harmless from any claim, loss or
              liability resulting from the failure of the plans to comply with local zoning laws or regulations or for any other breach of this Agreement attributable in whole or
              in part to Customer or its builder.<br><br>

              <b>Some municipalities may require plan review by a licensed Architect or Structural Engineer of your area. After plan purchase from bhfloorplans.com, the
                Customer is responsible for any additional expenses incurred to meet municipality requirements or other requirements for construction.</b>
            </p>
            <h3>Copyright</h3>
            <p>When you purchase a set of plans, you are purchasing a license to build. This license gives you the right to construct one house from these drawings. To build
              the house more than once, modify or copy without express written permission, violates this copyright. For more information about copyright laws and penalties
              involved for copyright violations, <a href="/copyrights" style="text-transform: uppercase;color:#BB9A61;text-decoration:underline;">CLICK HERE.</a><br><br>

              If you are interested in building a house multiple times, please contact us to inquire about our reuse fees.</p>
            <h3>Return Policy</h3>
            <p>Because of copyright laws and the possibilities of making illegal copies of the plans you received, our plans may not be returned for credit or refund under
              any circumstances once the order has been processed. Please double check your selection before ordering.</p>
            <h3>Warranty & Disclaimer</h3>
            <p>The information, plans and specifications contained in these documents are provided "as is" without warranty, either expressed or implied, including, but not
              limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement. America's Best House Plans, Inc. assumes no
              responsibility for errors or omissions in these pages or other documents which are referenced by or linked to these web pages. These documents could
              include technical or other inaccuracies or typographical errors. Big Hills Floor Plans, Inc. assumes no liability for errors or omissions in these documents and
              reserves the right to make changes at any time. Big Hills Floor Plans, Inc. was established to provide home plans that are clear, accurate, easy and affordable to
              build with great function and curb appeal. All floor plans, renderings and other media advertised on Big Hills Floor Plans, Inc. website or other media forms are
              property of the owner. Big Hills Floor Plans, Inc. is not liable for plan interpretation, or the structural integrity of buildings built from plans purchased at
              https://www.houseplans.net. We provide home plans for construction purposes but do not oversee the construction and cannot verify that the structure is built
              to necessary standards. The Customer is responsible to assure that the building meets or exceeds local codes and regulations. It is the responsibility of the
              Customer to obtain any and all structural analysis, engineering and specifications that may be required in the municipality in which it is to be built. The Customer
              is to verify all lot conditions and measurements before construction. Because local codes and regulations and even methods of construction vary across the
              nation and internationally, certain alternative planning may be necessary to adapt the plan to your area. For this reason heating and plumbing are not included
              with our plans. You should be able to meet with these subcontractors to select and plan the systemthat is most appropriate for your area.</p>
          </div>
        </div>
      </section>
    </div>
  </section>
</div>

<script>

</script>
<?php get_footer() ?>
