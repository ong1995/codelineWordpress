<?php

function my_theme_enqueue_styles() {

	/* The unite-style is the tag use in the parent theme unite 
	   	that can be seen inside the functions.php for its wp_enqueue_style()
	 */ 
    $parent_style = 'unite-style'; 

    /* Register the Unite theme style in the theme child */
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    /* Register the Unite-child theme style */
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

?>