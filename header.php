<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title('&raquo;','true','right'); ?><?php if ( is_single() ) { ?> Arkisto &raquo; <?php } ?><?php bloginfo('name'); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link href="http://fonts.googleapis.com/css?family=Droid+Sans|Ubuntu|Cabin" rel="stylesheet" type="text/css" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="http://feeds.feedburner.com/RantSite" /> 
	<?php wp_enqueue_script("jquery"); ?>
	
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
	
	<script type="text/javascript" src="http://apis.google.com/js/plusone.js">
		{lang: 'fi'}
	</script>
	
	<script type="text/javascript">
	/* <![CDATA[ */
    (function() {
        var s = document.createElement('script'), t = document.getElementsByTagName('script')[0];
        s.type = 'text/javascript';
        s.async = true;
        s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto';
        t.parentNode.insertBefore(s, t);
    })();
	/* ]]> */
	</script>
	
	<?php wp_head(); ?>
	
	<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/rantsite.js"></script>
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
				<div id="some"></div>
				<a href="http://twitter.com/share" class="twitter-share-button" data-url="http://rantsite.net" data-text="RantSite.net - Eri bloggaajien kirjoittamia ränttejä!" data-count="vertical" data-via="rntst">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
				<a class="FlattrButton" style="display:none;" href="http://rantsite.net"></a>
<noscript><a href="http://flattr.com/thing/161216/RantSite" target="_blank">
<img src="http://api.flattr.com/button/flattr-badge-large.png" alt="Flattr this" title="Flattr this" border="0" /></a></noscript>
				<iframe src="http://www.facebook.com/plugins/like.php?href=http%3A%2F%2Frantsite.net%2F&amp;layout=box_count&amp;show_faces=false&amp;width=65&amp;action=like&amp;font&amp;colorscheme=light&amp;height=65" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:65px; height:60px;" allowTransparency="true"></iframe>
				<?php
				$feed = "http://feeds.feedburner.com/RantSite";
				$feedburner_xml = file_get_contents("http://feedburner.google.com/api/awareness/1.0/GetFeedData?uri=".$feed);
				$xml = new SimpleXmlElement($feedburner_xml, LIBXML_NOCDATA);
				$new_feedburner_followers= $xml->feed->entry['circulation'];
				?>
				<div id="feedburner">
					<div class="feedbox"><?php echo $new_feedburner_followers; ?></div>
					<a href="<?php echo $feed; ?>" class="followfeed">RSS</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="clear"></div>
	<div id="container">