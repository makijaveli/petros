<?php

/*
Template Name: About Us
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-page-hero'); ?>

<?php get_template_part('template_parts/tp-aboutus-sections'); ?>

<section id="whypetros">

  <div class="wrapperus">

  <h1><?php _e( 'Why Petros', 'petros' ); ?>?</h1>

  <div class="works">


      <?php if(ICL_LANGUAGE_CODE=='en'):  ?>
      <div class="work">
        <i class="fa fa-users" aria-hidden="true"></i>
        <h3><?php _e( 'Small groups for a great experience', 'petros' ); ?></h3>
        <span><?php the_field('groups'); ?></span>
      </div>
      <?php endif;?>

      <div class="work">
        <i class="fa fa-id-card" aria-hidden="true"></i>
        <h3><?php _e( 'Licensed local guides', 'petros' ); ?></h3>
        <span><?php the_field('licensed'); ?></span>
      </div>

      <div class="work">
        <i class="fa fa-diamond" aria-hidden="true"></i>
        <h3><?php _e( 'Forget the boring facts and figures', 'petros' ); ?></h3>
        <span><?php the_field('facts_and_figures'); ?></span>
      </div>

      <div class="work">
        <i class="fa fa-smile-o" aria-hidden="true"></i>
        <h3><?php _e( 'Always at your disposal', 'petros' ); ?></h3>
        <span><?php the_field('disposal'); ?></span>
      </div>

      <?php if(ICL_LANGUAGE_CODE=='en'):  ?>
      <div class="work">
        <i class="fa fa-car" aria-hidden="true"></i>
        <h3><?php _e( 'Pick up and drop off', 'petros' ); ?></h3>
        <span><?php the_field('pick_up'); ?></span>
      </div>
      <?php endif;?>

      <div class="work">
        <i class="fa fa-graduation-cap" aria-hidden="true"></i>
        <h3><?php _e( 'Expertise and passion', 'petros' ); ?></h3>
        <span><?php the_field('expertise'); ?></span>
      </div>

  </div>

</div>

</section>

<section id="aboutus">

  <div class="wrapper">

  <?php the_content(); ?>

  </div>

</section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
