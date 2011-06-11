<div id="sidebar">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget 1') ) : ?>
<?php endif; ?>

<?php
global $current_user;
get_currentuserinfo();

if($current_user->user_level == 10 OR $current_user->user_level == 1){
	if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Rants') ) :
	endif;
}
?>

<?php if(!is_front_page()){ ?>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget 2') ) : ?>
<?php endif; ?>
<?php } ?>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Widget 3') ) : ?>
<?php endif; ?>
</div>