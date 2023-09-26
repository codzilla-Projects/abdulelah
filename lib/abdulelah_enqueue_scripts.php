<?php get_header(); ?>



<main class="main-root">



        <div id="dsn-scrollbar">

            <div class="main-content">

                <!-- ========== Slider Parallax ========== -->

                <div class="main-slider full-width has-horizontal p-relative w-100 h-100-v dsn-header-animation" data-dsn-header="parallax">

                    <div class="content-slider p-relative w-100 h-100 over-hidden v-dark-head">

                        <div class="bg-container  dsn-hero-parallax-img p-relative w-100 h-100" id="dsn-hero-parallax-img">

                            <div class="slide-inner h-100">

                                <div class="swiper-wrapper">

                                    <?php

                                        $slides_no  = get_option('number_of_slides');

                                        $slides     = mohamed_get_sliders($slides_no);

                                        while ($slides->have_posts()): $slides->the_post(); $slideID = get_the_ID();

                                    ?>

                                        <div class="slide-item swiper-slide over-hidden">
                                            <?php  
                                            $videoUrl   = get_post_meta( $slideID, 'mohamed_slider_video_url', true );
                                            $youtubeUrl = get_post_meta( $slideID, 'mohamed_slider_youtube_url', true );
                                            $imageUrl   = get_the_post_thumbnail_url();
                                            if (empty($videoUrl)): ?>
                                                <div class="image-bg cover-bg w-100 h-100 " data-overlay="6"
                                                    data-swiper-parallax="85%" data-swiper-parallax-scale="1.1">

                                                    <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= $imageUrl ?>" alt="">
                                                    

                                                </div>
                                            <?php else: ?>
                                                <div class="image-bg cover-bg w-100 h-100">
                                                    <div data-dsn="video" data-overlay="6">
                                                        <video class="bg-image cover-bg dsn-video"
                                                               poster="assets/img/3-min.jpg" autoplay loop muted>
                                                            <source src="<?=$videoUrl?>" type="video/mp4">

                                                        </video>
                                                    </div>
                                                </div>
                                            <?php endif?>
                                            <div class="slide-content p-absolute ">

                                                <div class="content p-relative">

                                                    <p class="max-w570 mb-15 description"><?= get_post_meta($slideID, 'mohamed_slider_subtitle', true) ?></p>

                                                    <div class="d-block"></div>

                                                    <h1 class="title user-no-selection d-inline-block text-uppercase">

                                                        <?php the_title(); ?>

                                                    </h1>

                                                    <div class="d-block"></div>


                                                    <?php if (!empty(get_post_meta( $slideID, 'mohamed_slider_link_text', true ))): ?>
                                                        
                                                    
                                                    <a href="<?= get_post_meta($slideID, 'mohamed_slider_link_url', true) ?>" target="_blank" class="mt-30 dsn-button link-custom">

                                                        <span class="dsn-border border-color-reverse-color"></span>

                                                        <?= get_post_meta( $slideID, 'mohamed_slider_link_text', true ) ?>

                                                    </a>
                                                    <?php endif ?>
                                                    <?php if ( empty( $videoUrl ) && !empty( $youtubeUrl ) ): ?>
                                                        <a href="<?= $youtubeUrl ?>" class="play-btn no-height vid dsn-load-animate slider-vid">
                                                            <div
                                                                class="d-flex d-flex align-items-center justify-content-center text-center">
                                                                <span
                                                                    class="play-icon d-flex align-items-center justify-content-center text-center"
                                                                    data-dsn="parallax"> <i class="fas fa-play"></i>
                                                                </span>

                                                                <span class="text"><?= __('Play Video','mohamed'); ?></span>
                                                            </div>
                                                        </a>
                                                    <?php endif; ?>

                                                </div>

                                            </div>

                                        </div>

                                    <?php endwhile; wp_reset_postdata(); ?>

                                </div>



                            </div>

                        </div>



                        <div class="dsn-slider-content p-absolute h-100 w-100 ">



                            <div class="dsn-container  d-flex align-items-center justify-content-center text-center">

                            </div>

                        </div>

                    </div>







                    <div class="control-nav p-absolute w-100 d-flex justify-content-center  dsn-container v-dark-head">

                        <div class="prev-container">

                            <div class="container-inner">

                                <div class="triangle"></div>

                                <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

                                    <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"

                                        stroke-miterlimit="10">

                                        <circle cx="12" cy="12" r="10.5"></circle>

                                    </g>

                                </svg>

                            </div>

                        </div>



                        <div class="slider-counter d-flex align-items-center">

                            <span class="slider-current-index">01</span>

                            <span class="slider-counter-delimiter"></span>

                            <span class="slider-total-index">05</span>

                        </div>



                        <div class="next-container">

                            <div class="container-inner">

                                <div class="triangle"></div>

                                <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24"

                                    viewBox="0 0 24 24">

                                    <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"

                                        stroke-miterlimit="10">

                                        <circle cx="12" cy="12" r="10.5"></circle>

                                    </g>

                                </svg>

                            </div>

                        </div>



                    </div>

                </div>

                <!-- ========== End Slider Parallax ========== -->





                <div class="wrapper">

                    <!-- ========== About Section ========== -->

                    <?php if (empty(get_option('mohamed_about_hidden'))): ?>

                        <section  class="about-section full-width section-padding v-light" data-dsn-title="About Us">

                            <div class="container">

                                <div class="row">

                                    <div class="col-lg-6">

                                        <div class="box-img box-img-tow-col d-flex h-100">

                                            <div class="img-item pr-15 w-50 mb-80 ">

                                                <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= get_option('mohamed_about_bgOne_img') ?>" alt="">

                                            </div>



                                            <div class="img-item w-50 pl-15 mt-80">

                                                <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= get_option('mohamed_about_bgTwo_img') ?>" alt="">

                                            </div>

                                        </div>

                                    </div>



                                    <div class="col-lg-6">

                                        <div class="box-info ">

                                            <div class="mb-30">

                                                <p class="sub-heading line-shap line-shap-after mb-15">

                                                    <span class="line-bg-right"><?= get_option('mohamed_about_smallTitle') ?>

                                                    </span>



                                                </p>

                                                <h2 class="section-title"><?= get_option('mohamed_about_title') ?></h2>

                                            </div>



                                            <h5 class="sm-title-block mb-30"><?= get_option('about_smallContent') ?></h5>



                                            <p> <?= get_option('about_content') ?></p>


                                            <?php if (!empty(get_option('mohamed_about_linkText'))): ?>
                                                
                                            
                                            <a href="<?= get_option('mohamed_about_linkUrl') ?>" class="mt-30 effect-ajax dsn-button">

                                                <span class="dsn-border border-color-reverse-color"></span>

                                                <?= get_option('mohamed_about_linkText') ?>

                                            </a>
                                            <?php endif ?>
                                        </div>

                                    </div>

                                </div>

                            </div>
                            
                        </section>
                        <div id="about-section"></div>
                    <?php endif; ?>

                    <!-- ========== End about section ========== -->



                     <!-- ==========  box description move  ========== -->

                    <?php if (empty(get_option('mohamed_video_hidden'))): ?>

                        <div  class="box-seat salem_video box-seat-parallax " data-dsn-title="Video">



                            <div class="inner-img h-100-v" data-dsn-grid="move-up" data-overlay="2">

                                <img class="transform-3d has-bigger-scale" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="

                                data-dsn-src="<?= get_option('mohamed_video_bg_img') ?>" alt="">

                            </div>

                            <div class="pro-text box-padding" data-dsn-grid="move-section"

                                data-dsn-responsive="tablet">

                                <div class="video-inner p-relative h-100 v-dark-head">

                                    <a href="<?= get_option('mohamed_video_linkUrl') ?>"

                                        class="play-btn d-flex align-items-center justify-content-center text-center v-middle vid">

                                        <span class="text">Play</span>

                                        <span

                                            class="play-icon d-flex align-items-center justify-content-center text-center"

                                            data-dsn="parallax"> <i class="fas fa-play"></i>

                                        </span>



                                        <span class="text">Video</span>

                                    </a>

                                </div>

                            </div>

                            

                        </div>
                        <div id="salem_video"></div>
                    <?php endif; ?>

                    <!-- ========== End  box description move ========== -->



                    <!-- ========== facts-section ========== -->

                    <?php if(empty(get_option('mohamed_counter_hidden'))): ?>

                        <div  class="facts-section p-relative section-padding background-section section-margin v-light over-hidden" data-dsn-title="<?= get_option('mohamed_counter_title') ?>" 
                        data-dsn-animate-multi data-dsn-animate="section">

                            <h2 class = "section-title" ><?= get_option('mohamed_counter_title') ?></h2>

                            <div class="bg-circle-dotted"></div>

                            <div class="bg-circle-dotted bg-circle-dotted-right"></div>



                            <div class="container">

                                <?php $numbers = [
                                    empty( get_option('mohamed_counterOne_hidden') ) && !empty(get_option('mohamed_counterOne_number')),
                                    empty( get_option('mohamed_counterTwo_hidden') ) && !empty(get_option('mohamed_counterTwo_number')),
                                    empty( get_option('mohamed_counterThree_hidden') ) && !empty(get_option('mohamed_counterThree_number')),
                                    empty( get_option('mohamed_counterFour_hidden') ) && !empty(get_option('mohamed_counterFour_number')),
                                    empty( get_option('mohamed_counterFive_hidden') ) && !empty(get_option('mohamed_counterFive_number')),
                                ];
                                $count = 0;
                                foreach ($numbers as $existence):
                                    if ($existence) $count++;
                                endforeach;?>
                                <div class="d-grid grid-lg-<?= $count ?> grid-sm-2">

                                    <?php 
                                    $number = get_option('mohamed_counterOne_number');
                                    if ( empty( get_option('mohamed_counterOne_hidden') ) && !empty($number)): ?>

                                        <div class="facts-item">

                                            <div class="text-center p-relative dsn-up">
                                                <h5 class = "number">
                                                    <span class="has-animate-number"><?= $number ?></span>
                                                </h5>

                                                <h6 class="sm-title-block v-middle w-100"><?= get_option('mohamed_counterOne_content') ?></h6>

                                            </div>

                                        </div>

                                    <?php endif; ?>



                                    <?php 
                                    $number = get_option('mohamed_counterTwo_number');
                                    if ( empty( get_option('mohamed_counterTwo_hidden') ) && !empty($number)): ?>
                                        <div class="facts-item">

                                            <div class="text-center p-relative dsn-up">
                                                <h5 class = "number">
                                                    <span class="has-animate-number"><?= $number ?></span>
                                                </h5>

                                                <h6 class="sm-title-block v-middle w-100"><?= get_option('mohamed_counterTwo_content') ?></h6>

                                            </div>

                                        </div>

                                    <?php endif; ?>


                                    <?php 
                                    $number = get_option('mohamed_counterThree_number');
                                    if ( empty( get_option('mohamed_counterThree_hidden') ) && !empty($number)): ?>
                                        <div class="facts-item">

                                            <div class="text-center p-relative dsn-up">
                                                <h5 class = "number">
                                                    <span class="has-animate-number"><?= $number ?></span>
                                                </h5>

                                                <h6 class="sm-title-block v-middle w-100"><?= get_option('mohamed_counterThree_content') ?></h6>

                                            </div>

                                        </div>

                                    <?php endif; ?>


                                    <?php 
                                    $number = get_option('mohamed_counterFour_number');
                                    if ( empty( get_option('mohamed_counterFour_hidden') ) && !empty($number)): ?>
                                        <div class="facts-item">

                                            <div class="text-center p-relative dsn-up">
                                                <h5 class = "number">
                                                    <span class="has-animate-number"><?= $number ?></span>
                                                </h5>

                                                <h6 class="sm-title-block v-middle w-100"><?= get_option('mohamed_counterFour_content') ?></h6>

                                            </div>

                                        </div>

                                    <?php endif; ?>
                                    
                                    <?php 
                                    $number = get_option('mohamed_counterFive_number');
                                    if ( empty( get_option('mohamed_counterFive_hidden') ) && !empty($number)): ?>

                                        <div class="facts-item">

                                            <div class="text-center p-relative dsn-up">
                                                <h5 class = "number">
                                                    <span class="has-animate-number"><?= $number ?></span>
                                                </h5>

                                                <h6 class="sm-title-block v-middle w-100"><?= get_option('mohamed_counterFive_content') ?></h6>

                                            </div>

                                        </div>

                                    <?php endif; ?>



                                </div>

                            </div>

                        </div>
                        <div id="facts-section"></div>
                    <?php endif; ?>

                    <!-- ========== end facts-section ========== -->



                    <!-- ========== services Section ========== -->

                    <?php

                    if (empty(get_option('mohamed_services_hidden'))):

                        $services_no = get_option('mohamed_services_number');

                        $services = mohamed_get_services($services_no);

                        if ($services->have_posts()): ?>

                            <section class="our-blog our-blog-classic our-blog-full-img section-margin p-relative dsn-swiper"

                                data-dsn-animate="section" data-dsn-option='{"slidesPerView":2  }' data-dsn-title="Services">

                                <div class="container mb-70 d-flex text-center flex-column align-items-center">

                                    <p class="sub-heading line-shap line-shap-after mb-15">

                                        <span class="line-bg-left"><?= get_option('mohamed_services_smallTitle'); ?></span>

                                    </p>

                                    <h2 class="section-title"><?= get_option('mohamed_services_title'); ?></h2>

                                </div>



                                <div class="swiper-container">

                                    <div class="swiper-wrapper">

                                        <?php

                                            while ($services->have_posts()): $services->the_post();

                                        ?>

                                            <div class="swiper-slide blog-classic-item">

                                                <div class=" blog-item p-relative d-flex align-items-center h-100 w-100"

                                                    data-swiper-parallax-scale="0.85">



                                                    <div class="box-img over-hidden">

                                                        <img class="cover-bg-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-dsn-src="<?= get_the_post_thumbnail_url(); ?>" alt="">

                                                    </div>

                                                    <div class="box-content p-relative">



                                                        <div class="box-content-body">



                                                            <h4 class="title-block mb-20">

                                                                <p><?= the_title() ?></p>

                                                            </h4>

                                                            <p><?= the_excerpt() ?></p>

                                                        </div>

                                                    </div>

                                                </div>

                                            </div>

                                        <?php endwhile; wp_reset_postdata(); ?>

                                    </div>

                                    <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">



                                        <div class="swiper-next">

                                            <div class="next-container">

                                                <div class="container-inner">

                                                    <div class="triangle"></div>

                                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"

                                                        height="24" viewBox="0 0 24 24">

                                                        <g class="circle-wrap" fill="none" stroke-width="1"

                                                            stroke-linejoin="round" stroke-miterlimit="10">

                                                            <circle cx="12" cy="12" r="10.5"></circle>

                                                        </g>

                                                    </svg>

                                                </div>

                                            </div>

                                        </div>



                                        <div class="swiper-pagination"></div>



                                        <div class="swiper-prev">

                                            <div class="prev-container">

                                                <div class="container-inner">

                                                    <div class="triangle"></div>

                                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">

                                                        <g class="circle-wrap" fill="none" stroke-width="1"

                                                            stroke-linejoin="round" stroke-miterlimit="10">

                                                            <circle cx="12" cy="12" r="10.5"></circle>

                                                        </g>

                                                    </svg>

                                                </div>

                                            </div>

                                        </div>



                                    </div>

                                </div>



                            </section>
                            <div id="our-blog"></div>
                        <?php endif;

                    endif;?>

                    <!-- ========== End services Section ========== -->



                     <!-- ========== testimonial Section ========== -->

                     <?php if (empty(get_option('mohamed_testimonials_hidden'))): ?>

                        <section  class="testimonials testimonials-personal section-padding section-margin  v-light" data-dsn-title="testimonials">

                            <div class="container mb-70 d-flex text-left flex-column align-items-start">

                                <p class="sub-heading line-shap line-shap-after mb-15">

                                    <span class="line-bg-left"><?= get_option('mohamed_testimonials_smallTitle') ?></span>



                                </p>

                                <h2 class="section-title"><?= get_option('mohamed_testimonials_title') ?></h2>

                            </div>



                            <div class="container">

                                <div class="testimonials-box box-padding p-relative w-100 background-section pt-0">

                                    <div class="testimonials-inner p-relative w-100 dsn-swiper"

                                        data-dsn-controller=".testimonial-content"

                                        data-dsn-option='{"slidesPerView":3,"spaceBetween":50 }'>



                                        <div class="testimonial-nav text-center">

                                            <div class="testimonial-nav-inner">

                                                <div class="swiper-container">

                                                    <div class="swiper-wrapper">

                                                        <?php

                                                            $testimonials_no = get_option('mohamed_testimonials_number');

                                                            $testimonials_no = (empty($testimonials_no)) ? false : $testimonials_no ;

                                                            $testimonials = mohamed_get_testimonials($testimonials_no);

                                                            while ($testimonials->have_posts()): $testimonials->the_post();$testimonial_id = get_the_ID();

                                                        ?>

                                                            <div class="swiper-slide">

                                                                <div class="box-text" data-swiper-parallax="30%"

                                                                    data-swiper-parallax-opacity="0">

                                                                    <h4 class="title-block mb-10"><?php the_title(); ?></h4>

                                                                    <h5 class="sm-title-block"><?= rwmb_meta( 'testimonial_date' ) ?></h5>

                                                                </div>

                                                            </div>

                                                        <?php endwhile; wp_reset_postdata();?>

                                                    </div>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="testimonial-content text-center">

                                            <div class="swiper-container">

                                                <div class="swiper-wrapper">

                                                    <?php while ($testimonials->have_posts()): $testimonials->the_post(); ?>

                                                        <div class="swiper-slide">

                                                            <p class="p-larg" data-swiper-parallax="90%"

                                                                data-swiper-parallax-opacity="0"><?= the_content(); ?>

                                                            </p>

                                                        </div>

                                                    <?php endwhile; wp_reset_postdata(); ?>

                                                </div>



                                                <div class="dsn-pagination mt-30 dsn-container d-flex justify-content-between">



                                                    <div class="swiper-next">

                                                        <div class="next-container">

                                                            <div class="container-inner">

                                                                <div class="triangle"></div>

                                                                <svg class="circle" xmlns="http://www.w3.org/2000/svg"

                                                                    width="24" height="24" viewBox="0 0 24 24">

                                                                    <g class="circle-wrap" fill="none" stroke-width="1"

                                                                        stroke-linejoin="round" stroke-miterlimit="10">

                                                                        <circle cx="12" cy="12" r="10.5"></circle>

                                                                    </g>

                                                                </svg>

                                                            </div>

                                                        </div>

                                                    </div>



                                                    <div class="swiper-pagination"></div>



                                                    <div class="swiper-prev">

                                                        <div class="prev-container">

                                                            <div class="container-inner">

                                                                <div class="triangle"></div>

                                                                <svg class="circle" xmlns="http://www.w3.org/2000/svg"

                                                                    viewBox="0 0 24 24">

                                                                    <g class="circle-wrap" fill="none" stroke-width="1"

                                                                        stroke-linejoin="round" stroke-miterlimit="10">

                                                                        <circle cx="12" cy="12" r="10.5"></circle>

                                                                    </g>

                                                                </svg>

                                                            </div>

                                                        </div>

                                                    </div>



                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </section>
                        <div id="testimonials"></div>
                    <?php endif; ?>

                    <!-- ========== End testimonial Section ========== -->





                    <!-- ========== Contact Section ========== -->

                    <?php if (empty(get_option('mohamed_contact_hidden'))): ?>

                        <div class="container root-contact" data-dsn-title="Contact">



                            <div class="box-contact-inner section-margin">

                                <div class="row align-items-center">

                                    <div class="col-lg-7">

                                        <div class="form-box">

                                            <div class="line line-top"></div>

                                            <div class="line line-bottom"></div>

                                            <div class="line line-left"></div>

                                            <div class="line line-right"></div>



                                            <div class="mb-30 d-flex text-left flex-column align-items-start">

                                                <p class="sub-heading line-shap line-shap-before mb-15">

                                                    <span class="line-bg-right"><?= get_option('mohamed_contact_smallTitle') ?></span>

                                                </p>

                                                <h2 class="section-title  title-cap">

                                                    <?= get_option('mohamed_contact_title') ?>

                                                </h2>

                                            </div>

                                            <p class="mb-30">

                                                <?= get_option('contact_content'); ?>

                                            </p>



                                            <?= do_shortcode( get_option('contact_shortcode') ) ?>

                                        </div>

                                    </div>



                                    <div class="col-lg-5">

                                        <div class="box-info-contact">



                                            <ul>

                                                <li>

                                                    <h5 class="title-block mb-15">Contact</h5>

                                                    <p class="text-p "><?= get_option('mohamed_phone') ?></p>

                                                    <div class="over-hidden mt-5">

                                                        <a class="link-hover" data-hover-text="<?= get_option('mohamed_email') ?>"

                                                            href="mailto:<?= get_option('mohamed_email') ?>"><?= get_option('mohamed_email') ?></a>

                                                    </div>



                                                </li>

                                                <li>

                                                    <h5 class="title-block mb-15">Address</h5>

                                                    <p class="text-p"><?= get_option('mohamed_location') ?></p>

                                                </li>
                                                <?php
                                                $fb = get_option('mohamed_fb');
                                                $insta = get_option('mohamed_insta');
                                                $linkedin = get_option('mohamed_linkedin');
                                                $twitter =  get_option('mohamed_twitter');
                                                ?>
                                                    <li>

                                                        <h5 class="title-block mb-15">Follow Us</h5>

                                                        <?php if (!empty($insta)): ?>
                                                            <div class="social-item over-hidden">

                                                                <a class="link-hover" data-hover-text="Instagram." href="<?= $insta ?>"

                                                                    target="_blank" rel="nofollow">Instagram.</a>

                                                            </div>
                                                        <?php endif; ?>

                                                        <?php if (!empty($fb)): ?>
                                                            <div class="social-item over-hidden">

                                                                <a class="link-hover" data-hover-text="Facebook." href="<?= $fb ?>"

                                                                    target="_blank" rel="nofollow">Facebook.</a>

                                                            </div>
                                                        <?php endif; ?>

                                                        <?php if (!empty($twitter)): ?>
                                                            <div class="social-item over-hidden">

                                                                <a class="link-hover" data-hover-text="Twitter." href="<?= $twitter ?>"

                                                                    target="_blank" rel="nofollow">Twitter.</a>

                                                            </div>
                                                        <?php endif; ?>

                                                        <?php if (!empty($linkedin)): ?>
                                                            <div class="social-item over-hidden">

                                                                <a class="link-hover" data-hover-text="Linkedin." href="<?= $linkedin ?>"

                                                                    target="_blank" rel="nofollow">Linkedin.</a>

                                                            </div>
                                                        <?php endif; ?>

                                                    </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                        <div id="contact"></div>
                    <?php endif; ?>

                    <!-- ========== End Contact Section ========== -->





                    <!-- ========== gallery Section ========== -->

                    <?php if (empty(get_option('mohamed_galleries_hidden'))):

                        $galleries = mohamed_get_Galleries(get_option('mohamed_galleries_number'));

                        if ($galleries->have_posts()): ?>

                            <section class="work-section p-relative section-padding section-margin  v-light" data-dsn-title="Gallery">

                                <div class="container mb-70 d-flex text-left flex-column align-items-start">

                                    <p class="sub-heading line-shap line-shap-after mb-15">

                                        <span class="line-bg-left"><?= get_option('mohamed_galleries_smallTitle') ?></span>



                                    </p>

                                    <h2 class="section-title"><?= get_option('mohamed_galleries_title') ?></h2>

                                </div>





                                <div class="has-popup over-hidden p-relative">

                                    <div class="container">

                                        <div class="d-grid grid-md-3  over-hidden">

                                            <?php while ($galleries->have_posts()) : $galleries->the_post(); $id = get_the_ID();

                                                $img   = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'full');?>

                                                <a href="<?= $img[0] ?>"

                                                    class="p-relative over-hidden d-flex h-v-60">

                                                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="

                                                        data-dsn-src="<?= $img[0] ?>"

                                                        data-dsn-srcset="<?= $img[0] ?> 1800w,<?= $img[0] ?> 768w"

                                                        alt="" class="cover-bg-img">

                                                </a>

                                            <?php endwhile; wp_reset_postdata(); ?>

                                        </div>

                                    </div>

                                </div>



                            </section>
                            <div id="work-section"></div>
                        <?php endif; ?>

                    <?php endif; ?>

                    <!-- ========== End gallery Section ========== -->



                    <!-- ==========  next page  ========== -->

                    <?php if (empty(get_option('mohamed_lastSection_hidden'))): ?>

                        <section class="next-page p-relative section-padding  border-top">

                            <div class="bg-circle-dotted"></div>

                            <div class="bg-circle-dotted bg-circle-dotted-right"></div>

                            <div class="container">

                                <div class="c-wapp d-flex justify-content-between">

                                    <div class="d-flex flex-column">

                                        <p class="sub-heading line-shap line-shap-after ">

                                            <span class="line-bg-left">

                                                <?= get_option('mohamed_lastSection_smallTitle') ?>

                                            </span>

                                        </p>

                                        <h2 class="section-title max-w750 mt-15">

                                            <?= get_option('mohamed_lastSection_title') ?>

                                        </h2>





                                    </div>



                                    <div class="button-box d-flex justify-content-end align-items-center">

                                        <div>



                                            <a href="tel:<?= get_option('mohamed_phone') ?>" class="mt-30 effect-ajax dsn-button p-relative">

                                                <span class="dsn-border border-color-reverse-color"></span><?= get_option('mohamed_lastSection_btnTitle') ?>

                                            </a>

                                        </div>

                                    </div>



                                </div>

                            </div>

                        </section>

                    <?php endif; ?>

                    <!-- ========== End next page ========== -->

                </div>





<?php get_footer(); ?>
