<?php
/*
* Related posts on blog post
*/
?>

<!-- section blog -->

<section class="blog">

  <div class="wrapperrel">

    <h1>Related articles</h1>

    <?php query_posts('cat=13&posts_per_page=2'); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

      </div>

    </article>

    <?php

						endwhile;

						endif;

		?>

    <article class="blog blogrelated">

      <div class="blogthumb">

        <img src="<?php bloginfo('template_directory'); ?>/images/blog-test3.png" alt="">

      </div>

      <div class="overlayblog"></div>

      <div class="blogtitle">

        <h2>Most interesting places to visit in bautiful Croatia</h2>

        <div class="ctablog">
          <?php
						$category_link = get_category_link(13);
					?>
          <a href="<?php echo esc_url( $category_link ); ?>">see more</a>
        </div>

      </div>

    </article>

  </div>

</section>

<!-- section blog -->
