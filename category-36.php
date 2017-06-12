<?php



get_header(); ?>

<?php get_template_part('template_parts/tp-category-hero'); ?>

<?php get_template_part('template_parts/tp-subcategories'); ?>

<div class="wrapper">

  <section class="catdesc main-cat">
      <?php echo category_description(); ?>
  </section>

  <section class="catmain">

    <div class="cards cat">
        <h1><?php _e( 'Apartmani u Zagrebu', 'petros' ); ?></h1>
        <?php
        //get post from current category !!!
        $category       = get_category(get_query_var('cat'));
        $category_ID    = $category->cat_ID;
        $args = array(
             'posts_per_page'   => -1,
             'cat'               => 37
            );
          $query = new WP_Query($args);
           if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
           $postID = get_the_ID();
           $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'cat-size' );
        ?>
      <?php  echo '<a class="catcard" href="' . get_permalink($postID) . '">';

        ?>

            <div class="card" style="background: url('<?php echo $thumb[0];?>'); width:300px; height:480px;">

                <div class="overlay-cards"></div>


                <div class="cardtitle">

                  <h2><?php echo get_the_title($postID); ?></h2>

                </div>

                <div class="cardinfo">

                  <?php

                    if ( in_category( array( 37,38 ) ) ) {  ?>
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
                        <span><?php _e( 'Pogledaj apartman', 'petros' ); ?></span><span class="array">></span>
                  <?php    } else {  ?>
                        <span><?php _e( 'See full tour', 'petros' ); ?></span><span class="array">></span>
                    <?php  }

                   ?>

                </div>

            </div> <!-- end card -->
        <?php

        echo '</a>'; ?>
        <?php

        endwhile;

        endif;

        ?>

    </div>




   <div class="cards cat">
        <h1><?php _e( 'Apartmani u Pagu', 'petros' ); ?></h1>
        <?php
        //get post from current category !!!
        $category       = get_category(get_query_var('cat'));
        $category_ID    = $category->cat_ID;
        $args = array(
             'posts_per_page'   => -1,
             'cat'               => 38
            );
          $query = new WP_Query($args);
           if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
           $postID = get_the_ID();
           $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'cat-size' );
        ?>
      <?php  echo '<a class="catcard" href="' . get_permalink($postID) . '">';

        ?>

            <div class="card" style="background: url('<?php echo $thumb[0];?>'); width:300px; height:480px;">

                <div class="overlay-cards"></div>


                <div class="cardtitle">

                  <h2><?php echo get_the_title($postID); ?></h2>

                </div>

                <div class="cardinfo">

                  <?php

                    if ( in_category( array(37,38 ) ) ) {  ?>
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
                        <span><?php _e( 'Pogledaj apartman', 'petros' ); ?></span><span class="array">></span>
                  <?php    } else {  ?>
                        <span><?php _e( 'See full tour', 'petros' ); ?></span><span class="array">></span>
                    <?php  }

                   ?>

                </div>

            </div> <!-- end card -->
        <?php

        echo '</a>'; ?>
        <?php

        endwhile;

        endif;

        ?>

    </div>

    </section>


  

</div>

<?php // get_template_part('template_parts/tp-category-inquiry'); ?>

<?php get_footer(); ?>
