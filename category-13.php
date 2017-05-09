<?php

/*
* For cateogry Blog
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-blog-hero'); ?>

<div class="wrapperblog">

    <section class="blogcat">

      <h1>Recent stories</h1>


        <?php echo do_shortcode( '[ajax_load_more container_type="div" post_type="post" posts_per_page="3" category="blog" scroll="false" images_loaded="true" button_label="Load more" button_loading_label="Loading more"]' ); ?>


    </section>

</div>

<?php get_template_part('template_parts/tp-subscribe'); ?>

<?php get_footer(); ?>
