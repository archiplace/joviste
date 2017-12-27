<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Joviste_doo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>

	<!-- Ovako treba ubaciti FAVICON!!! -->
	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.png">

	<?php wp_head(); ?>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'joviste' ); ?></a>

<!-- =================HEADER========================= -->
	<header class="site-header" role="banner">
		<!-- NAVBAR -->
		<div class="navbar-wraper">

			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="lang">
					<?php
						wp_nav_menu( array(
							'theme_location'		=> 'lang',
							'container'					=> '',
							'container_class'		=> '',
							'menu_class'				=> 'lang-nav'
						) );
					?>
				</div>

				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="/"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="PVC & ALU Stolarija, Joviste doo" height="38"/></a>
					</div><!-- navbar-header -->

					<?php
						wp_nav_menu( array(
								'theme_location'		=> 'menu-1',
								'depth'							=> 2,
								'container'					=> 'nav',
								'container_class'		=> 'navbar-collapse collapse',
								'menu_class'				=> 'nav navbar-nav navbar-right',
								'walker'						=> new WP_Bootstrap_Navwalker(),
						) );
					?>

				</div> <!-- container -->
			</div> <!-- navbar -->

		</div><!-- navbar-wrapper -->
	</header>
