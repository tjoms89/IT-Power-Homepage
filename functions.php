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
        
        wp_register_script( 'domtab', get_stylesheet_directory_uri() . '/assets/js/domtab.js');
        wp_enqueue_script( 'domtab' );
        
}
function add_parent_class_nav( $css_class, $page, $depth, $args )
{
    if (!empty($args['has_children']))
        $css_class[] = 'expand';
    return $css_class;
}
add_filter( 'page_css_class', 'add_parent_class_nav', 10, 4 );

add_action( 'wp_enqueue_scripts', 'load_scripts' );


?>