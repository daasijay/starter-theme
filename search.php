<?php

/* Search template */

get_header(); ?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">
        <?php if( have_posts() ): 
            while( have_posts() ): 
                the_post();
                get_template_part( 'template_parts/page/content', 'search' );
            endwhile; 

            echo paginate_links( array(
                'mid_size'  => 3,
                'prev_text' => __( '&laquo; Prev', 'textdomain' ),
                'next_text' => __( 'Next &raquo;', 'textdomain' ),
            ) );
        else:
            get_template_part( 'template_parts/page/content', 'none' );
        endif;?>
    </main>
</div>
    
<?php get_footer();?>

