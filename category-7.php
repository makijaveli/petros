<?php

/*
* For cateogry trips
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-category-hero'); ?>

<?php get_template_part('template_parts/tp-subcategories'); ?>

<div class="wrapper">

  <section class="catdesc main-cat">
      <?php echo category_description(); ?>
  </section>

  <section class="catmain">

    <?php

    $category = get_the_category();
    $theName = $category[1]->name;
    $theChild = $category[1]->cat_ID;
    $subcats = get_categories('child_of=' . $theChild);

    ?>

    <div class="cards cat">

      <?php
        foreach($subcats as $subcat) {

        echo '<div id="' . $subcat->slug . '" </div>';
        echo '<h1>' . $subcat->cat_name . '</h1>';
        $subcat_posts = get_posts('cat=' . $subcat->cat_ID);
        foreach($subcat_posts as $subcat_post) {
            $postID = $subcat_post->ID;
            $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'cat-size' );
        echo '<a class="catcard" href="' . get_permalink($postID) . '">';

        ?>

            <div class="card" style="background: url('<?php echo $thumb[0];?>'); width:300px; height:480px;">

                <div class="overlay-cards"></div>


                <div class="cardtitle">

                  <h2><?php echo get_the_title($postID); ?></h2>

                </div>

                <div class="cardinfo">
                  <div class="apartment-short-info">
                    <div class="basicinfo">                      
                      <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-bed" aria-hidden="true"></i><?php _e( 'Bedrooms', 'petros' ); ?></div>
                        <div class="basicright"><?php the_field('bedrooms', $postID); ?></div>
                      </div>
                      <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-arrows-alt" aria-hidden="true"></i><?php _e( 'Size', 'petros' ); ?></div> 
                        <div class="basicright"><?php the_field('size', $postID); ?></div>
                      </div>
                      <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-users" aria-hidden="true"></i><?php _e( 'Persons', 'petros' ); ?></div>
                        <div class="basicright"><?php the_field('persons' ,$postID); ?></div>
                      </div>  
                    </div>
                  </div><!-- /apartment-short-info -->
                  <span class="see-more"><?php _e( 'See apartment', 'petros' ); ?><i class="fa fa-angle-right" aria-hidden="true"></i>

                </div>

            </div> <!-- end card -->
        <?php

        echo '</a>';
          }
        } ?>

    </div>

  </section>

</div>

<?php get_template_part('template_parts/tp-category-inquiry'); ?>

<?php get_footer(); ?>
