<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick-theme.css" />
	
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

	<header>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-5 col-md-3 logo">
					<?php if ( function_exists( 'the_custom_logo' ) ) {
					 	the_custom_logo();
					} ?>
				</div>

				<div class="col-2 col-sm-2 offset-sm-7 offset-5 icon-mobile-menu">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/hamburger.svg">
				</div>

				<div class="col-12 col-md-12 col-lg-8 offset-lg-1 menu">
					<?php if( is_front_page() ): ?>
						<?php wp_nav_menu( array(
								'theme_location' => 'header-menu',
								'container' => 'nav'
						) ); ?>
					<?php else: ?>
						<?php wp_nav_menu( array(
								'theme_location' => 'post-menu',
								'container' => 'nav'
						) ); ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>