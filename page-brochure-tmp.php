<?php

/*
Template Name: Brochures
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-page-hero'); ?>

<section class="page">

  <div class="wrapperus">
	
   	<?php the_content(); ?>
   

    <div class="brochures-items">
	    <?php
		   $args = array('cat' => 33);
		   $wp_query = new WP_Query($args);
		   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
		?>
		<div class="brochures-item">
			<div class="brochure-img">
				<a href="<?php the_field('pdf'); ?>">
					<?php the_post_thumbnail('brochure'); ?>				
				</a>
			</div>	
			<a class="link-title" href="<?php the_field('pdf'); ?>"><?php the_title(); ?>
		</div>
	<?php endwhile; ?>
	<?php else: ?>
	<?php endif; ?>
	<?php wp_reset_postdata(); ?>
	</div><!-- /brochures-items -->




  </div>

</section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
