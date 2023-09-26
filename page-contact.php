<?php 

/**

** Template Name: Contact Us Template

**/

get_header(); 

get_template_part('page_title');

?>

    <!-- =============== address-section start  =============== -->

    <div class="address-section pt-120">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary4">
                        <span><?= $contact_small_title ?></span>
                        <h3><?= $contact_title ?></h3>
                        <p class="para"><?= $contact_content ?></p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="address-card">
                        <img src="<?= $contact_img ?>" alt="image">
                        </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="address-card">
                        <div class="content">
                            <div class="header">
                                <div class="location">
                                    <svg width="18" height="22" viewBox="0 0 18 22" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9 22C9 22 17.25 14.1818 17.25 8.25C17.25 6.06196 16.3808 3.96354 14.8336 2.41637C13.2865 0.869194 11.188 0 9 0C6.81196 0 4.71354 0.869194 3.16637 2.41637C1.61919 3.96354 0.75 6.06196 0.75 8.25C0.75 14.1818 9 22 9 22ZM9 12.375C7.90598 12.375 6.85677 11.9404 6.08318 11.1668C5.3096 10.3932 4.875 9.34402 4.875 8.25C4.875 7.15598 5.3096 6.10677 6.08318 5.33318C6.85677 4.5596 7.90598 4.125 9 4.125C10.094 4.125 11.1432 4.5596 11.9168 5.33318C12.6904 6.10677 13.125 7.15598 13.125 8.25C13.125 9.34402 12.6904 10.3932 11.9168 11.1668C11.1432 11.9404 10.094 12.375 9 12.375Z"/>
                                    </svg>
                                </div>
                                <h3><?= __('Location', 'abdulelah') ?></h3>
                            </div>
                            <ul class="address-list">
                                <li><span><?= __('Address: ', 'abdulelah');?></span><?= get_option('abdulelah_location') ?></li>
                                <li><span><?= __('Phone: ', 'abdulelah');?></span><a href="tel:<?= get_option('abdulelah_phone') ?>"> <?= get_option('abdulelah_phone') ?></a></li>
                                <li><span><?= __('Email: ', 'abdulelah');?></span><a href="mailto:<?= get_option('abdulelah_email') ?>"><?= get_option('abdulelah_email') ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- =============== address-section end  =============== -->


     <!-- =============== form-section start  =============== -->

     <div class="form-section pt-120 pb-120" id="faq">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-6">
                    <div class="section-title primary4">
                        <span><?= $contact_form_small_title ?></span>
                        <h3><?= $contact_form_title ?></h3>
                        <p class="para"><?= $contact_form_content ?></p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
               <div class="col-lg-8">
                    <?= ''//do_shortcode( get_option('contact_form') ) ?>
                    <?= do_shortcode( '[contact-form-7 id="7" title="Contact form 1"]' ) ?>
               </div>
            </div>
        </div>
    </div>

    <!-- =============== form-section end  =============== -->

<?php get_footer()?>