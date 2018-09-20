<?php
#add_filter('excerpt_more', 'new_excerpt_more');
#function new_excerpt_more($more) {
#    global $post;
#    return '<a href="'. get_permalink($post->ID) . '">Читать дальше...</a>';
#};

add_theme_support('post-thumbnails');

/* функции подключения файлов */

#function style_script_load() {
#	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js');
#	wp_enqueue_style('bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css');
#	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
#};
	
#add_action( 'wp_enqueue_scripts', 'style_script_load' );

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
// удаление category из url
//add_filter('category_link', create_function('$a', 'return str_replace("category/", "", $a);'), 9999);

?>