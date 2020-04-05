<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo TITLE_BAR ?></title>

        <link rel="shortcut icon" href="<?php echo base_url('asset/favicon.png') ?>" type="image/x-icon">
        
        <!-- for-mobile-apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Mercantile Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
        Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
            function hideURLbar(){ window.scrollTo(0,1); } 
        </script>
        
        <!-- //for-mobile-apps -->
        <link href="<?php echo base_url('asset/frontend/css/bootstrap.css') ?>" rel="stylesheet" type="text/css" media="all" />
        <link href="<?php echo base_url('asset/frontend/css/style.css') ?>" rel="stylesheet" type="text/css" media="all" />
    
        <!-- js -->
        <script type="text/javascript" src="<?php echo base_url('asset/frontend/js/jquery-2.1.4.min.js') ?>"></script>
        <!-- //js -->

        <link href='//fonts.googleapis.com/css?family=Sanchez:400,400italic' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

        <!-- start-smoth-scrolling -->
        <script type="text/javascript" src="<?php echo base_url('asset/frontend/js/move-top.js') ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('asset/frontend/js/easing.js') ?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){		
                    event.preventDefault();
                    $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
        </script>
        <!-- start-smoth-scrolling -->
        
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-8440299748435473",
            enable_page_level_ads: true
          });
        </script>
    </head>
	
    <body>
    <!--navigation-->
        <div class="top-nav">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="navbar-header navbar-left">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <h4>
                            <img src="<?php echo base_url('asset/frontend/images/logo-pmii.png') ?>" alt="logo-pmii" class="navbar-brand"> 
                            <a class="navbar-brand" href="#"> &nbsp; PMII PKC KALTIMRA</a>
                        </h4>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                        <nav class="menu menu--shylock">
                            <ul class="nav navbar-nav link-effect-7">
                                <li><a href="<?php echo site_url('welcome') ?>" data-hover="Beranda">Beranda</a></li>
                                <li><a href="<?php echo site_url('welcome/artikel') ?>" data-hover="Artikel">Artikel</a></li>
                                <li><a href="<?php echo site_url('welcome/galeri') ?>" data-hover="Galeri">Galeri</a></li>
                                <li><a href="<?php echo site_url('welcome/kontak') ?>" data-hover="Kontak">Kontak</a></li>
                                <li><a href="<?php echo site_url('login') ?>" data-hover="Masuk">Masuk</a></li>
                            </ul>
                        </nav>
                    </div>
                </nav>	
            </div>	
        </div>	
    <!--navigation-->