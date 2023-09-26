    <!-- ========== banner1-area start============= -->

    <?php 
        $page_image  = get_the_post_thumbnail_url();
        $page_image_title  = abdulelah_URL.'assets/images/10.jpg'; 
    ?>

    <div class="inner-banner" style="background-image:url('<?php  if(empty($page_image)){ echo $page_image_title;}elseif (is_tax()){echo $page_image_title;} else{ echo $page_image;}?>');">

        <img src="<?=abdulelah_URL?>assets/images/bg/inner-bannerdot.png" class="inner-bannerdot" alt="image">

        <img src="<?=abdulelah_URL?>assets/images/bg/inner-bannerwave.png" class="inner-bannerwave" alt="image">

        <div class="container">

            <div class="row d-flex justify-content-center align-items-center text-center">

                <div class="col-md-10">

                    <h2 class="inner-banner-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">

                        <?php

                            global $page, $paged, $post;

                            if (is_tax()) {

                                $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

                                $term_title = $term->name;

                                echo "$term_title ";

                            } 

                            elseif ( is_404() ) 

                            { 

                              echo __('Page Not Found','abdulelah');

                            }

                            else 

                            {

                                wp_title( '', true, 'right' );

                            }

                        ?>

                    </h2>

                    <nav aria-label="breadcrumb">

                        <ol class="breadcrumb gap-3">

                            <li class="breadcrumb-item"><a href="<?php bloginfo('url')?>"><?php _e('Home','abdulelah')?></a></li>
                            <?php if ( is_singular( 'service' )):
                                $args = array(
                                    'meta_key' => '_wp_page_template',
                                    'meta_value' => 'archive-services.php'
                                );
                                $pg = get_pages($args)[0];
                                $pageURL = get_permalink( $pg->ID );
                            ?>
                                <li class="breadcrumb-item"><a href="<?= $pageURL ?>"><?= __('Services','abdulelah') ?></a></li>
                            <?php elseif( is_singular( 'post' )): 
                                $args = array(
                                    'meta_key' => '_wp_page_template',
                                    'meta_value' => 'archive.php'
                                );
                                $pg = get_pages($args)[0];
                                $pageURL = get_permalink( $pg->ID );
                            ?>
                                <li class="breadcrumb-item"><a href="<?= $pageURL ?>"><?= __('Blog', 'abdulelah') ?></a></li>
                            <?php endif; ?>
                            <li class="breadcrumb-item active" aria-current="page">

                              <?php

                                    global $page, $paged, $post;

                                    if (is_tax()) {

                                        $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

                                        $term_title = $term->name;

                                        echo "$term_title ";

                                    } 

                                    elseif ( is_404() ) 

                                    { 

                                      echo __('Page Not Found','abdulelah');

                                    }

                                    else 

                                    {

                                        wp_title( '', true, 'right' );

                                    }

                                ?>

                           </li>

                        </ol>

                      </nav>

                </div>

            </div>

        </div>

    </div>

    <!-- ===============  banner1-area end=============== -->