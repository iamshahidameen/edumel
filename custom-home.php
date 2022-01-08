<?php
/*
 * Template Name: Home Page
 * */
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Edumel- Education Html Template by dreambuzz">
    <meta name="keywords" content="education,edumel,instructor,lms,online,instructor,dreambuzz,bootstrap,kindergarten,tutor,e learning">
    <meta name="author" content="dreambuzz">

    <title>Edumel- Education Html Template</title>
    <!-- Mobile Specific Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body id="top-header">

<header class="header-style-1">
    <div class="header-topbar topbar-style-2">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-8 col-lg-6 col-md-12">
                    <div class="header-contact text-center text-lg-start d-none d-sm-block">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-phone-alt"></i></span><a href="tel:+(354) 6800 37849"> +(354) 6800 37849</a>
                            </li>

                            <li class="list-inline-item">
                                <span class="text-color me-2"><i class="fa fa-envelope"></i></span><a href="malito:hello@edumel.com"> hello@edumel.com</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12">
                    <div class="d-sm-flex justify-content-center justify-content-lg-end">
                        <div class="header-socials text-center text-lg-end">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
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
                        <img src="assets/images/logo.png" alt="" class="img-fluid" />
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

<!-- Banner Section Start -->
<section class="banner-style-4 banner-padding">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-content ">
                    <span class="subheading"><?php the_field('hero_subheading'); ?></span>
                    <h1><?php the_field('hero_title'); ?></h1>
                    <p class="mb-40"> <?php the_field('hero_content'); ?></p>

                    <div class="btn-container">
                        <?php $hero_btn_1 = get_field('hero_find_courses_btn'); ?>
                        <?php $hero_btn_2 = get_field('hero_get_started_btn'); ?>
                        <a href="<?php echo $hero_btn_1['url']; ?>" class="btn btn-main rounded"><?php echo $hero_btn_1['title']; ?></a>
                        <a href="<?php echo $hero_btn_2['url'] ?>" class="btn btn-white rounded ms-2"><?php echo $hero_btn_2['title']; ?> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6 col-lg-6">
                <div class="banner-img-round mt-5 mt-lg-0 ps-5">
                    <?php $hero_image = get_field('hero_image');?>
                    <img src="<?php echo $hero_image['url']; ?>" alt="<?php echo $hero_image['alt']; ?>" class="img-fluid">
                </div>
            </div>
        </div> <!-- / .row -->
    </div> <!-- / .container -->
</section>
<!-- Banner Section End -->

<!-- Counter Section start -->
<section class="counter-section4">
    <div class="container">
        <div class="row justify-content-center" >
            <div class="col-xl-12 counter-inner">
                <div class="row">
                    <?php $stats_group = get_field('stats_group'); ?>
                    <?php if($stats_group) {
                        foreach ($stats_group as $stat_repeater) {
                            foreach ($stat_repeater as $stat_item) { ?>
                                <div class="col-lg-3 col-md-6">
                                    <div class="counter-item mb-5 mb-lg-0">
                                        <div class="count">
                                            <script> let myNum = parseInt(<?php echo $stat_item['stat_number']; ?>)
                                            // document.write(myNum);
                                            </script>

                                            <span class="counter h2"><?php echo $stat_item['stat_number']; ?></span>
                                        </div>
                                        <p><?php echo $stat_item['stat_heading']; ?></p>
                                    </div>
                                </div>
                            <?php }
                         }
                    } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Counter Section End -->

