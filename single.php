<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Edumel
 */
?>
<? get_header(); ?>
<?php the_content(); ?>
<section class="course-page-header  page-header-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-xl-8">
              <div class="course-header-wrapper mb-0 bg-transparent">
                  <h1 class="mb-3"><?php the_title(); ?></h1>
                  <?php the_excerpt(); ?>
                    <div class="course-header-meta">
                        <ul class="inline-list list-info">
                            <li>
                                <div class="course-author">
									<?php $authors = get_field('course_author'); ?>
									<?php foreach($authors as $author){ ?>
										<img src="<?php echo get_the_post_thumbnail_url($author->ID); ?>" alt="<?php the_post_thumbnail_alt($custom_post_ID); ?>" >
										<?php echo $author->post_title; ?>
                                <?php } ?>
                                </div>
                            </li>

                            <li>
                              <div class="list-rating">
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                  <span><i class="fas fa-star"></i></span>
                                    <span class="rating-count"><?php the_field('course_ratings'); ?></span>
                                </div>
                            </li>
                            <li><i class="fa fa-user me-2"></i><?php the_field('course_students'); ?>  enrolled students</li>
                        </ul>
                    </div>
              </div>
          </div>
      </div>
    </div>
</section>

<section class="tutori-course-single tutori-course-layout-3 page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <div class="single-course-details mb-4">
    <h4 class="course-title">Description</h4>
    <p>Knowing PHP has allowed me to make enough money to stay home and make courses like this one for students all over the world. Being a PHP developer can allow anyone to make really good money online and offline, developing dynamic applications.
        Knowing PHP will allow you to build web applications, websites or Content Management systems, like WordPress, Facebook, Twitter or even Google.
        There is no limit to what you can do with this knowledge. PHP is one of the most important web programming languages to learn, and knowing it, will give you SUPER POWERS in the web</p>


    <div class="course-widget course-info">
        <h4 class="course-title">What You will Learn?</h4>
        <ul>
            <li>
                <i class="fa fa-check"></i>
                Clean up face imperfections, improve and repair photos
            </li>
            <li>
                <i class="fa fa-check"></i>
                Remove people or objects from photos
            </li>
            <li>
                <i class="fa fa-check"></i>
                Master selections, layers, and working with the layers panel
            </li>
            <li>
                <i class="fa fa-check"></i>
                Use creative effects to design stunning text styles
            </li>
            <li>
                <i class="fa fa-check"></i>
                working with the layers panel
            </li>
            <li>
                <i class="fa fa-check"></i>
                Cut away a person from their background
            </li>
        </ul>
    </div>
</div>
                <div class="tutori-course-curriculum" >
    <div class="curriculum-scrollable">
        <ul class="curriculum-sections">
		<?php  $curriculum_data_array = get_field('curriculum_main_group');?>
		<?php if($curriculum_data_array != ''){ ?> 
		<?php 
			foreach($curriculum_data_array as $curriculum_main_sections ) {
				foreach($curriculum_main_sections as $curriculum_section) {
		?>
			<li class="section">
                <div class="section-header">
                    <div class="section-left">
                        <h5 class="section-title"><?php echo $curriculum_section['curriculum_heading'];?></h5>
                        <p class="section-desc"><?php echo $curriculum_section['curriculum_details'];?></p>
                    </div>
                </div>
  
                <ul class="section-content">
						<?php  $curriculum_row_group = $curriculum_section['curriculum_row_group'];?>
						<?php if($curriculum_row_repeater != '' ){ ?>
						<?php 
							//print_r($curriculum_row_group);
							foreach($curriculum_row_group as $curriculum_row_repeater ) {
								foreach($curriculum_row_repeater as $curriculum_row) {
						?>
								<li class="course-item course-item-lp_<?php echo $curriculum_row['curriculum_type'];?>">
									<a class="section-item-link" href="#">
										<span class="item-name"><?php echo $curriculum_row['curriculum_row_title']; ?></span>
										<div class="course-item-meta">
										<?php if($curriculum_row['curriculum_questions'] != ''){ ?> <span class="item-meta count-questions"><?php echo $curriculum_row['curriculum_questions']; ?></span> <?php }; ?>
										<?php if($curriculum_row['curriculum_lesson_duration'] != ''){ ?> 	<span class="item-meta duration"><?php echo $curriculum_row['curriculum_lesson_duration']; ?></span><i class="fa item-meta course-item-status trans"></i><?php }; ?>
										</div>
									</a>
								</li>
						<?php
								}
							} 
						?>
					<?php }?>
                    
                </ul>
            </li>
            <!-- section end -->
			<?php
			}
		}
	?>
<?php }; ?>
            


        </ul>
        <!-- Main ul end -->
    </div>
