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
	</div>

<?php endwhile; // End the loop. Whew. ?>