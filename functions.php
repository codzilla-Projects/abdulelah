<?php

define('abdulelah_ROOT', get_stylesheet_directory() . '/');

define('abdulelah_URL', get_stylesheet_directory_uri() . '/');

define('abdulelah_ADMIN', admin_url());

define('abdulelah_BlogUrl', get_bloginfo('url'));





require_once(abdulelah_ROOT . 'lib/abdulelah_enqueue_scripts.php');

require_once(abdulelah_ROOT . 'lib/abdulelah_functions.php');

require_once(abdulelah_ROOT . 'lib/abdulelah_meta_fields.php');

require_once(abdulelah_ROOT . 'lib/abdulelah_taxonomy_terms.php');

require_once(abdulelah_ROOT . 'lib/abdulelah_theme_init.php');

require_once(abdulelah_ROOT . 'lib/abdulelah_shortcodes.php');

require_once(abdulelah_ROOT . 'switching_language/services_switching.php');

require_once(abdulelah_ROOT . 'switching_language/blog_switching.php');

require_once(abdulelah_ROOT . 'switching_language/contact_switching.php');

register_nav_menus();

function abdulelah_menu() {
wp_nav_menu( array(
    'menu'              => 'Main Menu',
    'container'         => '',
    'theme_location'    => 'main-nav',
    'menu_class'        => 'menu-list',
    'depth'             => 3
    )
 );
}
function abdulelah_menu_arabic() {
wp_nav_menu( array(
    'menu'              => 'Main Menu Arabic',
    'container'         => '',
    'theme_location'    => 'main-nav',
    'menu_class'        => 'menu-list',
    'depth'             => 3
    )
 );
}
function abdulelah_mime_types( $mimes ) {
    $mimes['svg']  = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
}

add_filter( 'upload_mimes', 'abdulelah_mime_types' );
/*Remove Title TO Anchor Tag Menu*/
function my_menu_notitle( $menu ){
  	return $menu = preg_replace('/ title=\"(.*?)\"/', '', $menu );
}
add_filter( 'wp_nav_menu', 'my_menu_notitle' );
add_filter( 'wp_page_menu', 'my_menu_notitle' );
add_filter( 'wp_list_categories', 'my_menu_notitle' );

/*Add Footer Widget*/
function abdulelah_widgets_init() {

  register_sidebar( array(
    'name'          => 'First Sidebar Column',
    'id'            => 'first_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'abdulelah_widgets_init' );

function abdulelah_second_widgets_init() {

  register_sidebar( array(
    'name'          => 'Second Sidebar Column',
    'id'            => 'second_sidebar',
    'before_widget' => '<div>',
    'after_widget'  => '</div>',
  ));
}
add_action( 'widgets_init', 'abdulelah_second_widgets_init' );

function abdulelah_load_theme_textdomain() {

    load_theme_textdomain( 'abdulelah', get_template_directory() . '/languages' );

}

add_action( 'after_setup_theme', 'abdulelah_load_theme_textdomain' );

add_filter( 'the_content', 'wti_remove_autop_for_image', 0 );
function wti_remove_autop_for_image( $content )
{
    global $post;
    // Check for single page and image post type and remove
    if ( is_single() && $post->post_type == 'image' )
        remove_filter('the_content', 'wpautop');
    return $content;
}
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function change_footer_admin() {
  echo '<span id="footer-thankyou">Powered by <a href="https://codzilla.net/" target="_blank">Codezilla</a></span>';
}
add_filter('admin_footer_text', 'change_footer_admin');