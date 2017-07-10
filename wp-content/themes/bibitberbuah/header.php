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

  <?php wp_head(); ?>
  </head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
          <center><div class="wakontak">
            <img alt="WhatsApp" src="<?php echo get_bloginfo( 'template_directory' );?>/images/WhatsApp.png"> WA / SMS : 
            <?php echo get_option('kontak_wa'); ?>
          </div></center>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li><center><div class="wakontak"><img alt="Call" src="<?php echo get_bloginfo( 'template_directory' );?>/images/call.png"> Call : <?php echo get_option('kontak_call'); ?></div></center></li>
        <li><center><div class="wakontak"><img alt="SMS" src="<?php echo get_bloginfo( 'template_directory' );?>/images/Line.png"> Line : <?php echo get_option('kontak_wa'); ?></div></center></li>
        <li><center><div class="wakontak"><img alt="BBM" src="<?php echo get_bloginfo( 'template_directory' );?>/images/bbm.png"> BBM : <?php echo get_option('kontak_bbm'); ?></div></center></li>
        <li><center><div class="wakontak"><img alt="Telegram" src="<?php echo get_bloginfo( 'template_directory' );?>/images/telegram.png"> Telegram : <?php echo get_option('kontak_telegram'); ?></div></center></li>
      </ul>
      
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="jumbotron">
  <div class="container">
    <div class="row">

      <div class="col-md-4">
        <div class="logobibit">
        <center><img alt="bibitberbuah.com" width="50%" style="float:left;" src="<?php echo get_bloginfo( 'template_directory' );?>/images/bibit2.png"></center>
        </div>

        <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Cari bibit / tanaman">
        </div>
          <button type="submit" class="btn btn-success">Cari</button>
        </form>

      </div>

      <div class="col-md-8">
       <img alt="Brand" width="100%" src="<?php echo get_bloginfo( 'template_directory' );?>/images/header3.jpg"></a>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="menutengah">
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"> Menu </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="<?php echo get_bloginfo( 'wpurl' );?>">Home</a></li>
              <?php wp_list_pages( '&title_li=' ); ?>
            </ul>
          </div>
        </div>
      </nav>
      </div>
    </div>
  </div>
</div>

