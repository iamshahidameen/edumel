<?php 
// Template Name: Courses
?>

<?php get_header(); ?>


<!--====== Header End ======-->
<section class="page-header">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-8">
          <div class="title-block">
            <h1><?php the_title(); ?></h1>
            <ul class="header-bradcrumb justify-content-center">
              <li><a href="index.html">Home</a></li>
              <li class="active" aria-current="page">Courses</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</section>
    <!--course section start-->
    <section class="section-padding page" >
        <div class="course-top-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>Showing 1-6 of 8 results</p>
                    </div>
    
                    <div class="col-lg-4">
                        <div class="topbar-search">
                            <form method="get" action="#">
                                <input type="text"  placeholder="Search our courses" class="form-control">
                                <label><i class="fa fa-search"></i></label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">          
            <div class="row justify-content-lg-center">
            <?php echo do_shortcode('[show_courses posts_per_page="6"]'); ?>
                <!-- COURSE END -->
            </div>
        </div>
        <!--course-->
    </section>
    <!--course section end-->


<?php get_footer(); ?>