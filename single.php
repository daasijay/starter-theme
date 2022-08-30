<?php

/* Single post template */

get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php 
            while( have_posts() ): 
                the_post();

                get_template_part( 'template_parts/post/content' );

            endwhile; 


            //If comments, we can show it
            if( comments_open() || get_comments_number() ):
                comments_template( );
            endif;
        ?>
    </main>
    <?php get_sidebar();?>
</div>

<?php get_footer();?>

