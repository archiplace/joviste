<?php
/*
Template Name: About Page
*/

get_header();
?>

<?php get_template_part('template-parts/page-parts/page', 'header'); ?>

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-12">
        <?php the_field('about_text'); ?>
      </div>
      <!-- col 7 end -->
      <div class="col-md-5 col-sm-12">
        <?php
          $picture_1 = get_field('picture_1');
          if( !empty($picture_1) ) :
        ?>
          <img src="<?php echo $picture_1['url']; ?>" alt="<?php echo $picture_1['alt']; ?>">
        <?php endif; ?>
      </div>
      <!-- col 5 -->
    </div>
    <!-- row end -->
  </div>
  <!-- container end -->
</section>
<!-- prvi red gotov -->

<section id="o_joviste" data-type="background" data-speed="4">
  <div class="black">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php the_field('about_text_2'); ?>
        </div>
        <!-- col 12  -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- black -->
</section>

<section>
  <div class="container">
    <h2><?php the_field('title'); ?></h2>
    <?php the_field('text'); ?>
    <div class="row">
      <div class="col-sm-12">
        <ul class="column">
          <?php the_field('references'); ?>
        </ul>
      </div>
    </div>

      <div class="row">
        <h2><?php the_field('title_2'); ?></h2>
        <?php the_field('text_2'); ?>
        
        <?php
          $country_args = ( array(
            'post_type' => 'country',
            'orderby'   => 'post_di',
            'order'     => 'DSC'
          ) );
          $country_query = new WP_Query( $country_args );
          while( $country_query->have_posts() ) : $country_query->the_post();
        ?>

        <div class="col-sm-4">
          <p><?php the_field('country'); ?></p>
          <ul>
            <?php the_field('reference'); ?>
          </ul>
        </div>

      <?php endwhile; wp_reset_query(); ?>

      </div>
      <!-- row lista stranih referenci-->
    </div>
    <!--container-->
</section>
<!-- section reference -->

<?php get_footer(); ?>
