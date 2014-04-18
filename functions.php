<?php
/*
==========================================================
YOU CAN BUILD IN YOUR OWN CUSTOM FUNCTIONALITY HERE
==========================================================
*/
add_action('jbst_child_settings','onepxdeep_jbst_child_settings');
function onepxdeep_jbst_child_settings()
{
	define('jbst_customizer',0);
}	

add_action( 'jbst_child_settings', 'onepxdeep_jbst_theme_setup',99);
function onepxdeep_jbst_theme_setup()
{
	/* Load custom jbst onepxdeep Theme Customizer options. */
	if(jbst_customizer)require( get_stylesheet_directory() . '/functions/template-customizer.php' );
}	

