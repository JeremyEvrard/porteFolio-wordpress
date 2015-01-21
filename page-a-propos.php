<?php get_header(); ?>
    <div class="about">
	<?php 
        // The Query
        $the_query = new WP_Query( 'pagename=a-propos' );

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


    </div>
<?php get_footer(); ?>
