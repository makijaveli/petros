<!-- list of sections on one tour post  -->

<?php
          $price = get_field('price');
          $category = get_field('category');
          $expect = get_field('what_to_expect');
          $inclusions = get_field('inclusions');
          $information = get_field('useful_information');
          $itinerary = get_field('full_itinerary');
          $meeting = get_field('meeting_point');
?>
  <div class="sticky">


    <div class="subcatlist singlesections">

      <ul>
        <?php if( have_rows('gallery_images') ): ?>
          <li><a href="#gallery"><?php _e( 'Gallery', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($expect): ?>
        <li><a href="#expect"><?php _e( 'What to expect', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($inclusions): ?>
        <li><a href="#inclusions"><?php _e( 'Inclusions', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($information): ?>
        <li><a href="#information"><?php _e( 'Useful information', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($itinerary): ?>
        <li><a href="#itinerary"><?php _e( 'Full itinerary', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($meeting): ?>
        <li><a href="#meeting"><?php _e( 'Meeting points', 'petros' ); ?></a></li>
        <?php endif; ?>
      </ul>

      <div class="pricebook">
        <div class="catprice"><?php echo $price ?> - <?php echo $category ?></div>

        <div class="ctabook">

          <a class="fancybox book" href="#contact_form_pop"><?php _e( 'book tour', 'petros' ); ?></a>
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

    </div>

    </div>


  <div class="catline"></div>

<!-- list of sections on one tour post  -->
