<?php get_header(); ?>

<div class="container">
  <div class="row">  

    <?php
    if ( have_posts() ) : while ( have_posts() ) : the_post();

      get_template_part('content', get_post_format());

    endwhile; endif;
    ?>

  </div>
</div><!-- /.container -->

<?php get_footer(); ?>