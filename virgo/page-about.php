	/*
		Template Name: About
	*/

<?php get_header(); ?> 

<div class="coverbg"></div>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div id="all-games-container">
	<div class="about-text">
	<ul id="people-list">
		<?php the_content(); ?>
	</ul>
	</div>
	</div>
		<div id="extras-container" style="background-color: rgba(30,30,30,0.85);" >
		<div id="extras-text">
			<h3>Visiting Address</h3><?php echo get_post_meta($post->ID,'address',true)  ?><br/><br/>
			<h3>Postal Address</h3><?php echo get_post_meta($post->ID,'postal',true)  ?><br/><br/>
			<h3>Phone</h3><?php echo get_post_meta($post->ID,'phone',true)  ?><br/><br/>
			<h3>Mail</h3><?php echo get_post_meta($post->ID,'mail',true)  ?><br/><br/>
			<h3>Twitter</h3><?php echo get_post_meta($post->ID,'twitter',true)  ?><br/><br/>
			<h3>More</h3><?php echo get_post_meta($post->ID,'more',true)  ?><br/><br/>
		</div>
</div>
<?php endwhile; ?>
<?php endif; ?>

</body>

	

