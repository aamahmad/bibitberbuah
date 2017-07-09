<?php get_header(); ?>



<?php
$categories = get_categories( array(
    'order'   => 'DESC',
    'exclude' =>array(23),
    'parent' => 0
));
 
foreach( $categories as $category ) {
    $category_link = sprintf(
        '<a href="%1$s" alt="%2$s">%3$s</a>',
        esc_url( get_category_link( $category->term_id ) ),
        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
        esc_html( $category->name )
    );?>
        <div class="container">
            <div class="row">  
        <!-- our-products-area start -->
        <div class="linebehind">
            <h2><span><?php echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );?></span></h2>
        </div>
                    <!-- loop produkbusana -->
                        <?php
                        $paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' )) : 1;
                        $kategori = esc_attr( sprintf( __( '%s', 'textdomain' ), $category->slug ));

                        $args = array(
                            'posts_per_page' => 6,
                            'paged' => $paged,
                            'post_type' => 'bibitberbuah',
                            'category_name' => $kategori,
                            );

                        $the_query = new WP_Query( $args );?>

                        <?php 
                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <?php get_template_part('bibitberbuah', get_post_format() );?>
                                                     
                        <?php endwhile; endif; wp_reset_postdata();?>
                    <!-- loop produkbusana end -->
        <!-- our-products-area end -->
            </div>
        </div><!-- /.container -->
    <?php
}?>


 

<?php get_footer(); ?>