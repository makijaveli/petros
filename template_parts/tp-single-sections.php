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
          <li><a href="#gallery">Gallery</a></li>
        <?php endif; ?>
        <?php if($expect): ?>
        <li><a href="#expect">What to expect</a></li>
        <?php endif; ?>
        <?php if($inclusions): ?>
        <li><a href="#inclusions">Inclusions</a></li>
        <?php endif; ?>
        <?php if($information): ?>
        <li><a href="#information">Useful information</a></li>
        <?php endif; ?>
        <?php if($itinerary): ?>
        <li><a href="#itinerary">Full itinerary</a></li>
        <?php endif; ?>
        <?php if($meeting): ?>
        <li><a href="#meeting">Meeting points</a></li>
        <?php endif; ?>
      </ul>

      <div class="pricebook">
        <div class="catprice"><?php echo $price ?> - <?php echo $category ?></div>

        <div class="ctabook">

          <a class="fancybox" href="#contact_form_pop">book tour</a>
          <div class="fancybox-hidden" style="display: none;">

              <div id="contact_form_pop">
                <h1>Schedule a tour</h1>
                <?php echo do_shortcode( '[contact-form-7 id="124" title="Book now"]' ); ?>

              </div>
          </div>

        </div>
      </div>

    </div>

    </div>


  <div class="catline"></div>

<!-- list of sections on one tour post  -->
