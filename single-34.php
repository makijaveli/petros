<?php

/*
Single page for one apartment
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-page-hero'); ?>

<section id="gallery">

  <h2><?php _e( 'Gallery', 'petros' ); ?></h2>
  <div class="gallery-slider">
    <?php if( have_rows('galerija') ): ?>
      <?php while( have_rows('galerija') ): the_row();
        $image = get_sub_field('slike');
        $url = $image['url'];
      ?>
      <a class="fancygal" rel="gallery1" href="<?php echo $url ?>">
        <img src="<?php echo $image['sizes']['galery']; ?>" width="<?php echo $image['sizes']['galery']; ?>" height="<?php echo $image['sizes']['galery']; ?>"/>
      </a>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>

</section>

<section class="tourinfo" id="details">
<h2><?php _e( 'Detalji ponude', 'petros' ); ?></h2>
  <section id="details">
    <div class="wrappersingle">      
        <div id="tab-container" class="tab-container apartament">
          <ul class='etabs'>
            <li class='tab'><a href="#tabsadrzaj"><?php _e( 'Sadržaj', 'petros' ); ?></a></li>
            <li class='tab'><a href="#tabcijene"><?php _e( 'Cijene aranžmana', 'petros' ); ?></a></li>
            
          </ul>
          <div id="tabsadrzaj">
            <?php the_field('sadrzaj'); ?>
          </div>
          <div id="tabcijene">              
                <?php the_field('cijene_aranzmana'); ?>           
          </div>          
        </div>
  </section>  

</section>

<?php get_template_part('template_parts/tp-apartment-inquiry'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
