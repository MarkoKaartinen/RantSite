<div id="comments">
	<h1>Kommentit</h1>
	<?php if ( have_comments() ) : ?>
	
		<?php
		$maara = get_comments_number();
		if($maara == 0){ $viesti = "Ole rohkea ja kommentoi ensimmäisenä tätä r&auml;ntti&auml;!"; }
		if($maara == 1){ $viesti = "Vain yksi kommentti <strong>:/</strong> Kirjoitappa toinenkin!"; }
		if($maara > 1){ $viesti = "Tähän r&auml;nttiin on tullut jo huimat <strong>$maara</strong> kommenttia!"; }
		?>
		<p><?php echo $viesti; ?></p>
		
		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'marko_comment' ) ); ?>
		</ol>
		
	<?php endif; // end have_comments() ?>
	
	<div class="front-spacer"></div>
	
	<?php comment_form(); ?>
</div>