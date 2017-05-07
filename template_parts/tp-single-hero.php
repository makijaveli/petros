<!-- single hero -->

<div class="cathero">

  <?php

      //variables
      //$image = get_field('image');
      $above = get_field('above');
      $below = get_field('below');
      $price = get_field('price');
      $category = get_field('category');
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
        		<a class="fancybox" href="#contact_form_pop">book tour</a>
        		<div class="fancybox-hidden" style="display: none;">

            		<div id="contact_form_pop">
                  <h1>Schedule a tour</h1>
                  <?php echo do_shortcode( '[contact-form-7 id="124" title="Book now"]' ); ?>

                </div>
            </div>

        </div>

        <span><?php echo $price ?> - <?php echo $category ?></span>

      </div>

</div>

<!-- single hero -->
