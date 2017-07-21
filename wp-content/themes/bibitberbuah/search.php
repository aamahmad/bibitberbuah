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
     <div class="alert alert-success" role="alert">
        <b><?php echo $wp_query->found_posts; ?></b> hasil ditemukan untuk : <strong><?php the_search_query(); ?></strong>
      </div>
      <div class="row"> 

        
         <?php if ( have_posts() ) { ?>
      
             <?php while ( have_posts() ) { the_post(); ?>
               
                <?php get_template_part('search-hasil', get_post_format() ); ?>

             <?php } ?>
            
         <?php } ?>

    </div>

    <?php wpbeginner_numeric_posts_nav(); ?>
    
  </div>

  <div class="col-md-3">
    <?php get_sidebar(); ?> 
  </div>

  </div>
</div>

<?php get_footer(); ?>