<?php
/*
* Related posts on blog post
*/
?>

<!-- section blog -->

<section class="blog">

  <div class="wrapperrel">

    <h1><?php _e( 'Related articles', 'petros' ); ?></h1>

    <?php
      $currentID = get_the_ID();
      $my_query = new WP_Query( array('cat' => '13', 'order' => 'rand', 'showposts' => '3', 'post__not_in' => array($currentID)));
      while ($my_query->have_posts()) : $my_query->the_post();
    ?>

    <article class="blog blogrelated">

      <div class="blogthumb">

        <?php

        if ( has_post_thumbnail() ) {
        the_post_thumbnail( 'blog' );
        }

        ?>

      </div>

      <div class="overlayblog"></div>

      <div class="blogtitle">

        <div class="blogdate"><?php echo get_the_date('d/M/Y'); ?></div>

        <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>

        <div class="ctablogsm">
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php _e( 'see more', 'petros' ); ?></a>
        </div>

      </div>

    </article>

    <?php

						endwhile;

		?>

  </div>

</section>

<!-- section blog -->
