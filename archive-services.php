<?php 
	/**
	** Template Name: Services Template
	**/
	get_header(); 
	get_template_part('page_title'); 
?>
    <!-- ===============  banner1-area end=============== -->
<?php 
	$services = abdulelah_get_services(-1);
	if($services->have_posts()) :  
?>
    <div class="service-section2 pt-120" id="service">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="section-title3 primary4 text-cener">
                        <span>-<?=$services_page_small_title ?>-</span>
                        <h3><?=$services_page_title ?> </h3>
                    </div>
                </div>
            </div>
              <div class="row position-relative justify-content-center">
                <div class="swiper portfolio-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                    	<?php while($services->have_posts()) : $services->the_post(); ?>
                        <div class="swiper-slide">
                            <div class="portfolio-item1 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <div class="portfolio-img">
                                    <img alt="image" src="<?php the_post_thumbnail_url()?>" alt="<?php the_title()?>">
                                </div>
                                <div class="portfolio-content">
                                    <h4><a href="<?php the_permalink()?>"><?php the_title()?> </a></h4>
                                    <p><?php the_content()?> </p>
                                    <a href="<?php the_permalink()?>" class="text-btn">Read More<i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query();?>
                    </div>
                </div>
                <div class="slider-arrows text-center d-lg-flex d-none  justify-content-between">
                    <div class="portfolio-prev1 swiper-prev-arrow style-2" tabindex="0" role="button" aria-label="Previous slide">
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="22.25"  stroke-width="1.5"/>
                            <path d="M20 27.573V23V18.427C20 18.2574 19.8022 18.1648 19.672 18.2734L14 23L19.672 27.7266C19.8022 27.8352 20 27.7426 20 27.573Z"/>
                            <path d="M32 23.5C32.2761 23.5 32.5 23.2761 32.5 23C32.5 22.7239 32.2761 22.5 32 22.5V23.5ZM19.672 27.7266L19.9921 27.3425V27.3425L19.672 27.7266ZM14 23L13.6799 22.6159L13.219 23L13.6799 23.3841L14 23ZM19.672 18.2734L19.3519 17.8893L19.3519 17.8893L19.672 18.2734ZM32 22.5H20V23.5H32V22.5ZM19.5 23V27.573H20.5V23H19.5ZM19.9921 27.3425L14.3201 22.6159L13.6799 23.3841L19.3519 28.1107L19.9921 27.3425ZM14.3201 23.3841L19.9921 18.6575L19.3519 17.8893L13.6799 22.6159L14.3201 23.3841ZM19.5 18.427V23H20.5V18.427H19.5ZM19.9921 18.6575C19.7967 18.8203 19.5 18.6814 19.5 18.427H20.5C20.5 17.8335 19.8078 17.5093 19.3519 17.8893L19.9921 18.6575ZM19.5 27.573C19.5 27.3186 19.7967 27.1797 19.9921 27.3425L19.3519 28.1107C19.8078 28.4907 20.5 28.1665 20.5 27.573H19.5Z"/>
                        </svg>
                     </div>
                    <div class="portfolio-next1 swiper-next-arrow style-2" tabindex="0" role="button" aria-label="Next slide">
                        <svg width="46" height="46" viewBox="0 0 46 46" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="23" cy="23" r="23"/>
                            <path d="M26 18.427V23V27.573C26 27.7426 26.1978 27.8352 26.328 27.7266L32 23L26.328 18.2734C26.1978 18.1648 26 18.2574 26 18.427Z"/>
                            <path d="M14 22.5C13.7239 22.5 13.5 22.7239 13.5 23C13.5 23.2761 13.7239 23.5 14 23.5V22.5ZM26.328 18.2734L26.0079 18.6575V18.6575L26.328 18.2734ZM32 23L32.3201 23.3841L32.781 23L32.3201 22.6159L32 23ZM26.328 27.7266L26.6481 28.1107L26.6481 28.1107L26.328 27.7266ZM14 23.5H26V22.5H14V23.5ZM26.5 23V18.427H25.5V23H26.5ZM26.0079 18.6575L31.6799 23.3841L32.3201 22.6159L26.6481 17.8893L26.0079 18.6575ZM31.6799 22.6159L26.0079 27.3425L26.6481 28.1107L32.3201 23.3841L31.6799 22.6159ZM26.5 27.573V23H25.5V27.573H26.5ZM26.0079 27.3425C26.2033 27.1797 26.5 27.3186 26.5 27.573H25.5C25.5 28.1665 26.1922 28.4907 26.6481 28.1107L26.0079 27.3425ZM26.5 18.427C26.5 18.6814 26.2033 18.8203 26.0079 18.6575L26.6481 17.8893C26.1922 17.5093 25.5 17.8335 25.5 18.427H26.5Z"/>
                        </svg>
                    </div>
                </div>
            </div>
            <?php if(!empty($services_page_link_text)) :?>
            <div class="row justify-content-center mar-tp-50">
                <div class="col-md-6 text-center">
                    <a href="<?=$services_page_link_url ?>" class="eg-btn btn--primary btn--lg"><?=$services_page_link_text ?></a>
                </div>
            </div>
            <?php endif?>
        </div>
    </div>
<?php endif?>
<?php 
	$number       = 1;
	$features = abdulelah_get_features(-1);
	if($features->have_posts()) :  
?>
    <!-- =============== portfolio-section start  =============== -->

    <div class="portfolio-section pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary1">
                        <span>-<?=$featured_page_small_title?>-</span>
                        <h3><?=$featured_page_title?></h3>
                        <p class="para"><?=$featured_page_content?></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
            	<?php while($features->have_posts()) : $features->the_post(); ?>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="service-item2 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                       <div class="service-content">
                           <span class="sn"><?php if ($number < 10) {echo "0";} ?><?= $number;?></span>
                           <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                           <p class="para"><?php the_content()?></p>
                       </div>
                    </div>
                </div>
                <?php $number++; endwhile; wp_reset_query();?>
            </div>
        </div>
    </div>
    <?php endif?>
    <!-- =============== portfolio-section end  =============== -->

     <!-- =============== join-section start  =============== -->

     <div class="join-section pb-120">
        <div class="container">
            <div class="joinus-area d-flex align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="0.2s" style="background-image: url(<?=$services_page_contact_img?>);">
                <div class="row d-flex align-items-center g-4">
                    <div class="col-lg-7 justify-content-lg-start justify-content-center text-lg-start text-center">
                        <h2><?= $services_page_contact_content?></h2>
                    </div>
                    <div class="col-lg-5 d-flex justify-content-lg-end justify-content-center">
                        <a href="<?=$services_page_contact_link_url?>" class="eg-btn btn--primary capsule joinus-btn"><?=$services_page_contact_link_text?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== join-section end  =============== -->
<?php get_footer()?>