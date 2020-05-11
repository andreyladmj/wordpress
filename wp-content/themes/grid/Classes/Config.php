<?php

namespace GL\Classes;

use GL\Factories\WidgetFactory;

Class Config {
	
	public static $widgets = array(
		'blackquote' => 'Blackquote',
		'comments' => 'Comments',
		'standart_post_content' => 'Standart Post Content',
        'text' => 'Text',
	);
	
	public static $widget_components = array(
		'block' => 'Block',
		'gallery' => 'gallery',
		'carousel' => 'Carousel',
		'background_image' => 'Background Image',
		'paralax' => 'Paralax',
	);

	public static $posts = array(
        'latest_posts' => 'Latest posts',
        'wp_query' => 'Specified Posts',
    );
	
	public static $post_components = array(
		'post_author' => 'Post Author',
		'post_content' => 'Post Content',
		'post_date' => 'Post Date',
		'post_permalink' => 'Post Permalink',
		'post_tags' => 'Post Tags',
		'post_thumbnail' => 'Post Thumbnail',
		'post_time' => 'Post Time',
		'post_title' => 'Post Title',
		'post_pagination' => 'Post Pagination',
		'post_iteration' => 'Post Iteration',
		'sidebar' => 'Sidebar',
	);
	
	public static $excluded_post_types = array(
		'attachment',
		'revision',
		'nav_menu_item',
		'custom_css',
		'customize_changeset',
		'grid', // it necessarily for this post type
	);
	
	public static $fonts = array(
		'sans-serif' => 'Open Sans',
		'Arial' => 'Arial',
		'Conv_MontserratAlternates-Black' => 'Montserrat Alternates',
		'Conv_MontserratAlternates-Bold' => 'Montserrat Alternates Bold',
		'Conv_MontserratAlternates-Light' => 'Montserrat Alternates Light',
		'Conv_MontserratAlternates-Medium' => 'Montserrat Alternates Medium',
		'Conv_Montserrat-Bold' => 'Montserrat Bold',
		'Conv_Montserrat-Medium' => 'Montserrat Medium',
		'Conv_Montserrat-Regular' => 'Montserrat Regular',
		'Conv_Roboto-Bold' => 'Roboto Bold',
		'Conv_Roboto-Light' => 'Roboto Light',
		'Conv_Roboto-Regular' => 'Roboto Regular',
	);
	
	public static $themes = array(
		'light' => array(
			'grid_text_color' => '#000000',
		),
		'wood' => array(
			'grid_text_color' => '#d3d3d3',
		),
		'dark' => array(
			'grid_text_color' => '#d3d3d3',
			'elements' => array(
				'h1' => array(
					'size' => '26px'
				)
			),
		),
	);
	
	public static $elements = array(
		'h1' => 'Title',
		'h2' => 'Widget Title',
		'h3' => 'Head',
		'a' => 'Link',
		'p' => 'Text'
	);
	
	//add fonts from google docs
	
	public static function get($name) {
		return WidgetFactory::getObject($name);
	}
	
	public static function getWPWidgets() {
		global $wp_widget_factory;
		$widgets = array();
		
		foreach($wp_widget_factory->widgets as $name => $widget) {
			$widgets[$name] = $widget->name;
		}
		
		return $widgets;
	}
}