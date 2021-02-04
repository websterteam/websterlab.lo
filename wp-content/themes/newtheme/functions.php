<?php

/*Регистрируем меню*/
add_action('after_setup_theme', function(){
	register_nav_menus( array(
		'header_menu' => 'Меню в шапке',
		'footer_menu' => 'Меню в подвале'
	) );
});
/*End*/

/*Добавляем класс пунктам меню li*/
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    $classes[] = 'nav-item';
    return $classes;
}
/*End*/

/*Добавляем класс ссылкам в меню*/
add_filter('nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4);
function filter_nav_menu_link_attributes($atts, $item, $args, $depth){
  $atts['class'] .= 'nav-link';
  return $atts;
}
/*End*/

?>
