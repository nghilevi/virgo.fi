	/*
		Template Name: Games
	*/

<?php get_header(); ?>
		
<div class="coverbg"></div>
<div id="all-games-container">
	<div class="about-text">
		<div class="about-text">
		<?php the_content(); ?>
		<h1>Games</h1>
		<ul>
			<?php $cat_posts = new WP_Query("category_name=Games"); ?>
				<?php if ( $cat_posts->have_posts() ) : ?>
					<?php while ( $cat_posts->have_posts() ) : $cat_posts->the_post(); ?>
						
							<li>
							<span>
								<?php
								$posttags = get_the_tags();
								if ($posttags) {
								  foreach($posttags as $tag) {
									echo $tag->name . ' '; 
								  }
								}
								?>
							</span>
							<a href="<?php the_permalink() ?>"><?php  the_title(); ?></a></li>
					   
					<?php endwhile; ?>
				<?php else : ?>
					<h2>Not Found</h2>
				<?php endif; ?>
		</ul>
		</div>
	</div>
</div>

</body>
