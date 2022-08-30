<?php

/* Template for comments */

if(post_password_required( )) {
    return;
}

?>

<div id="comments" class="comments-area">

    <?php 
        if( have_comments() ): ?>

            <h2 class="comment-title">
                <?php
                    $comment_count = get_comments_number();
                    if( '1' === $comment_count ) {
                        printf(
                            esc_html__('Comments (1)', 'starter_theme'),
                        );
                    }
                    else{
                        printf(
                            esc_html__('Comments (%1$s)', 'starter_theme'), intval( $comment_count ),
                        );
                    }
                ?>
            </h2>

            <?php the_comments_navigation( );?>
            <ol class="comment-list">
                <?php
                    wp_list_comments( 
                        [
                            'style' => 'ol',
                            'short_ping' => true
                        ]
                    ); 
                ?>
            </ol>

            <?php
                if(! comments_open() ) {
                    printf(
                        '<p class="no-comments">%1$s</p>',
                        esc_html__('comments are clsoed', 'started_theme')
                    );
                }
            ?>
            
        <?php 
        endif;

        comment_form();
    ?>
    
</div>
