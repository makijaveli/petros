<?php

/*
* For subcateogries
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-category-hero'); ?>

<div class="wrapper">

  <section class="catdesc">
      <?php echo category_description(); ?>
  </section>

    <div class="cards cat">

        <?php
        //get post from current category !!!
        $category       = get_category(get_query_var('cat'));
        $category_ID    = $category->cat_ID;
        $args = array(
             'posts_per_page'   => 4,
             'cat'               => $category_ID,
             'orderby'             => 'date', // date is primary
             'order'               => 'ASC',
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

                    if ( in_category( array( 21,26 ) ) ) {  ?>
                        <span><?php _e( 'See apartment', 'petros' ); ?></span><span class="array">></span>
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

    <section class="subcatmp">

      <?php
      //get post from current category !!!
      $category1      = get_category(get_query_var('cat'));
      $category_ID    = $category1->cat_ID;
      $args1 = array(
           'posts_per_page'   => 6,
           'cat'               => $category_ID,
           'offset'             => 4,
           'orderby'             => 'date', // date is primary
           'order'               => 'ASC',
          );
        $query1 = new WP_Query($args1);
         if ($query1->have_posts()) : while ($query1->have_posts()) : $query1->the_post();
      ?>

      <div class="othermp">

        <div class="othermpthumb">
          <?php
            if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'mp-size' );
            }
          ?>
        </div>

        <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a>

      </div>

      <?php
        endwhile;

        endif;
      ?>

    </section>

</div>

<?php get_template_part('template_parts/tp-category-inquiry-white'); ?>

<?php get_footer(); ?>
