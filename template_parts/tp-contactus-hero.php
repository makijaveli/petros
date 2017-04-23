<!-- page contact us hero -->

<div class="cathero">

  <?php

      //variables
      $image = get_field('image');
      $below = get_field('below');
      $above = get_field('above');
  ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">

      <div class="overlay"></div>

      <div class="slidepost">

        <div class="slideheadline"><?php echo $above; ?></div>

        <h1><?php the_title(); ?></h1>

        <div class="slidedesc"><?php echo $below; ?></div>

      </div>

</div>

<!-- page contact us hero -->
