<?php get_header();?>

<div class="container front-page">
	<div class="col-md-8">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="post">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		
			<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
			<?php endif; ?>
		</div>
		<!--End .post-->
	</div>
	<!--End col-md-8-->
	
	<div class="col-md-4">
		<div class="bs-sidebar">
			<?php get_sidebar(); ?>
		</div>
		<!--End bs-sidebar-->
	</div>
	<!--End col-md-4-->
		
</div>
      
<?php get_footer();?>