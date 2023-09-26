<?php
/**
 ** Template Name: News Page
**/
get_header();
get_template_part( 'page_title' );
?>

<!-- =============== portfolio-section start  =============== -->
<?php
    $no = get_option('blog_num_posts');
    $posts = abdulelah_get_news($no);
    if ($posts->have_posts()):
?>
<div class="blog-grid-section pt-120 pb-120" id="blog-grid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary5">
                        <span><?= $blog_small_title ?></span>
                        <h3><?= $blog_title ?></h3>
                        <p class="para"><?= $blog_content ?></p>
                    </div>
                </div>
            </div>
            <div class="row position-relative justify-content-center g-4">
                <?php while ($posts->have_posts()) : $posts->the_post(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="sigle-blog-1 wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <div class="blog-image">
                                <img src="<?= the_post_thumbnail_url() ?>" class="img-fluid" alt="image">
                            </div>
                            <div class="blog-content hover-border1">
                                <?php if (!empty($posts->get_categories())): ?>
                                    <span>
                                        <?= $posts->get_categories() ?>
                                    </span>
                                <?php endif; ?>
                                <h4><a href="<?php the_permalink( ) ?>"><?= the_content()//wp_trim_words( get_the_content(), $num_words = 9, $more = '… ' ); ?></a></h4>
                                <div class="blog-meta">
                                    <div class="author-img">
                                        <?php $authorId = get_the_author_meta('ID') ?>
                                        <img src="<?= get_avatar_url( $authorId ) ?>" alt="image">
                                    </div>
                                    <div class="designation">
                                        <h5><?= get_the_author(  ) ?></h5>
                                        <div class="date"><?= get_the_date( 'F j, Y' ) ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_query();?>
            </div>
            <div class="row">
                <nav class="page-pagination">
                <?php    
                        $args = array(
                           'format'             => '?paged=%#%',
                           'current'            => max( 1, get_query_var('paged') ),
                           'total'              => $posts->max_num_pages,
                           'show_all'           => false,
                           'end_size'           => 1,
                           'mid_size'           => 2,
                           'prev_next'          => true,
                           'next_text'          => '<i class="bx bxs-chevron-right"></i>',
                           'prev_text'          => '<i class="bx bxs-chevron-left"></i>',
                           'type'               => 'list',
                          );
                    ?>
                    <?php echo paginate_links($args); ?>  
                    <!-- <ul class="pagination d-flex justify-content-center gap-md-3 gap-2">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1">
                            <svg width="22" height="12" viewBox="0 0 22 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.4488 6.63158L21.0526 6.63158C21.5758 6.63158 22 6.20743 22 5.68421C22 5.16099 21.5758 4.73684 21.0526 4.73684L10.4488 4.73684C10.385 4.73684 10.3333 4.68513 10.3333 4.62133V1.737C10.3333 0.9661 9.49786 0.485112 8.8312 0.872208L1.48936 5.13521C0.825539 5.52065 0.825537 6.47934 1.48936 6.86479L8.8312 11.1278C9.49786 11.5149 10.3333 11.0339 10.3333 10.263V6.74709C10.3333 6.6833 10.385 6.63158 10.4488 6.63158Z"/>
                            </svg>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">02</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">
                            <svg width="22" height="12" viewBox="0 0 22 12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.5512 5.36842H0.947369C0.424151 5.36842 0 5.79257 0 6.31579C0 6.83901 0.424152 7.26316 0.94737 7.26316H11.5512C11.615 7.26316 11.6667 7.31487 11.6667 7.37867V10.263C11.6667 11.0339 12.5021 11.5149 13.1688 11.1278L20.5106 6.86479C21.1745 6.47935 21.1745 5.52066 20.5106 5.13521L13.1688 0.872208C12.5021 0.485113 11.6667 0.966099 11.6667 1.737V5.25291C11.6667 5.3167 11.615 5.36842 11.5512 5.36842Z"/>
                            </svg>
                        </a>
                    </li>
                    </ul> -->
                </nav>
            </div>
        </div>
    </div>

    <!-- =============== portfolio-section end  =============== -->

<?php endif; get_footer(); ?>