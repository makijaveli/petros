<!-- list of sections on one tour post  -->

<?php
          $description = get_field('description');
          $equipment = get_field('equipment');
          $location = get_field('location_map');
?>
  <div class="sticky">


    <div class="subcatlist singlesections">

      <ul>
        <?php if( have_rows('gallery_images') ): ?>
          <li><a href="#gallery"><?php _e( 'Gallery', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($description): ?>
        <li><a href="#details"><?php _e( 'Details', 'petros' ); ?></a></li>
        <?php endif; ?>
        <?php if($location): ?>
        <li><a href="#location"><?php _e( 'Location', 'petros' ); ?></a></li>
        <?php endif; ?>
      </ul>

      <div class="pricebook">

        <div class="ctabook">

          <a class="fancybox book" href="#contact_form_pop"><?php _e( 'book now', 'petros' ); ?></a>
          <div class="fancybox-hidden" style="display: none;">

            <div id="contact_form_pop">
              <?php if(ICL_LANGUAGE_CODE=='en') { ?>
              <h1>Book apartment</h1>
              <?php echo do_shortcode( '[contact-form-7 id="261" title="Book apartment"]' ); ?>
              <?php } else { ?>
              <h1>Rezerviraj apartman</h1>
              <?php echo do_shortcode( '[contact-form-7 id="262" title="Rezervisi apartman"]' ); ?>
              <?php } ?>

            </div>
          </div>

        </div>
      </div>

    </div>

    </div>


  <div class="catline"></div>

<!-- list of sections on one tour post  -->
