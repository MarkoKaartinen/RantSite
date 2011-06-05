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
			<div class="entry-text">
				<?php the_content("Lue lis&auml;&auml;..."); ?>
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

    <?php comments_template( '', true ); ?>

	<div class="clear"></div>

<?php endwhile; // End the loop. Whew. ?>

<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
	<div class="clear"></div>
<?php endif; ?>