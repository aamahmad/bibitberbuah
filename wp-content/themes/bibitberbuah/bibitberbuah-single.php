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
				        <td>: <?php the_category(' ','single',''); ?></td>
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
				        <td>: <?php echo getPostViews(get_the_ID()); ?></td>
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
            		<h2>Format Pemesanan</h2>
            		<p>Jika Tertarik dengan produk ini langsung menghubungi kami dengan format :</p>
            		<p>
            			<b>Ketik (SMS/WA):</b><br>
            			ORDERBIBIT#NAMA#JUDUL PPRODUK
            		</p>

            		<p>
            			<b>Kirim Ke :</b><br>
            			<?php echo get_option('kontak_wa'); ?><br>
            		</p>

            		<p>
            			<b>* wajib pake format diatas utk mempermudah pencarian data,</b>
            		</p>

            	</div>
            </div>

            <div class="col-md-12">
	            <div class="panel panel-primary">
				  <div class="panel-heading">
				    <h3 class="panel-title">Penjelasan <?php the_title(); ?> </h3>
				  </div>
				  <div class="panel-body">
				    <?php the_content(); ?>
				  </div>
				</div>

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Produk Sejenis </h3>
					</div>
				<div class="panel-body">

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
						            

							      		<div class="col-xs-6 col-md-3">
									      <div class="product-card">
									            <div class="product-display">
									              <div class="product-media">
									                <a href="<?php the_permalink(); ?>">
									                   <img src="<?php the_post_thumbnail_url(); ?>">
									                </a>
									              </div>
									              <div class="product-deskcription">
									                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									                <p><?php echo esc_html( get_post_meta( get_the_ID(), 'olshop_harga', true ) );?></p>
									              </div>
									              <a href="<?php the_permalink(); ?>">
									              <div class="product-checkout">
									              <p>Beli / Lihat Detail</p></div>
									              </a>
									            </div>
									      </div>
									    </div>		<!-- /.single-product -->
						 
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

          </div>
</div>