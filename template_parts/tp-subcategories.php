<!-- list of subcategories in one row -->

  <div class="wrapper">

    <div class="sticky">

    <div class="subcatlist">

          <ul class="list-items categories">
             <?php $category_ids = get_query_var('cat');
             $catid = $category_ids->cat_ID;
             $parent = $category_ids->category_parent;
             $args = array( 'orderby' => 'slug', 'child_of' => $category_ids);
             $categories = get_categories( $args );
             foreach ( $categories as $category ) {
             echo '<li><a href="#' . $category->slug . '" rel="bookmark">' . $category->name . '</a>
             </li>'; } ?>
          </ul>



    </div>

  </div>

  </div>

  <div class="catline"></div>

<!-- list of subcategories in one row -->
