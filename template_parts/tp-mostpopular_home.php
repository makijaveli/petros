<?php
/*
* Display most popular posts on home page
*/
?>

<!-- section most popular -->

<?php // Učitava se PAGE_ID strane: Pocetna i Home
   $args = array('page_id' => 8);
   $wp_query = new WP_Query($args);
   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
?>

<section class="most-popular">

  <div class="wrapper">

    <h1><?php _e( 'Most popular tours', 'petros' ); ?></h1>

    <?php if( have_rows('most_popular_tours') ): ?>

      <?php while( have_rows('most_popular_tours') ): the_row();

      //variables
      $post_objects = get_sub_field('link');

      if( $post_objects ): ?>

      <?php // override $post
      	$post = $post_objects;
      	setup_postdata( $post );  ?>
        <div class="most-popular-block">

          <div class="most-popular-thumb">

            <?php

            if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'most-popular' );
            }

            ?>

          </div>

          <div class="overlaymp"></div>

          <div class="mpprice"><?php the_field('price'); ?></div>

          <div class="most-popular-info">

            <div class="mpcat"><?php the_field('category'); ?></div>

            <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>

            <div class="ctamp">

              <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php _e( 'More info', 'petros' ); ?></a>

            </div>

          </div>

        </div><!-- most popular block -->
<?php wp_reset_postdata(); ?>
<?php endif;

    ?>
    <?php
      endwhile;
      endif;
      ?>




    <?php

          endwhile;

            endif;

    ?>

  </div>

</section>

<!-- section most popular -->
