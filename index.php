<?php get_header(); ?>
		<div id="left">
			<?php if(is_front_page()){ ?>
			<div id="slider">
				<?php if (function_exists('simple_nivo_slider')) simple_nivo_slider(); ?>
			</div>
			<?php } ?>
			<div id="content">
				<?php get_template_part( 'loop', 'index' ); ?>
			</div>
		</div>
<?php get_footer(); ?>