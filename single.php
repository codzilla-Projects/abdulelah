<?php

    get_header();

    if ( have_posts() ) : while ( have_posts() ) : the_post(); $post_id = get_the_ID();

    $post_title = get_the_title();

    get_template_part('page_title');

?>

<section class="course-content">

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12">

                <!-- Blog Post -->

                <div class="blog">

                    <div class="blog-image">

                        <img class="img-fluid" src="<?php the_post_thumbnail_url();?>" alt="<?php the_title(); ?>">

                    </div>

                    <div class="blog-info clearfix">

                        <div class="post-left">

                            <ul>

                                <li>

                                    <div class="post-blog">

                                        <img src="<?= ceraj_URL; ?>assets/img/user/user.png" alt="<?php the_author();?>"> <span><?php the_author();?></span>

                                    </div>

                                </li>

                                 <?php $news_cats = get_the_terms($post_id,'category');

                                    if(!empty($news_cats)) : foreach($news_cats as $news_cat): $term_link = get_term_link( $news_cat );

                                    ?>

                                <li>

                                    <a href="<?= esc_url( $term_link );?>"><img class="img-fluid" src="<?= ceraj_URL; ?>assets/img/icon/icon-23.svg" alt=""><?= $news_cat->name;  if(next($news_cats)==true) echo " , ";?>

                                </a>

                                </li>

                            <?php endforeach; endif;?>

                            </ul>

                        </div>

                    </div>

                    <h3 class="blog-title"><?php the_title(); ?></h3>

                    <div class="blog-content">

                        <?php the_content(); ?>

                    </div>

                </div>

                <!-- /Blog Post -->

            </div>

        </div>

    </div>

</section>

<?php endwhile; endif;?>

<?php get_footer();?>

