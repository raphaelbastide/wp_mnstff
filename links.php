<?php
/*
Template Name: Links
*/?>
<div id="container">
<div id="header">	<?php get_header(); ?></div>
<div id="leftsidebar">	<?php include (TEMPLATEPATH . '/leftsidebar.php'); ?></div>
<div id="content">
	<h2>Links:</h2>
	<ul>
	<?php get_links_list(); ?>
	</ul>
</div><div id="footer">	<?php get_footer(); ?></div>
