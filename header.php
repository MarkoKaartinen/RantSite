<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title>RantSite.net</title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>
<body>
<div id="page">
	<div id="header">
		<div id="leftHead">
			<div id="logo">
				<h1>RantSite.net</h1>
			</div>
			<div id="navigationTop">
				<ul id="navi">
					<li><a href="#">Etusivu</a></li>
					<li><a href="#">Räntit</a></li>
					<li><a href="#">Arkisto</a></li>
					<li><a href="#">Info</a></li>
					<li><a href="#">Hakemus</a></li>
				</ul>
			</div>
		</div>
		<div id="rightHead">
			<div id="medialinks">
				Twitter / FB / Flattr / RSS
			</div>
		</div>
		<div class="clear"></div>
	</div>