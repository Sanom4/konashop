<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 * @version 5.4.0
 */

// Exit if accessed directly
defined('ABSPATH') || exit;

?>

<footer class="axil-footer-area footer-style-2">
  <!-- Start Footer Top Area  -->
  <div class="footer-top separator-top">
    <div class="container">
      <div class="row">
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <div class="logo mb--30">
              <a href="<?php echo esc_url(home_url('/')); ?>">
                <img class="light-logo" src="<?php echo get_template_directory_uri() . '/img/logo/logofgl.png'; ?>" alt="Logo Images">
              </a>
            </div>
            <div class="inner">

              </p>
              <ul class="support-list-item">
                <li><a href="mailto:info@konastore.ge"><i class="fal fa-envelope-open"></i> info@konastore.ge</a></li>
                <li><a href="tel:(+995)591 90 41 42"><i class="fal fa-phone-alt"></i> (+995) 591 90 41 42</a></li>
                <li><a href="tel:(+995)598 921 227"><i class="fal fa-phone-alt"></i> (+995) 598 921 227</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <h5 class="widget-title">ანგარიში</h5>
            <div class="inner">
              <ul>
                <li><a href="<?php echo esc_url(home_url('/my-account')); ?>">My Account</a></li>
                <li><a href="<?php echo esc_url(home_url('/my-account')); ?>">Login / Register</a></li>
                <li><a href="<?php echo esc_url(home_url('/cart')); ?>">Cart</a></li>
                <li><a href="<?php echo esc_url(home_url('/wishlist')); ?>">Wishlist</a></li>
                <li><a href="<?php echo esc_url(home_url('/shop')); ?>">Shop</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <h5 class="widget-title">სწრაფი ბმულები</h5>
            <div class="inner">
              <ul>
                <li><a href="<?php echo esc_url(home_url('/privacy-policy')); ?>">Privacy Policy</a></li>
                <li><a href="<?php echo esc_url(home_url('/terms-of-use')); ?>">Terms Of Use</a></li>
                <li><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <div class="inner">
              <img class="light-logo" src="<?php echo get_template_directory_uri() . '/img/partials/birka/birka axali.png'; ?>" alt="Logo Images">
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
      </div>
    </div>
  </div>
  <!-- End Footer Top Area  -->
  <!-- Start Copyright Area  -->
  <div class="copyright-area copyright-default separator-top">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-xl-4">
          <div class="social-share">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-discord"></i></a>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="copyright-left d-flex flex-wrap justify-content-center">
            <ul class="quick-link">
              <li>© <?= date('Y'); ?>. All rights reserved by <a target="_blank" href="https://konastore.ge/"><?php bloginfo('name'); ?></a>.</li>
            </ul>
          </div>
        </div>
        <div class="col-xl-4 col-lg-12">
          <div class="copyright-right d-flex flex-wrap justify-content-xl-end justify-content-center align-items-center">
            <span class="card-text">Accept For</span>
            <ul class="payment-icons-bottom quick-link">
              <li><img src="assets/images/icons/cart/cart-1.png" alt="paypal cart"></li>
              <li><img src="assets/images/icons/cart/cart-2.png" alt="paypal cart"></li>
              <li><img src="assets/images/icons/cart/cart-5.png" alt="paypal cart"></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Copyright Area  -->
</footer>

<?php wp_footer(); ?>

</body>

</html>