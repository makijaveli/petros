<?php
/*
* Categories part on home page
*/
?>

<!-- section categories -->

<section class="categories">

  <div class="wrapper">

    <h1>Categories</h1>

    <div class="cards">

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/card1.png')">
            <div class="overlay-cards"></div>


            <div class="cardtitle">

              <h2><a href="">Discover Zagreb</a></h2>

            </div>

            <div class="cardinfo">

              <?php
                $subcategories = get_categories('&child_of=4&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
                echo '<ul>';
                foreach ($subcategories as $subcategory) {
                  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
                }
                echo '</ul>';
              ?>

          </div>

      </div> <!-- end card -->

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/card2.png')">
        <div class="overlay-cards"></div>


          <div class="cardtitle">

            <h2><a href="">Discover Zagreb</a></h2>

          </div>

          <div class="cardinfo">

              <?php
                $subcategories = get_categories('&child_of=5&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
                echo '<ul>';
                foreach ($subcategories as $subcategory) {
                  echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
                }
                echo '</ul>';
              ?>

          </div>

      </div> <!-- end card -->

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/card3.png')">
          <div class="overlay-cards"></div>
          <div class="cardtitle">

            <h2><a href="">Discover Zagreb</a></h2>

          </div>

          <div class="cardinfo">

            <?php
              $subcategories = get_categories('&child_of=6&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
              echo '<ul>';
              foreach ($subcategories as $subcategory) {
                echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
              }
              echo '</ul>';
            ?>

          </div>

      </div> <!-- end card -->

      <div class="card" style="background-image: url('<?php bloginfo('template_directory'); ?>/images/card4.png')">
          <div class="overlay-cards"></div>

          <img src="<?php bloginfo('template_directory'); ?>/images/card4.png" alt="">

          <div class="cardtitle">

            <h2><a href="">Discover Zagreb</a></h2>

          </div>

          <div class="cardinfo">

            <?php
              $subcategories = get_categories('&child_of=7&hide_empty'); // List subcategories of category '4' (even the ones with no posts in them)
              echo '<ul>';
              foreach ($subcategories as $subcategory) {
                echo sprintf('<li><a href="%s">%s</a></li>', get_category_link($subcategory->term_id), apply_filters('get_term', $subcategory->name));
              }
              echo '</ul>';
            ?>

          </div>

      </div> <!-- end card -->

    </div>

  </div>

</section>

<!-- section categories -->
