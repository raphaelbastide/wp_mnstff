<div id="header">
	<?php get_header(); ?>
</div>
<div id="container">
	<?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>
	<div id="content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post">
			<h2 class="sigleTitle">
				<a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<?php the_content('<p>Read the rest of this entry &raquo;</p>'); ?>
			<?php wp_link_pages(array('before' => 'Pages: ', 'after' => '', 'next_or_number' => 'number')); ?>
 			<div id="postfooter">
				<?php edit_post_link('Edit this post', '<p>', '</p>'); ?>
				Posted in <?php the_category(', ') ?>, tagged with  <?php the_tags(' ' , ' - '); ?>
			</div>
			<?php endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
		<div id="postnav">
			<div id="navleft"><?php previous_post_link('&#x25c0; %link') ?></div>
			<div id ="navright"><?php next_post_link('%link &#x25b6;') ?></div>
		</div>
	</div>
</div>
<?php get_footer(); ?>



