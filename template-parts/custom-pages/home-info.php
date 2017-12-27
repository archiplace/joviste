<?php
$circle_image = get_field('circle_image');
$picture_4 = get_field('picture_4');
$picture_5 = get_field('picture_5');
?>

<section id="osnovno">
    <div class="container">
        <div class="section-header">
            <img src="<?php echo $circle_image['url']; ?>" alt="<?php echo $circle_image['alt']; ?>" height="140" width="140">
            <h2><?php the_field('info_title'); ?></h2>
        </div>
        <p class="lead"><?php the_field('info_text'); ?></p>
        <div class="row">
            <div class="col-sm-6">
                <div class="">
                    <img src="<?php echo $picture_4['url']; ?>" alt="<?php echo $picture_4['alt']; ?>" class="img-thumbnail osnovno">
                    <div class="">
                        <h3><?php the_field('sub_title_1'); ?></h3>
                        <?php the_field('sub_text_1'); ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div >
                    <img src="<?php echo $picture_5['url']; ?>" alt="<?php echo $picture_5['alt']; ?>" class="img-thumbnail osnovno">
                    <div >
                      <h3><?php the_field('sub_title_2'); ?></h3>
                      <?php the_field('sub_text_2'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
