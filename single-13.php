<?php

/*
* For one Blog post
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-blog-post'); ?>

<div class="wrappersingle">

  <div class="singleblogpost">
    <?php the_content(); ?>
  </div>

</div>

<?php get_template_part('template_parts/tp-blog-post-related'); ?>

<?php get_template_part('template_parts/tp-subscribe'); ?>

<?php get_footer(); ?>
