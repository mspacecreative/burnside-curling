<?php 
   // the query
   $the_query = new WP_Query( array(
      'posts_per_page' => 1,
   )); 
?>

<?php if ( $the_query->have_posts() ) : ?>
  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <!-- post details -->
    <span class="author"><?php _e( 'Posted by', 'html5blank' ); ?> <?php the_author(); ?> <?php _e(' on'); ?> <?php the_time('F j, Y'); ?> <?php _e(' at'); ?> <?php the_time('g:i a'); ?></span>
    <!-- /post details -->
    <p><?php html5wp_excerpt('html5wp_custom_post'); ?></p>

  <?php endwhile; ?>
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php __('No News'); ?></p>
<?php endif; ?>