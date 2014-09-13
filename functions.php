<?php
// Start the engine
require_once( get_template_directory() . '/lib/init.php' );
 
add_theme_support( 'html5' );
add_theme_support( 'genesis-responsive-viewport' );
add_theme_support( 'genesis-footer-widgets', 3 );

remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'sp_custom_footer' );
function sp_custom_footer() {
     ?>
     <!--
          <p>&copy; Copyright 2012 <a href="http://mydomain.com/">My Domain</a> &middot; All Rights Reserved &middot; Powered by <a href="http://wordpress.org/">WordPress</a> &middot; <a href="http://mydomain.com/wp-admin">Admin</a></p>
     -->
<?php
                                                                                                                                                                                              }

/* Get Google web fonts. */
add_action( 'genesis_meta', 'wpb_add_google_fonts', 5);

function wpb_add_google_fonts() {
		echo '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto|Lato" media="screen">';
}

/* This is the below post widget area. */

genesis_register_sidebar( array(
'id' => 'below-post',
'name' => __( 'Below Post', 'genesis' ),
'description' => __( 'This is the below post widget.', 'themename' ),
) );

add_action( 'genesis_entry_footer', 'below_post_text' );

function below_post_text() {
	if (is_single()) {
		genesis_widget_area('below-post', array('before' => '<div class="below-post widget-area">',));
        }}

/* This removes the header. */
remove_action('genesis_header','genesis_do_header');

/* This creates a new header, inside the top nav bar. */
add_filter( 'genesis_nav_items', 'insert_logo', 10, 2);
add_filter( 'wp_nav_menu_items', 'insert_logo', 10, 2);

/* Add header to menu */

function insert_logo($menu, $args) {
	/*if ( 'primary' !== $args['theme_location'] )
		return $menu; */
     $logo = '<li class="menu-item"><h1 class="site-title"><a href="'.get_bloginfo('url').'" title="'.get_bloginfo('name').'"><span class="strong">rs</span>.io</a></h1></li>';
     $mobile_menu_button = '<div id="mobile-nav"><a href="#" class="icon-menu"></a></div><div id="invbr"><br /></div>';
	return $logo . $mobile_menu_button . $menu;
}

/* JavaScript */

// Enqueue pushup.js - Crunchify Tips
add_action( 'wp_enqueue_scripts', 'crunchify_enqueue_script' );
function crunchify_enqueue_script() {
    
}

/** Remove jQuery and jQuery-ui scripts loading from header */
add_action('wp_enqueue_scripts', 'crunchify_script_remove_header');
function crunchify_script_remove_header() {
/**      wp_deregister_script( 'jquery' ); **/
/**      wp_deregister_script( 'jquery-ui' ); **/
}
 
/** Load jQuery and jQuery-ui script  just before closing Body tag */
add_action('genesis_after_footer', 'crunchify_script_add_body');
function crunchify_script_add_body() {
/**     wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js' ); **/
     wp_register_script( 'add-this', 'http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e98cc990c4e19d6');
/**      wp_register_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js' ); **/
/**      wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js', array( 'jquery' ), '4.0', false ); **/
/**      wp_enqueue_script( 'jquery-ui', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js', array( 'jquery' ), '1.10.3' ); **/
      wp_enqueue_script( 'add-this', 'http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e98cc990c4e19d6', array( 'addthis' ), '0.1' );
      wp_enqueue_script( 'pushup', get_stylesheet_directory_uri() . '/js/pushup.js', array( 'pushup' ), '', true );
      wp_enqueue_script( 'bpopup', get_stylesheet_directory_uri() . '/js/jquery.bpopup.min.js', array( 'bpopup' ), '', true );
}