</div>
                <div id="course-reviews ">
    <h4 class="course-title mb-4">Reviews</h4>
    <ul class="course-reviews-list course-reviews-2">
        <li>
            <div class="course-review ">
                <div class="course-single-review">
                    <div class="user-image">
                        <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="user-content user-review-content">
                       <div class="review-header mb-10">
                            <h4 class="user-name">Tutori</h4>
                            <p class="review-title">Cover all topicc  </p>
                            <div class="rating review-stars-rated">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half"></i></a>
                            </div>
                        </div>
                        <div class="review-text">
                            <div class="review-content">
                            The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.                                                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>	
        <li>
            <div class="course-review">
                <div class="course-single-review">
                    <div class="user-image">
                        <img src="assets/images/blog/author.jpg" alt="" class="img-fluid">
                    </div>

                    <div class="user-content user-review-content">
                       <div class="review-header mb-10">
                            <h4 class="user-name">Tutori</h4>
                            <p class="review-title">Cover all topicc  </p>
                            <div class="rating review-stars-rated">
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star"></i></a>
                                <a href="#"><i class="fa fa-star-half"></i></a>
                            </div>
                        </div>
                        <div class="review-text">
                            <div class="review-content">
                            The course identify things we want to change and then figure out the things that need to be done to create the desired outcome. The course helped me in clearly define problems and generate a wider variety of quality solutions. Support more structures analysis of options leading to better decisions.                                                     
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>			
    </ul>
</div>
            </div>

            <div class="col-xl-4 col-lg-5">
                     <!-- Course Sidebar start -->
     <div class="course-sidebar course-sidebar-3 mt-5 mt-lg-0">
        <div class="course-widget course-details-info ">
            <div class="course-thumbnail">
                <img src="assets/images/course/img_02.jpg" alt="" class="img-fluid w-100">
            </div>

            <div class="course-sidebar-details">
                <div class="price-header">
                    <h2 class="course-price">$<?php the_field('course_current_price'); ?> <span>$<?php the_field('course_regular_price'); ?></span></h2>
                    <span class="course-price-badge onsale"><?php echo 100 - floor(get_field('course_current_price') / get_field('course_regular_price') * 100); ?>  % off</span>
                </div>
                <ul class="course-sidebar-list">
                    <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="far fa-sliders-h"></i>Level</span>
                            Beginnner
                        </div>
                    </li>
        
                     <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="fas fa-play-circle"></i>Lectures</span>
                            2
                        </div>
                    </li>
                     <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="far fa-user"></i>Students</span>
                            20
                        </div>
                    <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="far fa-clock"></i>Duration</span>
                            6 hours
                        </div>
                    </li>
                        <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="far fa-globe"></i>Language</span>
                            English
                        </div>
                    </li>
        
                    <li>
                        <div class="d-flex justify-content-between align-items-center">
                            <span><i class="far fa-calendar"></i>Updated </span>
                            October 15, 2022
                        </div>
                    </li>
                </ul>
    
                <div class="buy-btn">
                    <button class="button button-enroll-course btn btn-main rounded">
                        <i class="far fa-shopping-cart me-2"></i> Enroll Course 
                    </button>
                </div>
    
                <div class="course-meterial">
                    <h4 class="mb-3">Material Includes</h4>
                    <ul class="course-meterial-list">
                        <li><i class="fal fa-long-arrow-right"></i>Videos</li>
                        <li><i class="fal fa-long-arrow-right"></i>Files For Development</li>
                        <li><i class="fal fa-long-arrow-right"></i>Documentation Files</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Sidebar end -->
                <div class="course-latest">
    <h4 class="mb-4">Popular Courses</h4>
    <ul class="recent-posts course-popular">
        <li>
            <div class="widget-post-thumb">
                <a href="#"><img src="assets/images/course/course-1.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="widget-post-body">
                <h6> <a href="#">Wordpress Theme Development</a></h6>
                <h5>$120</h5>
            </div>
        </li>
        <li>
            <div class="widget-post-thumb">
                <a href="#"><img src="assets/images/course/course-2.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="widget-post-body">
                <h6> <a href="#">mastering Photoshop for beginners</a></h6>
                <h5>$100</h5>
            </div>
        </li>
        <li>
            <div class="widget-post-thumb">
                <a href="#"><img src="assets/images/course/course-3.jpg" alt="" class="img-fluid"></a>
            </div>
            <div class="widget-post-body">
                <h6> <a href="#">Photography mastering adobe tool</a></h6>
                <h5>$100</h5>
            </div>
        </li>
    </ul>
</div>
           </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
