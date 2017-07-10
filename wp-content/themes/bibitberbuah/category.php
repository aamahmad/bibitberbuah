<?php get_header(); ?>

<div class="container">
    <div class="row">  
    <?php the_breadcrumb(); ?> 
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

<?php get_footer(); ?>