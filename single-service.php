<?php

    get_header();
    
    get_template_part('page_title');

    if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();

?>

<!-- =============== Service-details-section start  =============== -->

<div class="service-details pt-80 pb-80" id="service-details">
        <div class="container">
            <div class="row justify-content-center gy-5">
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="service-sidebar">
                        <div class="service-widget service-list-area">
                            <h4 class="sidebar-title"><?= __('All Services', 'abdulelah') ?></h4>
                            <ul class="service-list">
                                <?php 
                                    $services = abdulelah_get_services(3);
                                    while ($services->have_posts()): $services->the_post();
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a>
                                    <svg width="20" height="16" viewBox="0 0 20 16" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.7496 15.4594C12.4954 15.4594 12.2385 15.41 11.9928 15.3082C11.2572 15.0038 10.7819 14.2953 10.7819 13.5034V11.8225C10.7819 11.3909 11.1316 11.0411 11.5631 11.0411C11.9946 11.0411 12.3445 11.3909 12.3445 11.8225V13.5034C12.3445 13.7374 12.5165 13.8337 12.5903 13.8644C12.6656 13.8955 12.8587 13.9497 13.0272 13.7811L18.2094 8.59248C18.5147 8.28685 18.5147 7.78956 18.2094 7.48393L13.0272 2.29548C12.8587 2.12687 12.6656 2.18088 12.5905 2.21201C12.5165 2.24268 12.3445 2.33912 12.3445 2.57319V7.29594C12.3445 8.1576 11.6435 8.85859 10.7819 8.85859H0.781251C0.349732 8.85859 0 8.50886 0 8.07734C0 7.64582 0.349732 7.29594 0.781251 7.29594H10.7819V2.57319C10.7819 1.78126 11.2572 1.07264 11.9928 0.768223C12.731 0.462742 13.571 0.628758 14.1327 1.1912L19.3149 6.37965C20.2283 7.29426 20.2283 8.7823 19.3149 9.69691L14.1327 14.8854C13.7579 15.2606 13.2593 15.4592 12.7496 15.4594Z"/>
                                    </svg>
                                </li>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                        <?php 
                            $service_smalTitle  = get_post_meta($post_id, 'abdulelah_service_sidebar_smallTitle', true);
                            $service_title      = get_post_meta($post_id, 'abdulelah_service_sidebar_title', true);
                            $service_linkTxt    = get_post_meta($post_id, 'abdulelah_service_sidebar_link_text', true);
                            $service_linkUrl    = get_post_meta($post_id, 'abdulelah_service_sidebar_link_url', true);
                            $service_img        = get_post_meta($post_id, 'abdulelah_sidebar_service_img', true);
                            $service_img        = "background-image:linear-gradient(rgba(24, 33, 46, 0.75), rgba(24, 33, 46, 0.75)), url('$service_img')";
                        ?>
                        <div class="service-widget service-banner" style = "<?= $service_img ?>">
                            <span><?= $service_smalTitle ?></span>
                            <h3><?= $service_title ?> </h3>
                            <a href="<?= $service_linkUrl ?>" class="eg-btn btn--primary btn--lg"><?= $service_linkTxt ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="service-details-area">
                        <img src="<?= get_the_post_thumbnail_url() ?>" class="img-fluid" alt="image">
                        <h3><?php the_title(); _e(' service', 'abdulelah'); ?> </h3>
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== Service-details-section end  =============== -->

<?php endwhile; endif;?>

<?php get_footer();?>