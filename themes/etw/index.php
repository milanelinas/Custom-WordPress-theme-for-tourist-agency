<?php get_header(); ?>

<h2><span><?php _e( 'Blog', 'html5blank' ); ?></span></h2>

	<main role="main">
		<!-- section -->
		<section>


			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
