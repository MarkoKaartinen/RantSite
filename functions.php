<?php
add_theme_support( 'post-thumbnails', array( 'post' ) );

if (function_exists('register_nav_menu')) {
	register_nav_menu('custom_menu', __('Custom Menu'));
}


if ( function_exists('register_sidebar') ){
	register_sidebar(array(
		'name' => 'Widget 1',
		'id' => 'widget-area-1',
		'before_widget' => '<div class="sideblock">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidetitle">',
		'after_title' => '</div>',
	));

	register_sidebar(array(
		'name' => 'Etusivu-1',
		'id' => 'Etusivu-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	
	register_sidebar(array(
		'name' => 'Widget 2',
		'id' => 'widget-area-2',
		'before_widget' => '<div class="sideblock">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidetitle">',
		'after_title' => '</div>',
	));

	register_sidebar(array(
		'name' => 'Widget 3',
		'id' => 'widget-area-3',
		'before_widget' => '<div class="sideblock">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidetitle">',
		'after_title' => '</div>',
	));
	
	register_sidebar(array(
		'name' => 'Rants',
		'id' => 'widget-area-4',
		'before_widget' => '<div class="sideblock">',
		'after_widget' => '</div>',
		'before_title' => '<div class="sidetitle">',
		'after_title' => '</div>',
	));

}

add_filter('get_comments_number', 'comment_count', 0);
function comment_count( $count ) {
	global $id;
	$comments_by_type = &separate_comments(get_comments('post_id=' . $id));
	return count($comments_by_type['comment']);
}

function marko_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comm">
		<div class="comment-author vcard">
			<?php
        	$user_info = get_userdata($comment->user_id);
        	$levu = $user_info->user_level;
        	if($levu == ""){
        		$rooli = "Vieras";
        	}elseif($levu == 0){
        		$rooli = "K&auml;ytt&auml;j&auml;";
        	}elseif($levu == 1){
        		$rooli = "R&auml;nttij&auml;";
        	}elseif($levu == 10){
        		$rooli = "Yll&auml;pit&auml;j&auml;";
        	}else{
        		$rooli = "";
        	}
        	?>
        	

			<?php echo get_avatar( $comment, 60 ); ?>
        	<?php 
        	if($levu == 10 OR $levu == 1){ 
        		echo "<a href=\"".home_url()."/author/".$user_info->user_login."/\">"; 
        	} 
        	?>
        	<?php echo get_comment_author(); ?>
        	<?php 
        	if($levu == 10 OR $levu == 1){ 
        		echo "</a>"; 
        	} ?>
        	<?php 
        	if($rooli != ""){ 
	        	echo " <span style=\"font-size:12px; font-weight:normal;\">($rooli)</span>"; 
        	} 
        	?>
		</div><!-- .comment-author .vcard -->
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em><?php _e( 'Kommenttisi odottaa hyväksyntää' ); ?></em>
			<br />
		<?php endif; ?>

		<div class="comment-meta commentmetadata"><a rel="nofollow" href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
			<?php
				/* translators: 1: date, 2: time */
				printf( __( '%1$s klo %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Muokkaa)' ), ' ' );
			?>
		</div><!-- .comment-meta .commentmetadata -->

		<div class="comment-body"><?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="pingback">
		<p><?php _e( 'Pingback:', 'twentyten' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Muokkaa)', 'twentyten'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
?>