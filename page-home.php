<?php 
/*
Template Name: Home
*/
get_header(); ?>
  <?php get_template_part('template_parts/tp-slider'); ?>
	 <?php if(ICL_LANGUAGE_CODE=='en'): ?>
		<?php get_template_part('template_parts/tp-categories_home'); ?>
  		<?php get_template_part('template_parts/tp-blog_home'); ?>
  		<?php get_template_part('template_parts/tp-mostpopular_home'); ?>
	<?php elseif(ICL_LANGUAGE_CODE=='hr'): ?>
		<?php get_template_part('template_parts/tp-skolska_putovanja'); ?>
	<?php endif;?>

  <div class="clear"></div>
<?php get_footer(); ?>