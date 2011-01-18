<?php get_header(); ?>
   <div id="container">
    <?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>
        <div id="content">
					<?php if (have_posts()) : ?>
						<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
						<?php /* If this is a category archive */ if (is_category()) { ?>
						<h1 class="contentheader">Category: <?php single_cat_title(); ?></h1>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h1 class="contentheader">Tag: <?php single_tag_title(); ?></h1>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h1 class="contentheader"><?php the_time('F jS Y'); ?></h1>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h1 class="contentheader"><?php the_time('F Y'); ?></h1>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h1 class="contentheader"><?php the_time('Y'); ?></h1>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h1 class="contentheader">Author</h1>
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h1 class="contentheader">Blog Archives</h1>
					<?php } ?>
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