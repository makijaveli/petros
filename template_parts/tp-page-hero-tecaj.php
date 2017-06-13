<!-- page hero -->

<?php

$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
echo '<div class="cathero" style="background: url('. $url.'); background-size:cover; background-repeat:no-repeat;background-position:center;min-height:700px;position:relative;">';

  ?>


  <?php

      //variables
      //$image = get_field('image');
      $above = get_field('above');
      $below = get_field('below');      
  ?>



      <div class="overlay"></div>

      <div class="slidepost">
        <div class="slideheadline"><?php echo $above ?></div>

          <h1><?php the_title() ?></h1>

          <div class="slidedesc"><?php echo $below; ?></div>


          <div class="ctablog">
            <a class="fancybox book" href="#contact_form_pop"><?php _e( 'Prijava za tečaj', 'petros' ); ?></a>
            <div class="fancybox-hidden" style="display: none;">
                <div id="contact_form_pop">                  
                  <h1>Prijava za tečaj</h1>
                  <?php echo do_shortcode( '[contact-form-7 id="1047" title="Online prijava tečaja"]' ); ?>
                  
                </div>
            </div>

                

        </div>

      </div>

        

      </div>

</div>

<!-- single hero -->
