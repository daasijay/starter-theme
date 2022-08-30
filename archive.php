<?php

/* Template for displaying archive pages*/

get_header(); 
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <?php if(have_posts(  )): ?>
            <header class="archive-page-header">
                <?php
                    the_archive_title( '<h1 class="archive-title">','</h1>' );
                    the_archive_description( '<div class="archive-decription">', '</div>' );
                ?>
            </header>
        <?php 
            while(have_posts(  )):
                the_post(  );
                get_template_part( 'template_parts/post/content' );
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