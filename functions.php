<?php
add_theme_support( 'post-thumbnails', array( 'post' ) );

if (function_exists('register_nav_menu')) {
	register_nav_menu('custom_menu', __('Custom Menu'));
}


if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'name' => 'Widget 1',
		'id' => 'widget-area-1',
		'before_widget' => '<div class="sideblog">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidetitle">',
		'after_title' => '</div>',
	));
	
	register_sidebar(array(
		'name' => 'Widget 2',
		'id' => 'widget-area-2',
		'before_widget' => '<div class="sideblog">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidetitle">',
		'after_title' => '</div>',
	));
}
?>