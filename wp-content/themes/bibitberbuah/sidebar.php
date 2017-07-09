<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Kategori</h3>
  </div>
  <div class="panel-body">

	<?php
							$categories = get_categories( array(
							    'order'   => 'ASC',
							    'exclude' =>array(23) ,
							    'parent' => 0
							) );
							 
							foreach( $categories as $category ) {
							    $category_link = sprintf( 
							        '<a href="%1$s" alt="%2$s">%3$s</a>',
							        esc_url( get_category_link( $category->term_id ) ),
							        esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
							        esc_html( $category->name )
							    );
							    $id_term = esc_attr( sprintf( __( '%s', 'textdomain' ), $category->term_id));

							    ?>

    						<div class="single-sidebar-widget">
								<h6 class="widget-title">
									<?php echo sprintf( esc_html__( '%s', 'textdomain' ), $category_link );?>
								</h6>
								<div class="menu-list">
									<ul>

										<?php 
									    $sub_categorys = get_categories( array( 
									    	'orderby'            => 'id',
									        'show_count'         => __( 'No categories' ),
									        'use_desc_for_title' => false,
									        'title_li'           => false,
									        'show_option_none'   => false,
									        'child_of'           => $id_term
									    ) ); 
									    foreach ( $sub_categorys as $subcategory ) {
									    ?>
									        <li>
									        <a href="<?php echo esc_url( get_category_link( $subcategory->term_id ) );?>">
											<?php echo esc_html( $subcategory->name );?>
									       	<span class="qty">(<?php echo esc_html( $subcategory->count );?>)</span>
									        </a>
									        </li>
										<?php }
									    ?>

									</ul>
								</div>
							</div><!-- /.single-sidebar-widget -->

	<?php } ?>

  </div>

</div>

	