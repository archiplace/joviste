<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joviste_doo
 */

$footer_args = array(

	'post_type' => 'footer',
	'posts_per_page' => 1,
	'post_status' => 'publish'
);

$footer_query = new WP_Query($footer_args);

?>



<!-- FOOTER -->
<footer>
	<div class="container">
		<div class="row flogo">
		<?php 
			
			if($footer_query->have_posts()){
	
			while($footer_query->have_posts()){
				$footer_query->the_post();
				
				?>
				
				<div class="col-sm-3">
				<h3><?php the_field('contact_title'); ?></h3>
				<p><?php the_field('contact_text'); ?></p>
			</div>
			<div class="col-sm-6">
				<h3><?php the_field('wt_title'); ?></h3>
				<div class="row">
					<div class="col-sm-6">
						<table class="table">
							<thead>
								<tr><td><?php the_field('wt_winter_title'); ?></td></tr>
							</thead>
							<tbody>
								<tr>
									<td><?php the_field('monday_friday'); ?></td>
									<td><?php the_field('monday_winter_time'); ?></td>
								</tr>
								<tr>
									<td><?php the_field('saturday'); ?></td>
									<td><?php the_field('saturday_winter_time'); ?></td>
								</tr>
								<tr>
									<td><?php the_field('sunday'); ?></td>
									<td><?php the_field('sunday_time'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col-sm-6">
						<table class="table">
							<thead>
								<tr><td><?php the_field('wt_summer_title'); ?></td></tr>
							</thead>
							<tbody>
								<tr>
									<td><?php the_field('monday_friday'); ?></td>
									<td><?php the_field('monday_summer_time'); ?></td>
								</tr>
								<tr>
									<td><?php the_field('saturday'); ?></td>
									<td><?php the_field('saturday_summer_time'); ?></td>
								</tr>
								<tr>
									<td><?php the_field('sunday'); ?></td>
									<td><?php the_field('sunday_time'); ?></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div> <!-- .row -->
				
				<?php
			}
	
			}
			
		?>
			

			</div> <!-- col-sm-6 -->

			<div class="col-sm-3">
				<img src="<?php bloginfo('stylesheet_directory') ?>/img/badge_logo.png" alt="logo Jovista" class="flogo">
			</div>
		</div> <!-- .flogo -->

		<hr>

		<div class="row citysu">
			<div class="col-sm-6">
				&copy; <?php echo date(Y); ?> Joviste doo Subotica | designed by: <a href="http://www.citysuteam.rs/" class="citysu">CitySu Team</a>
			</div>
			<div class="col-sm-6 " >
				<span class="pull-right">
				<!-- <a href="#" target="_blank" class="badge social twitter"><i class="fa fa-twitter"></i></a>-->
				<a href="https://www.facebook.com/Stolarija-Pvc-Alu-Joviste-1624419641154207" target="_blank" class="badge social facebook"><i class="fa fa-facebook"></i></a>
				<!-- <a href="#" target="_blank" class="badge social gplus"><i class="fa fa-google-plus"></i></a>-->
				</span>
			</div>
		</div> <!-- .citysu -->

	</div><!-- container -->
</footer>
		
<?php wp_footer(); ?>

</body>
</html>
