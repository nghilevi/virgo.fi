	/*
		Template Name: Home
	*/

<?php get_header(); ?>
	<ul id="games">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
		<?php endwhile; ?>
		<?php endif; ?>
	</ul>
</body>
