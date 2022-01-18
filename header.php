<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Edumel
 */

?>
<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body id="top-header" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header-style-1">
    <div class="header-topbar topbar-style-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 col-md-12">
                    <div class="header-contact text-center text-lg-start d-none d-sm-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-phone-alt"></i></span><a href="tel:<?php echo get_theme_mod( 'contact_info_setting' );?>"><?php echo get_theme_mod( 'contact_info_setting' );?></a>
                            </li>

                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-envelope"></i></span><a href="malito:<?php echo get_theme_mod( 'email_info_setting' );?>"> <?php echo get_theme_mod( 'email_info_setting' );?></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="d-sm-flex justify-content-center justify-content-lg-end">
                        <div class="header-socials text-center text-lg-end">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="<?php echo get_theme_mod( 'social_fb_setting' );?>"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo get_theme_mod( 'social_tw_setting' );?>"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo get_theme_mod( 'social_in_setting' );?>"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo get_theme_mod( 'social_pt_setting' );?>"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="<?php echo get_theme_mod( 'social_yt_setting' );?>"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>

                        <div class="header-btn text-center text-lg-end">
                            <a href="#"> <i class="fa fa-user-alt"></i> Login/Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-navbar navbar-sticky">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between">
                <div class="site-logo">
                    <a href="index.html">
                        <?php the_custom_logo(get_theme_mod( 'custom_logo' ));?>
                    </a>
                </div>

                <div class="offcanvas-icon d-block d-lg-none">
                    <a href="#" class="nav-toggler"><i class="fal fa-bars"></i></a>
                </div>

                <div class="header-category-menu d-none d-xl-block">
                    <ul>
                        <li class="has-submenu">
                            <a href="#"><i class="fa fa-th me-2"></i>Categories</a>
                            <ul class="submenu">
                                <li>
                                    <a href="#">Design</a>
                                    <ul class="submenu">
                                        <li><a href="#">Design Tools</a></li>
                                        <li><a href="#">Photoshop mastering</a></li>
                                        <li><a href="#">Adobe Xd Deisgn</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Developemnt</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Freelancing</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <div class="header-search-bar d-none d-xl-block ms-4">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search for Course" >
                        <a href="#" class="search-submit"><i class="far fa-search"></i></a>
                    </form>
                </div>

                <nav class="site-navbar ms-auto">

                    <ul class="primary-menu">
                        <li class="current">
                            <a href="index.html">Home</a>
                            <ul class="submenu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                                <li><a href="index-4.html">Home Four</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About</a></li>

                        <li>
                            <a href="courses.html">Courses</a>
                            <ul class="submenu">
                                <li><a href="courses.html">Courses</a></li>
                                <li><a href="courses-2.html">Course Grid 2 </a></li>
                                <li><a href="courses-3.html">Course Grid 3</a></li>
                                <li><a href="courses-4.html">Course Grid 4</a></li>
                                <li><a href="courses-5-list.html">Course List</a></li>
                                <li class="has-submenu">
                                    <a href="#">Single Layout</a>
                                    <ul class="submenu">
                                        <li><a href="course-single.html">Course Single 1</a></li>
                                        <li><a href="course-single-2.html">Course Single 2</a></li>
                                        <li><a href="course-single-3.html">Course Single 3</a></li>
                                        <li><a href="course-single-4.html">Course Single 4</a></li>
                                        <li><a href="course-single-5.html">Course Single 5</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">Pages</a>
                            <ul class="submenu">
                                <li><a href="instructor.html">Instructors</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="Register.html">Register</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="blog.html">Blog</a>
                            <ul class="submenu">
                                <li><a href="blog-grid.html">Blog</a></li>
                                <li><a href="blog-single.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>

                    <a href="#" class="nav-close"><i class="fal fa-times"></i></a>
                </nav>
            </div>
        </div>
    </div>
</header>
<!--====== Header End ======-->