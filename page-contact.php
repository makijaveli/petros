<?php /* Template Name: Contact Us page */

get_header(); ?>

<?php get_template_part('template_parts/tp-page-hero'); ?>

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
        <?php the_field('contact_info'); ?>
      </div>

    </div>

  </section>

  <section class="map">

    <?php echo do_shortcode('[wpgmza id="10"]'); ?>

  </section>

<?php get_template_part('template_parts/tp-followus'); ?>

<div class="clear"></div>

<?php get_footer(); ?>