<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
		
		function wpbootstrap_scripts_with_jquery()
		{
		    // Register the script like this for a theme:
		    wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
		    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/js/control.js' );
		    wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/d38f7a7726.js' );
		}
		
		add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );


	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	   
	   /*wp_deregister_script('bootstrap');
	   wp_register_script('bootstrap', ("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"), false);
	   wp_enqueue_script('bootstrap');
	   
	   //wp_deregister_script('control');
	   wp_register_script('control', ("http://kapcsoda.hu/wp-content/themes/kapcsoda/js/control.js"), false);
	   wp_enqueue_script('control');
	   
	   wp_register_script( 'custom-script', get_template_directory_uri() . '/js/control.js', array( 'jquery' ) );
       wp_enqueue_script( 'samplejs', get_template_directory_uri() . '/js/jquery.min.js', array( '' ) );
       wp_enqueue_script( 'samplejs', get_template_directory_uri() . '/js/clean-blog.min.js', array( '' ) );
       // For either a plugin or a theme, you can then enqueue the script:
       wp_enqueue_script( 'custom-script' );*/
       
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    
    // Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');
    
    register_nav_menus( array(
    	'main_nav' => 'Main Navigation Menu'
	) );

?>