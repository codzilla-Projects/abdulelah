<?php 
function abdulelah_add_meta_slider() {
    add_meta_box( "slider_extra_data", "Additional Data", "abdulelah_slider_data_callback", array("slider"),"normal" );
}
function abdulelah_add_meta_service() {
    add_meta_box( "service_extra_data", "Additional Data", "abdulelah_service_data_callback", array("service"),"normal" );
}
add_action( 'add_meta_boxes', 'abdulelah_add_meta_slider' );
add_action( 'add_meta_boxes', 'abdulelah_add_meta_service' );
/* Display the slider meta box. */
    function abdulelah_slider_data_callback( $object, $box ) { 
    $abdulelah_slider_title = esc_attr( get_post_meta( $object->ID, 'abdulelah_slider_title', true ) );
    $abdulelah_slider_firstbtn_link_text = esc_attr( get_post_meta( $object->ID, 'abdulelah_slider_firstbtn_link_text', true ) );
    $abdulelah_slider_firstbtn_link_url = esc_attr( get_post_meta( $object->ID, 'abdulelah_slider_firstbtn_link_url', true ) );
    $abdulelah_slider_secondbtn_link_text = esc_attr( get_post_meta( $object->ID, 'abdulelah_slider_secondbtn_link_text', true ) );
    $abdulelah_slider_secondbtn_link_url = esc_attr( get_post_meta( $object->ID, 'abdulelah_slider_secondbtn_link_url', true ) );
        ?>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_slider_title"><?php _e('Title: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_slider_title" class="form-control w-100" value="<?php echo $abdulelah_slider_title; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_slider_firstbtn_link_text"><?php _e('First Button Link Text: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_slider_firstbtn_link_text" class="form-control w-100" value="<?php echo $abdulelah_slider_firstbtn_link_text; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_slider_firstbtn_link_url"><?php _e('First Button Link URL: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_slider_firstbtn_link_url" class="form-control w-100" value="<?php echo $abdulelah_slider_firstbtn_link_url; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_slider_secondbtn_link_text"><?php _e('Second Button Link Text: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_slider_secondbtn_link_text" class="form-control w-100" value="<?php echo $abdulelah_slider_secondbtn_link_text; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_slider_secondbtn_link_url"><?php _e('Second Button Link URL: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_slider_secondbtn_link_url" class="form-control w-100" value="<?php echo $abdulelah_slider_secondbtn_link_url; ?>"><br>

                </div>

            </div>

        </div>

    </div>
    <?php
}

/* Display the services meta box. */
function abdulelah_service_data_callback( $object, $box ) { 
    $abdulelah_service_sidebar_smallTitle = esc_attr( get_post_meta( $object->ID, 'abdulelah_service_sidebar_smallTitle', true ) );
    $abdulelah_service_sidebar_title = esc_attr( get_post_meta( $object->ID, 'abdulelah_service_sidebar_title', true ) );
    $abdulelah_service_sidebar_link_text = esc_attr( get_post_meta( $object->ID, 'abdulelah_service_sidebar_link_text', true ) );
    $abdulelah_service_sidebar_link_url = esc_attr( get_post_meta( $object->ID, 'abdulelah_service_sidebar_link_url', true ) );
    $abdulelah_sidebar_service_img = esc_attr( get_post_meta( $object->ID, 'abdulelah_sidebar_service_img', true ) );
        ?>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_service_sidebar_smallTitle"><?php _e('Sidebar Small Title: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_service_sidebar_smallTitle" class="form-control w-100" value="<?php echo $abdulelah_service_sidebar_smallTitle; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_service_sidebar_title"><?php _e('Sidebar Title: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_service_sidebar_title" class="form-control w-100" value="<?php echo $abdulelah_service_sidebar_title; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_service_sidebar_link_text"><?php _e('Sidebar Link Text: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_service_sidebar_link_text" class="form-control w-100" value="<?php echo $abdulelah_service_sidebar_link_text; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group row mt-3">

        <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="row">

                <div class="col-lg-3 col-md-3 col-sm-3">

                    <label for="abdulelah_service_sidebar_link_url"><?php _e('Sidebar Link Url: ','abdulelah'); ?></label>

                </div>

                <div class="col-lg-9 col-md-9 col-sm-9">

                    <input type="text"  name="abdulelah_service_sidebar_link_url" class="form-control w-100" value="<?php echo $abdulelah_service_sidebar_link_url; ?>"><br>

                </div>

            </div>

        </div>

    </div>

    <div class="form-group  row mt-3">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <label for="abdulelah_sidebar_service_img">Image</label>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                    <input class="abdulelah_sidebar_service_url codzilla_half" type="text" name="abdulelah_sidebar_service_img" size="60" value="<?php echo $abdulelah_sidebar_service_img; ?>">
                    <a href="#" class="abdulelah_sidebar_service_upload btn btn-dark">Choose </a>
                    <img class="abdulelah_sidebar_service rounded img-fluid" src="<?php echo $abdulelah_sidebar_service_img; ?>" height="100" style="max-width:10%" />
                </div>
            </div>
        </div>
    </div>
    <?php
}
add_action( 'save_post', 'abdulelah_save_custom_meta', 10, 2 );
function abdulelah_save_custom_meta($post_id){
    /*--------------------------------------Slider---------------------------------------*/
    if( isset($_POST['abdulelah_slider_title']) ){
        update_post_meta($post_id, 'abdulelah_slider_title', $_POST['abdulelah_slider_title']);
    }
    else
        delete_post_meta($post_id,'abdulelah_slider_title');

    if( isset($_POST['abdulelah_slider_firstbtn_link_text']) ){
        update_post_meta($post_id, 'abdulelah_slider_firstbtn_link_text', $_POST['abdulelah_slider_firstbtn_link_text']);
    }
    else
        delete_post_meta($post_id,'abdulelah_slider_firstbtn_link_text');

    if( isset($_POST['abdulelah_slider_firstbtn_link_url']) ){
        update_post_meta($post_id, 'abdulelah_slider_firstbtn_link_url', $_POST['abdulelah_slider_firstbtn_link_url']);
    }
    else
        delete_post_meta($post_id,'abdulelah_slider_firstbtn_link_url');

    if( isset($_POST['abdulelah_slider_secondbtn_link_text']) ){
        update_post_meta($post_id, 'abdulelah_slider_secondbtn_link_text', $_POST['abdulelah_slider_secondbtn_link_text']);
    }
    else
        delete_post_meta($post_id,'abdulelah_slider_secondbtn_link_text');

    if( isset($_POST['abdulelah_slider_secondbtn_link_url']) ){
        update_post_meta($post_id, 'abdulelah_slider_secondbtn_link_url', $_POST['abdulelah_slider_secondbtn_link_url']);
    }
    else
        delete_post_meta($post_id,'abdulelah_slider_secondbtn_link_url');

    /*--------------------------------------Service---------------------------------------*/
    if( isset($_POST['abdulelah_service_sidebar_smallTitle']) ){
        update_post_meta($post_id, 'abdulelah_service_sidebar_smallTitle', $_POST['abdulelah_service_sidebar_smallTitle']);
    }
    else
        delete_post_meta($post_id,'abdulelah_service_sidebar_smallTitle');

    if( isset($_POST['abdulelah_service_sidebar_title']) ){
        update_post_meta($post_id, 'abdulelah_service_sidebar_title', $_POST['abdulelah_service_sidebar_title']);
    }
    else
        delete_post_meta($post_id,'abdulelah_service_sidebar_title');

    if( isset($_POST['abdulelah_service_sidebar_link_text']) ){
        update_post_meta($post_id, 'abdulelah_service_sidebar_link_text', $_POST['abdulelah_service_sidebar_link_text']);
    }
    else
        delete_post_meta($post_id,'abdulelah_service_sidebar_link_text');

    if( isset($_POST['abdulelah_service_sidebar_link_url']) ){
        update_post_meta($post_id, 'abdulelah_service_sidebar_link_url', $_POST['abdulelah_service_sidebar_link_url']);
    }
    else
        delete_post_meta($post_id,'abdulelah_service_sidebar_link_url');
        
    if( isset($_POST['abdulelah_sidebar_service_img']) ){
        update_post_meta($post_id, 'abdulelah_sidebar_service_img', $_POST['abdulelah_sidebar_service_img']);
    }
    else
        delete_post_meta($post_id,'abdulelah_sidebar_service_img');  
}