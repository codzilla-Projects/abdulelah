<?php
    function abdulelah_get_slides($atts)
    {
        ob_start();
        $x_data = shortcode_atts(
            array(
                'no_slides'   => '3',
            ), $atts
        );
        $no_slides = $x_data['no_slides'];
        $sliders = abdulelah_get_sliders($no_slides);
        if ($sliders->have_posts()) :
    ?>
    <!-- ========== banner3-area start============= -->
    <div class="banner-section3">
        <img src="<?=abdulelah_URL?>assets/images/icons/banner3-circle.svg" class="banner3-circle" alt="image">
        <img src="<?=abdulelah_URL?>assets/images/bg/banner2-vector.png" class="banner3-circle3" alt="image">
        <img src="<?=abdulelah_URL?>assets/images/icons/banner2-circle.svg" class="banner3-circle2" alt="image">
        <ul class="banner-social3 gap-5">
            <?php 
                $facebook = get_option('abdulelah_fb');  
                if(!empty($facebook)) :
            ?>
            <li><a href="<?= $facebook; ?>">Facebook</li>
           <?php endif; ?>
           <?php 
                $twitter = get_option('abdulelah_twitter');  
                if(!empty($twitter)) :
            ?>
             <li><a href="<?= $twitter; ?>">Twitter</a></li>
            <?php endif; ?>
            <?php 
                $instagram = get_option('abdulelah_insta');  
                if(!empty($instagram)) :
            ?>
            <li><a href="<?= $instagram; ?>">Instagram</a></li>
            <?php endif; ?>
        </ul>
        <div class="swiper banner3">
            <div class="swiper-wrapper">
                <?php 
                    while ($sliders->have_posts()) : $sliders->the_post(); $id = get_the_ID();
                    $small_title      = get_post_meta( $id, 'abdulelah_slider_title', true );
                    $first_link_txt   = get_post_meta( $id, 'abdulelah_slider_firstbtn_link_text', true );
                    $first_link_url   = get_post_meta( $id, 'abdulelah_slider_firstbtn_link_url', true );
                    $second_link_text = get_post_meta( $id, 'abdulelah_slider_secondbtn_link_text', true );
                    $second_link_url  = get_post_meta( $id, 'abdulelah_slider_secondbtn_link_url', true );
                ?>
                <div class="swiper-slide">
                    <div class="slider-bg-1 " style="background-image: url(<?php the_post_thumbnail_url()?>);background-size: cover;">
                        <div class="container">
                            <div class="row d-flex justify-content-start align-items-center">
                                <div class="col-xl-7 col-lg-9">
                                    <div class="banner3-content">
                                        <?php if(!empty($small_title)) : ?>
                                        <span><?=$small_title?></span>
                                        <?php endif?>
                                        <h1><?php the_title()?> </h1>
                                        <p><?php the_content()?></p>
                                        <div class="button-group d-flex justify-content-lg-start justify-content-center align-items-center flex-wrap gap-4">
                                            <?php if(!empty($first_link_txt)&&($first_link_url)) : ?>
                                            <a href="<?=$first_link_url?>" class="eg-btn btn--primary3 btn--lg"><?=$first_link_txt ?></a>
                                            <?php endif?>
                                            <?php if(!empty($second_link_text)&&($second_link_url)) : ?>
                                            <a href="<?=$second_link_url?>" class="eg-btn btn--transparent btn--lg"><?=$second_link_text?></a>
                                            <?php endif?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query() ?>
            </div>
        </div>
        <div class="banner3-pagination d-flex justify-content-center flex-column align-items-center gap-2"></div>
    </div>

    
    <?php endif; return ob_get_clean();
    }
    add_shortcode('main_slider', 'abdulelah_get_slides');
    ?>
    <!-- ===============  banner3-area end=============== -->
    <!-- =============== portfolio-section start  =============== -->
    <?php
    function abdulelah_get_service($atts)
    {
        ob_start();
        $x_data = shortcode_atts(
            array(
                'no_service'   => '3',
            ), $atts
        );
        $no_service = $x_data['no_service'];
        $services = abdulelah_get_services($no_service);
        if ($services->have_posts()) :
    ?>
     

    <div class="portfolio-section5 position-relative pt-80 pb-80">
        <img src="assets/images/bg/banner2-vector.png" class="rectangle-dot2" alt="image">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8 col-sm-10">
                    <div class="section-title3 primary4 text-cener">
                        <span>-Our Services-</span>
                        <h3>Company Services </h3>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center">
                <div class="swiper portfolio-slider1 swiper-fix">
                    <div class="swiper-wrapper">
                        <?php while ($services->have_posts()) : $services->the_post(); $id = get_the_ID();?>
                        <div class="swiper-slide">
                            <div class="portfolio-item1 style-4 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                                <div class="portfolio-img">
                                    <img alt="<?php the_title()?>" src="<?php the_post_thumbnail_url()?>">
                                </div>
                                <div class="portfolio-content">
                                    <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                                    <p><?php the_content()?> </p>
                                    <a href="project-details.html" class="text-btn"><?php _e('Read More','abdulelah') ?><i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query() ?>
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
        </div>
    </div>
<?php endif; return ob_get_clean();
}
add_shortcode('main_services', 'abdulelah_get_service');
?>
<!-- =============== portfolio-section end  =============== -->