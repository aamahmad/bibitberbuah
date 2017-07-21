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
                            'posts_per_page' => 10,
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

                    <div class="col-xs-6 col-md-3">  

                      <div class="product-card2">
                        <div class="product-display">
                            <div class="product-media" style="margin-top: 40px;">
                                <a href="<?php echo get_bloginfo( 'wpurl' );?>/category/<?php echo $kategori; ?>">
                                    <img src="http://infopromodiskon.com/userfiles/uploads/baca-selengkapnya.png">
                                </a>
                            </div>

                            <a href="<?php echo get_bloginfo( 'wpurl' );?>/category/<?php echo $kategori; ?>">
                            <div class="product-checkout">
                            <p>Lihat Produk Lainnya >>></p></div>
                            </a>
                        </div>
                      </div>
                    </div>

        <!-- our-products-area end -->
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                  
                     
                   

                    
                </div>
            </div>

        </div><!-- /.container -->
        
    <?php
}?>


 

<?php get_footer(); ?>