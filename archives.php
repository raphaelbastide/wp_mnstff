<?php
/*
Template Name: Archives
*/
?>
<div id="container">
	<div id="header">		<?php get_header(); ?>	</div>
	<div id="leftsidebar">		<?php include (TEMPLATEPATH . '/leftsidebar.php'); ?>	</div>
	<div id="content">
		<h2>Archives</h2>
		<ul>			<?php wp_get_archives('type=monthly'); ?>		</ul>
		<h2>Archives by Subject:</h2>
		<ul>			<?php wp_list_categories(); ?>		</ul>
	</div>
	<div id="footer">		<?php get_footer(); ?>	</div>
</div>