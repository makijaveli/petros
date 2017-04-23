<!-- blog category hero -->

<?php

// vars
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;

$GLOBALS['wp_embed']->post_ID = $taxonomy . '_' . $term_id;

?>

<div class="cathero">

  <?php

      //variables
      //$image = get_field('image');
      $image = get_field('image', $queried_object);
      $desc = get_field('desc', $queried_object);
      $town = get_field('town', $queried_object);
  ?>

      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>">

      <div class="overlay"></div>

      <div class="slidepost">

        <div class="slideheadline"><?php echo $town; ?></div>

        <h1><?php single_cat_title(); ?></h1>

        <div class="slidedesc"><?php echo $desc; ?></div>

        <div class="ctablog">

          <a href="#subscribe">Subscribe <span><i class="fa fa-chevron-down" aria-hidden="true"></i></span></a>

        </div>

      </div>

</div>

<!-- blog category hero -->
