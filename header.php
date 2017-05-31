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
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/slicknav.css">
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/font-awesome/css/font-awesome.min.css">
      <link href="<?php bloginfo('template_directory'); ?>/css/jquery.bxslider.css" rel="stylesheet" />

      <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon">

      <!-- Add jQuery library -->
      <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>

      <!-- Add fancyBox -->
      <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
      <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/fancybox/source/jquery.fancybox.pack.js"></script>

      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
   		<meta name="viewport" content="width=device-width, initial-scale=1.0">

      
      <script  src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
      

      <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i&amp;subset=latin-ext" rel="stylesheet">

      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

  		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>


      

  		<script>
    		jQuery(document).ready(function(){
    		  

          var slider = jQuery('.slider').bxSlider({
            auto: true,
            nextText: '',
            prevText: ''
          });

          jQuery('.cta').mouseenter(function() {   
             slider.stopAuto();      
           }).mouseleave(function() {   
               slider.startAuto();
           });



    		});
  		</script>

      



      <script>

        jQuery(document).ready(function(){
          jQuery('.gallery-slider').bxSlider({
            slideWidth: 400,
            minSlides: 2,
            maxSlides: 10,
            moveSlides: 1,
            slideMargin: 10,
            controls:false,
            infiniteLoop: false
          });
        });

      </script>

      <!-- smoth scroll to div -->

      <script>
      
      </script>

      <?php /*
      <script>
      function loadMap() {

           var mapOptions = {
              center:new google.maps.LatLng(45.804628707847236,15.95787475305633),
              zoom:16
           }

           var map = new google.maps.Map(document.getElementById("sample"),mapOptions);

           var marker = new google.maps.Marker({
              position: new google.maps.LatLng(45.8044938,15.9559791),
              map: map,
              animation:google.maps.Animation.Drop
           });
        }

        google.maps.event.addDomListener(window, 'load', loadMap);
     </script>
     */ ?>

      <?php wp_head(); ?>

   </head>

   <body <?php body_class(); ?>>

     <div class="res"></div>

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
               <li><a href="https://www.facebook.com/pages/Petros-Travel-Agency-putni%C4%8Dka-agencija/147790758658182" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
               <li><a href="https://www.instagram.com/petrosdmc/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
               <li><a href="https://www.linkedin.com/company/petros-travel-agency?trk=company_name" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
             </ul>

           </div>

         </div>

       </div>

     </header>

     <!-- responsive navigacija -->
     <a href="<?php echo home_url(); ?>">

		     <img class="reslogo" src="<?php bloginfo('template_directory'); ?>/images/petros-logo-res.png">

		</a>

    <div id="menu">

      <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>

      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

      <div class="ressocial">

        <h3>Follow us</h3>

        <ul>
          <li><a href="https://www.facebook.com/pages/Petros-Travel-Agency-putni%C4%8Dka-agencija/147790758658182"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/explore/tags/hrvatska/?hl=en"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://www.linkedin.com/company/petros-travel-agency?trk=company_name"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>

      </div>

      <div class="headfoot">

        <img src="<?php bloginfo('template_directory'); ?>/images/petros-logo-img.png" alt="Šumarski fakultet">

        <p>Petros tour operator & DMC <br> <?php _e( 'Small groups for a great experience', 'petros' ); ?></p>

        <p>Copyright Petros DMC 2017. <br> <?php _e( 'All rights reserved.', 'petros' ); ?></p>

      </div>

    </div>
