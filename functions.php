<?php 
	

//add css vao trang 


add_action( 'wp_enqueue_scripts' , function(){

	// wp_enqueue_script();//js
	wp_enqueue_style( 'uneti-main-css' , get_stylesheet_directory_uri() . '/style.css'  );

	//enqueue js

	wp_enqueue_script('uneti-main-js' , get_stylesheet_directory_uri() . '/asset/js/main.js' );
} );