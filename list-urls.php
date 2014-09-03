<?php
/*
Template Name: My Custom Page
*/
get_header(); ?>
<h3>Last 50 Articles</h3>
 <ul>
<?php query_posts('showposts=200'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<li><?php the_permalink() ?></li>
<?php endwhile; endif; ?>
 </ul>