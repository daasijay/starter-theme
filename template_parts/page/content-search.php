<?php
/* This template parts will for search */
?>

<article id="post-<?php the_ID();?>">
     <!-- Heading -->
     <header class="entry-header">
        <?php
            the_title(sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink( ))), '</a></h2>' );
        ?>
    </header>

    <!-- Content -->
    <div class="entry-summary">
        <?php
            the_excerpt();
        ?>
    </div>

     <!-- More -->
     <div class="entry-footer">
        <?php
            printf( '<a href="%s">Read more</a>', esc_url( get_the_permalink( ) ) );
        ?>
    </div>
</article>