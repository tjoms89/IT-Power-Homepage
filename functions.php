<?php 

function load_scripts()
{  
	// register scripts 
	
        wp_register_script( 'custom-script', get_stylesheet_directory_uri() . '/assets/js/bootstrap.js', array( 'jquery' ) );
        wp_enqueue_script( 'custom-script' );
        
        wp_register_script( 'backstretch', get_stylesheet_directory_uri() . '/assets/js/jquery.backstretch.min.js', 'jquery', '1.0', true);
        wp_enqueue_script( 'backstretch' );
        
        wp_register_script( 'fonts', '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js', 'jquery', '1.0', true);
        wp_enqueue_script( 'fonts' );

        wp_register_script( 'modern', get_stylesheet_directory_uri() . '/assets/js/respond.js');
        wp_enqueue_script( 'modern' );
        
        wp_register_script( 'media', get_stylesheet_directory_uri() . '/assets/js/css3-mediaqueries.js');
        wp_enqueue_script( 'media' );
        
        wp_register_script( 'html5', get_stylesheet_directory_uri() . '/assets/js/html5shiv.js');
        wp_enqueue_script( 'html5' );
}

add_action( 'wp_enqueue_scripts', 'load_scripts' );


?>