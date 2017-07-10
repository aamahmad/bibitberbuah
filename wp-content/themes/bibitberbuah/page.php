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
	
	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();
			get_template_part( 'content-bibitberbuah', get_post_format() );
		endwhile; endif; 
	?>

	<div class="col-md-3">
		<?php get_sidebar(); ?> 
	</div>

	</div>
</div>

<?php get_footer(); ?>