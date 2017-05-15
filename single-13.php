<?php

/*
* For one Blog post
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-blog-post'); ?>

<div class="wrappersingle">

  <!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-513865a54c1561a6"></script> 

  <div class="singleblogpost">

    <?php the_content(); ?>

  </div>

</div>

<?php get_template_part('template_parts/tp-blog-post-related'); ?>

<?php get_template_part('template_parts/tp-subscribe'); ?>

<?php get_footer(); ?>
