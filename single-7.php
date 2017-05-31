<?php

/*
Single page for one apartment
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-apartment-hero'); ?>

<?php get_template_part('template_parts/tp-apartment-sections'); ?>

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

  <section id="details">
    <div class="wrappersingle">      
        <div id="tab-container" class="tab-container">
          <ul class='etabs'>
            <li class='tab'><a href="#tabdescriprion"><?php _e( 'Description', 'petros' ); ?></a></li>
            <li class='tab'><a href="#tabequipment"><?php _e( 'Equipment', 'petros' ); ?></a></li>
            
          </ul>
          <div id="tabdescriprion">
            <?php the_field('description'); ?>
          </div>
          <div id="tabequipment">
              <?php if(get_field('general')): ?>
                <h2><?php _e( 'Equipment', 'petros' ); ?></h2>
              <?php endif; ?>
              <div class="eqinfo">
                <span><?php _e( 'General', 'petros' ); ?></span>
                <?php the_field('general'); ?>
              </div>
              <div class="eqinfo">
                <span><?php _e( 'Bathroom', 'petros' ); ?></span>
                <?php the_field('bathroom'); ?>
              </div>
              <div class="eqinfo">
                <span><?php _e( 'Kitchen', 'petros' ); ?></span>
                <?php the_field('kitchen'); ?>
              </div>
              <div class="eqinfo">
                <span><?php _e( 'Outside', 'petros' ); ?></span>
                <?php the_field('outside'); ?>
              </div>
              <div class="eqinfo">
                <span><?php _e( 'On request', 'petros' ); ?></span>
                <?php the_field('request'); ?>
              </div>
            </div>
          </div>          
        </div>
  </section>  

  <?php if(get_field('location_map')): ?>
    <section id="location">        
        <h2><?php _e( 'Location', 'petros' ); ?></h2>
        <div class="map-location">
          <?php echo do_shortcode(get_field('location_map')); ?>
        </div>
    </section>
  <?php endif; //Close Location block ?>

</section>

<?php get_template_part('template_parts/tp-apartment-inquiry'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
