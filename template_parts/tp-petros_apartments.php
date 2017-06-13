<?php
/*
* Categories part on home page
*/
?>

<!-- section categories -->
<?php // Učitava se PAGE_ID strane: Pocetna i Home
   $args = array('page_id' => 58);
   $wp_query = new WP_Query($args);
   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
?>
<section class="apartmani-home">
  <div class="wrapper">
    <h1><?php _e( 'Petros apartmani', 'petros' ); ?></h1>

    <div class="cards cat">     
      <?php if( have_rows('petros_apartmani') ): ?>
        <?php while( have_rows('petros_apartmani') ): the_row();
          //variables
          $post_objects = get_sub_field('link_apartmana');
          if( $post_objects ): ?>
            <?php // override $post
              $post = $post_objects;
              setup_postdata( $post );        
              $postID = get_the_ID();
              $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'cat-size' ); 
            ?>
            <?php echo '<a class="catcard" href="' . get_permalink($postID) . '">'; ?>
                  <div class="card" style="background: url('<?php echo $thumb[0];?>'); width:300px; height:480px;">
                      <div class="overlay-cards"></div>
                      <div class="cardtitle">
                        <h2><?php echo get_the_title($postID); ?></h2>
                      </div>
                      <div class="cardinfo">
                              <div class="apartment-short-info">
                                <div class="basicinfo">                      
                                  <div class="basic-row">
                                    <div class="basicleft"><i class="fa fa-bed" aria-hidden="true"></i><?php _e( 'Bedrooms', 'petros' ); ?></div>
                                    <div class="basicright"><?php the_field('bedrooms', $postID); ?></div>
                                  </div>
                                  <div class="basic-row">
                                    <div class="basicleft"><i class="fa fa-arrows-alt" aria-hidden="true"></i><?php _e( 'Size', 'petros' ); ?></div> 
                                    <div class="basicright"><?php the_field('size', $postID); ?></div>
                                  </div>
                                  <div class="basic-row">
                                    <div class="basicleft"><i class="fa fa-users" aria-hidden="true"></i><?php _e( 'Persons', 'petros' ); ?></div>
                                    <div class="basicright"><?php the_field('persons' ,$postID); ?></div>
                                  </div>  
                                </div>
                              </div><!-- /apartment-short-info -->
                              <span><?php _e( 'Pogledaj apartman', 'petros' ); ?></span><span class="array">></span>
                        
                      </div>
                  </div> <!-- end card -->
            <?php echo '</a>'; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>      

      </div><!-- /cards -->

      <div class="cta">

                <a href="http://test.mweb.rs/petros/hr/o-nama/">Više</a>

      </div>
    

  </div>

</section>
<?php endwhile; ?>
<?php endif; ?>
<!-- section categories -->