<?php
/*
 * Template Name: Home Page
 * */
?>
<?php get_header();?>

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
            <?php echo do_shortcode('[show_courses posts_per_page="3"]'); ?>
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
<!-- Footer -->
<?php get_footer(); ?>