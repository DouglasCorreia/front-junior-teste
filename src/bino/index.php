<?php get_header(); ?>

<section id="home" class="section">
	
	<div class="slick-carousel">
		<div>
			<div class="main-text single">
				<span class="small-main-text">Our Clients Are Our First Priority</span>
				<h1>WELCOME TO BINO</h1>

				<div class="spacer">
					<span class="line"></span>
					<span class="circle"></span>
					<span class="line"></span>
				</div>

				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>

				<div class="main-buttons">
					<a href="#">Get started now</a>
					<a href="#">Learn More</a>
				</div>
			</div>
		</div>

		<!-- Post -->
		<?php
			$args = array(
			'post-type' => 'post',
			'category_name'=> 'banner',
			'showposts' => '4' );
			$my_posts = get_posts( $args );
		?>

		<?php
			if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post );
		?>
			<div class="slick-item-post-banner">
				<?php if( has_post_thumbnail() ): ?>
					<div class="main-text" style="background: url('<?php echo the_post_thumbnail_url(); ?>') center;">
				<?php else: ?>
					<div class="main-text" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/banner-empty.jpg') center;">
				<?php endif ?>
					<h2><?php the_title(); ?></h2>
					<?php the_excerpt('', TRUE); ?>
					<div class="main-buttons">
						<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
					</div>
				</div>
			</div>

		<?php
			endforeach;
			endif; 
		?>
	</div>
	
	<!-- <?php echo do_shortcode('[recent_post_slider limit="4" category="3" recent_post_slider dots="false" show_author="false" show_date="false" show_category_name="false" ]') ?> -->

	<div class="icon-anchor">
		<a href="#about-us" class="scroll">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/icons/icon-anchor.png" alt="Icon Anchor" />
		</a>
	</div>
</section>

<section id="about-us" class="section">
	<div class="container">
		<div class="row align-items-center">

			<div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-sleek-design.png" alt="Sleek Design" />

				<h2>Sleek Design</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

			<div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-clean-code.png" alt="Clean Code" />

				<h2>Clean Code</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

			<div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-creative-ideas.png" alt="Creative Ideas" />

				<h2>Creative Ideas</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

			<div class="col-6 col-sm-6 col-md-6 col-lg-3 text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-free-support.png" alt="Free Support" />

				<h2>Free Support</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry.</p>
			</div>

		</div>
	</div>
</section>

<section id="portfolio" class="section">
	<div class="container">
		<h2 class="text-center title-section">Recent Works</h2>
		<p class="text-center text-section">It has survived not only five centuries, but also the leap scrambled it to make a type.</p>

		<div class="spacer">
			<span class="line"></span>
			<span class="circle"></span>
			<span class="line"></span>
		</div>
	</div>

	<div class="row no-margin">

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-one.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Website</h3>
						<span>art / website</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-two.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>T-Shirt</h3>
						<span>art / t-shirt</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-three.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Resume</h3>
						<span>art / resume</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-four.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Website</h3>
						<span>art / website</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-five.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Logo</h3>
						<span>art / logo</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-six.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Resume</h3>
						<span>art / resume</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-seven.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Logo</h3>
						<span>art / logo</span>
					</div>
				</div>
			</div>
		</div>

		<div class="col-12 col-sm-6 col-md-4 col-lg-3 no-padding">
			<div class="card-service">
				<div class="front">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/work-eight.jpg" alt="Work One" />
				</div>
				<div class="back">
					<div class="content">
						<h3>Website</h3>
						<span>art / website</span>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>

<section id="case-study" class="section">
	<div class="container">
		<h2 class="text-center title-section">Case Study</h2>
		<p class="text-center text-section">A brief story about how this process works, keep an eye till the end.</p>

		<div class="spacer">
			<span class="line"></span>
			<span class="circle"></span>
			<span class="line"></span>
		</div>

		<div class="row align-items-center justify-content-center">
			<div class="col-10 col-lg-5 col-xl-6 card text-center">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icon-accumulate-creative-ideas.png" alt="Accumulate Creative Ideas" />

				<h3>Accumulate Creative Ideas</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry. Lorem Ipsum is simply dummy text of the printing and typesetting let. Lorem Ipsum has been the industry Printing and typelorem Ipsum has been the setting let.</p>

				<div class="button">
					<a href="#">Read More</a>
				</div>
				
			</div>
			<div class="col-10 col-lg-7 col-xl-6 card-background">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/case-study-background.jpg" alt="Free Support" />
			</div>
		</div>
	</div>
</section>

<section id="blog" class="section">
	<div class="container">
		<h2 class="text-center title-section">Our blog</h2>
		<p class="text-center text-section">Suspendisse sed eros mollis, tincidunt felis eget, interdum eratullam sit amet odio.</p>

		<div class="spacer">
			<span class="line"></span>
			<span class="circle"></span>
			<span class="line"></span>
		</div>
	</div>

	<div class="row no-margin">

		<!-- Post -->
		<?php
			$args = array(
			'post-type' => 'post',
			'category__not_in'  => 3,
			'showposts' => '4' );
			$my_posts = get_posts( $args );
		?>

		<?php
			$cont = 1; 
			if( $my_posts ) : foreach( $my_posts as $post ) : setup_postdata( $post );
		?>
			<div class="col-lg-12 col-xl-6 no-padding card-post">
				<?php if($cont <= 2): ?>
					<div class="row no-margin left">
				<?php else: ?>
					<div class="row no-margin right">
				<?php endif; ?>

					<!-- Thumbnail -->
					<div class="col-sm-6 col-lg-5 col-xl-6 no-padding thumbnail">
						<a href="<?php the_permalink(); ?>">
							<?php if( has_post_thumbnail() ): ?>
								<?php the_post_thumbnail(); ?>
							<?php else: ?>
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/thumbnail-empty.jpg" alt="Não contém imagem de destaque" />
							<?php endif;  ?>
						</a>
					</div>

					<!-- Title and Excerpt -->
					<div class="col-sm-6 col-lg-7 col-xl-6 no-padding text">
						<span class="tags">
							<?php the_tags('', ' / ', '' ); ?>
						</span>
						<h3><?php the_title(); ?></h3>
						
						<a href="<?php the_permalink(); ?>">
							<?php the_excerpt('', TRUE); ?>
						</a>

						<div class="read-more">
							<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
						</div>
					</div>
				</div>
			</div>
		<?php
			$cont++;
			endforeach;
			endif; 
		?>

	</div>
</section>

<?php get_footer(); ?>