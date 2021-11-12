<?php
header("X-XSS-Protection: 1; mode=block");
header("X-Content-Type-Options: nosniff");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="author" content="Jthemes"/>
<meta name="description" content="ordba.net - Srinivas Maddali -  
			What I learned from various RDBMS also from non-RDBMS supported by RDBMS"/>
<meta name="keywords" content="ordba.net - Srinivas Maddali -  
			What I learned from various RDBMS also from non-RDBMS supported by RDBMS">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- SITE TITLE -->
<title> <?php
            if (!empty($is_blog)) : echo $CI->fuel->blog->page_title($page_title, ' : ', 'right');
            else: echo fuel_var('page_title', '');
            endif;
            if ($CI->router->fetch_class() == 'index' & $CI->router->fetch_method() == 'index') {
                
            } else {
                ?>
                | OEDBA
            <?php } ?></title>

<!-- FAVICON AND TOUCH ICONS  -->
<link rel="shortcut icon" href="<?=assets_path('images/favicon.ico')?>" type="image/x-icon">
<link rel="icon" href="<?=assets_path('images/favicon.ico')?>" type="image/x-icon">
<link rel="apple-touch-icon" sizes="152x152" href="<?=assets_path('images/apple-touch-icon-152x152.png')?>">
<link rel="apple-touch-icon" sizes="120x120" href="<?=assets_path('images/apple-touch-icon-120x120.png')?>">
<link rel="apple-touch-icon" sizes="76x76" href="<?=assets_path('images/apple-touch-icon-76x76.png')?>">
<link rel="apple-touch-icon" href="<?=assets_path('images/apple-touch-icon.png')?>">
<link rel="icon" href="<?=assets_path('images/apple-touch-icon.png')?>" type="image/x-icon">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Muli:400,600,700,800,900&amp;display=swap" rel="stylesheet">

<!-- BOOTSTRAP CSS -->
 

<!-- FONT ICONS -->
<link href="https://use.fontawesome.com/releases/v5.11.0/css/all.css" rel="stylesheet" crossorigin="anonymous">
 <?=css(array('bootstrap.min',
 'flaticon',
 "menu",
 'dropdown-effects/fade-down',
 'flexslider','magnific-popup',
 'owl.carousel.min',
 'owl.theme.default.min',
 'animate',
 'style',
 'responsive'));?>

<!-- PLUGINS STYLESHEET -->


<!-- ON SCROLL ANIMATION -->
 <?=js(array('jquery-3.3.1.min'))?>
</head>

<body>

<!-- PRELOADER SPINNER
		============================================= -->
<div id="loader-wrapper">
  <div id="loading">
    <div id="loading-center">
      <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
  </div>
</div>

<!-- PAGE CONTENT
		============================================= -->
<div id="page" class="page"> 
  
  <!-- HEADER
			============================================= -->
  <header id="header" class="header white-menu navbar-dark">
    <div class="header-wrapper"> 
      
      <!-- MOBILE HEADER -->
      <div class="wsmobileheader clearfix"> 
      <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a> 
      <span class="smllogo smllogo-black"><img src="<?=assets_path('images/logo.png')?>" width="172" height="40" alt="mobile-logo"/></span> 
      <span class="smllogo smllogo-white"><img src="<?=assets_path('images/logo-white.png')?>" width="172" height="40" alt="mobile-logo"/></span>
      </div>
      
      <!-- NAVIGATION MENU -->
      <div class="wsmainfull menu clearfix">
        <div class="wsmainwp clearfix"> 
          
          <!-- LOGO IMAGE --> 
          <!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 344 x 80 pixels) -->
          <div class="desktoplogo"><a href="#hero-1" class="logo-black">
          <img src="<?=assets_path('images/logo.png')?>" width="172" height="40" alt="header-logo"></a></div>
          <div class="desktoplogo"><a href="#hero-1" class="logo-white">
          <img src="<?=assets_path('images/logo-white.png')?>" width="172" height="40" alt="header-logo"></a></div>
          
          <!-- MAIN MENU -->
		 
          <nav class="wsmenu clearfix">
		   <?=gentrate_custim_nav(fuel_nav(array( 
		  					'render_type' => 'data'
							, 'group_id' => 1
                            , 'active_class'=>'active'
                            ,'active'=>  uri_segment(2)
							,'order' => 'precedence'
                            ,'use_nav_key'=>TRUE
                            ,'home_link'=>  base_url()
							)));
                           ?>
          </nav>
          <!-- END MAIN MENU -->   
          
        </div>
      </div>
      <!-- END NAVIGATION MENU --> 
      
    </div>
    <!-- End header-wrapper --> 
  </header>
  <!-- END HEADER --> 