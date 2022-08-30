<?php

/* 404 not found template */

get_header(); ?>

<div id="primary" class="search-content-area">
    <main id="main" class="site-main">

        <section class="error-404 notfound">
             <!-- Heading -->
            <header class="page-header">
                <h1 class="page-title">
                    <?php esc_html_e('oops! that page can&rsquo;t found.', 'starter_theme');?>
                </h1>
            </header>
        </section>

        <div class="page-content">
            <p><?php esc_html_e('Its look like nothing has found at this location. try again');?></p>
            <?php get_search_form(); ?>
        </div>
    </main>
</div>
    
<?php get_footer();?>
