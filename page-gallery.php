<?php
/*
  Template Name: Gallery

*/

get_header();

get_template_part('template-parts/page-parts/page', 'header');

?>

<section>
  <div class="container">
    <div class="row">
      <?php while( have_posts() ) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
        <div class="col-sm-12">
          <?php the_content(); ?> <!-- Page Content -->
        </div>
      <?php endwhile;
      wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php
get_footer();