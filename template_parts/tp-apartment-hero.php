<!-- single hero -->

<div class="cathero">

  <?php

      //variables
      //$image = get_field('image');
      $above = get_field('above');
      $below = get_field('below');
  ?>

        <?php

        if ( has_post_thumbnail() ) {
        the_post_thumbnail('blog-single');
        }

        ?>

      <div class="overlay"></div>

      <div class="slidepost">

        <div class="slideheadline"><?php echo $above ?></div>

          <h1><?php the_title() ?></h1>

        <div class="slidedesc"><?php echo $below; ?></div>

        <div class="ctablog">
        		<a class="fancybox book" href="#contact_form_pop"><?php _e( 'book now', 'petros' ); ?></a>
        		<div class="fancybox-hidden" style="display: none;">
            		<div id="contact_form_pop">
                  <?php if(ICL_LANGUAGE_CODE=='en') { ?>
                  <h1>Book apartment</h1>
                  <?php echo do_shortcode( '[contact-form-7 id="261" title="Book apartment"]' ); ?>
                  <?php } else { ?>
                  <h1>Rezerviraj apartman</h1>
                  <?php echo do_shortcode( '[contact-form-7 id="262" title="Rezervisi apartman"]' ); ?>
                  <?php } ?>
                </div>
            </div>

                <div class="apartment-short-info hero">
                    <div class="basicinfo">
                    <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-map" aria-hidden="true"></i><?php _e( 'Location', 'petros' ); ?></div>
                        <div class="basicright"><?php the_field('location'); ?></div>
                      </div>
                      <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-bed" aria-hidden="true"></i><?php _e( 'Bedrooms', 'petros' ); ?></div>
                        <div class="basicright"><?php the_field('bedrooms'); ?></div>
                      </div>
                      <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-arrows-alt" aria-hidden="true"></i><?php _e( 'Size', 'petros' ); ?></div>
                        <div class="basicright"><?php the_field('size'); ?></div>
                      </div>
                      <div class="basic-row">
                        <div class="basicleft"><i class="fa fa-users" aria-hidden="true"></i><?php _e( 'Persons', 'petros' ); ?></div>
                        <div class="basicright"><?php the_field('persons'); ?></div>
                      </div>
                    </div>
                  </div><!-- /apartment-short-info -->

        </div>

      </div>

</div>

<!-- single hero -->
