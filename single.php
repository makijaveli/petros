<?php

/*
Single page for one tour
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-single-hero'); ?>

<?php get_template_part('template_parts/tp-single-sections'); ?>

<section id="gallery">

  <h2><?php _e( 'Gallery', 'petros' ); ?></h2>
  <div class="gallery-slider">  
    <?php if( have_rows('gallery_images') ): ?>      
      <?php while( have_rows('gallery_images') ): the_row();
        $image = get_sub_field('gallery_image');
        $url = $image['url'];       
      ?>
      <a class="fancygal" rel="gallery1" href="<?php echo $url ?>">
        <img src="<?php echo $image['sizes']['galery']; ?>" width="<?php echo $image['sizes']['galery']; ?>" height="<?php echo $image['sizes']['galery']; ?>"/>
      </a>
    <?php endwhile; ?>      
    <?php endif; ?>
  </div>

</section>

<section class="tourinfo">

  <section id="expect">

    <div class="wrappersingle">
      <?php if(get_field('what_to_expect')): ?>
        <h2><?php _e( 'What to expect', 'petros' ); ?></h2>
      <?php endif; ?>
      <?php the_field('what_to_expect'); ?>
    </div>

  </section>

  <section id="inclusions">
    <div class="wrappersingle">
      <?php if(get_field('inclusions')): ?>
        <h2><?php _e( 'Inclusions', 'petros' ); ?></h2>
      <?php endif; ?>
      <?php the_field('inclusions'); ?>
    </div>
  </section>

  <section id="information">
    <div class="wrappersingle">
      <?php if(get_field('useful_information')): ?>
        <h2><?php _e( 'Useful information', 'petros' ); ?></h2>
      <?php endif; ?>
      <?php the_field('useful_information'); ?>
    </div>
  </section>

  <section id="itinerary">
    <div class="wrappersingle">
      <?php if(get_field('full_itinerary')): ?>
        <h2><?php _e( 'Full itinerary', 'petros' ); ?></h2>
      <?php endif; ?>
      <?php the_field('full_itinerary'); ?>
    </div>
  </section>

  <section id="meeting">
    <div class="wrapper">
      <?php if(get_field('meeting_point')): ?>
          <h2><?php _e( 'Meeting point', 'petros' ); ?></h2>
      <?php endif; ?>
      
      <div class="map-row">      
        <?php echo do_shortcode(get_field('meeting_point')); ?>
      </div>
    </div>
  </section>

  <section id="meetingtext">
    <div class="wrappersingle">
      <?php the_field('meeting_point_text'); ?>
    </div>
  </section>

</section>

<?php get_template_part('template_parts/tp-category-inquiry'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
