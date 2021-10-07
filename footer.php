<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bighills
 */

?>

</main><!-- main#main-content -->

</div><!-- .scroll-container -->

<footer class="" id="site-footer" role="contentinfo">
<?php if (!is_page()) { ?>
  <div class="container-fluid not-page">
    <div class="row">
      <div class="col-lg-4 col-12">
        <a href="#">
        <h3>Search</h3>
        <p>Find your dream home plan</p>
        </a>
      </div>
      <div class="col-lg-4 col-12">
        <a href="#">
        <h3>News</h3>
        <p>Read more information</p>
        </a>
      </div>
      <div class="col-lg-4 col-12">
        <a href="">
        <h3>Contacts</h3>
        <p>Get in touch with our team</p>
        </a>
      </div>
    </div>
  </div>
<?php } else {} ?>
  <div class="container bot-bord">
    <div class="row">
      <div class="col-lg-3 col-12">
        <?php wp_nav_menu(array('theme_location' => 'first_footer_menu')); ?>
      </div>
      <div class="col-lg-3 col-12">
        <?php wp_nav_menu(array('theme_location' => 'second_footer_menu')); ?>
      </div>
      <div class="col text-lg-end">
        <span style="display: block;">Follow Us On Social Media:</span>
        <div class="link-block">
          <a href="#"><img src="<? tUrl(); ?>/dist/img/f.svg" alt=""></a>
          <a href="#"><img src="<? tUrl(); ?>/dist/img/t.svg" alt=""></a>
          <a href="#"><img src="<? tUrl(); ?>/dist/img/y.svg" alt=""></a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12 copyright-text">
        Copyright © 2021 Big Hills Floor Plans, Inc.<br>
        All Rights Reserved.
      </div>
    </div>
  </div>
</footer>
</div><!-- .viewport -->
<div class="assets">
  <?php wp_footer(); ?>


</div>

<div id="fixed-window-height"></div>

</body>

</html>
