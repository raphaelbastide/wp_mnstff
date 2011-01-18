
<?php get_header(); ?>
	<div id="container">
		<?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>
		<div id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div id="post" class="page">
				<h2 class="sigleTitle">
					<a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => 'Pages: ', 'after' => '', 'next_or_number' => 'number')); ?>
				<div id="postfooter">
					<?php edit_post_link('Edit this post', '<p>', '</p>'); ?>
				</div>
				<?php endwhile; else: ?>
				<p>No page here</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>