<?php 
switch ( ICL_LANGUAGE_CODE ){
    case 'en':
        $contact_small_title                = get_option('contact_small_title');
        $contact_title                      = get_option('contact_title');
        $contact_content                    = get_option('contact_content');
        $contact_img                        = get_option('contact_page_img');
        $contact_form_small_title           = get_option('contact_form_small_title');
        $contact_form_title                 = get_option('contact_form_title');
        $contact_form_content               = get_option('contact_form_content');
    break;
    case 'ar':
        $contact_small_title                = get_option('contact_small_title_ar');
        $contact_title                      = get_option('contact_title_ar');
        $contact_content                    = get_option('contact_content_ar');
        $contact_img                        = get_option('contact_page_img_ar');
        $contact_form_small_title           = get_option('contact_form_small_title_ar');
        $contact_form_title                 = get_option('contact_form_title_ar');
        $contact_form_content               = get_option('contact_form_content_ar');
    default:
        $contact_small_title                = '';
        $contact_title                      = '';
        $contact_content                    = '';
        $contact_img                        = '';
        $contact_form_small_title           = '';
        $contact_form_title                 = '';
        $contact_form_content               = '';
}