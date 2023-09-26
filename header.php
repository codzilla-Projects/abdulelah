<!DOCTYPE html>

<html>

<head>

	<meta charset="<?php bloginfo('charset') ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>

		<?php wp_title('|','true','right') ?>

      <?php bloginfo('name'); ?> 

	</title>
    <link rel="icon" href="<?=get_option('abdulelah_favicon');?>" type="image/gif" sizes="20x20">
	<?php wp_head(); ?>

</head>

<body>

    <!-- preloader -->
    <div class="egns-preloader">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-6">
                    <div class="circle-border">
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <div class="moving-circle"></div>
                        <svg width="180px" height="150px" viewBox="0 0 187.3 93.7" preserveAspectRatio="xMidYMid meet"
                            style="left: 50%; top: 50%; position: absolute; transform: translate(-50%, -50%) matrix(1, 0, 0, 1, 0, 0);">
                            <path stroke="#D90A2C" id="outline" fill="none" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                            <path id="outline-bg" opacity="0.05" fill="none" stroke="#959595" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M93.9,46.4c9.3,9.5,13.8,17.9,23.5,17.9s17.5-7.8,17.5-17.5s-7.8-17.6-17.5-17.5c-9.7,0.1-13.3,7.2-22.1,17.1 c-8.9,8.8-15.7,17.9-25.4,17.9s-17.5-7.8-17.5-17.5s7.8-17.5,17.5-17.5S86.2,38.6,93.9,46.4z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="menu-toggle-btn-full-shape">
        <div class="menu-toggle-wrap bg-white">
            <div class="sidebar-top-area d-flex justify-content-between align-items-center">
                <div class="sidebar-logo px-4 py-3 rounded">
                    <a href="<?php bloginfo('url')?>"><img src="<?=get_option('abdulelah_logo_img')?>" alt="<?php bloginfo('name') ?>"></a>
                </div>
                <div class="cross-icon">
                    <i class='bx bx-x'></i>
                </div>
            </div>
            <div class="sidebar-body">
                <div class="address-card mb-5">
                    <div class="content">
                        <div class="header">
                            <div class="location">
                                <svg width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9 22C9 22 17.25 14.1818 17.25 8.25C17.25 6.06196 16.3808 3.96354 14.8336 2.41637C13.2865 0.869194 11.188 0 9 0C6.81196 0 4.71354 0.869194 3.16637 2.41637C1.61919 3.96354 0.75 6.06196 0.75 8.25C0.75 14.1818 9 22 9 22ZM9 12.375C7.90598 12.375 6.85677 11.9404 6.08318 11.1668C5.3096 10.3932 4.875 9.34402 4.875 8.25C4.875 7.15598 5.3096 6.10677 6.08318 5.33318C6.85677 4.5596 7.90598 4.125 9 4.125C10.094 4.125 11.1432 4.5596 11.9168 5.33318C12.6904 6.10677 13.125 7.15598 13.125 8.25C13.125 9.34402 12.6904 10.3932 11.9168 11.1668C11.1432 11.9404 10.094 12.375 9 12.375Z"/>
                                </svg>
                            </div>
                            <h3><?php _e('Location','abdulelah')?></h3>
                        </div>
                        <ul class="address-list">
                            <?php 
                                $location = get_option('abdulelah_location');  
                                if(!empty($location)) :
                            ?>
                            <li><span>Address:</span><?=$location?></li>
                            <?php endif?>
                            <?php 
                                $phone = get_option('abdulelah_phone');  
                                if(!empty($phone)) :
                            ?>
                            <li><span>Phone:</span><a href="tel:+<?=$phone?>">+<?=$phone?></a></li>
                            <?php endif?>
                            <?php 
                                $email = get_option('abdulelah_email');  
                                if(!empty($email)) :
                            ?>
                            <li><span>Email:</span> <a href="mailto:<?=$email?>"><?=$email?></a></li>
                            <?php endif?>
                        </ul>
                    </div>
                </div>
                <div class="blog-widget-item mb-0">
                    <div class="follow-area">
                        <h5 class="blog-widget-title mb-1"><?php _e('Follow Us','abdulelah')?></h5>
                        <p class="para"><?php _e('Follow us on Social Network','abdulelah')?></p>
                        <div class="blog-widget-body">
                            <ul class="follow-list d-flex flex-row align-items-start gap-4">
                                <?php $facebook = get_option('abdulelah_fb');  
                                if(!empty($facebook)) :
                                ?>
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms"> 
                                    <a href="<?= $facebook; ?>"><span class="bx bxl-facebook"></span></a>
                               </li>
                               <?php endif; ?>
                               <?php $twitter = get_option('abdulelah_twitter');  
                                    if(!empty($twitter)) :
                                    ?>
                                 <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                    <a href="<?= $twitter; ?>"><span class="bx bxl-twitter"></span></a>
                                </li>
                                <?php endif; ?>
                                <?php $instagram = get_option('abdulelah_insta');  
                                    if(!empty($instagram)) :
                                    ?>
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                    <a href="<?= $instagram; ?>"><span class="bx bxl-instagram"></span></a>
                                </li>
                                <?php endif; ?>
                                <?php $youtube = get_option('abdulelah_youtube');  
                                    if(!empty($youtube)) :
                                    ?>
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                    <a href="<?= $youtube; ?>"><span class="bx bxl-youtube"></span></a>
                                </li>
                                <?php endif; ?>
                                <?php $linkedin = get_option('abdulelah_linkedin');  
                                    if(!empty($linkedin)) :
                                    ?>
                                <li class="wow slideInUp" data-wow-delay="0ms" data-wow-duration="1200ms">
                                    <a href="<?= $linkedin; ?>"><span class="bx bxl-linkedin-in"></span></a>
                                </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- =============== search-area start =============== -->

      <div class="mobile-search">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <label><?php _e('What are you lookking for?','abdulelah')?></label>
                    <input type="text" placeholder="<?php _e('Search Blog','abdulelah')?>">
                </div>
                <div class="col-1 d-flex justify-content-end align-items-center gap-2">
                    <div class="search-cross-btn">
                        <i class='bx bx-search-alt-2'></i>
                    </div>
                    <div class="search-cross-btn">
                        <i class="bi bi-x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- =============== search-area end  =============== -->

    <!-- ========== header============= -->

    <header class="header-area style-1 style-3">
        <div class="header-logo">
            <a href="<?php bloginfo('url')?>"><img alt="<?php bloginfo('name')?>" src="<?=get_option('abdulelah_logo_img')?>"></a>
        </div>
        <div class="main-nav">
            <div class="mobile-logo-area d-lg-none d-flex justify-content-between align-items-center">
                <div class="mobile-logo-wrap ">
                     <a href="<?php bloginfo('url')?>"><img alt="<?php bloginfo('name')?>" src="<?=get_option('abdulelah_logo_img')?>"></a>
                </div>
                <div class="menu-close-btn">
                    <i class="bi bi-x-lg text-white"></i>
                </div>
            </div>
            <?php if ( ICL_LANGUAGE_CODE=='ar' ) :?>
            <?php abdulelah_menu_arabic()?>
            <?php else :?>
            <?php abdulelah_menu()?>
            <?php endif?>
            <!-- mobile-search-area -->
            <div class="d-lg-none d-block">
                <form class="mobile-menu-form">
                    <div class="input-with-btn d-flex flex-column">
                        <input type="text" placeholder="<?php _e('Search Blog','abdulelah')?>">
                        <button type="submit" class="eg-btn btn--primary3 btn--sm"><?php _e('Search','abdulelah')?></button>
                    </div>
                </form>
            </div>
        </div>
        <div class="nav-right style-2 d-flex align-items-center gap-5">
            <div class="mobile-menu-btn d-lg-none d-block">
                <h5 class="text-dark mb-0">MENU</h5>
            </div>
            <div class="header-icons d-flex align-items-center">
                <div class="search-btn">
                    <i class="bi bi-search"></i>
                </div>
                <div class="sidebar-btn">
                    <i class="bi bi-list text-dark"></i>
                </div>
            </div>
            <div class="hotline d-xxl-flex d-none">
                <div class="hotline-icon">
                    <svg width="34" height="34" viewBox="0 0 34 34" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1225_6)">
                        <path d="M2.88867 3.31366C1.52734 3.7121 0.451563 4.8078 0.0996094 6.15585C0.0199219 6.45468 0 6.97265 0 8.53319L0.00664063 10.5254L7.37109 16.0039C11.4352 19.0254 14.948 21.5887 15.2004 21.7215C16.3027 22.2926 17.684 22.2926 18.7996 21.7215C19.0719 21.582 22.359 19.1781 26.6289 16.0039L33.9934 10.5254L34 8.53983C34 6.3285 33.9734 6.10936 33.5551 5.28593C33.2363 4.64843 32.5391 3.95116 31.9016 3.63241C30.9453 3.15429 32.134 3.18749 16.9602 3.19413C4.13711 3.19413 3.26055 3.20741 2.88867 3.31366ZM30.5801 6.0164C31.1977 6.34843 31.2973 6.61405 31.3305 7.96874L31.357 9.06444L24.4773 14.1777C19.291 18.0359 17.5312 19.3109 17.3055 19.3773C17.0531 19.4504 16.9469 19.4504 16.7012 19.3773C16.4754 19.3109 14.6891 18.0226 9.52266 14.1777L2.64297 9.06444L2.66953 7.96874C2.68945 7.07226 2.71602 6.83319 2.81563 6.64061C3.04141 6.20897 3.31367 6.00311 3.78516 5.90351C3.91133 5.87694 9.93437 5.86366 17.166 5.8703L30.3145 5.87694L30.5801 6.0164Z"/>
                        <path d="M0.000124167 20.5926C0.000124167 28.1894 -0.0197977 27.7844 0.445046 28.7141C0.757155 29.3316 1.45442 30.0355 2.09192 30.3609C3.03489 30.8457 1.85286 30.8125 17.0001 30.8125C32.1275 30.8125 30.9454 30.8457 31.9017 30.3676C32.5392 30.0488 33.2365 29.3516 33.5552 28.7141C34.0267 27.7844 34.0001 28.1961 33.9868 20.5926L33.9669 13.7461L32.672 14.7023L31.3771 15.6652L31.3439 21.3961C31.3107 26.8348 31.304 27.1402 31.1845 27.3594C31.0118 27.6848 30.8857 27.8176 30.5802 27.9836L30.3146 28.123H17.0001H3.68567L3.42005 27.9836C3.11458 27.8176 2.98841 27.6848 2.81575 27.3594C2.69622 27.1402 2.68958 26.848 2.66966 21.4027L2.64973 15.6785L1.41458 14.7621C0.730593 14.2574 0.139577 13.8191 0.0864523 13.7926C0.0134054 13.7461 0.000124167 14.9082 0.000124167 20.5926Z"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_1225_6">
                        <rect width="34" height="34"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="hotline-info">
                    <span><?php _e('Messge Us','abdulelah')?></span>
                    <h6><a href="mailto:<?=get_option('abdulelah_email')?>"><?=get_option('abdulelah_email')?></a></h6>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== header end============= -->