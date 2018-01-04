<?php
$title_icon = get_field('title_icon');
?>

<section class="zaglavlje">
    <div class="container section-header">
        <h1>
        <?php if( $title_icon != '' ) {?>
            <i class="<?php echo $title_icon; ?>" aria-hidden="true"></i>
        <?php } ?>
         <?php echo get_the_title(); ?></h1>
     </div>
</section> <!-- Zaglavlje -->
