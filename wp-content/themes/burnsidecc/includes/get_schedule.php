<?php
    $loop = new WP_Query( array( 'post_type' => 'schedule', 'ignore_sticky_posts' => 1, 'paged' => $paged ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile;
    endif;
    wp_reset_postdata();
?>