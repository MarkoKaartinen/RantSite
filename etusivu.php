<?php /* Start the Loop. */ ?>
<?php while ( have_posts() ) : the_post(); ?>
	<?php
	$format = get_post_format();
	if ( false === $format ) {$format = 'standard'; }	?>
	<div class="entry format-<?php echo $format; ?>">
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="entry-info">
				<?php if(!is_page()){ ?>
				<?php the_author_posts_link(); ?> &ndash; <?php the_time('j. F'); ?>ta <?php the_time('Y'); ?> kello <?php the_time("H:i"); ?> &ndash; <?php comments_popup_link( 'Kommentoi', '1 kommentti', '% kommenttia', 'comments-link', 'Kommentointi suljettu'); ?> &ndash; <?php the_category(', '); ?>
				<?php } ?>
			</div>
			<div class="entry-text">
				<?php the_content("Lue lis&auml;&auml;..."); ?>
				<div class="clear"></div>
				<div style="float:left;"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-via="rntst">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
				<div style="float:left;"><g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone></div>
				<div style="float:left; margin-right:10px;"><script type="text/javascript">reddit_url = "<?php the_permalink(); ?>";</script><script type="text/javascript" src="http://www.reddit.com/static/button/button1.js"></script></div>
				<div style="float:left;"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=153934034630297&amp;xfbml=1"></script><fb:like href="<?php the_permalink(); ?>" send="false" layout="button_count" width="80" show_faces="false" font=""></fb:like></div>
				<div class="clear"></div>
				<div class="front-spacer"></div>
				<div id="mainos-etusivu-1">
<?php
$mainos[0] = '<a href="http://reissuun.net"><img src="http://rantsite.net/ads/reissuun.png" alt="Reissuun.net" /></a>';
$mainos[1] = '<a href="http://rantsite.net/hakemus"><img src="http://rantsite.net/ads/rantsite.png" alt="Rantsite.net" /></a>';
$mainos[1] = '<a href="http://rantsite.net/ota-yhteytta"><img src="http://rantsite.net/ads/rantsite2.png" alt="Rantsite.net" /></a>';
shuffle($mainos);
echo $mainos[0];
?>
				</div>
				<div class="front-spacer"></div>
				
				<h1 class="entry-title" style="padding-bottom:15px;"><a href="<?php echo home_url(); ?>/rantit/">Uusimmat r&auml;ntit</a></h1>
				
				<?php $numposts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_status='publish' AND post_type='post' ORDER BY post_date DESC LIMIT 2"); ?>
				<?php if(count($numposts) > 0){ ?>
					<?php foreach ($numposts as $numpost) {
						$link = get_permalink( $numpost->ID );
						$kommentit = $numpost->comment_count;
						if($kommentit == 0){
							$kommenttitxt = "Ei kommentteja";
						}elseif($kommentit == 1){
							$kommenttitxt = $kommentit . " kommentti";
						}else{
							$kommenttitxt = $kommentit . " kommenttia";
						}
						echo "<p><a style=\"font-size:20px; margin-top:10px;\" href=\"". $link ."\">".$numpost->post_title."</a> @ ".date("d.m.Y", strtotime($numpost->post_date))." - <a href=\"$link#comments\">$kommenttitxt</a></p>\n";
						$cont = $numpost->post_content;
						$roina = nl2br($cont);
						$roina = str_replace("\n","",$roina);
						$roina = str_replace("\r","",$roina);
						$roina2 = explode("<br /><br />", $roina);
						$roina = $roina2[0];
						$roina2 = explode("<br /><p", $roina);
						$roina = $roina2[0];
						echo "<p class=\"etusivuroina\">$roina</p>";
						echo "<p><a href=\"". $link ."\">Lue koko r&auml;ntti &raquo;</a></p>\n";
						echo "<div class=\"clear\"></div>";

					} ?>
				</ul>
				<?php } ?>

				<div class="front-spacer"></div>
				
				<?php wp_tag_cloud( array('number' => 100) ); ?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>

	<div class="clear"></div>

<?php endwhile; // End the loop. Whew. ?>