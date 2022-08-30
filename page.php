<?php

/* Containes page content */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

    <?php
        while( have_posts() ): 
            the_post();

            get_template_part( 'template_parts/page/content', 'page' );

        endwhile; 
    ?>
    </main>
    <?php get_sidebar();?>
</div>

<?php if(get_edit_post_link( )): ?>
    <footer class="entry-footer">
        <?php 
            edit_post_link(
                sprintf(
                /* translators: %s: Post title. */
                    __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'neve' ),
                    get_the_title()
                ),
                '<span class="edit-link">',
                '</span>'
            );
        ?>
    </footer>
<?php endif;?>
<?php get_footer();?>

