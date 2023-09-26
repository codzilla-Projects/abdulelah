<?php 
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $blog_small_title               = get_option('blog_small_title');
        $blog_title                     = get_option('blog_title');
        $blog_content                   = get_option('blog_content');
        $blog_posts_num                 = get_option('blog_num_posts');
    break;
    case 'ar':
        $blog_small_title               = get_option('blog_small_title_ar');
        $blog_title                     = get_option('blog_title_ar');
        $blog_content                   = get_option('blog_content_ar');
        $blog_posts_num                 = get_option('blog_num_posts_ar');
    default:
        $blog_small_title               = '';
        $blog_title                     = '';
        $blog_content                   = '';
        $blog_posts_num                 = '';
}