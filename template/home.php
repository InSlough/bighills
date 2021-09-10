<?php
if (!defined('ABSPATH')) {
  exit;
}

$p = getUrl('/dist/img/');

// do_action('ac_js', 'home', "/dist/js/extra/home");

?>
<div class="page <?php echo $post->post_name; ?>">

  <div class="container-fluid first-section bg" style="background-image: url('<?php echo get_site_url();
                                                                              ?>/wp-content/uploads/2021/09/Background.png');">
    <div class="row align-items-center h-100">
      <div class="col">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="first-section-content">
                <h1>Discover Your Next Home</h1>
                <h2>We'll help you find the perfect plan</h2>
                <p>Search nearly 40,000 floor plans and find your dream home today</p>
                <div class="fb-block">
                  <button type="button" class="btn btn-light">Bedrooms</button>
                  <button type="button" class="btn btn-light">Bathrooms</button>
                  <button type="button" class="btn btn-light">Stories</button>
                  <button type="button" class="btn btn-light">Garages</button>
                </div>
                <button type="button" class="btn s-btn">SEARCH PLANS</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="sp-section">
    <div class="container">
    <div class="row">
      <div class="col-md-6 col-12">
        <h2>See Your Floor Plan Inside</h2>
        <p style="font-size:20px;">You can see your floor plans in 3D views. So you can imagine
          the design interior of your future home.
        </p>
      </div>
      <div class="col-md-6 col-12 jc-fe ai-c" style="display:flex;">
        <div> <button type="button" class="btn s-btn nc-b">see more plans</button> </div>
      </div>

    </div>
    <div class="row img-block">
      <div class="col-lg-6 col-12">
        <img src="<?php echo get_site_url();
                  ?>/wp-content/uploads/2021/09/Picure-home.png" alt="">

      </div>
      <div class="col-lg-6 col-12"><img src="<?php echo get_site_url();
                                              ?>/wp-content/uploads/2021/09/Plan-image.png" alt=""></div>
    </div>
</div>
  </section>
  <section class="why-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="ta-c">Why Choose Us?</h2>
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
  <section class="homs-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-12">
          <h2>New & Exclusive Home Designs</h2>
          <p style="font-size:20px;">We have the best and unique home designs for every need.
          </p>
        </div>
        <div class="col-md-6 col-12 jc-fe ai-c" style="display:flex;">
          <div> <button type="button" class="btn s-btn nc-b">Browse More Plans</button> </div>
        </div>
      </div>
      <div class="row">

        <?php
        $args = array(
          'post_type' => 'product',
          'posts_per_page' => 10
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
          $index = 0;
          while ($query->have_posts()) {
            $index++;
            $query->the_post();
            if ($index == 1) { ?>
              <div class="col-lg-8 col-12">
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
              </div>
            <?php  } ?>
            <?php if ($index == 1 && $index == 1) {
              if ($index == 1) { ?>
                <div class="col-lg-4 col-12">
                <? } ?>
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
                <? if ($index == 1) { ?>
                </div>
            <? }
              } ?>

            <?php if ($index == 1 && $index == 1) { ?>
              <div class="col-lg-6 col-12">
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
              </div>
            <? } ?>
            <?php if ($index == 1 && $index == 1) { ?>
              <div class="col-lg-6 col-12">
                <div class="product-ai">
                  <img src="<?php echo get_the_post_thumbnail_url($post, 'full'); ?>" alt="">
                  <div class="ai-info"><span><b>3</b> Beds | <b>2.5</b> Baths | <b>2500</b> SQ FT</span><span># 021-0051</span></div>
                </div>
              </div>
            <? } ?>

          <?php  } ?>

        <?php

        } else {
        }
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </section>
  <section class="contact_home_section nm-p" style="background-image: url('<?php echo get_site_url();
                  ?>/wp-content/uploads/2021/09/Background-ask-us.png);">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>Ask Us a Question</h2>
          <? echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>

  <section class="container reviews_section">
    <div class="row">
      <div class="col-12">
        <h2>Reviews</h2>
        <p style="font-size:20px;">We've helped over 75,000 people shop for a new home plan</p>
      </div>
    </div>
  </section>

  <section class="wwo_section nm-p" style="background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2021/09/Offer-pic.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="text-center">What We Offer</h2>
          <div>
          <div class="blur-o"></div>
          <p>Our company offers a first-class experience in helping our clients get the best home plans for their needs.
            We continually provide our clients with the largest selection of quality home designs in the country, created
            by best-in-class architects and home designers from across the country. We not only offer house plans, but
            we also work hand in hand with our clients to accommodate their requests for redesign of their dream home.<br><br>

            Not only do we offer free shipping on all orders, but we also guarantee the lowest price possible. With our
            price matching policy, if you find one of our plans on a competitor's website for less, let us know and we'll
            beat their price by 10%! Additionally, if a competitor is offering a percent off discount, we will match the
            competitor's sale price. We also offer affordable customizations that make it easy to modify a house plan
            to fit your needs.</p>

            </div>
        </div>
      </div>
    </div>
  </section>
  <div style="display:block;height:100px;"></div>
</div>
