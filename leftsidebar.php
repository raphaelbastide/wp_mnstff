<div id="leftsidebar">
	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	<ul class="sidebar_list">

		<!-- Each <h2> with a "open" class will open the first child with "inside" class -->			
	
		<!-- Categories listing -->			
			<h2 class="open">Categories</h2>
			<ul class="inside">
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>

		<!-- Pages listing -->			
			<ul>
				<?php wp_list_pages('title_li='); ?>
			</ul>
			
			<a href="<?php bloginfo('rss2_url'); ?>" title="RSS">RSS</a>
		<!-- Search form -->			
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<h2 class="open">Menu</h2>
			<ul class="inside">
				<li><a href="#">Item</a></li>
			</ul>
		<!-- Your own widget -->			
		<?php if ( !function_exists('dynamic_sidebar')				|| !dynamic_sidebar() ) : ?>		<?php endif; ?>
	</ul>
</div>