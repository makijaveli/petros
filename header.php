<?php
/*
* Main Header
*/
 ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo('charset'); ?>">

      <title><?php wp_title(''); ?></title>
      <meta name="description" content="<?php bloginfo('description'); ?>">

        <!--[if lte IE 8]>
    		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    		<![endif]-->

      <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
      <link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />

      <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.png" rel="shortcut icon">

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">

      <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

  		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>

  		<script>

    		jQuery(document).ready(function(){
    		  jQuery('.slider').bxSlider({
    		  	auto: false,
    			nextText: '',
    			prevText: ''
      			});
    		});

  		</script>

      <?php wp_head(); ?>

   </head>

   <body <?php body_class(); ?>>

     <header class="header">

       <div class="wrapper">

         <div class="logo">

           <a href="<?php echo home_url(); ?>">
             <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="">
           </a>

         </div>

         <div class="navigation">

           <nav class="main">

             <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

           </nav>

           <div class="navsocial">

             <ul>
               <li class="pipe"></li>
               <li><a href="https://www.facebook.com/pages/Petros-Travel-Agency-putni%C4%8Dka-agencija/147790758658182"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="https://www.instagram.com/explore/tags/hrvatska/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               <li><a href="https://www.linkedin.com/company/petros-travel-agency?trk=company_name"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             </ul>

           </div>

         </div>

       </div>

     </header>
