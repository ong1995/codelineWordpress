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

/* Add new type post Films in the Theme */

function films_init() {
    $args = array(
      'label' => 'Films',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'films'),
        'query_var' => true,
        'menu_icon' => 'dashicons-video-alt',
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'trackbacks',
            'custom-fields',
            'comments',
            'revisions',
            'thumbnail',
            'author',
            'page-attributes',)
        );

    register_post_type( 'films', $args );
}

/* Added taxonimies in the Films : Genre, Country, Year, Actors */

function add_genre_tax(){
    register_taxonomy(
        'genre',
        'films',
        array(
            'label' => __( 'Genre' ),
            'rewrite' => array( 'slug' => 'genre' ),
            'hierarchical' => false
        )
    );
}

function add_country_tax(){
    register_taxonomy(
        'country',
        'films',
        array(
            'label' => __( 'Country' ),
            'rewrite' => array( 'slug' => 'country' ),
            'hierarchical' => false
        )
    );
}

function add_year_tax(){
    register_taxonomy(
        'year',
        'films',
        array(
            'label' => __( 'Year' ),
            'rewrite' => array( 'slug' => 'year' ),
            'hierarchical' => false 
        )
    );
}

function add_actors_tax(){
    register_taxonomy(
        'actors',
        'films',
        array(
            'label' => __( 'Actors' ),
            'rewrite' => array( 'slug' => 'actors' ),
            'hierarchical' => false
        )
    );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
add_action( 'init', 'films_init' );
add_action( 'init', 'add_genre_tax' );
add_action( 'init', 'add_country_tax' );
add_action( 'init', 'add_year_tax' );
add_action( 'init', 'add_actors_tax' );
?>