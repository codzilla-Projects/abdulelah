<?php 

add_action( 'init', 'abdulelah_custom_post_types' );

function abdulelah_custom_post_types() {

 $cpts = [

    array(

        'single'   => 'Sliders',

        'plural'   => 'Sliders',

        'cptname'  => 'slider',

        'icon'     => 'dashicons-slides',

        'supports' => ["title","editor","thumbnail"],

        'show_in_menu'=> true,

        'position' => 4

        ),

    array(

        'single'   => 'Services',

        'plural'   => 'Services',

        'cptname'  => 'service',

        'icon'     => 'dashicons-image-filter',

        'supports' => ["title","editor","excerpt","thumbnail"],

        'show_in_menu'=> true,

        'position' => 5

        ),

    array(

        'single'   => 'Features',

        'plural'   => 'Features',

        'cptname'  => 'feature',

        'icon'     => 'dashicons-welcome-learn-more',

        'supports' => ["title","editor","excerpt","thumbnail"],

        'show_in_menu'=> true,

        'position' => 6

        ),

 ];

 foreach ($cpts as $cpt) {

     $labels = array(

        'name'                  => _x( $cpt['single'], 'Post Type General Name', 'abdulelah' ),

        'singular_name'         => _x( $cpt['single'], 'Post Type Singular Name', 'abdulelah' ),

        'menu_name'             => __( $cpt['plural'], 'abdulelah' ),

        'all_items'             => __( 'All '.$cpt['plural'], 'abdulelah' ),

        'add_new_item'          => __( 'Add New '.$cpt['single'] , 'abdulelah' ),

        'add_new'               => __( 'Add New', 'abdulelah' ),

        'new_item'              => __( 'New '.$cpt['single'], 'abdulelah' ),

        'edit_item'             => __( 'Edit '.$cpt['single'], 'abdulelah' ),

        'update_item'           => __( 'Update '.$cpt['single'], 'abdulelah' ),

        'view_item'             => __( 'View '.$cpt['single'], 'abdulelah' ),

        'search_items'          => __( 'Search '.$cpt['plural'], 'abdulelah' ),

        'not_found'             => __( 'Not found', 'abdulelah' ),

        'not_found_in_trash'    => __( 'Not found in Trash', 'abdulelah' ),

        'featured_image'        => __( 'Featured Image', 'abdulelah' ),

        'set_featured_image'    => __( 'Set featured image', 'abdulelah' ),

        'remove_featured_image' => __( 'Remove featured image', 'abdulelah' ),

        'use_featured_image'    => __( 'Use as featured image', 'abdulelah' ),

      );

      $args = array(

        'label'                 => __( $cpt['plural'], 'abdulelah' ),

        'description'           => __( $cpt['plural'].' Description', 'abdulelah' ),

        'labels'                => $labels,

        'supports'              => $cpt['supports'],

        'hierarchical'          => false,

        'public'                => true,

        'show_ui'               => true,

        'show_in_menu'          =>$cpt['show_in_menu'],

        'menu_position'         => $cpt['position'],

        'menu_icon'             => $cpt['icon'],

        'show_in_admin_bar'     => true,

        'show_in_nav_menus'     => true,

        'can_export'            => true,

        'has_archive'           => true,    

        'exclude_from_search'   => false,

        'publicly_queryable'    => true,

        'capability_type'       => 'post',

      );

    // Register Custom Post Type>

    register_post_type( $cpt['cptname'], $args );

    }   

}

/* create my custom menu pages */

function abdulelah_register_custom_menu_pages() {

    add_menu_page(

        'website options',

        'abdulelah Options',

        'manage_options',

        'content-area',

        'main_content_area_callback',

        get_option('abdulelah_favicon_img'),

        2

    );   

    add_submenu_page(

        'content-area',

        'Home options',

        'Home Page Options',

        'manage_options',

        'home-page-content',

        'home_page_content_callback'

    );   

    add_submenu_page(

        'content-area',

        'About options',

        'About Page Options',

        'manage_options',

        'about-page-content',

        'about_page_content_callback'

    );
    
    add_submenu_page(

        'content-area',

        'Blog options',

        'Blog Page Options',

        'manage_options',

        'blog-page-content',

        'blog_page_content_callback'

    );  

    add_submenu_page(

        'content-area',

        'Contact options',

        'Contact Page Options',

        'manage_options',

        'contact-page-content',

        'contact_page_content_callback'

    );  

  add_submenu_page(

        'content-area',

        'Services Options',

        'Services Page Options',

        'manage_options',

        'services-page-content',

        'services_page_area_callback'

    ); 

 /*   add_submenu_page(

        'content-area',

        'Contact options',

        'Contact Page Options',

        'manage_options',

        'contact-page-content',

        'contact_page_content_callback'

    ); */

}

add_action( 'admin_menu', 'abdulelah_register_custom_menu_pages' );

require_once ( abdulelah_ROOT . 'abdulelah_options/abdulelah_options.php');

//require_once ( abdulelah_ROOT . 'abdulelah_options/home_page.php');

//require_once ( abdulelah_ROOT . 'abdulelah_options/about_page.php');

require_once ( abdulelah_ROOT . 'abdulelah_options/blog_options.php');

require_once ( abdulelah_ROOT . 'abdulelah_options/contact_options.php');

require_once ( abdulelah_ROOT . 'abdulelah_options/services_options.php');

//require_once ( abdulelah_ROOT . 'abdulelah_options/contact_page.php');

add_action( 'login_enqueue_scripts', 'my_login_logo' );

function my_login_logo() { ?>

    <style type="text/css">

        body{

            background:#c5c5d8!important; 

        }

        #login h1 a, .login h1 a {

            background-image: url(<?=get_option('abdulelah_logo_img'); ?>);

            width: 100%;

            height: 100px;

            background-size: contain;

            margin: 0 auto;

        }

        .login form{

            background: rgba(3, 3, 4, .9)!important;

            border-radius: .5rem;

        }

        .login label{

            font-weight: 600!important;

            color: #fff!important;

        }

        .wp-core-ui p .button {

            background: rgba(3, 3, 4, .9)!important;

            border-color: rgba(3, 3, 4, .9)!important;

        }

        .wp-core-ui p .button:hover{

            background-color: #005b52 !important;

            border-color: #005b52 !important;

            color: #fff;

        }

        #reg_passmail{color:#fff;}

    </style>

<?php }

