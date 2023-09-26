<?php 

function blog_page_content_callback(){

	$wp_editor_settings = array( 

		'quicktags' => array( 'buttons' => 'strong,em,del,ul,ol,li,close' ), // note that spaces in this list seem to cause an issue

		'textarea_rows'=> 2

	);    

	if( isset( $_POST['abdulelah_save'] ) && !empty( $_POST['abdulelah_save']) ){

		foreach ($_POST as $key => $value) {

			if(in_array($key,['blog_content','blog_content_ar'])){

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
					<h1 class="text-center abdulelah-title"><span>Blog page Settings</span></h1>
				</header>
			</div>
				<br/>
			<div class="d-flex align-items-start p-0 m-0">
				<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">Settings</button>
				</div>
				<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
					<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">

						<div class="tab-content" id="v-pills-tabContent">

							<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
								<!-- small title -->
								<div class="form-group">
									<label for="blog_small_title" class="col-sm-12 text-left  control-label text-white">Small Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="blog_small_title" name="blog_small_title" value="<?=get_option('blog_small_title'); ?>">
									</div>
								</div>
								<!-- title -->
								<div class="form-group">
									<label for="blog_title" class="col-sm-12 text-left  control-label text-white">Title</label>
									<div class="col-sm-12 text-left ">
										<input type="text" class="form-control" id="blog_title" name="blog_title" value="<?=get_option('blog_title'); ?>">
									</div>
								</div>
								<!-- after title contet -->
								<div class="form-group text-left">
									<label for="blog_content" class="col-sm-6 control-label text-white">Blog Content</label>
									<div class="col-sm-12">
										<?php wp_editor( get_option('blog_content'), 'blog_content',  array('textarea_rows'=>5,'textarea_name'=> 'blog_content', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'blog_content','class'=>'form-control',) );  ?>
									</div>
								</div>
								<!-- number of posts -->
								<div class="form-group">
									<label for="blog_num_posts" class="col-sm-12 text-left  control-label text-white">Number Of Posts</label>
									<div class="col-sm-12 text-left ">
										<input type="number" class="form-control" id="blog_num_posts" name="blog_num_posts" value="<?=get_option('blog_num_posts'); ?>">
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
						<h1 class="text-center abdulelah-title"><span>إعدادات صفحة المقالات</span></h1>
					</header>
				</div>
					<br/>
				<div class="d-flex align-items-start p-0 m-0">
					<div class="nav flex-column nav-pills col-sm-3 col-md-3 col-lg-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<button class="nav-link active" id="v-pills-firstsection-tab" data-bs-toggle="pill" data-bs-target="#v-pills-firstsection" type="button" role="tab" aria-controls="v-pills-firstsection" aria-selected="true">الاعدادات</button>
					</div>
					<div class="tab-content col-sm-9 col-md-9" id="v-pills-tabContent">
						<form class="form-horizontal bg-dark p-4 mr-3 ml-3" method="post" action="#">

							<div class="tab-content" id="v-pills-tabContent">

								<div class="tab-pane fade show active" id="v-pills-firstsection" role="tabpanel" aria-labelledby="v-pills-firstsection-tab">
									<!-- small title -->
									<div class="form-group">
										<label for="blog_small_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الفرعي</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="blog_small_title_ar" name="blog_small_title_ar" value="<?=get_option('blog_small_title_ar'); ?>">
										</div>
									</div>
									<!-- title -->
									<div class="form-group">
										<label for="blog_title_ar" class="col-sm-12 text-left  control-label text-white">العنوان الرئيسي</label>
										<div class="col-sm-12 text-left ">
											<input type="text" class="form-control" id="blog_title_ar" name="blog_title_ar" value="<?=get_option('blog_title_ar'); ?>">
										</div>
									</div>
									<!-- after title contet -->
									<div class="form-group text-left">
										<label for="blog_content_ar" class="col-sm-6 control-label text-white">محتوى المقالات</label>
										<div class="col-sm-12">
											<?php wp_editor( get_option('blog_content_ar'), 'blog_content_ar',  array('textarea_rows'=>5,'textarea_name'=> 'blog_content_ar', 'drag_drop_upload'=> true, 'wpautop' => false, 'media_buttons'=> true,'id'=>'blog_content_ar','class'=>'form-control',) );  ?>
										</div>
									</div>
									<!-- number of posts -->
									<div class="form-group">
										<label for="blog_num_posts_ar" class="col-sm-12 text-left  control-label text-white">عدد المقالات</label>
										<div class="col-sm-12 text-left ">
											<input type="number" class="form-control" id="blog_num_posts_ar" name="blog_num_posts_ar" value="<?=get_option('blog_num_posts_ar'); ?>">
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