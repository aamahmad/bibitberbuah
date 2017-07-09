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
            <p>Rp 25.000</p>
          </div>
          <a href="<?php the_permalink(); ?>">
          <div class="product-checkout">
          <p>Beli / Lihat Detail</p></div>
          </a>
        </div>
      </div>
</div>