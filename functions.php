<?php

add_theme_support('post-thumbnails');

/* Header menu */

register_nav_menu('menu', 'Меню в шапке');

function my_theme_add_editor_styles() {
  add_editor_style( 'editor-styles.css' );
}
add_action( 'current_screen', 'my_theme_add_editor_styles' );

add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
	return '
	<nav class="blog-pagination" role="navigation">
		%3$s
	</nav>    
	';
}

?>