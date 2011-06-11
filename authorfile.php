<?php
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>
<div class="entry format-<?php echo $format; ?>">
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1 class="entry-title"><?php echo $curauth->nickname; ?></h1>
		<div class="entry-info"></div>
		<div class="author entry-text">
			<?php echo get_avatar($curauth->user_email, 100); ?>
			<p><?php echo $curauth->user_description; ?></p>
			<?php $numposts = $wpdb->get_results("SELECT * FROM $wpdb->posts WHERE post_status='publish' AND post_type='post' AND post_author = " . $curauth->ID . " ORDER BY post_date DESC"); ?>
			<?php if(count($numposts) > 0){ ?>
				<h2>R&auml;ntit</h2>
				<ul>
					<?php foreach ($numposts as $numpost) {
						$link = get_permalink( $numpost->ID );
						echo "<li><a href=\"". $link ."\">".$numpost->post_title."</a> @ ".date("d.m.Y", strtotime($numpost->post_date))."</li>\n";
					} ?>
				</ul>
			<?php } ?>
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="clear"></div>
