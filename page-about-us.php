<?php

/*
Template Name: About Us
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-contactus-hero'); ?>

<?php get_template_part('template_parts/tp-aboutus-sections'); ?>

<section id="whypetros">

  <div class="wrapperus">

  <h1>Why Petros?</h1>

  <p>Petros is a tour operator and a destination management company <br> for small groups and great experience</p>

  <div class="works">

      <div class="work">

        <i class="fa fa-users" aria-hidden="true"></i>

        <h3>Small groups for a great experience</h3>

        <span>All of our tours and day trips are limited to 15 participants.</span>

      </div>

      <div class="work">

        <i class="fa fa-id-card" aria-hidden="true"></i>

        <h3>Licensed local guides</h3>

        <span>Spend a day with a passionate and enthusiastic guide that has all the ins and outs.</span>

      </div>

      <div class="work">

        <i class="fa fa-diamond" aria-hidden="true"></i>

        <h3>Forget the boring facts and figures</h3>

        <span>We focus on the hidden gems and interesting tidbits.</span>

      </div>

      <div class="work">

        <i class="fa fa-smile-o" aria-hidden="true"></i>

        <h3>Always at your disposal</h3>

        <span>Our guides are here to provide a tailor made experience for you.</span>

      </div>

      <div class="work">

        <i class="fa fa-car" aria-hidden="true"></i>

        <h3>Pick up and drop off</h3>

        <span> Free of charge for centrally located hotels.</span>

      </div>

      <div class="work">

        <i class="fa fa-graduation-cap" aria-hidden="true"></i>

        <h3>Expertise and passion</h3>

        <span>With over 25 years of expertise in the travel industy we have shared our enthusiasm and passion with more than 100.000 satisfied guests.</span>

      </div>

  </div>

</div>

</section>

<section id="aboutus">

  <div class="wrapper">

  <?php the_content(); ?>

  </div>

</section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
