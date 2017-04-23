<?php

/*
* For cateogry Blog
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-blog-hero'); ?>

<div class="wrapperblog">

    <section class="blogcat">

      <h1>Recent stories</h1>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article class="blogcatart">

          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
            <div class="blogcatthumb">

            <?php

            if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'blog-cat' );
            }

            ?>

            </div>
          </a>

          <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h2>

          <p><?php html5wp_excerpt('html5wp_index'); ?></p>

          <a class="readmore" href="<?php the_permalink() ?>" title="<?php the_title(); ?>">read more <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>

        </article>

      <?php endwhile; endif; ?>

    </section>
</div>

<?php get_template_part('template_parts/tp-subscribe'); ?>

<?php get_footer(); ?>
