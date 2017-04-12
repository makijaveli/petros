<?php

/*
* For cateogry trips
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-category-hero'); ?>

<?php get_template_part('template_parts/tp-subcategories'); ?>

<div class="wrapper">

  <section class="catdesc">
      <?php echo category_description(); ?>
  </section>

  <?php

  $category = get_the_category();
  $theName = $category[0]->name;
  $theChild = $category[0]->cat_ID;
  $subcats = get_categories('child_of=' . $theChild);
      foreach($subcats as $subcat) {
      echo '<h1>' . $subcat->cat_name . '</h1>';
      echo '<ul>';
      $subcat_posts = get_posts('cat=' . $subcat->cat_ID);
      foreach($subcat_posts as $subcat_post) {
          $postID = $subcat_post->ID;
      echo '<li>';
      echo '<a href="' . get_permalink($postID) . '">';
      echo '<div class="card">';
      echo get_the_post_thumbnail($postID);
      echo '<div class="overlay-cards"></div>';
      echo '<div class="cardtitle">';
      echo get_the_title($postID);
      echo '</div>';
      echo '</div>';
      echo '</a></li>';
      }
      echo '</ul>';
      }

  ?>

</div>




<?php get_footer(); ?>
