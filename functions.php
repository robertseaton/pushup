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