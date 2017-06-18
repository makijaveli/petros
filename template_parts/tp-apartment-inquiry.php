<section class="inquiry">

  <div class="wrapper">

    <h1><?php _e( 'Inquiry', 'petros' ); ?></h1>

    <p><?php _e( 'If you have any questions do not hesitate to contact us using the button bellow.', 'petros' ); ?></p>

    <div class="inquirycta">

        <a class="fancybox" href="#contact_form_pop"><?php _e( 'send inquiry', 'petros' ); ?></a>
        <div class="fancybox-hidden" style="display: none;">

          <div id="contact_form_pop">
            <?php if(ICL_LANGUAGE_CODE=='en') { ?>
            <h1>Schedule a tour</h1>
            <?php echo do_shortcode( '[contact-form-7 id="261" title="Book apartment"]' ); ?>
            <?php } else { ?>
            <h1>Pošalji upit</h1>
            <?php echo do_shortcode( '[contact-form-7 id="262" title="Rezervisi apartman"]' ); ?>
            <?php } ?>

          </div>
        </div>

    </div>

  </div>

</section>
