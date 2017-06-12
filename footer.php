<?php
/*
* Main footer
*/
?>

<footer>

  <div class="wrapper">

    <div class="footercont">

      <div class="fcol">

        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

      </div>

      <div class="fcol">

        <div class="flogo">
              <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
              <p>Petros tour operator & DMC </p>
              <?php if(ICL_LANGUAGE_CODE=='en'):  ?>
                <p><?php _e( 'Small groups for a great experience', 'petros' ); ?></p>
              <?php endif; ?>  
        </div>
      </div>

      <div class="fcol"><p>Copyright Petros DMC 2017. <?php _e( 'All rights reserved.', 'petros' ); ?></p></div>

    </div>

    <div class="footerres">

      <div class="flogo">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
            <p>Petros tour operator & DMC </p>
            <?php if(ICL_LANGUAGE_CODE=='en'):  ?>
              <p><?php _e( 'Small groups for a great experience', 'petros' ); ?></p>
            <?php endif; ?>  
      </div>

        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

        <p>Copyright Petros DMC 2017. <br> <?php _e( 'All rights reserved.', 'petros' ); ?></p>

    </div>

  </div>

</footer>

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory'); ?>/js/jquery.slicknav.js"></script>

		<script type="text/javascript">
		 $(function () {
		  $('#menu').slicknav({
						appendTo:'.res'
						})
						});
		</script>

<script>

		var mn = $(".sticky");
		    mns = "fixed";
		    hdr = $('.cathero').height();

		jQuery(window).scroll(function() {
		  if( jQuery(window).scrollTop() > hdr ) {
		    mn.addClass(mns);
		  } else {
		    mn.removeClass(mns);
		  }
		});

	</script>

  <script>

      $('.goback').click(function(){
        $.fancybox.close();
        });

  </script>


  <script type="text/javascript">
  	$(document).ready(function() {
  		$(".fancygal").fancybox();
  	});
  </script>

  <script type="text/javascript">
      $('a.fancygal').click( function() {
        $("#fancybox-content").removeClass();
        $("#fancybox-close").removeClass();
        $("#fancybox-content").addClass('galerija-popup');
      });
      $('a.book').click( function() {
        $("#fancybox-content").removeClass();
        $("#fancybox-content").addClass('book-popup');
        $("#fancybox-close").addClass('book');
      });
  </script>



</body>

</html>
