<?php

/*
Template Name: Brochures
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-contactus-hero'); ?>

<section class="page">

  <div class="wrapperus">
	<?php if (isset($_GET['mojlogin'])): ?>
    	<?php the_content(); ?>
    <?php endif; ?>

    <?php
	   $args = array('cat' => 33);
	   $wp_query = new WP_Query($args);
	   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
	?>
	



	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>



<?php endif; //mojlogin ?>
  </div>

</section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
