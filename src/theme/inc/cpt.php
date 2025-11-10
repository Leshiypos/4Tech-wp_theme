<?php
/*
 * Регистрируем постайп для Сервисов
 * */
add_action( 'init', 'fourtech_register_custom_post_type' );
 
function fourtech_register_custom_post_type() {
//Товары
   register_post_type( 'goods', array(
	   'labels'             => array(
		   'name'                  => 'Товары',
		   'singular_name'         => 'Товар',
		   'add_new'               => 'Добавить новый',
	   ),
	   'public'             => true,
	   'publicly_queryable' => true,
	   'show_ui'            => true,
	   'show_in_menu'       => true,
	   'query_var'          => true,
	   'rewrite'            => array( 'slug' => 'services' ),
	   'capability_type'    => 'post',
	   'has_archive'        => true,
	   'hierarchical'       => false,
	   'menu_position'      => 6,
	   'menu_icon'          => 'dashicons-cart',
	   'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt'),
   ) );


  //Register Taxonomy
   register_taxonomy(
	   'type_goods',
	   'goods',
	   array(
		   'label' => 'Тип товара',
		   'rewrite' => array( 'slug' => 'type_goods' ),
		   'hierarchical' => true,
	   )
   );

}