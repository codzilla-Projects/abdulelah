<?php 

function contact_page_content_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['abdulelah_save'] ) && !empty( $_POST['abdulelah_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['contact_content','contact_content_ar','contact_form_content','contact_form_content_ar'])){

				$value = stripcslashes($value);

			}				

			update_option( $key, $value);

		}

	}

?>
<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
	<div class="container-fluid text-left padding-right-4">
		<div class="row">

			<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
				<!-- Top Navigation -->
				<header class="codrops-header">
					<h1 class="text-center abdulelah-title"><span>Contact page Settings</span></h1>
				</header>
			</div>
				<br/>
			<div class="d-flex align-items-start p-0 m-0">
				<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Contact information</button>
                    <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">Contact Form</button>
                </div>
				<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
					<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">

						<div class="tab-content" id="v-pills-tabContent">

							<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
								<!-- small title -->
								<div class="form-group">
									<label for="contact_small_title" class="col-sm-12 text-left  control-label text-white">Small Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="contact_small_title" name="contact_small_title" value="<?=get_option('contact_small_title'); ?>">
									</div>
								</div>
								<!-- title -->
								<div class="form-group">
									<label for="contact_title" class="col-sm-12 text-left  control-label text-white">Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="contact_title" name="contact_title" value="<?=get_option('contact_title'); ?>">
									</div>
								</div>
								<!-- after title contet -->
								<div class="form-group text-left">
									<label for="contact_content" class="col-sm-6 control-label text-white">contact Content</label>
									<div class="col-sm-12">
										<?php wp_editor( get_option('contact_content'), 'contact_content',  array('textarea_rows'=>5,'textarea_name'=> 'contact_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_content','class'=>'form-control',) );  ?>
									</div>
								</div>
								<!-- Contact image -->
                                <div class="form-group">
                                    <label for="abdulelah_sticky_logo" class="col-sm-12 text-left  control-label text-white">Contact information image</label>
                                    <div class="col-sm-12 text-left ">
                                        <input class="contact_page_img_url abdulelah_half" type="text" name="contact_page_img" size="60" value="<?=get_option('contact_page_img'); ?>">
                                        <a href="#" class="contact_page_img_upload btn btn-info">Choose </a>
                                        <img class="contact_page_img" src="<?=get_option('contact_page_img'); ?>" height="100" style="max-width:100%" />
                                    </div>
                                </div>
							</div>

                            <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
								<!-- small title -->
								<div class="form-group">
									<label for="contact_form_small_title" class="col-sm-12 text-left  control-label text-white">Small Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="contact_form_small_title" name="contact_form_small_title" value="<?=get_option('contact_form_small_title'); ?>">
									</div>
								</div>
								<!-- title -->
								<div class="form-group">
									<label for="contact_form_title" class="col-sm-12 text-left  control-label text-white">Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="contact_form_title" name="contact_form_title" value="<?=get_option('contact_form_title'); ?>">
									</div>
								</div>
								<!-- after title contet -->
								<div class="form-group text-left">
									<label for="contact_form_content" class="col-sm-6 control-label text-white">Contact Form Content</label>
									<div class="col-sm-12">
										<?php wp_editor( get_option('contact_form_content'), 'contact_form_content',  array('textarea_rows'=>5,'textarea_name'=> 'contact_form_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_form_content','class'=>'form-control',) );  ?>
									</div>
								</div>
							</div>

						</div>

						<div class="form-group">

							<div class="col-sm-12">

							<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 abdulelah_save_route" name="abdulelah_save" value="Save Settings">

							</div>

						</div>

					</form>
				</div>
			</div>
		</div>
	</div><!-- /container -->
	<?php elseif ( ICL_LANGUAGE_CODE=='ar' ) :?>
		<div dir = "rtl" class="container-fluid text-left padding-right-4">
			<div class="row">

				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center abdulelah-title"><span>إعدادات صفحة التواصل</span></h1>
					</header>
				</div>
					<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">معلومات التواصل</button>
                        <button class="nav-link" id="v-pills-secondsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-secondsection" type="button" role="tab" aria-controls="v-pills-secondsection" aria-selected="false">استمارة التواصل</button>
					</div>
					<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
						<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">

							<div class="tab-content" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
									<!-- small title -->
									<div class="form-group">
										<label for="contact_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعي</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="contact_small_title_ar" name="contact_small_title_ar" value="<?=get_option('contact_small_title_ar'); ?>">
										</div>
									</div>
									<!-- title -->
									<div class="form-group">
										<label for="contact_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسي</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="contact_title_ar" name="contact_title_ar" value="<?=get_option('contact_title_ar'); ?>">
										</div>
									</div>
									<!-- after title contet -->
									<div class="form-group text-left">
										<label for="contact_content_ar" class="col-sm-6 control-label text-white">محتوى المقالات</label>
										<div class="col-sm-12">
											<?php wp_editor( get_option('contact_content_ar'), 'contact_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'contact_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_content_ar','class'=>'form-control',) );  ?>
										</div>
									</div>
									<!-- Contact image -->
                                    <div class="form-group">
                                        <label for="abdulelah_sticky_logo" class="col-sm-12 text-left  control-label text-white">صورة معلومات التواصل</label>
                                        <div class="col-sm-12 text-left ">
                                            <input class="contact_page_img_url abdulelah_half" type="text" name="contact_page_img_ar" size="60" value="<?=get_option('contact_page_img_ar'); ?>">
                                            <a href="#" class="contact_page_img_upload btn btn-info">اختر </a>
                                            <img class="contact_page_img" src="<?=get_option('contact_page_img_ar'); ?>" height="100" style="max-width:100%" />
                                        </div>
                                    </div>
								</div>
                                
                                <div class="tab-pane fade" id="v-pills-secondsection" role="tabpanel" aria-labelledby="v-pills-secondsection-tab">
                                    <!-- small title -->
                                    <div class="form-group">
                                        <label for="contact_form_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعي</label>
                                        <div class="col-sm-12 text-left ">
                                            <input type="text" class="form-control" id="contact_form_small_title_ar" name="contact_form_small_title_ar" value="<?=get_option('contact_form_small_title_ar'); ?>">
                                        </div>
                                    </div>
                                    <!-- title -->
                                    <div class="form-group">
                                        <label for="contact_form_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسي</label>
                                        <div class="col-sm-12 text-left ">
                                            <input type="text" class="form-control" id="contact_form_title_ar" name="contact_form_title_ar" value="<?=get_option('contact_form_title_ar'); ?>">
                                        </div>
                                    </div>
                                    <!-- after title contet -->
                                    <div class="form-group text-left">
                                        <label for="contact_form_content_ar" class="col-sm-6 control-label text-white">محتوى استمارة التواصل</label>
                                        <div class="col-sm-12">
                                            <?php wp_editor( get_option('contact_form_content_ar'), 'contact_form_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'contact_form_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'contact_form_content_ar','class'=>'form-control',) );  ?>
                                        </div>
                                    </div>
                                </div>

							</div>

							<div class="form-group">

								<div class="col-sm-12">

								<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 abdulelah_save_route" name="abdulelah_save" value="حفظ الاعدادات">

								</div>

							</div>

						</form>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	<?php else: ?>
		<div class="container-fluid d-flex align-items-center justify-content-center vw-100">
			<div class="row">				
				<div class="col-sm-12 col-md-12 col-lg-12">
					<!-- Top Navigation -->
					<div class="alert alert-primary d-flex align-items-center" role="alert">
					  	<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
					  	<div>
					    	Please Choose Language
					 	 </div>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>
<?php

}