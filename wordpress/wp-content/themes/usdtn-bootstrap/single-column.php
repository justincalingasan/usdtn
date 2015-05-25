<?php
/*
Template Name: Single Col
*/
?>


<?php get_header();?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">

	<div class="col-md-12">
	<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</div>
</div>
      
<?php get_footer();?>