<?php get_header(); ?>

    <div class="container">

      <div class="row">
        <div class="col-md-8 blog-main">
            <?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post();
          
              get_template_part( 'content-single', get_post_format() );

              if ( comments_open() || get_comments_number() ) :
                comments_template();
              endif;
        
            endwhile; endif; 
            ?>
        </div>
        <div class="col-md-4">
            <?php get_sidebar(); ?>
        </div>
      </div>

    </div><!-- /.container -->

<?php get_footer(); ?>