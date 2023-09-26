<?php 

function services_page_area_callback(){

	$wp_editor_settings = array( 		
		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue
		'textarea_rows'=> 2	);    	
	if( isset( $_POST['abdulelah_save'] ) && !empty( $_POST['abdulelah_save']) ){		
		foreach ($_POST as $key => $value) {			
			if(in_array($key,['featured_page_content','services_page_contact_content'])){
				$value = stripcslashes($value);			
			}							
			update_option( $key, $value);}
			}
		?>
		<?php if ( ICL_LANGUAGE_CODE=='en' ) :?>
		<div class="container-fluid text-left padding-right-4">
			<div class="row">				
				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center abdulelah-title"><span>Services Page Settings</span></h1>
					</header>
				</div>
				<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills me-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-servicessection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-servicessection" type="button" role="tab" aria-controls="v-pills-servicessection" aria-selected="true">Services</button>
						<button class="nav-link" id="v-pills-featuriessection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-featuriessection" type="button" role="tab" aria-controls="v-pills-featuriessection" aria-selected="false">Featuries</button>
						<button class="nav-link" id="v-pills-contactsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contactsection" type="button" role="tab" aria-controls="v-pills-contactsection" aria-selected="false">Contact</button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9 gray_back" id="v-pills-tabContent">
						<form class="form-horizontal form_back p-5" method="post" action="#">				<div class="tab-content" id="v-pills-tabContent">						        
							<div class="tab-pane fade show active" id="v-pills-servicessection" role="tabpanel" aria-labelledby="v-pills-servicessection-tab">  			                        
								<div class="form-group">
									<label for="services_page_small_title" class="col-sm-12 text-left  control-label text-white">Small Tilte</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="services_page_small_title" name="services_page_small_title" value="<?=get_option('services_page_small_title'); ?>">
									</div>
								</div>
					        	<div class="form-group">
									<label for="services_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="services_page_title" name="services_page_title" value="<?=get_option('services_page_title'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="services_page_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="services_page_link_text" name="services_page_link_text" value="<?=get_option('services_page_link_text'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="services_page_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="services_page_link_url" name="services_page_link_url" value="<?=get_option('services_page_link_url'); ?>">
									</div>
								</div>
							</div>

							<div class="tab-pane fade show" id="v-pills-featuriessection" role="tabpanel" aria-labelledby="v-pills-featuriessection-tab">									
					        	<div class="form-group">
									<label for="featured_page_small_title" class="col-sm-12 text-left  control-label text-white">Small Tilte</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="featured_page_small_title" name="featured_page_small_title" value="<?=get_option('featured_page_small_title'); ?>">
									</div>
								</div>
					        	<div class="form-group">
									<label for="featured_page_title" class="col-sm-12 text-left  control-label text-white">Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="featured_page_title" name="featured_page_title" value="<?=get_option('featured_page_title'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="featured_page_content" class="col-sm-6 control-label text-white">Content</label>
									<div class="col-sm-12">
		                				<?php wp_editor( get_option('featured_page_content'), 'featured_page_content',  array('textarea_rows'=>5,'textarea_name'=> 'featured_page_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'featured_page_content','class'=>'form-control',) );  ?>
									</div>
								</div> 
					        </div> 
					        <div class="tab-pane fade show" id="v-pills-contactsection" role="tabpanel" aria-labelledby="v-pills-contactsection-tab">
					        	<div class="form-group">
								  	<label for="services_page_contact_img" class="col-sm-12 text-left  control-label text-white">Background Image</label>
								  	<div class="col-sm-12 text-left ">
								    	<input class="services_page_contact_img_url abdulelah_half" type="text" name="services_page_contact_img" size="60" value="<?php echo get_option('services_page_contact_img'); ?>">
								    	<a href="#" class="services_page_contact_img_upload btn btn-info">Choose</a>
								    	<img class="services_page_contact_img" src="<?php echo get_option('services_page_contact_img'); ?>" height="100" style="max-width:100%" />
								  	</div>
								</div>									
								<div class="form-group">
									<label for="services_page_contact_content" class="col-sm-6 control-label text-white">Content</label>
									<div class="col-sm-12">
		                				<?php wp_editor( get_option('services_page_contact_content'), 'services_page_contact_content',  array('textarea_rows'=>5,'textarea_name'=> 'services_page_contact_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'services_page_contact_content','class'=>'form-control',) );  ?>
									</div>
								</div> 
								<div class="form-group">
									<label for="services_page_contact_link_text" class="col-sm-12 text-left  control-label text-white">Link Text</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="services_page_contact_link_text" name="services_page_contact_link_text" value="<?=get_option('services_page_contact_link_text'); ?>">
									</div>
								</div>
								<div class="form-group">
									<label for="services_page_contact_link_url" class="col-sm-12 text-left  control-label text-white">Link URL</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="services_page_contact_link_url" name="services_page_contact_link_url" value="<?=get_option('services_page_contact_link_url'); ?>">
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
		<div dir="rtl" class="container-fluid text-left padding-right-4">
			<div class="row">				
				<div class="col-sm-12 col-md-12 col-lg-12 bg-dark mt-3 mb-3">
					<!-- Top Navigation -->
					<header class="codrops-header">
						<h1 class="text-center abdulelah-title"><span>إعدادات صفحة الخدمات</span></h1>
					</header>
				</div>
				<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills ms-3 col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-servicessection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-servicessection" type="button" role="tab" aria-controls="v-pills-servicessection" aria-selected="true">الخدمات</button>
						<button class="nav-link" id="v-pills-featuriessection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-featuriessection" type="button" role="tab" aria-controls="v-pills-featuriessection" aria-selected="false">الميزات</button>
						<button class="nav-link" id="v-pills-contactsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-contactsection" type="button" role="tab" aria-controls="v-pills-contactsection" aria-selected="false">التواصل</button>
					</div>
					<div class="tab-content col-sm-9 col-md-9 col-lg-9" id="v-pills-tabContent">
						<form class="form-horizontal form_back_ar p-5" method="post" action="#">				
							<div class="tab-content" id="v-pills-tabContent">						        
								<div class="tab-pane fade show active" id="v-pills-servicessection" role="tabpanel" aria-labelledby="v-pills-servicessection-tab">  			                        
									<div class="form-group">
										<label for="services_page_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعى</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_small_title_ar" name="services_page_small_title_ar" value="<?=get_option('services_page_small_title_ar'); ?>">
										</div>
									</div>
						        	<div class="form-group">
										<label for="services_page_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسي</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_title_ar" name="services_page_title_ar" value="<?=get_option('services_page_title_ar'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="services_page_link_text_ar" class="col-sm-12 text-left  control-label text-white">نص الرابط</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_link_text_ar" name="services_page_link_text_ar" value="<?=get_option('services_page_link_text_ar'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="services_page_link_url_ar" class="col-sm-12 text-left  control-label text-white">عنوان الرابط</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_link_url_ar" name="services_page_link_url_ar" value="<?=get_option('services_page_link_url_ar'); ?>">
										</div>
									</div>
								</div>

								<div class="tab-pane fade show" id="v-pills-featuriessection" role="tabpanel" aria-labelledby="v-pills-featuriessection-tab">									
						        	<div class="form-group">
										<label for="featured_page_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعى</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="featured_page_small_title_ar" name="featured_page_small_title_ar" value="<?=get_option('featured_page_small_title_ar'); ?>">
										</div>
									</div>
						        	<div class="form-group">
										<label for="featured_page_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسي</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="featured_page_title_ar" name="featured_page_title_ar" value="<?=get_option('featured_page_title_ar'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="featured_page_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('featured_page_content_ar'), 'featured_page_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'featured_page_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'featured_page_content_ar','class'=>'form-control',) );  ?>
										</div>
									</div> 
						        </div> 
						        <div class="tab-pane fade show" id="v-pills-contactsection" role="tabpanel" aria-labelledby="v-pills-contactsection-tab">
						        	<div class="form-group">
									  	<label for="services_page_contact_img_ar" class="col-sm-12 text-left  control-label text-white">صورة الخلفية</label>
									  	<div class="col-sm-12 text-left ">
									    	<input class="services_page_contact_img_ar_url abdulelah_half" type="text" name="services_page_contact_img_ar" size="60" value="<?php echo get_option('services_page_contact_img_ar'); ?>">
									    	<a href="#" class="services_page_contact_img_ar_upload btn btn-info">أختر</a>
									    	<img class="services_page_contact_img_ar" src="<?php echo get_option('services_page_contact_img_ar'); ?>" height="100" style="max-width:100%" />
									  	</div>
									</div>									
									<div class="form-group">
										<label for="services_page_contact_content_ar" class="col-sm-6 control-label text-white">المحتوى</label>
										<div class="col-sm-12">
			                				<?php wp_editor( get_option('services_page_contact_content_ar'), 'services_page_contact_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'services_page_contact_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'services_page_contact_content_ar','class'=>'form-control',) );  ?>
										</div>
									</div> 
									<div class="form-group">
										<label for="services_page_contact_link_text_ar" class="col-sm-12 text-left  control-label text-white">نص الرابط</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_contact_link_text_ar" name="services_page_contact_link_text_ar" value="<?=get_option('services_page_contact_link_text_ar'); ?>">
										</div>
									</div>
									<div class="form-group">
										<label for="services_page_contact_link_url_ar" class="col-sm-12 text-left  control-label text-white">عنوان الرابط</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="services_page_contact_link_url_ar" name="services_page_contact_link_url_ar" value="<?=get_option('services_page_contact_link_url_ar'); ?>">
										</div>
									</div>
						        </div> 
						    </div>							
				    	<div class="form-group">								
					    	<div class="col-sm-12">								
					    		<input type="submit" class="btn btn-default btn-block btn-lg w-100 mt-3 abdulelah_save_route" name="abdulelah_save" value="حفظ الاعدادات ">					
					    	</div>							

					    </div>						   
					</form>
				</div>
			</div>
		</div>		
	</div><!-- /container -->
	<?php else:?>
		<div class="container-fluid d-flex align-items-center justify-content-center vh-100">
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
	<?php endif?>
<?php



}