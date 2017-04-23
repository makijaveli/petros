<!-- blog post hero -->



<div class="cathero">

        <?php

        if ( has_post_thumbnail() ) {
        the_post_thumbnail('blog-single');
        }

        ?>

      <div class="overlay"></div>

      <div class="slidepost">

        <div class="slideheadline"><?php echo get_the_date('d/M/Y'); ?></div>

        <h1><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title() ?></a></h1>

        <div class="singleauthor">

          <?php echo get_avatar( get_the_author_meta('ID'), 55); ?>

          <?php the_author(); ?>

        </div>

      </div>

</div>

<!-- blog post hero -->
