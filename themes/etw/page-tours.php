<?php
/*
Template Name: ToursPage
*/

get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<h2><span><?php the_title(); ?></span></h2>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php  $args = array(
						'post_type' => 'tourss',
						'posts-per-page' => -1,
						'orderby' => 'title',
						'order' => 'ASC'

					); ?>

					<?php $tours = new WP_Query($args); ?>
					<ul class="tours clear">
					<?php	while($tours->have_posts() ): $tours->the_post(); ?>

						<li class="grid2-4">
									<div class="featured-tour">
										<?php the_post_thumbnail('featuredTour'); ?>
										<a href="<?php the_permalink() ?>" class="more-info">
										<img src="<?php echo get_template_directory_uri(); ?>/img/moreinfo.png">
									</div>
								<h3>	<a href="<?php the_permalink() ?>">
									<?php the_title(); ?>
								</a>
								</h3>
								<?php
									$format = 'd F, Y';
									$date = strtotime(get_field('leaving_date'));
									$leavingDate = date_i18n($format, $date);

									$returningDate = strtotime(get_field('returning_date'));
									$returningDate = date_i18n($format, $returningDate);
								 ?>
								 <div class="date-price clear">
									 <p class="date"><?php echo $leavingDate . ' - ' .$returningDate ?></p>
									 <p class="price"><?php the_field('price'); ?></p>
								</div>
								<div class="tour-description">
									<?php the_field('small_description'); ?>
								</div>
						</li>

					<?php endwhile; wp_reset_postdata(); ?>
					<div class="omega"></div>
				</ul>



				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
