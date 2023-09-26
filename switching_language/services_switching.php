<?php 
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $services_page_small_title               = get_option('services_page_small_title');
        $services_page_title                     = get_option('services_page_title');
        $services_page_link_text                 = get_option('services_page_link_text');
        $services_page_link_url                  = get_option('services_page_link_url');
        $featured_page_small_title               = get_option('featured_page_small_title');
        $featured_page_title                     = get_option('featured_page_title');
        $featured_page_content                   = get_option('featured_page_content');
        $services_page_contact_img               = get_option('services_page_contact_img');
        $services_page_contact_content           = get_option('services_page_contact_content');
        $services_page_contact_link_text         = get_option('services_page_contact_link_text');
        $services_page_contact_link_url          = get_option('services_page_contact_link_url');
    break;
    case 'ar':
        $services_page_small_title               = get_option('services_page_small_title_ar');
        $services_page_title                     = get_option('services_page_title_ar');
        $services_page_link_text                 = get_option('services_page_link_text_ar');
        $services_page_link_url                  = get_option('services_page_link_url_ar');
        $featured_page_small_title               = get_option('featured_page_small_title_ar');
        $featured_page_title                     = get_option('featured_page_title_ar');
        $featured_page_content                   = get_option('featured_page_content_ar');
        $services_page_contact_img               = get_option('services_page_contact_img_ar');
        $services_page_contact_content           = get_option('services_page_contact_content_ar');
        $services_page_contact_link_text         = get_option('services_page_contact_link_text_ar');
        $services_page_contact_link_url          = get_option('services_page_contact_link_url_ar');
    break;
    default:
        $services_page_small_title               = '';
        $services_page_title                     = '';
        $services_page_link_text                 = '';
        $services_page_link_url                  = '';
        $featured_page_small_title               = '';
        $featured_page_title                     = '';
        $featured_page_content                   = '';
        $services_page_contact_img               = '';
        $services_page_contact_content           = '';
        $services_page_contact_link_text         = '';
        $services_page_contact_link_url          = '';

}