<!-- list of sections on one tour post  -->

<?php
          $price = get_field('price');
          $category = get_field('category');
?>
  <div class="sticky">


    <div class="subcatlist singlesections">

      <ul>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#expect">What to expect</a></li>
        <li><a href="#inclusions">Inclusions</a></li>
        <li><a href="#information">Useful information</a></li>
        <li><a href="#itinerary">Full itinerary</a></li>
        <li><a href="#meeting">Meeting points</a></li>
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
