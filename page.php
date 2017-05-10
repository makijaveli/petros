<?php

/*
* Default page
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-contactus-hero'); ?>

<section class="page">

  <div class="wrapperus">

    <?php the_content(); ?>

  </div>

</section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
