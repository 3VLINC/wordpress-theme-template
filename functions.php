<?php

/*********************
LANGUAGE
*********************/


/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading LESS CSS

add_action ('wp_enqueue_scripts','sitestyles');

function sitestyles () { 
	wp_register_style( 'site-less', get_stylesheet_directory_uri() . '/library/less/style.less', array(), '', 'all' );
	
	wp_enqueue_style( 'site-less' );
}

add_action ('wp_enqueue_scripts','sitescripts');

function sitescripts () { 
	wp_register_script( 'site', get_stylesheet_directory_uri() . '/library/js/scripts.js', array('jquery'), '', 'all' );
	
	wp_localize_script(
		'site',
		'site_vars', 
		array(
			'home' => site_url('/')
		)
	);
	
	wp_enqueue_script( 'site' );
	

}

/************************
REGISTERING NEW ELEMENTS
************************/

//sidebars

add_action ('widgets_init','sitesidebars');

function sitesidebars () {
	register_sidebar (array(
		'name' => 'Blog Sidebar',
		'id' => 'blog-sidebar',
		'description' => "This is the blog sidebar. It will show your widgets on the left sidebar in all blog pages, and nowhere else.",
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
		));
}


//menus

add_action ('init','sitemenus');

function sitemenus () {
	
	register_nav_menu( 'header', 'Main Menu' );
	
	register_nav_menu( 'footer', 'Footer Menu' );
}

// taxonomy

// add new featured images sizes

add_theme_support( 'post-thumbnails' ); 

//add_image_size( 'full-width', 640, 250, true );


// custom post types

//add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'custom-name',
		array(
			'labels' => array(
				'name' => 'Name' ,
				'singular_name' => 'SingularName' ,
				'add_new' => 'Add New' ,
		        'add_new_item' => 'Add New Name' ,
		        'edit_item' => 'Edit Name' ,
		        'new_item' => 'New Name' ,
		        'view_item' => 'View Name' ,
		        'search_items' => 'Search Names' ,
		        'not_found' => 'No Names Found' ,
		        'not_found_in_trash' => 'There Are No Names in the Trash' 
			),
			'description' => 'Custom post type description.',
			'public' => true,
			'supports' => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes', ),		
		)
	);

}




/********************
OTHER
********************/

// remove extra 10px from wp-caption

add_shortcode('wp_caption', 'fixed_img_caption_shortcode');
add_shortcode('caption', 'fixed_img_caption_shortcode');
function fixed_img_caption_shortcode($attr, $content = null) {
 if ( ! isset( $attr['caption'] ) ) {
 if ( preg_match( '#((?:<a [^>]+>\s*)?<img [^>]+>(?:\s*</a>)?)(.*)#is', $content, $matches ) ) {
 $content = $matches[1];
 $attr['caption'] = trim( $matches[2] );
 }
 }
 $output = apply_filters('img_caption_shortcode', '', $attr, $content);
 if ( $output != '' )
 return $output;
 extract(shortcode_atts(array(
 'id' => '',
 'align' => 'alignnone',
 'width' => '',
 'caption' => ''
 ), $attr));
 if ( 1 > (int) $width || empty($caption) )
 return $content;
 if ( $id ) $id = 'id="' . esc_attr($id) . '" ';
 return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '" >' 
 . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}


?>