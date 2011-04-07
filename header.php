<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('&raquo;','true','right'); ?><?php if ( is_single() ) { ?> Arkisto &raquo; <?php } ?><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans|Inconsolata|Ubuntu" rel="stylesheet" type="text/css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>

	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<?php wp_head(); ?>
</head>
<body>
<div id="page">
	<div id="header">
		<div id="leftHead">
			<div id="logo">
				<h1><a href="<?php echo home_url(); ?>
"><?php bloginfo('name'); ?></a></h1>
			</div>
			<div class="clear"></div>
			<div id="navigationTop">
				<?php wp_nav_menu(array('menu' => 'custom_menu')); ?>
			</div>
		</div>
		<div id="rightHead">
			<div id="medialinks">
				Twitter / FB / Flattr / RSS
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="page">
	<div id="slider">
	</div>