<?php

/*
Template Name: Testimonials Page
*/

get_header();  ?>

	<main role="main">
		<!-- section -->
		<section>



		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<h2><span><?php the_title(); ?></span></h2>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('grid2-3'); ?>>

				<?php the_content(); ?>


				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<div class="clear"></div>
			<!-- /article -->
			<div class="testimonials-section">
				<?php  $args = array(
					'post_type' => 'testimonial',
					'posts-per-page' => -1,
					'orderby' => 'title',
					'order' => 'ASC'

				); ?>

				<?php $testimonial = new WP_Query($args); ?>
				<ul class="testimonials-list">
				<?php	while($testimonial->have_posts() ): $testimonial->the_post(); ?>
					<li>
							<h3><?php the_title(); ?></h3>
							<div class="testimonial-content">
									<?php the_content(); ?>
							</div>
							<div class="from-testimonial">
									<p><?php the_field('person_name'); ?></p>
									<p><?php the_field('from'); ?></p>

							</div>
					</li>

					<?php endwhile; wp_reset_postdata(); ?>
				</ul>
			</div>

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
<div class="clear"></div>
<?php get_footer(); ?>
