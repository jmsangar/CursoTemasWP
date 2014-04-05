<?php

	add_theme_support('post_thumbnails');
	add_theme_support('menus');

	register_nav_menus (array('header_menu' => 'es el menu de la cabecera ',
		'footer_menu' => 'es el menu del pie ',
		'sidebar_menu' => 'es el menu del sidebar '
		)
	);

function iniciar_widgets()
{

	register_sidebar(
	 array('id' => 'widget1',
	  		'name' => 'zona Widget 1',
	  		'description' => 'Qué pasa, esto es mi sidebarwidget 1',
	  		'before_widget' => '<div>',
	  		'after_widget' => '</div>',
	  		'before_title' => '<h2 class="rounded">',
	  		'after_title' => '</h2>'
	  		)
		);
	register_sidebar(
	 array('id' => 'widget2',
	  		'name' => 'zona Widget 2',
	  		'description' => 'Esta barra va en el footer',
	  		'before_widget' => '<div>',
	  		'after_widget' => '</div>',
	  		'before_title' => '<h2 class="rounded">',
	  		'after_title' => '</h2>'
	  		)
		);
	
}
add_action( 'widgets_init', 'iniciar_widgets');