<?php get_header(); ?>
		<div id="left">
			<?php if(is_front_page()){ ?>
			<!--<div id="slider">
				<?php //if (function_exists('rps_show')) echo rps_show(); ?>
			</div>-->
			<?php } ?>
			<div id="content">
				<?php 
				get_template_part( 'authorfile', 'index' ); 
				?>
			</div>
		</div>
<?php get_footer(); ?>