<?php  

/* 
	Google Fonts

	You can use this to add in your own custom google fonts. The same basic idea can also be used to add in fonts from other services.
*/
function google_fonts() {
	
	// register Google font
	wp_register_style('google-font', 'http://fonts.googleapis.com/css?family=Junge|Open+Sans:400,300');
	// enqueue Google font
	wp_enqueue_style( 'google-font' );

}

// enqueue base scripts and styles
add_action('wp_enqueue_scripts', 'google_fonts');



add_image_size('group2-home', 630, 500,true);

//Changes the excerpt length
function twentyten_excerpt_length( $length ) {
	return 21;
}
add_filter( 'excerpt_length', 'twentyten_excerpt_length' );


/* ========================================
    Add Widget Area
======================================== */
function add_my_sidebar() {
	register_sidebar( array(
		'name'          => 'Main Sidebar',
		'id'            => 'main-sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'add_my_sidebar' );

?>