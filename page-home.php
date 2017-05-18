<?php 
/*
Template Name: Home
*/
get_header(); ?>
  <?php get_template_part('template_parts/tp-slider'); ?>
  <?php get_template_part('template_parts/tp-categories_home'); ?>
  <?php get_template_part('template_parts/tp-blog_home'); ?>
  <?php get_template_part('template_parts/tp-mostpopular_home'); ?>
  <div class="clear"></div>
<?php get_footer(); ?>