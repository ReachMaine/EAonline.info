<?php
/* 
require_once(get_stylesheet_directory().'/custom/woocommerce.php');
require_once(get_stylesheet_directory().'/custom/language.php'); */

	/***** change admin favicon *****/
	/* add favicons for admin */
	/*add_action('login_head', 'add_favicon');
	add_action('admin_head', 'add_favicon');
	
	function add_favicon() {
		$favicon_url = get_stylesheet_directory_uri() . '/images/admin-favicon.ico';
		echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
	} */
	
	/***** end admin favicon *****/
	
	add_action('after_setup_theme', ea_setup);
	/**  ea_setup
	*  init stuff that we have to init after the main theme is setup.
	* 
	*/
	function ea_setup() {
	 /* do stuff ehre. */
	}

?>
