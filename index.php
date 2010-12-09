<?php get_header(); ?>
   <div id="container">
    <?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>
        <div id="content">
        	<?php if (have_posts()) : ?>
        		<?php while (have_posts()) : the_post(); ?>
					<div id="post">
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div id="date">
							<?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> -->
						</div>
						<?php the_content('Read the rest of this entry &raquo;'); ?>
						<div id="postfooter">
							<p>Posted in <?php the_category(', ') ?>
						</div>
					</div>
        		<?php endwhile; ?>
        		<?php next_posts_link('&laquo; Previous ') ?>
        		<?php previous_posts_link('Next &raquo;') ?>
				<?php else : ?>
        		<h2 class="center">Not Found</h2>
        		<p class="center">Sorry, but you are looking for something that isn't here.</p>
        		<?php include (TEMPLATEPATH . "/searchform.php"); ?>        
        	<?php endif; ?>
        </div>
  </div>
<?php get_footer(); ?>