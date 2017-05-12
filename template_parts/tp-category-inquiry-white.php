<section class="inquiry white">

  <div class="wrapper">

    <h1><?php _e( 'Inquiry', 'petros' ); ?></h1>

    <p><?php _e( 'If you’d like to send us an inquiry regarding tours, you can do so on using the button bellow.', 'petros' ); ?></p>

    <div class="inquirycta">

      <a class="fancybox" href="#contact_form_pop"><?php _e( 'send inquiry', 'petros' ); ?></a>
      <div class="fancybox-hidden" style="display: none;">

        <div id="contact_form_pop">
          <?php if(ICL_LANGUAGE_CODE=='en') { ?>
          <h1>Schedule a tour</h1>
          <?php echo do_shortcode( '[contact-form-7 id="124" title="Book now"]' ); ?>
          <?php } else { ?>
          <h1>Zakažite turu</h1>
          <?php echo do_shortcode( '[contact-form-7 id="182" title="Rezervisi"]' ); ?>
          <?php } ?>

        </div>
      </div>

    </div>

  </div>

</section>
