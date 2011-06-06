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
				<div style="float:left;"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=153934034630297&amp;xfbml=1"></script><fb:like href="<?php the_permalink(); ?>" send="false" layout="button_count" width="80" show_faces="false" font=""></fb:like></div>
				<div class="clear"></div>

			</div>
			<div class="entry-tags">
				<?php 
				if(has_tag()){
					the_tags('', '', '');
				} 
				?>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="clear"></div>

	<div class="clear"></div>

<?php endwhile; // End the loop. Whew. ?>