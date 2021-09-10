<?php if (!defined('ABSPATH')) exit;

// ?
// add_action('woocommerce_HOOK', function () {}, 5);
// add_action('woocommerce_HOOK', function () {}, 200);
// !

// ? remove shop page title
add_filter('woocommerce_show_page_title', '__return_null');
// !

// ? add custom side bar
add_action('woocommerce_before_main_content', function () {
  if (is_active_sidebar('shop-sidebar') && (is_shop() || is_product_category())) {
    echo '<div class="row">
    <div class="col-12">';
    if (is_product_category()) {
      global $wp_query;
      $cat = $wp_query->get_queried_object();
      $thumbnail_id = get_term_meta($cat->term_id, 'thumbnail_id', true);
      $image = wp_get_attachment_url($thumbnail_id);
      echo "<img src='{$image}' alt='' />";
    }

    echo ' <h2 class="woocommerce-products-header__title">';
    woocommerce_page_title(); // ? TITLE

    echo '    </h2>';
    if (is_product_taxonomy() && 0 === absint(get_query_var('paged'))) {
      $term = get_queried_object();

      if ($term && !empty($term->description)) {
        echo '<div class="term-description">' . wc_format_content(wp_kses_post($term->description)) . '</div>'; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
      }
    }
    echo '</div>
    </div>
    <div class="row">
            <div class="col-12 col-lg-3 shop-sidebar-col">
              <div id="secondary" class="widget-area" role="complementary">';
    //dynamic_sidebar('shop-sidebar'); // ? SIDEBAR
    //dynamic_sidebar('shop-filter'); // ? SIDEBAR
    // echo '<div class="products-filters-toggle--container"><button type="button" class="btn products-filters-toggle">';
    // _e('Filter', );
    // echo '</button></div>';
?>
    <div class="side-bar-style">
      <h3>Styles</h3>
      <h4>Bungalow</h4>
      <ul>
        <li>2 Bed Bungalows</li>
        <li>2 Story Bungalows</li>
        <li>3 Bed Bungalows</li>
        <li>4 Bed Bungalows Plans</li>
        <li>Bungalows Plans with Garage</li>
        <li>Bungalows Plans with Photos</li>
        <li>Cottage Bungalows</li>
        <li>Small Bungalows Plans</li>
      </ul>
    </div>
    <div class="side-bar-filter">
      <div class="head-filter">
        <h4>Filter</h4>
        <a href="">
          <h6>Clear all</h6>
        </a>
      </div>
      <div class="check-style">
        <h6>Exterior</h6>
        <div class="slide-checkbox">
          <input type="checkbox" name="slideCheck" value="" id="SlideCheck" />
          <label for="SlideCheck"></label>
        </div>
        <h6>Floorplan</h6>
      </div>
      <div class="filter-attributes">
        <h5>Bedrooms</h5>
        <div>
          <div>
            <a href="">
              <span>1</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>2</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>3</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>4</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>5+</span>
            </a>
          </div>
        </div>
        <h5>Bathrooms</h5>
        <div>
          <div>
            <a href="">
              <span>1</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>1.5</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>2</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>2.5</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>3</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>3.5</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>4+</span>
            </a>
          </div>
        </div>
        <h5>Stories</h5>
        <div>
          <div>
            <a href="">
              <span>1</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>2</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>3+</span>
            </a>
          </div>
        </div>
        <h5>Garages</h5>
        <div>
          <div>
            <a href="">
              <span>0</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>1</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>2</span>
            </a>
          </div>
          <div>
            <a href="">
              <span>3+</span>
            </a>
          </div>
        </div>
      </div>
      <div class="filter-custom-attributes">
        <div>
          <span>Total ft <sup><small>2</small></sup></span>
          <span>Width (ft)</span>
          <span>Depth (ft)</span>
          <span>Plan #</span>
        </div>
        <div>
          <div><input type="text" placeholder="Min"><input type="text" placeholder="Max"></div>
          <div><input type="text" placeholder="Min"><input type="text" placeholder="Max"></div>
          <div><input type="text" placeholder="Min"><input type="text" placeholder="Max"></div>
          <div><input type="text" placeholder="Enter Plan #"></div>
        </div>
      </div>
      <div class="filter-tags">
        <h4>Styles</h4>
        <div>
          <div>
            <h6>Bungalow</h6><span>100</span>
          </div>
          <div>
            <h6>Cabin</h6><span>674</span>
          </div>
          <div>
            <h6>Contemporary</h6><span>93</span>
          </div>
          <div>
            <h6>Cottage</h6><span>21</span>
          </div>
          <div>
            <h6>Country</h6><span>1122</span>
          </div>
          <div>
            <h6>Craftsman</h6><span>52</span>
          </div>
          <div>
            <h6>Farmhouse</h6><span>775</span>
          </div>
          <div>
            <h6>Modern</h6><span>225</span>
          </div>
        </div>
      </div>
    </div>

<?php
    echo '    </div>
            </div>
            <div class="col-12 col-lg-9 woocommerce">';
  }
}, 200);
add_action('woocommerce_after_main_content', function () {
  if (is_active_sidebar('shop-sidebar') && (is_shop() || is_product_category()))
    echo '  </div>
          </div>';
}, 5);
// !

// ? add container for top bar in shop
add_action('woocommerce_before_shop_loop', function () {
  echo '<div class="products-top_bar">';
}, 5);
add_action('woocommerce_before_shop_loop', function () {
  echo '</div>';
}, 200);
// !
