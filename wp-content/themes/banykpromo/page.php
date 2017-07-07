<?php get_header(); ?>

    <div class="container">

      <div class="row">
        <div class="col-md-8 blog-main">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          
              get_template_part( 'content', get_post_format() );
        
            endwhile; endif; 
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
      </div>

    </div><!-- /.container -->

<?php get_footer(); ?>