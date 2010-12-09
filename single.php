<div id="header">
	<?php get_header(); ?>
</div>
<div id="container">
	<?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post">
			<h2 class="sigletitre">
				<a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
			<div id="postfooter">
				This entry was posted on <?php the_time('l, F j<S, Y') ?> at <?php the_time() ?> and is filed under <?php the_category(', ') ?>.
				You can follow any responses to this entry through the <?php comments_rss_link('RSS 2.0'); ?> feed.
				<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Both Comments and Pings are open ?>
				You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
				<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
				// Only Pings are Open ?>
				Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
				<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Comments are open, Pings are not ?>
				You can skip to the end and leave a response. Pinging is currently not allowed.
				<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
				// Neither Comments, nor Pings are open ?>
				Both comments and pings are currently closed.
				<?php } edit_post_link('Edit this entry.','',''); ?>
			</div>
			<div id="postnav">
				<div id="navleft"><?php previous_post_link('&laquo; %link') ?></div>
				<div id ="navright"><?php next_post_link('%link &raquo;') ?></div>
			</div>
			<?php comments_template(); ?>
			<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<div id="footer"><?php get_footer(); ?>



