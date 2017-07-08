<!-- header  start -->
	<?php get_header(); ?>
<!-- header end-->

<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				
			</div>
		</div>
	</div>
</div>
<!-- breadcrumb-area end -->

<!-- content of loop -->
	<?php if (have_posts() ) : while (have_posts() ) : the_post(); 
		get_template_part('bibitberbuah-single', get_post_format() );

	endwhile; endif; ?>
<!-- Content blog post end-->

<!-- footer start -->
	<?php get_footer(); ?>
<!-- footer end -->
