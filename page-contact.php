<?php get_header(); ?>
<?php 
        // The Query
        $the_query = new WP_Query( 'pagename=contact' );

        // The Loop
        if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                echo the_content();
            }
        } else {
            // no posts found
        }
        /* Restore original Post Data */
        wp_reset_postdata();
    ?>
<?php get_footer(); ?>