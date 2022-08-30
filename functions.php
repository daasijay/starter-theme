<?php

/* Functions goes here */

if ( ! function_exists( 'starter_theme_setup' ) ) {

    function starter_theme_setup(){

        load_theme_textdomain( 'starter_theme', get_template_directory( ). '/languages' );

        add_theme_support( 'automatic-feed-links' );

        add_theme_support( 'title-tag' );

        add_theme_support( 'post-thumbnails' );

        add_theme_support( 'custom-background', apply_filters('starter_theme_custom_bg_arg', array(
            'default_color' => 'ffffff',
            'default_image' => '',
        )) );


        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );

        add_theme_support( 'customize-selective-refresh-widgets' );

        add_theme_support( 'custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ) );

        add_theme_support(
            'post-formats',
            array(
                'link',
                'aside',
                'gallery',
                'image',
                'quote',
                'status',
                'video',
                'audio',
                'chat',
            )
        );

        register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'starter_theme' ),
				'footer'  => esc_html__( 'Secondary menu', 'starter_theme' ),
			)
		);


    }
    add_action('after_setup_theme','starter_theme_setup');

}



function starter_theme_widgets_init() {

	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidbar', 'twentytwentyone' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here to appear in your footer.', 'twentytwentyone' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'starter_theme_widgets_init' );



//adding scripts
function starter_theme_scripts(){
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', [],  wp_rand(), 'all');
    wp_enqueue_style('default', get_template_directory_uri() . '/assets/css/default.css', [],  wp_rand(), 'all');

    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', ['jquery'], wp_rand(), true  );
}
add_action('wp_enqueue_scripts', 'starter_theme_scripts');


function starter_theme_admin_scripts(){
    
}
add_action('admin_enqueue_scripts', 'starter_theme_scripts');