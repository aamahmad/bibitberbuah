<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-md-9">
        <!-- loop produkbusana -->
      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $args = array(
            'post_type'=>'bibitberbuah', // Your post type name
            'posts_per_page' => 2,
            'paged' => $paged,
        );

        $loop = new WP_Query( $args );
        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post();

                     get_template_part('bibitberbuah', get_post_format() );

            endwhile;

            $total_pages = $loop->max_num_pages;

            if ($total_pages > 1){

                $current_page = max(1, get_query_var('paged'));
                echo "<div class='col-md-12'";
                echo paginate_links(array(
                    'base' => get_pagenum_link(1) . '%_%',
                    'format' => '/page/%#%',
                    'current' => $current_page,
                    'total' => $total_pages,
                    'prev_text'    => __('« Sebelum'),
                    'next_text'    => __('Lanjut »'),
                ));
                echo "</div>";
            }    
        }
        wp_reset_postdata();
        ?>


        <!-- loop produkbusana end -->

        </div>

        <div class="col-md-3">

            <?php get_sidebar(); ?> 
        </div>
    </div>
</div>
<?php get_footer(); ?>