<?php
/*
Template Name: Homepage Template
*/
?>

<?php get_header();?>

<!--home template-->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="container">

	<div class="col-md-12">
		<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			<p><?php _e('Sorry, that page does not exist'); ?></p>
		<?php endif; ?>
	</div>
	

      
<?php get_footer();?>