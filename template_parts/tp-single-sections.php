<!-- list of sections on one tour post  -->

<?php
          $price = get_field('price');
          $category = get_field('category');
?>

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

          <a href="#">book tour</a>

        </div>
      </div>

    </div>


  <div class="catline"></div>

<!-- list of sections on one tour post  -->