<!--  Course style 1 -->
<section class="course-wrapper section-padding ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg"><?php the_field('courses_heading'); ?></h2>
                    <p><?php the_field('courses_description'); ?></p>
                </div>
            </div>
        </div>

        <div class="row justify-content-lg-center">
            <?php
            $args = array(
                'post_type' => 'course',
                'posts_per_page' => 3,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $courses_loop= new WP_Query( $args );
            while ( $courses_loop->have_posts() ) : $courses_loop->the_post(); ?>
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="course-grid bg-shadow tooltip-style">
                        <div class="course-header">
                            <div class="course-thumb">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt($custom_post_ID); ?>" class="img-fluid">
                                <div class="course-price">$<?php the_field('course_price'); ?></div>
                            </div>
                        </div>

                        <div class="course-content">
                            <div class="rating mb-10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                                <span><?php the_field('course_ratings'); ?></span>
                            </div>

                            <h3 class="course-title mb-20"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>

                            <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                                <span class="duration"><i class="far fa-clock me-2"></i><?php the_field('course_duration'); ?> hr</span>
                                <span class="students"><i class="far fa-user-alt me-2"></i><?php the_field('course_students'); ?> Students</span>
                                <span class="lessons"><i class="far fa-play-circle me-2"></i><?php the_field('course_lessons'); ?> Lessons</span>
                            </div>
                        </div>

                        <div class="course-hover-content">
                            <div class="price">$300</div>
                            <h3 class="course-title mb-20 mt-30"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a> </h3>
                            <div class="course-meta d-flex align-items-center mb-20">
                                <div class="author me-4">
                                    <?php $authors = get_field('course_author'); ?>
                                        <?php foreach($authors as $author){ ?>
                                            <img src="<?php echo get_the_post_thumbnail_url($author->ID); ?>" alt="<?php the_post_thumbnail_alt($custom_post_ID); ?>" class="img-fluid">
                                            <a href="<?php echo $author->guid; ?>"><?php echo $author->post_title; ?></a>
                                        <?php } ?>
                                </div>
                                <span class="lesson"> <i class="far fa-file-alt"></i> <?php the_field('course_lessons'); ?> lessons</span>
                            </div>
                            <p class="mb-20"><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-grey btn-sm rounded">Join Now <i class="fal fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>

            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!--  Course style 1 End -->

<!--  Course category -->
<section class="course-category-3 section-padding">
    <div class="container">
        <div class="row mb-70 justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading text-center">
                    <h2 class="font-lg"><?php the_field('stats_title'); ?></h2>
                    <p><?php the_field('stats_content'); ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $terms = get_terms([
                'taxonomy' => 'coursecategory'
            ]);
            foreach ( $terms as $term ) : ?>
                <div class="col-xl col-lg-4 col-sm-6">
                    <div class="single-course-category style-3 <?php the_field('course_category_color_class', 'coursecategory_' . $term->term_id); ?>">
                        <div class="course-cat-icon">
                            <img src="<?php the_field('course_category_image', 'coursecategory_' . $term->term_id); ?>" alt="" class="img-fluid">
                        </div>
                        <div class="course-cat-content">
                            <h4 class="course-cat-title"><a href="<?php echo home_url(); ?>/coursecategory/<?php echo $term->slug; ?> "><?php echo $term->name; ?> </a></h4>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!--  Course category End -->

<!-- Work Process Section Start -->
<section class="work-process section-padding">
    <div class="container">
        <div class="row mb-40">
            <div class="col-xl-8">
                <div class="section-heading ">
                    <h2 class="font-lg"><?php the_field('journey_heading'); ?></h2>
                    <p><?php the_field('journey_tagline'); ?></p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-7 pe-xl-5 col-lg-12">
                <div class="row">
                    <?php
                    $journey_field = get_field('journey_group');
                    foreach( $journey_field as $journey_array){
                        foreach ($journey_array as $journey_features){ ?>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="step-item ">
                                    <div class="step-number <?php echo $journey_features['color_class']; ?>"><?php echo $journey_features['feature_item_number'];  ?></div>
                                    <div class="step-text">
                                        <h5><?php echo $journey_features['title']; ?></h5>
                                        <p><?php echo $journey_features['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>
                </div>
            </div>

            <div class="col-xl-5">
                <div class="video-sectionn mt-3 mt-xl-0">
                    <div class="video-content">
                        <?php the_field('journey_video'); ?>
<!--                        <img src="assets/images/bg/office01.jpg" alt="" class="img-fluid">-->
<!--                        <a href="#" class="video-icon video-popup"><i class="fa fa-play"></i></a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Work Process Section End -->

<!--  Course style 1 -->
<section class="course-wrapper section-padding  bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-70 text-center">
                    <h2 class="font-lg"><?php the_field('courses_heading'); ?></h2>
                    <p><?php the_field('courses_description'); ?></p>
                </div>
            </div>
        </div>
        <div class="row justify-content-lg-center">
            <?php
            $args = array(
                'post_type' => 'course',
                'posts_per_page' => 4,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $courses_loop= new WP_Query( $args );
            while ( $courses_loop->have_posts() ) : $courses_loop->the_post(); ?>
                <div class="col-xl-3 col-lg-6 col-md-6">
                    <div class="course-grid tooltip-style bg-white hover-shadow">
                        <div class="course-header">
                            <div class="course-thumb">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">
                                <div class="course-price">$<?php the_field('course_price'); ?></div>
                            </div>
                        </div>

                        <div class="course-content">
                            <div class="rating mb-10">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>

                                <span><?php the_field('course_ratings'); ?></span>
                            </div>
                            <h3 class="course-title mb-20"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>
                            <div class="course-footer mt-20 d-flex align-items-center justify-content-between ">
                                <span class="duration"><i class="far fa-clock me-2"></i><?php the_field('course_duration'); ?> hr</span>
                                <span class="lessons"><i class="far fa-play-circle me-2"></i><?php the_field('course_lessons'); ?> Lessons</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- COURSE END -->
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!--  Course style 1 End -->

<!-- Feature section start -->
<section class="features-3 section-padding-top ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="section-heading mb-50 text-center">
                    <h2 class="font-lg"><?php the_field('features_heading');?></h2>
                    <p><?php the_field('features_description');?></p>
                </div>
            </div>
        </div>
        <div class="row ">

            <?php
            $transform_group = get_field('features_group');
            if($transform_group) {
                foreach($transform_group as $trasnform_item) {
                    foreach($trasnform_item as $transform_data) { ?>
                        <div class="col-lg-3 col-md-6 col-xl-3 col-sm-6">
                            <div class="feature-item feature-style-top hover-shadow rounded border-0">
                                <div class="feature-icon">
                                    <i class="<?php echo $transform_data['icon']; ?>"></i>
                                </div>
                                <div class="feature-text">
                                    <h4><?php echo $transform_data['title']; ?></h4>
                                    <p><?php echo $transform_data['description']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
            } ?>
        </div>
    </div>
</section>
<!-- Feature section End -->

<!-- Team section start -->
<section class="team section-padding">
    <div class="container">
        <div class="row  mb-100">
            <div class="col-lg-8 col-xl-8">
                <div class="section-heading text-center text-lg-start">
                    <h2 class="font-lg">Top Rated Instructors</h2>
                    <p>Discover Your Perfect Program In Our Courses.</p>
                </div>
            </div>

            <div class="col-xl-4 col-lg-4">
                <div class="text-center text-lg-end">
                    <a href="#" class="btn btn-main-outline rounded">All Instructors <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row">
            <?php
            $args = array(
                'post_type' => 'instructor',
                'posts_per_page' => 4,
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $loop= new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="team-item team-item-4 mb-70 mb-xl-0">
                        <div class="team-img">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-fluid">

                            <ul class="team-socials list-inline">
                                <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h4><?php the_title(); ?></h4>
                                <p><?php the_field('expertise'); ?></p>
                            </div>

                            <div class="course-meta">
                                <span class="duration"><i class="far fa-user-alt"></i><?php the_field('instructors_total_students'); ?> Students</span>
                                <span class="lessons"><i class="far fa-play-circle me-2"></i><?php the_field('instructors_total_courses'); ?> Course</span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</section>
<!-- Team section End -->

<!-- Testimonial section start -->
<section class="testimonial-4 section-padding bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="section-heading text-center mb-50">
                    <h2 class="font-lg"><?php the_field('testimonials_heading'); ?></h2>
                    <p><?php the_field('testimonials_tagline'); ?></p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-12 col-xl-12">
                <div class="testimonials-slides owl-carousel owl-theme">
                    <?php
                    $args = array(
                        'post_type' => 'testimonial',
                        'posts_per_page' => 4,
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );
                    $loop= new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="testimonial-item">
                            <div class="testimonial-inner">
                                <div class="quote-icon"><i class="flaticon-left-quote"></i></div>

                                <div class="testimonial-text mb-30">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="client-info d-flex align-items-center">
                                    <div class="client-img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_alt($custom_post_ID); ?>" class="img-fluid">
                                    </div>
                                    <div class="testimonial-author">
                                        <h4><?php the_title(); ?></h4>
                                        <span class="meta"><?php the_field('testimonials_experties'); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial section End -->

<!-- CTA Sidebar start -->
<section class="cta-5 mb--120 bg-gray">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="cta-inner4">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4 col-lg-5">
                            <div class="cta-img mb-4 mb-lg-0">
                                <?php $cta_image = get_field('cta_image'); ?>
                                <img src="<?php echo $cta_image['url']; ?>" alt="<?php echo $cta_image['alt']; ?>" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="cta-content ps-lg-4">
                                <span class="subheading mb-10"><?php the_field('cta_tagline'); ?></span>
                                <h2 class="mb-20"> <?php the_field('cta_heading'); ?></h2>
                                <?php $cta_link = get_field('cta_link'); ?>
                                <a href="<?php echo $cta_link['url']; ?>" class="btn btn-main rounded"> <?php echo $cta_link['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CTA Sidebar end -->

<!-- Footer section start -->
<section class="footer footer-3 pt-250">
    <div class="footer-mid">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-8 me-auto">
                    <div class="widget footer-widget mb-5 mb-lg-0">
                        <div class="footer-logo">
                            <img src="assets/images/logo-white.png" alt="" class="img-fluid">
                        </div>

                        <p class="mt-4">Edumel is a Bootstrap Template for online courses
                            education websites support multiple courses</p>

                        <div class="footer-socials mt-5">
                            <span class="me-2">Connect :</span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
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
                            <li><a href="#">+0800 327 8534</a></li>
                            <li><a href="#">support@edumel.com</a></li>
                            <li><a href="#">123 Fifth Floor East 26th Street,New York, NY 10011</a></li>
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
                    <p class="mb-0 copyright text-sm-center text-lg-start">© 2021 Edumel All rights reserved by <a href="https://themeturn.com" rel="nofollow">Dreambuzz</a> </p>
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


