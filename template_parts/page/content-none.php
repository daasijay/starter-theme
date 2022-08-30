<?php
/* This template parts will shows the page no content */
?>

<section class="no-results not-found">

    <!-- Heading -->
    <header class="page-header">
        <h1><?php
            esc_html_e('Nothing Found', 'starter_theme');
        ?>
        </h1>
    </header>

    <div class="page-content">
        <?php
            if(is_home() && current_user_can( 'publish_posts')):

                printf(
                    '<p>' . wp_kses(
                        __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'starter_theme' ),
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        )
                    ). '</p>',
                    esc_url( admin_url('post-new.php') )
                );

            elseif( is_search() ): ?>

                <p>
                    <?php
                        esc_html_e('Sorry, No results Found', 'starter_theme'); 
                        get_search_form();
                    ?>
                </p>

            <?php else: ?>
                <p>
                    <?php
                        esc_html_e('We cant find what you are looking for. Perhaps searching can help', 'starter_theme'); 
                        get_search_form();
                    ?>
                </p>

            <?php endif;

        ?>
    </div>

   
</section>