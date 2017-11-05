<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
				<h2><span><?php the_title(); ?></span></h2>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



			<div class="clear">
					<div class="grid1-3 post-information">

					<!-- /post title -->

					<!-- post details -->
					<span class="date"><strong><?php _e( 'Published ', 'html5blank' ); ?></strong> <?php the_time('F j, Y'); ?></span><br>
			<span class="author"><strong><?php _e('by')?></strong>  <?php the_author_posts_link(); ?></span>
										<p><strong><?php _e( 'Category: ', 'html5blank' );?></strong>  <?php the_category(', '); // Separated by commas ?></p>

										<!-- /post details -->
				</div>

				<div class="grid2-3">

			<?php the_content(); // Dynamic Content ?>
			<p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>

			<?php comments_template(); ?>

		</div>
		<div class="clear"></div>




		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>



<?php get_footer(); ?>
