<?php get_header(); ?>
   <div id="container">
    <?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>
        <div id="content">
		<h1 class="page-title">
			<?php printf( __( 'Search Results for: %s', '' ), '<span>' . get_search_query() . '</span>' ); ?>
		</h1>
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
							<?php edit_post_link('Edit this post', '<p>', '</p>'); ?>
							Posted in <?php the_category(' ') ?><?php the_tags(', tagged with ' , ' - '); ?>
						</div>
					</div>
        		<?php endwhile; ?>
				<div id="postnav">
					<div id="navleft"><?php next_posts_link('&#x25c0; Previous ') ?></div>
					<div id ="navright"><?php previous_posts_link('Next &#x25b6;') ?></div>
				</div>
				<?php else : ?>
        		<h2 class="center">Not Found</h2>
        		<p class="center">Sorry, but you are looking for something that isn't here.</p>
        		<?php include (TEMPLATEPATH . "/searchform.php"); ?>        
        	<?php endif; ?>
        </div>
  </div>
<?php get_footer(); ?>