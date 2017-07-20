<div class="col-md-9">
<?php the_breadcrumb(); ?> 
<div class="judulproduk">
	<h4 ><?php the_title(); ?></h4>
</div>
          <div class="row">
            <div class="col-md-4">
            	<a href="#" class="thumbnail">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="...">
				</a>
            </div>
            <div class="col-md-4">
				<div class="pemesanan">
				<h2>Detail Produk</h2>
				<table class="table">
				    <tbody>
				      <tr>
				        <td>Kategori</td>
				        <td>: -</td>
				      </tr>
				      <tr>
				        <td>Berat</td>
				        <td>: <?php echo esc_html( get_post_meta( get_the_ID(), 'berat_olshop', true ) );?></td>
				      </tr>
				      <tr>
				        <td>Stok</td>
				        <td>: <?php echo esc_html( get_post_meta( get_the_ID(), 'status_olshop', true ) );?></td>
				      </tr>
				      <tr>
				        <td>Dilihat</td>
				        <td>: -</td>
				      </tr>
				      <tr>
				        <td><b>Harga</b></td>
				        <td>: <b>Rp <?php echo esc_html( get_post_meta( get_the_ID(), 'olshop_harga', true ) );?></b></td>
				      </tr>
				    </tbody>
			  	</table>
			  	</div>

            </div>
            <div class="col-md-4">
            	<div class="pemesanan">
            		<h2>Pemesanan</h2>
            		<p>Jika Tertarik dengan produk ini langsung menghubungi kami via :</p>
            		<p>
            			<b>SMS/WA</b> : <?php echo get_option('kontak_wa'); ?><br>
            			<b>BBM</b> : <?php echo get_option('kontak_bbm'); ?><br>
            			<b>Line</b> : <?php echo get_option('kontak_line'); ?><br>
            			<b>Telegram</b> : <?php echo get_option('kontak_telegram'); ?><br>
            		</p>

            	</div>
            </div>

            <div class="col-md-12">
	            <div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title">Penjelasan <?php the_title(); ?> </h3>
				  </div>
				  <div class="panel-body">
				    <?php the_content(); ?>
				  </div>
				</div>

				<!-- begin custom related loop, -->
								<?php
						        
						        // get the custom post type's taxonomy terms
						        $custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
						 
						        $args = array(
						            'post_type' => 'bibitberbuah',
						            'post_status' => 'publish',
						            'posts_per_page' => 5, // you may edit this number
						            'orderby' => 'rand',
						            'post__not_in' => array ( $post->ID ),
						            'tax_query' => array(
						                array(
						                    'taxonomy' => 'category',
						                    'field' => 'id',
						                    'terms' => $custom_taxterms
						                )
						            )
						        );
						        $related_items = new WP_Query( $args );
						        
						        // loop over query
						        if ( $related_items->have_posts() ) : ?>


									<?php while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
						            
						      		<div class="single-product">
										<div class="product-img">
											<a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail_url('thumbnail'); ?>" alt="New Products" /></a>
											<div class="product-overlay"></div>
											<a class="quick-view modal-view" href="#" data-toggle="modal" data-target="#<?php the_ID(); ?>"><i class="pe-7s-search"></i></a>
										</div>
										<div class="product-info">
											<h3 class="product-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<span class="product-price"> <span>Rp&nbsp;<?php echo esc_html( get_post_meta( get_the_ID(), 'olshop_harga', true ) ); ?></span></span>
											<a href="<?php the_permalink(); ?>" class="cart-btn">beli sekarang</a>
										</div>
									</div><!-- /.single-product -->
						 
									<?php endwhile; ?>
						 
						            </ul>
						            </li>
						 
								<?php endif;
						        // Reset Post Data
						        wp_reset_postdata();
						        ?> 
								<!-- end custom related loop, -->
            </div>

          </div>
</div>