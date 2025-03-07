<?php
/* Enqueue chlid theme scripts */
function blogair_enqueue_script() {
	$parent_style = 'parent-style';
	wp_dequeue_style('blogone-blogair-main');
	wp_enqueue_style('blogair-style',get_stylesheet_directory_uri().'/style.css',$parent_style);
	wp_dequeue_script('blogone-main');  	
	wp_enqueue_script('blogair-custom', get_stylesheet_directory_uri() . '/js/custom.js', array(), false, true);
}
add_action( 'wp_enqueue_scripts' ,'blogair_enqueue_script',99);

/* Adding new chlid theme homepage sections */
function blogair_customize_remove() {     
	global $wp_customize;
	$wp_customize->remove_section( 'header_above');
	$wp_customize->remove_section( 'footer_background');
} 
add_action( 'customize_register', 'blogair_customize_remove', 11 );

// Include customizer file
get_template_part('inc/customizer/blogair-customizer');