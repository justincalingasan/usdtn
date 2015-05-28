<?php
/*
Template Name: Single Column Page
*/
?>

<?php get_header();?>

<!--single column template-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container page-container">

	<div class="col-md-12">
	<?php the_content(); ?>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	</div>
</div>
      
<?php get_footer();?>