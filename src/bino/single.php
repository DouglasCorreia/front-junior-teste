<?php get_header(); ?>

	<?php if ( in_category( 'banner' ) ): ?>
		<?php include( get_template_directory().'/template-parts/single-banner.php' ); ?>
	<?php else: ?>
		<?php include( get_template_directory().'/template-parts/single.php' ); ?>
	<?php endif; ?>

<?php get_footer(); ?>