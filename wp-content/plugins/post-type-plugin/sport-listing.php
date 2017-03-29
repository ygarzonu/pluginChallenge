<?php	

//add_action( $hook, $function_to_add, $priority, $accepted_args );
add_action( 'init', 'pluginchallenge_list_post_type' );
/**
* Register a sport post type.
*/
function pluginchallenge_list_post_type() {
	$singular 	= 'Deporte';
	$plural		= 'Deportes';

	$labels = array(
			'name'			=> 	$plural,
			'singular_name'	=>	$singular,
			'add_new'       =>  'Agregar nuevo ' . $singular,
			'add_new_item'  =>  'Agregar nuevo ' . $singular
			);

	$args = array(
		'labels'				=> $labels,
		'public'				=> true,
		'has_archive'			=> true,
		'exclude_from_search'	=> false,
		'show_in_admin_bar'		=> true,
		'show_in_nav_menus'		=> true,
		'menu_position'			=> 6,
		'rewrite'				=> array(
			'slug'				=> 'deportes'
			),
		'menu_icon'				=> 'dashicons-awards',
		'supports'				=> array( 'title', 'editor', 'thumbnail', 'post-formats')
		);

	register_post_type( 'deporte', $args );
	add_post_type_support( 'post', 'post-formats' );
}

function pluginchallenge_register_taxonomy() {
	$singular 	= 'Nivel';
	$plural		= 'Niveles';

	$labels = array(
			'name'							=> 	$plural,
			'singular_name'					=>	$singular,
			'search_items'					=>  'Buscar ' . $plural,
			'all_items'						=> 	'Todos los ' . $plural,
			'edit_item'						=>	'Editar ' . $singular,
			'update_item'					=>	'Actualizar ' . $singular,
			'add_new_item'					=>	'Ágregar nuevo ' . $singular,
			'separate_items_with_commas'	=>	'Separa los ' . $plural . ' con comas',
			'choose_from_most_used'			=>	'Elegir de los más usados ' . $plural,
			'parent_item'					=>	__( 'Parent Category' ),
			'menu_name'						=>	$plural,
			);

	$args = array(
		'labels'			=> $labels,
		'hierarchical'		=> true,
		'show_admin_colum'	=> true,
		'rewrite'			=> array(
			'slug'			=> 'nivel'
			)
		); 

	register_taxonomy( 'nivel', 'deporte', $args );
}

add_action( 'init', 'pluginchallenge_register_taxonomy' );

//add_filter();