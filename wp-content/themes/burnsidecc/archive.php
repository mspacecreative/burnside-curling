<?php get_header(); ?>

	<div class="post-container clearfix">
		<main role="main">
				<!-- section -->
				<section>
		
					<?php $post_date = get_the_date('F Y'); ?>
					<h1><?php echo $post_date; ?><?php _e( ' Archive', 'html5blank' ); ?></h1>
		
					<?php get_template_part('loop'); ?>
		
				</section>
				<!-- /section -->
			</main>
		
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
