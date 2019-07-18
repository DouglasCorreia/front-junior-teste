<section>
	<article>
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-10 offset-md-1">
					<h1><?php the_title(); ?></h1>

					<?php if( has_post_thumbnail() ): ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php endif ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</article>
</section>