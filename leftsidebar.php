<div id="leftsidebar">
	<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
	<ul class="sidebar_list">
			Contact
			<h2 class="open">Categories</h2>
			<ul id="s_categories">
				<?php wp_list_categories('show_count=1&title_li='); ?>
			</ul>
			<h2 class="open">RSS</h2>
			<ul class="inside">
				<ul>
					<li>						<a href="<?php bloginfo('rss2_url'); ?>" title="RSS">Posts RSS</a>					</li>
					<li>						<a href="<?php bloginfo('comments_rss2_url'); ?>" title="RSS | Comments">Comments RSS</a>					</li>
				</ul>
			</ul>
			<?php include (TEMPLATEPATH . '/searchform.php'); ?>
			<h2 class="open">Menu</h2>
			<ul class="inside">
				<li><a href="#">Item</a></li>
			</ul>			
		<?php if ( !function_exists('dynamic_sidebar')				|| !dynamic_sidebar() ) : ?>		<?php endif; ?>
	</ul>
</div>