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

// Exit if accessed directly s
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
            <h5 class="widget-title">Support</h5>
            <!-- <div class="logo mb--30">
                            <a href="index.html">
                                <img class="light-logo" src="assets/images/logo/logo.png" alt="Logo Images">
                            </a>
                        </div> -->
            <div class="inner">
              <p>685 Market Street, <br>
                Las Vegas, LA 95820, <br>
                United States.
              </p>
              <ul class="support-list-item">
                <li><a href="mailto:info@konastore.ge"><i class="fal fa-envelope-open"></i> info@konastore.ge</a></li>
                <li><a href="tel:(+01)850-315-5862"><i class="fal fa-phone-alt"></i> (+01) 850-315-5862</a></li>
                <!-- <li><i class="fal fa-map-marker-alt"></i> 685 Market Street,  <br> Las Vegas, LA 95820, <br> United States.</li> -->
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <h5 class="widget-title">Account</h5>
            <div class="inner">
              <ul>
                <li><a href="my-account.html">My Account</a></li>
                <li><a href="sign-up.html">Login / Register</a></li>
                <li><a href="cart.html">Cart</a></li>
                <li><a href="wishlist.html">Wishlist</a></li>
                <li><a href="shop.html">Shop</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <h5 class="widget-title">Quick Link</h5>
            <div class="inner">
              <ul>
                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                <li><a href="terms-of-service.html">Terms Of Use</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Single Widget  -->
        <!-- Start Single Widget  -->
        <div class="col-lg-3 col-sm-6">
          <div class="axil-footer-widget">
            <h5 class="widget-title">Download App</h5>
            <div class="inner">
              <span>Save $3 With App &amp; New User only</span>
              <div class="download-btn-group">
                <div class="qr-code">
                  <img src="assets/images/others/qr.png" alt="Axilthemes">
                </div>
                <div class="app-link">
                  <a href="#">
                    <img src="assets/images/others/app-store.png" alt="App Store">
                  </a>
                  <a href="#">
                    <img src="assets/images/others/play-store.png" alt="Play Store">
                  </a>
                </div>
              </div>
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

<!--

<footer>

  <div class="bootscore-footer bg-body-tertiary pt-5 pb-3">
    <div class="<?= bootscore_container_class(); ?>">

      <!-- Top Footer Widget -->
<?php if (is_active_sidebar('top-footer')) : ?>
  <?php dynamic_sidebar('top footer'); ?>
<?php endif; ?>

<div class="row">

  <!-- Footer 1 Widget -->
  <div class="col-6 col-lg-3">
    <?php if (is_active_sidebar('footer-1')) : ?>
      <?php dynamic_sidebar('footer-1'); ?>
    <?php endif; ?>
  </div>

  <!-- Footer 2 Widget -->
  <div class="col-6 col-lg-3">
    <?php if (is_active_sidebar('footer-2')) : ?>
      <?php dynamic_sidebar('footer-2'); ?>
    <?php endif; ?>
  </div>

  <!-- Footer 3 Widget -->
  <div class="col-6 col-lg-3">
    <?php if (is_active_sidebar('footer-3')) : ?>
      <?php dynamic_sidebar('footer-3'); ?>
    <?php endif; ?>
  </div>

  <!-- Footer 4 Widget -->
  <div class="col-6 col-lg-3">
    <?php if (is_active_sidebar('footer-4')) : ?>
      <?php dynamic_sidebar('footer-4'); ?>
    <?php endif; ?>
  </div>

</div>

<!-- Bootstrap 5 Nav Walker Footer Menu -->
<?php
wp_nav_menu(array(
  'theme_location' => 'footer-menu',
  'container'      => false,
  'menu_class'     => '',
  'fallback_cb'    => '__return_false',
  'items_wrap'     => '<ul id="footer-menu" class="nav %2$s">%3$s</ul>',
  'depth'          => 1,
  'walker'         => new bootstrap_5_wp_nav_menu_walker()
));
?>

</div>
</div>

<div class="bootscore-info bg-body-tertiary text-body-tertiary border-top py-2 text-center">
  <div class="<?= bootscore_container_class(); ?>">
    <?php if (is_active_sidebar('footer-info')) : ?>
      <?php dynamic_sidebar('footer-info'); ?>
    <?php endif; ?>
    <small class="bootscore-copyright"><span class="cr-symbol">&copy;</span>&nbsp;<?= date('Y'); ?> <?php bloginfo('name'); ?></small>
  </div>
</div>

</footer>


<!-- To top button -->
<a href="#" class="btn btn-primary shadow top-button position-fixed zi-1020"><i class="fa-solid fa-chevron-up"></i><span class="visually-hidden-focusable">To top</span></a>

</div><!-- #page -->

-->

<?php wp_footer(); ?>

</body>

</html>