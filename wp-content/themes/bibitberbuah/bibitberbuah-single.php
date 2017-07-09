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
            			<b>SMS/WA</b> : 085223399317<br>
            			<b>BBM</b> : 085223399317<br>
            			<b>Line</b> : 085223399317<br>
            			<b>Telegram</b> : 085223399317<br>
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
            </div>

          </div>
</div>