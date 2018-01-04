<?php
$hero_logo = get_field('hero_logo');
$picture_1 = get_field('picture_1');
$picture_2 = get_field('picture_2');
$picture_3 = get_field('picture_3');
?>

<section id="hero" data-type="background" data-speed="4">
  <article>
    <div class="container">
      <div class="row">
        <div class="col-sm-5" class="center">
          <img src="<?php echo $hero_logo['url']; ?>" alt="<?php echo $hero_logo['alt']; ?>">
        </div>
        <div class="col-sm-7">
          <h1><?php the_field('hero_title'); ?> <small><?php the_field('hero_title_small'); ?></small></h1>
          <p class="lead"><?php the_field('hero_text'); ?></p>
          <div class="row center">
            <div class="col-xs-6"><img src="<?php echo $picture_1['url']; ?>" alt="<?php echo $picture_1['alt']; ?>"></div>
            <div class="col-xs-3"><img src="<?php echo $picture_2['url']; ?>" alt="<?php echo $picture_2['alt']; ?>"></div>
            <div class="col-xs-3"><img src="<?php echo $picture_3['url']; ?>" alt="<?php echo $picture_3['alt']; ?>" class="img-responsive center-block"></div>
          </div>
          <p>
            <a href="<?php the_field('button_link'); ?>" class="btn btn-lg btn-danger" role="button"><?php the_field ('button'); ?></a>
          </p>
        </div>
      </div>
    </div>
  </article>
</section>
