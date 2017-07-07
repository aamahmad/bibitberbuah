
    <footer class="footer">
      <div class="container">
        <div class="row">
        <div class="col-xs-6 col-sm-3">
          <h4>Support Me</h4>
          <address>
            <strong>Twitter, Inc.</strong><br>
            1355 Market Street, Suite 900<br>
            San Francisco, CA 94103<br>
            <abbr title="Phone">P:</abbr> (123) 456-7890
          </address>

          <address>
            <strong>Full Name</strong><br>
            <a href="mailto:#">first.last@example.com</a>
          </address>
        </div>

        <div class="col-xs-6 col-sm-3">
          <h4>Support Me</h4>
          <ul class="list-unstyled">
            <li>Kategori1</li>
            <li>Kategori1</li>
            <li>Kategori1</li>
            <li>Kategori1</li>
          </ul>
        </div>

        <!-- Add the extra clearfix for only the required viewport -->
        <div class="clearfix visible-xs"></div>

        <div class="col-xs-6 col-sm-3">
          <h4>Support</h4>
          <ul class="list-unstyled">
            <?php wp_list_pages( '&title_li=' ); ?>
          </ul>
        </div>

        <div class="col-xs-6 col-sm-3">
          <h4>Social Media </h4>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <img alt="Twitter" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/twitter-20.png">
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <img alt="Facebook" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-20.png">
          </button>
          <button type="button" class="btn btn-default" aria-label="Left Align">
            <img alt="Google+" src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-google-plus-20.png">
          </button>
        </div>
      </div>

      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo get_bloginfo( 'template_directory' );?>/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/bootstrap.js"></script>
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/bootstrap.min.js"></script>
    
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo get_bloginfo( 'template_directory' );?>/js/ie10-viewport-bug-workaround.js"></script>
    <?php wp_footer(); ?> 
  </body>
</html>