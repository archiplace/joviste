<?php
/*
  Template Name: Contact page
*/
get_header();
?>

<?php get_template_part('template-parts/page-parts/page', 'header'); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <h2><?php echo the_field('doo_joviste'); ?></h2>
        <h3><i class="fa fa-map-marker fa-lg"></i> <?php echo the_field('address_title'); ?></h3>
        <p><?php echo the_field('address'); ?></p>
        <h3><i class="fa fa-phone-square fa-lg"></i> <?php echo the_field('phone_title'); ?></h3>
        <p><i class="fa fa-phone fa-lg"></i> <?php echo the_field('phone'); ?></p>
        <p><i class="fa fa-mobile fa-lg"></i> <?php echo the_field('mobile'); ?><br /></p>
        <h3><i class="fa fa-envelope"></i> <?php echo the_field('mail_title'); ?></h3>
        <p><i class="fa fa-envelope"></i> <a href="mailto:<?php echo the_field('mail1'); ?>"><?php echo the_field('mail1'); ?></a><br><i class="fa fa-envelope"></i> <a href="mailto:<?php echo the_field('mail2'); ?>"><?php echo the_field('mail2'); ?></a></p>
      </div>
      <div class="col-md-6 col-sm-12">
        <iframe width="100%" height="400" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJyeVOUbxmQ0cRXaJaz_kZ1gw&key=AIzaSyBPeHgy1Jr2bTgwxL-1Ih8OJzPvJ9Zbkuw" allowfullscreen></iframe>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-sm-12">
        <p class="lead"><?php echo the_field('cv_text'); ?></p>
        <a href="mailto:<?php echo the_field('mail2'); ?>" class="btn btn-lg btn-danger" role="button"><?php echo the_field('button'); ?></a>
      </div>
    </div>
  </div>
</section>

<?php 
get_footer();