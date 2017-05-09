<?php
/*
* Main footer
*/
?>

<footer>

  <div class="wrapper">

    <div class="fcol">

      <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>

    </div>

    <div class="fcol">

      <div class="flogo">
            <a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt=""></a>
            <p>Petros tour operator & DMC </p>
            <p>Small groups for a great experience</p>
      </div>
    </div>

    <div class="fcol"><p>Copyright Petros DMC 2017. All rights reserved.</p></div>

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


</body>

</html>
