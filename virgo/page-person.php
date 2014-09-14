	/*
		Template Name: Person
	*/

<?php get_header(); ?>

<div class="coverbg"></div>
<div id="all-games-container">
	<div class="about-text">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content(); ?>
				<p class="quote" style="color: #ffffff;">
				<?php echo get_post_meta($post->ID,'quote',true)  ?></p>
		</div>
		<?php endwhile; ?>
		<?php endif; ?>
	</div>
</div>

</body>
