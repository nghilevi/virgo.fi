	/*
		Template Name: Game
	*/
<?php get_header(); ?>
		
<div class="coverbg"></div>
<div id="all-games-container">
<div class="games-about">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php the_content(); ?>
	<?php endwhile; ?>
	<?php endif; ?>
</div>
</div>
</body>
