<!-- bx slider -->

<?php // Učitava se PAGE_ID strane: Pocetna i Home
   $args = array('page_id' => 8);
   $wp_query = new WP_Query($args);
   if($wp_query->have_posts()) : while($wp_query->have_posts()) : $wp_query->the_post();
?>

  <?php if( have_rows('slider') ): ?>
    <div class="home-slider">
      <ul class="slider">

        <?php while( have_rows('slider') ): the_row();

          //variables
          $image = get_sub_field('image');
          $link = get_sub_field('link');
          $desc = get_sub_field('desc');
          $town = get_sub_field('town');

        ?>

          <li style="background-image: url('<?php echo $image['sizes']['wide-image']; ?>');"">

           

            <div class="overlay"></div>

            <div class="slidepost">

              <div class="slideheadline"><?php echo $town; ?></div>

              <h1><a href="<?php echo $link; ?>"><?php the_sub_field('linktext'); ?></a></h1>

              <div class="slidedesc"><?php echo $desc; ?></div>

              <div class="cta">

                <a href="<?php echo $link; ?>"><?php _e( 'More info', 'petros' ); ?></a>

              </div>

            </div>

          </li>

        <?php endwhile; ?>

      </ul>
    </div><!--home-slider --> 
  <?php endif; ?>
  <?php endwhile; ?>
  <?php endif; ?>


<!-- bx slider -->
