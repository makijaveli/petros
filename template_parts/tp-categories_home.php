<?php
/*
* Categories part on home page
*/
?>

<!-- section categories -->

<section class="categories">

  <div class="wrapper">

    <h1><?php _e( 'Categories', 'petros' ); ?></h1>

    <div class="cards">

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/card1.jpg'); width:300px;">
            <div class="overlay-cards"></div>

            <div class="cardtitle">
              <?php $category_link = get_category_link( 4 ); ?>
              <h2><a href="<?php echo esc_url( $category_link ); ?>"><?php echo get_cat_name(4);?></a></h2>
            </div>

            <div class="cardinfo">

              <?php the_field('discover_zagreb'); ?>

              <?php /*
                $subcategories = get_categories('&child_of=4&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
                echo '<ul>';
                foreach ($subcategories as $subcategory) {
                  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
                }
                echo '</ul>';
                */
              ?>

          </div>

      </div> <!-- end card -->

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/CategoriesDaytrips.jpg')">
        <div class="overlay-cards"></div>


          <div class="cardtitle">
            <?php $category_link = get_category_link( 5 ); ?>
            <h2><a href="<?php echo esc_url( $category_link ); ?>"><?php echo get_cat_name(5);?></a></h2>

          </div>

          <div class="cardinfo">
              <?php the_field('day_trips_from_zagreb'); ?>
              
              <?php /*
                $subcategories = get_categories('&child_of=5&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
                echo '<ul>';
                foreach ($subcategories as $subcategory) {
                  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
                }
                echo '</ul>';
                */
              ?>

          </div>

      </div> <!-- end card -->

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/CategoriesPrivatetours.jpg')">
          <div class="overlay-cards"></div>
          <div class="cardtitle">

            <?php $category_link = get_category_link( 6 ); ?>
            <h2><a href="<?php echo esc_url( $category_link ); ?>"><?php echo get_cat_name(6);?></a></h2>

          </div>

          <div class="cardinfo">
            <?php the_field('private_tours'); ?>
            
            <?php /*
              $subcategories = get_categories('&child_of=6&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
              echo '<ul>';
              foreach ($subcategories as $subcategory) {
                echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
              }
              echo '</ul>';
              */
            ?>

          </div>

      </div> <!-- end card -->

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/CategoriesApartments.jpg')">
          <div class="overlay-cards"></div>

          <div class="cardtitle">

            <?php $category_link = get_category_link( 7 ); ?>

            <h2><a href="<?php echo esc_url( $category_link ); ?>"><?php echo get_cat_name(7);?></a></h2>

          </div>

          <div class="cardinfo">
            <?php the_field('petros_apartments'); ?>
            <?php /*
              $subcategories = get_categories('&child_of=7&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
              echo '<ul>';
              foreach ($subcategories as $subcategory) {
                echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
              }
              echo '</ul>';
              */
            ?>

          </div>

      </div> <!-- end card -->

    </div>

  </div>

</section>

<!-- section categories -->
