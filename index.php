<?php get_header(); ?>
		<div id="left">
			<?php if(is_front_page()){ ?>
			<!--<div id="slider">
				<?php //if (function_exists('rps_show')) echo rps_show(); ?>
			</div>-->
			<?php } ?>
			<div id="content">
				<?php 
				if(is_front_page()){
					get_template_part( 'etusivu', 'index' ); 
				}else{
					get_template_part( 'loop', 'index' ); 
				}
				?>
			</div>
		</div>
<?php get_footer(); ?>