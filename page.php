<?php

/*
* Default page
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-page-hero'); ?>

<section class="page">

  <div class="wrapperus">
	  <div class="page-content">
	    <?php the_content(); ?>
	  </div>  

  </div>

</section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
