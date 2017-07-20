<?php get_header(); ?>

<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php the_breadcrumb(); ?> 
			</div>
		</div>
	</div>
</div>

<div class="container">
    <div class="row"> 
    <div class="col-md-9">
    	<div class="row"> 
		<?php 
	
		// Check if there are any posts to display
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
								
		<?php get_template_part('category_hasil', get_post_format() );?>

		<?php endwhile; 

		else: ?>

		<p>Maaf, data tidak ditemukan,</p>

		<?php endif; ?>
		</div>
	</div>

	<div class="col-md-3">
		<?php get_sidebar(); ?> 
	</div>

	</div>
</div>

<?php get_footer(); ?>