<?php

/*
Template Name: Contact Us
*/

get_header(); ?>

<?php get_template_part('template_parts/tp-contactus-hero'); ?>

  <section class="contact">

    <div class="wrapper">

      <div class="contactform">

        <h1><?php _e( 'Contact Form', 'petros' ); ?></h1>

        <p><?php _e( 'Feel free to get in touch with us using the contact form below. All fileds required.', 'petros' ); ?></p>

        <?php if(ICL_LANGUAGE_CODE=='en') { ?>
        <?php echo do_shortcode( '[contact-form-7 id="89" title="Contact Us"]' ); ?>
        <?php } else { ?>
        <?php echo do_shortcode( '[contact-form-7 id="181" title="Kontakt"]' ); ?>
        <?php } ?>

      </div>

    </div>

      <div class="contactinfo">

        <h1><?php _e( 'Contact information', 'petros' ); ?></h1>

        <span class="blue">Petros d.o.o.</span>
        <span class="white">Božidara Adžije 34 <br>
                            10000 Zagreb
        </span>
        <br><br>
        <span class="blue"><?php _e( 'Working hours:', 'petros' ); ?></span>
        <span class="white">Monday - Friday <br>
                            9am - 6pm
        </span>
        <br><br>
        <span class="blue"><?php _e( 'Head office:', 'petros' ); ?></span>
        <span class="white">+385 (0)1 3646 -600 <br>
                            +385 (0)1 3646-777
        </span>
        <br><br>
        <span class="blue"><?php _e( 'Tours and day trips contact:', 'petros' ); ?></span>
        <span class="white">+385 (9)1 6006-876
        </span>
        <br><br>
        <span class="blue">Fax:</span>
        <span class="white">+385 (0)1 3646-465
        </span>
        <br><br>
        <span class="blue">E-mail:</span>
        <span class="white">petros@petros.hr
        </span>
        <br><br>
        <span class="blue">Website:</span>
        <span class="white">petros@petros.hr
        </span>


      </div>

    </div>

  </section>

  <section class="map">

    <div id="sample" style = "width:100%; height:400px;"></div>

      <div class="wrapper">

        <div class="maplink">

        <a class="seemap" target="_blank" href="https://www.google.rs/maps/place/Ul.+Bo%C5%BEidara+Ad%C5%BEije+34,+10000,+Zagreb,+Croatia/@45.8044938,15.9537904,17z/data=!3m1!4b1!4m5!3m4!1s0x4765d6e9a4b90bad:0x4f0219d87a24acb4!8m2!3d45.8044938!4d15.9559791"><?php _e( 'see map', 'petros' ); ?> <span><i class="fa fa-chevron-right" aria-hidden="true"></i></span></a>

        </div>

      </div>

  </section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>
