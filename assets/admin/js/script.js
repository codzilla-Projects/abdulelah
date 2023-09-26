jQuery(document).ready(function($) {

    $('.logo_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.logo_img').attr('src', attachment.url);

            $('.logo_img_url').val(attachment.url);

        })

        .open();

    });



    $('.sticky_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.sticky_img').attr('src', attachment.url);

            $('.sticky_img_url').val(attachment.url);

        })

        .open();

    });



    $('.favicon_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.favicon_img').attr('src', attachment.url);

            $('.favicon_img_url').val(attachment.url);

        })

        .open();

    });



    $('.footer_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.footer_img').attr('src', attachment.url);

            $('.footer_img_url').val(attachment.url);

        })

        .open();

    });

    $('.services_page_contact_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.services_page_contact_img').attr('src', attachment.url);

            $('.services_page_contact_img_url').val(attachment.url);

        })

        .open();

    });

    $('.services_page_contact_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.services_page_contact_img_ar').attr('src', attachment.url);

            $('.services_page_contact_img_ar_url').val(attachment.url);

        })

        .open();

    });

    $('.contact_page_img_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.contact_page_img').attr('src', attachment.url);

            $('.contact_page_img_url').val(attachment.url);

        })

        .open();

    });

    $('.contact_page_img_ar_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.contact_page_img_ar').attr('src', attachment.url);

            $('.contact_page_img_ar_url').val(attachment.url);

        })

        .open();

    });

    /*Meta Fields Single Service */
        $('.abdulelah_sidebar_service_upload').click(function(e) {

        e.preventDefault();

        var custom_uploader = wp.media({

            title: 'Image Choose',

            button: {

                text: 'Upload Image'

            },

            multiple: false  // Set this to true to allow multiple files to be  selected

        })

        .on('select', function() {

            var attachment = custom_uploader.state().get('selection').first().toJSON();

            $('.abdulelah_sidebar_service').attr('src', attachment.url);

            $('.abdulelah_sidebar_service_url').val(attachment.url);

        })

        .open();

    });


});

   