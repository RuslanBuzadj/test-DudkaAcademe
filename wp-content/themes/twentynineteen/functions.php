<?php

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
// add scripts and styles
function test_scripts() {	
	wp_enqueue_style( 'main-style',  get_template_directory_uri() . '/dist/style.css');
	
	wp_enqueue_script( 'insex', get_template_directory_uri() . '/dist/index.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'test_scripts' );
