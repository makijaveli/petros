<?php
/*
* Display most popular posts on home page
*/
?>

<!-- section most popular -->

<section class="most-popular">

  <div class="wrapper">

    <h1><?php _e( 'Most popular tours', 'petros' ); ?></h1>

    <?php query_posts('cat=14&posts_per_page=6'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

    <?php

            endwhile;

            endif;

    ?>

  </div>

</section>

<!-- section most popular -->
