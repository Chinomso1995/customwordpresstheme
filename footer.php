<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="home-we-accept">
        <div class="container">
          <div class="title-holder">
            <h2>We accept the following waste</h2>
            <div class="button-holder top">
              <a href="" class="button outline">Read the full list of acceptable waste</a>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6">
                 <div class="circle">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/home-we-accept-1.svg" alt="We accept waste" width="100%">
                   <div class="title">
                     Commercial Waste
                   </div>
                 </div>       
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                <div class="circle">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/home-we-accept-2.svg" alt="We accept waste" width="100%">
                   <div class="title">
                     Building Waste
                   </div>
                </div>    
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                 <div class="circle">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/home-we-accept-3.svg" alt="We accept waste" width="100%">
                   <div class="title">
                     Green Waste
                   </div>
                 </div> 
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                 <div class="circle">
                   <img src="<?php echo get_template_directory_uri(); ?>/images/home-we-accept-4.svg" alt="We accept waste" width="100%">
                   <div class="title">
                     Household Waste
                   </div>
                 </div>
            </div>
          </div>
          <div class="button-holder bottom">
              <a href="" class="button outline">Read the full list of acceptable waste</a>
            </div>
        </div>
      </div>

<div class="wrapper" id="wrapper-footer">
      <div class="footer-testimonial">
         <div class="container">
         <div class="testimonial">
             <div class="stars">
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
               <i class="fa fa-star"></i>
             </div>
             <div class="quote">
               "Amazing customer service and very good price will be definitely getting another one through these guys when needed. Thank you"
             </div> 
             <div class="author">
               Damon, Facebook review
             </div>
         </div>
         </div>
      </div>
      <div class="container">
         <div class="footer-contact-info">
           <div class="row">
             <div class="col-lg-6">
                <div class="title">Want to know more?</div>
                <div class="desc">To find out more about our services please contact us using any of the methods below, or alternatively fill in the contact form and a representative will be in touch as soon as possible</div>
                <div class="contact-info">
                  <div class="phone"><i class="fa fa-phone"></i>Call +234 812 106 9256</div>
                  <div class="email"><i class="fa fa-envelope"></i>Email chinomsojohnson@gmail.com</div>
                </div>
             </div>
             <div class="col-lg-6">
                 <div class="contact-form-holder">
                   <?php echo do_shortcode('[contact-form-7 id="42" title="Footer Contact Form"]') ?>
                 </div>
             </div>
           </div>
         </div>
      </div>
      <div class="copyright">
           <div class="container">
             Copyright West Coast 2020 <span>//</span> <a href="#">Terms & Conditions</a>  <span>//</span> <a href="https://chinomso1995.github.io/portfolio-website/">Website by Chinomso</a> 
           </div>
      </div>
</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

