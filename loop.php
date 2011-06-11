<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
<div class="entry">
	<div class="post-data"></div>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title">Mitään ei löytynyt o_O</h1>
		<div class="entry-text">
			<p>Pahoittelut, mutta mitään ei löytynyt. Tämä tosin on outo asia, jospa käyttäisit etsintä lomaketta avuksesi!</p>
			<?php get_search_form(); ?>
		</div>
	</div>
</div>
<?php endif; ?>

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
				<!-- <?php if(function_exists('the_views')) { the_views(); } ?> -->
				<div style="float:left;"><a href="http://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="<?php the_title(); ?>" data-count="horizontal" data-via="rntst">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div>
				<div style="float:left;"><g:plusone size="medium" href="<?php the_permalink(); ?>"></g:plusone></div>
				<div style="float:left; padding-top:2px; margin-right:15px;"><script type="text/javascript">reddit_url = "<?php the_permalink(); ?>";</script><script type="text/javascript" src="http://www.reddit.com/static/button/button1.js"></script></div>
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

<?php if(is_single()){ ?>
<div style="text-align:center; margin-bottom:20px;">	
<script type="text/javascript"><!--
google_ad_client = "ca-pub-9507655949266974";
/* 468 x 60 rntst */
google_ad_slot = "8061204180";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<?php } ?>
    <?php 
    if(comments_open()){
		comments_template( '', true );
	} ?>

	<div class="clear"></div>

<?php endwhile; // End the loop. Whew. ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	<div class="clear"></div>
<?php endif; ?>