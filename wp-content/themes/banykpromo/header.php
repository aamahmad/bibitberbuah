<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo get_bloginfo( 'template_directory' );?>/style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head();?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <center><div class="wakontak">
            <img alt="WhatsApp" src="<?php echo get_bloginfo( 'template_directory' );?>/images/WhatsApp.png"> WA : 085223399317
          </div></center>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><center><div class="wakontak"><img alt="Call" src="<?php echo get_bloginfo( 'template_directory' );?>/images/call.png"> Call : 085223399317</div></center></li>
            <li><center><div class="wakontak"><img alt="SMS" src="<?php echo get_bloginfo( 'template_directory' );?>/images/sms.png"> SMS : 085223399317</div></center></li>
            <li><center><div class="wakontak"><img alt="BBM" src="<?php echo get_bloginfo( 'template_directory' );?>/images/bbm.png"> BBM : DF23K9SS</div></center></li>
          </ul>

          <form class="navbar-form navbar-right">
            <div class="form-group">
             <input type="text" class="form-control" placeholder="Cari bibit / tanaman">
            </div>
            <button type="submit" class="btn btn-success">Cari</button>
          </form>
        </div><!--/.nav-collapse -->
         
      </div>

    </nav>

     <div class="jumbotron">
      <div class="container">
        <div class="row">
          <div class="col-sm-5 col-md-6">
            <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' );?>">
              <img alt="Brand" width="80%" src="<?php echo get_bloginfo( 'template_directory' );?>/images/logo4.png">
            </a>
          </div>

          <div class="col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/slider1.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/slider2.jpeg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="<?php echo get_bloginfo( 'template_directory' );?>/images/slider3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
          </div>
        </div>
      </div>

    </div>