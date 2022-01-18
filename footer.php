<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edumel
 */

?>
<!-- Footer section start -->
<section class="footer footer-3 pt-250">
    <div class="footer-mid">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-8 me-auto">
                    <div class="widget footer-widget mb-5 mb-lg-0">
                        <div class="footer-logo">
                            <img src="<?php echo get_theme_mod( 'footer_logo' );?>" alt="Footer Edumel logo" class="img-fluid">
                        </div>

                        <p class="mt-4"><?php echo get_option('blogdescription'); ?></p>

                        <div class="footer-socials mt-5">
                            <span class="me-2">Connect :</span>
                            <a href="<?php echo get_theme_mod( 'social_fb_setting' );?>"><i class="fab fa-facebook-f"></i></a>
                            <a href="<?php echo get_theme_mod( 'social_tw_setting' );?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo get_theme_mod( 'social_in_setting' );?>"><i class="fab fa-linkedin-in"></i></a>
                            <a href="<?php echo get_theme_mod( 'social_pt_setting' );?>"><i class="fab fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title">Explore</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title ">Programs</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">SEO Business</a></li>
                            <li><a href="#">Digital Marketing</a></li>
                            <li><a href="#">Graphic Design</a></li>
                            <li><a href="#">Social Marketing</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title">Links</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="#">News & Blogs</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Return Policy</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-4">
                    <div class="footer-widget mb-5 mb-lg-0">
                        <h5 class="widget-title">Address</h5>
                        <ul class="list-unstyled footer-links">
                            <li><a href="tel:<?php echo get_theme_mod( 'contact_info_setting' );?>"><?php echo get_theme_mod( 'contact_info_setting' );?></a></li>
                            <li><a href="mailto:<?php echo get_theme_mod( 'email_info_setting' );?>"><?php echo get_theme_mod( 'email_info_setting' );?></a></li>
                            <li><a href="#"><?php echo get_theme_mod( 'address_info_setting' );?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-btm">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-sm-12 col-lg-6">
                    <p class="mb-0 copyright text-sm-center text-lg-start"><?php echo get_theme_mod( 'copyright_text_setting' );?> <a href="<?php home_url(); ?>" rel="nofollow"><?php echo get_theme_mod( 'company_name_setting' );?></a> </p>
                </div>

                <div class="col-xl-6 col-sm-12 col-lg-6">
                    <div class="footer-btm-links text-start text-sm-center text-lg-end">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"> Terms of Service</a></li>
                            <li class="list-inline-item"><a href="#">Join Us</a></li>
                            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-btm-top">
        <a href="#top-header" class="js-scroll-trigger scroll-to-top"><i class="fa fa-angle-up"></i></a>
    </div>

</section>
<!-- Footer section End -->

<?php wp_footer(); ?>

</body>
</html>