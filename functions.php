<?php

/*********************
LANGUAGE
*********************/


/*********************
SCRIPTS & ENQUEUEING
*********************/

// loading LESS CSS (you'll need this one for the theme to work!)

add_action ('wp_enqueue_scripts','sitestyles');

function sitestyles () { 
	wp_register_style( 'site-less', get_stylesheet_directory_uri() . '/library/less/style.less', array(), '', 'all' );
	
	wp_enqueue_style( 'site-less' );
}

add_action ('wp_enqueue_scripts','sitescripts');

// loading Flexslider

function sitescripts () { 
	wp_register_script( 'flexslider', get_stylesheet_directory_uri() . '/library/js/jquery.flexslider.js', array('jquery'), '', 'all' );
	wp_register_script( 'site', get_stylesheet_directory_uri() . '/library/js/scripts.js', array('jquery', 'flexslider'), '', 'all' );
	
	
	wp_enqueue_script( 'site' );
	

}

/************************
REGISTERING NEW ELEMENTS
************************/

//sidebars

add_action ('widgets_init','sitesidebars');

function sitesidebars () {
		
	register_sidebar (array(
		'name' => 'Main Sidebar',
		'id' => 'main-sidebar',
		'description' => "This is your main sidebar.",
		'before_widget' => '<div class="widget %2$s" id="%1$s">',
		'after_widget' => '</div></div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3><div class="widget-content">'
		));
		
		register_sidebar (array(
		'name' => 'Sidebar Footer',
		'id' => 'sidebar-footer',
		'description' => "This is the footer sidebar. It will show up at the bottom of the page.",
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
		));
}



//menus

add_action ('init','sitemenus');

function sitemenus () {
	
	register_nav_menu( 'header', 'Header Menu' );
	
	register_nav_menu( 'footer', 'Footer Menu' );
}

// taxonomy

// featured images sizes

add_theme_support( 'post-thumbnails' ); 

/* add_image_size( 'full-width', 750, 350, true ); */



// custom post types

/*
add_action( 'init', 'create_post_type' );
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
*/




/********************
OTHER
********************/

// removes 10px off bug in Caption images
add_filter('img_caption_shortcode', 'my_img_caption_shortcode_filter',10,3);
 
function my_img_caption_shortcode_filter($val, $attr, $content = null)
{
    extract(shortcode_atts(array(
        'id'    => '',
        'align' => 'aligncenter',
        'width' => '',
        'caption' => ''
    ), $attr));
     
    if ( 1 > (int) $width || empty($caption) )
        return $val;
 
    $capid = '';
    if ( $id ) {
        $id = esc_attr($id);
        $capid = 'id="figcaption_'. $id . '" ';
        $id = 'id="' . $id . '" aria-labelledby="figcaption_' . $id . '" ';
    }
 
    return '<figure ' . $id . 'class="wp-caption ' . esc_attr($align) . '" style="width: '
    . (int) $width . 'px">' . do_shortcode( $content ) . '<figcaption ' . $capid
    . 'class="wp-caption-text">' . $caption . '</figcaption></figure>';
}