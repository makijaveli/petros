<?php
/*
* Blog posts on home page
*/
?>

<!-- section blog -->

<section class="blog">

  <div class="wrapper">

    <h1>Blog</h1>

    <?php query_posts('cat=13&posts_per_page=3'); ?>

    <article class="blog">

        <?php echo category_description(); ?>

    </article>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article class="blog">

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
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">see more</a>
        </div>

      </div>

    </article>

    <?php

						endwhile;

						endif;

		?>

  </div>

</section>

<!-- section blog -->
