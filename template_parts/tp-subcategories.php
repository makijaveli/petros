<!-- list of subcategories in one row -->

  <div class="wrapper">
  
    <div class="subcatlist">

      <?php
      $cat = get_query_var('cat');
      $cat_list = wp_list_categories('child_of='.$cat.'&hide_empty&title_li=&echo=0');
          if($cat_list) {
          echo '<ul>';
          echo '<li>';
          echo $cat_list;
          echo '</li>';
          echo '</ul>';
          }

      ?>

    </div>

  </div>

  <div class="catline"></div>

<!-- list of subcategories in one row -->
