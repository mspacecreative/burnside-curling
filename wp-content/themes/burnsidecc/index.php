<?php get_header(); ?>

	<div class="post-container clearfix main-index">
		<main role="main">
				<!-- section -->
				<section>
		
					<h1><?php _e( 'News Archive', 'html5blank' ); ?></h1>
		
					<?php get_template_part('loop'); ?>
		
					<?php get_template_part('pagination'); ?>
		
				</section>
				<!-- /section -->
			</main>
		
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
