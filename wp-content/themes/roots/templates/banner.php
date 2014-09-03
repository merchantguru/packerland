<div class="yellowback">

	<div class="wrap container" role="document">
		<div class="content row">



		<main class="main featured" role="featured">
			<article>
				<header>

					<?php
						$loop = new WP_Query( array(
						'showposts' => 1,
						'post__in' => get_option('sticky_posts'),
						'ignore_sticky_posts' => 1 ) );

					while ( $loop->have_posts() ) : $loop->the_post(); ?>
						<?php the_post_thumbnail(); ?>
					
					<h2><?php the_title(); ?></h2>
					<?php endwhile; ?>

				</header>
			</article>
		</main>




		<aside class="sidebar trending" role="trending">
			<div class="h2">Trending: </div>
			<h3>Packer News You Need to Know</h3>

			<?php
				$loop = new WP_Query( array(
				'showposts' => 5,
				'post__in' => get_option('sticky_posts'),
				'ignore_sticky_posts' => 1 ) );

				while ( $loop->have_posts() ) : $loop->the_post(); ?>

					<?php if ( $loop->current_post > 0) { ?>
			
						<h4><?php the_title(); ?></h4>
					<?php } ?>

				<?php endwhile; ?>
		</aside>




		</div>
	</div>

</div>