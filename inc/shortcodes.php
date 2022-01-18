<?php

function courses_cb( $atts ){
    ob_start();

    $num_posts = 3;
    if(isset($atts['posts_per_page'])) {
        $num_posts = $atts['posts_per_page'];

    }
    $args = array(
        'post_type' => 'course',
        'posts_per_page' => $num_posts,
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

    <?php $content = ob_get_clean();
    return $content;
};

add_shortcode('show_courses', 'courses_cb');