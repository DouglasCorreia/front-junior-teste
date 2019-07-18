<section class="banner">
	<article>
		<?php if( has_post_thumbnail() ): ?>
			<div class="banner-background" style="background: url('<?php echo the_post_thumbnail_url(); ?>') no-repeat;background-position: center;"></div>
			<div class="main" style="background: url('assets/img/post-banner-v2.jpg') no-repeat;background-position: center;">
		<?php endif ?>
		
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-10 offset-md-1">
					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>
</section>