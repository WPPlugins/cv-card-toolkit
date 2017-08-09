<?php
/**
 * Plugin Name: CV Card Toolkit
 * Description: Custom Portfolio functionality for CV Card Theme
 * Version: 1.0.0
 * Author: Burak Aydin
 * Author URI: http://burak-aydin.com
 * License: GPLv2 or later
 */


function cvcard_post_type(){

	register_post_type('portfolio',array(
		'labels' => array('name' => 'Portfolio'),
		'public' => true,
		'supports' => array('title','editor','thumbnail','post-formats'),
		'menu_icon' => 'dashicons-portfolio',
		'menu_position' => 5
		));	


	/* Taxanomy */
	register_taxonomy('port_tax','portfolio',array(
		'hierarchical' => true,
		'label' => 'Category',
		'query_var' => true,
		'rewrite' => true
	));	
}

add_action('init','cvcard_post_type');