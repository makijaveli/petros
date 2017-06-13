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
<section class="categories">
  <div class="wrapper">
    <h1><?php _e( 'Školska putovanja', 'petros' ); ?></h1>

    <div class="cards cat">     
      <?php if( have_rows('skolska_putovanja') ): ?>
        <?php while( have_rows('skolska_putovanja') ): the_row();
          //variables
          $post_objects = get_sub_field('link');
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
                        <?php
                          if ( in_category( array( 21,26 ) ) ) {  ?>
                              <div class="apartment-short-info">
                              </div>
                              <span><?php _e( 'See apartment', 'petros' ); ?></span><span class="array">></span>
                        <?php    } else {  ?>
                              <span><?php _e( 'See full tour', 'petros' ); ?></span><span class="array">></span>
                          <?php  }
                         ?>
                      </div>
                  </div> <!-- end card -->
            <?php echo '</a>'; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
        <?php endwhile; ?>
        <?php endif; ?>      

    </div>   
    

  </div>

</section>
<?php endwhile; ?>
<?php endif; ?>
<!-- section categories -->