<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

function cptui_register_my_cpts() {

	/**
	 * Post Type: Proyectos.
	 */

	$labels = [
		"name" => __( "Proyectos", "custom-post-type-ui" ),
		"singular_name" => __( "Proyecto", "custom-post-type-ui" ),
		"menu_name" => __( "Mis Proyectos", "custom-post-type-ui" ),
		"all_items" => __( "Todos los Proyectos", "custom-post-type-ui" ),
		"add_new" => __( "Añadir nuevo", "custom-post-type-ui" ),
		"add_new_item" => __( "Añadir nuevo Proyecto", "custom-post-type-ui" ),
		"edit_item" => __( "Editar Proyecto", "custom-post-type-ui" ),
		"new_item" => __( "Nuevo Proyecto", "custom-post-type-ui" ),
		"view_item" => __( "Ver Proyecto", "custom-post-type-ui" ),
		"view_items" => __( "Ver Proyectos", "custom-post-type-ui" ),
		"search_items" => __( "Buscar Proyectos", "custom-post-type-ui" ),
		"not_found" => __( "No se ha encontrado Proyectos", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No se han encontrado Proyectos en la papelera", "custom-post-type-ui" ),
		"parent" => __( "Proyecto superior:", "custom-post-type-ui" ),
		"featured_image" => __( "Imagen destacada para Proyecto", "custom-post-type-ui" ),
		"set_featured_image" => __( "Establece una imagen destacada para Proyecto", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Eliminar la imagen destacada de Proyecto", "custom-post-type-ui" ),
		"use_featured_image" => __( "Usar como imagen destacada de Proyecto", "custom-post-type-ui" ),
		"archives" => __( "Archivos de Proyecto", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insertar en Proyecto", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Subir a Proyecto", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filtrar la lista de Proyectos", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Navegación de la lista de Proyectos", "custom-post-type-ui" ),
		"items_list" => __( "Lista de Proyectos", "custom-post-type-ui" ),
		"attributes" => __( "Atributos de Proyectos", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Proyecto", "custom-post-type-ui" ),
		"item_published" => __( "Proyecto publicado", "custom-post-type-ui" ),
		"item_published_privately" => __( "Proyecto publicado como privado.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Proyecto devuelto a borrador.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Proyecto programado", "custom-post-type-ui" ),
		"item_updated" => __( "Proyecto actualizado.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Proyecto superior:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Proyectos", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => true,
		"rewrite" => [ "slug" => "proyectos", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-portfolio",
		"supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
		"taxonomies" => [ "categoria_de_proyecto" ],
		"show_in_graphql" => false,
	];

	register_post_type( "proyectos", $args );

	/**
	 * Post Type: Educación.
	 */

	$labels = [
		"name" => __( "Educación", "custom-post-type-ui" ),
		"singular_name" => __( "Educación", "custom-post-type-ui" ),
		"menu_name" => __( "Mi Educación", "custom-post-type-ui" ),
		"all_items" => __( "Todos los Educación", "custom-post-type-ui" ),
		"add_new" => __( "Añadir nuevo", "custom-post-type-ui" ),
		"add_new_item" => __( "Añadir nuevo Educación", "custom-post-type-ui" ),
		"edit_item" => __( "Editar Educación", "custom-post-type-ui" ),
		"new_item" => __( "Nuevo Educación", "custom-post-type-ui" ),
		"view_item" => __( "Ver Educación", "custom-post-type-ui" ),
		"view_items" => __( "Ver Educación", "custom-post-type-ui" ),
		"search_items" => __( "Buscar Educación", "custom-post-type-ui" ),
		"not_found" => __( "No se ha encontrado Educación", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No se han encontrado Educación en la papelera", "custom-post-type-ui" ),
		"parent" => __( "Educación superior:", "custom-post-type-ui" ),
		"featured_image" => __( "Imagen destacada para Educación", "custom-post-type-ui" ),
		"set_featured_image" => __( "Establece una imagen destacada para Educación", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Eliminar la imagen destacada de Educación", "custom-post-type-ui" ),
		"use_featured_image" => __( "Usar como imagen destacada de Educación", "custom-post-type-ui" ),
		"archives" => __( "Archivos de Educación", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insertar en Educación", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Subir a Educación", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filtrar la lista de Educación", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Navegación de la lista de Educación", "custom-post-type-ui" ),
		"items_list" => __( "Lista de Educación", "custom-post-type-ui" ),
		"attributes" => __( "Atributos de Educación", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Educación", "custom-post-type-ui" ),
		"item_published" => __( "Educación publicado", "custom-post-type-ui" ),
		"item_published_privately" => __( "Educación publicado como privado.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Educación devuelto a borrador.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Educación programado", "custom-post-type-ui" ),
		"item_updated" => __( "Educación actualizado.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Educación superior:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Educación", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => true,
		"rewrite" => [ "slug" => "educacion", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "educacion", $args );

	/**
	 * Post Type: Experiencias Laborales.
	 */

	$labels = [
		"name" => __( "Experiencias Laborales", "custom-post-type-ui" ),
		"singular_name" => __( "Experiencia Laboral", "custom-post-type-ui" ),
		"menu_name" => __( "Mis Experiencias Laborales", "custom-post-type-ui" ),
		"all_items" => __( "Todos los Experiencias Laborales", "custom-post-type-ui" ),
		"add_new" => __( "Añadir nuevo", "custom-post-type-ui" ),
		"add_new_item" => __( "Añadir nuevo Experiencia Laboral", "custom-post-type-ui" ),
		"edit_item" => __( "Editar Experiencia Laboral", "custom-post-type-ui" ),
		"new_item" => __( "Nuevo Experiencia Laboral", "custom-post-type-ui" ),
		"view_item" => __( "Ver Experiencia Laboral", "custom-post-type-ui" ),
		"view_items" => __( "Ver Experiencias Laborales", "custom-post-type-ui" ),
		"search_items" => __( "Buscar Experiencias Laborales", "custom-post-type-ui" ),
		"not_found" => __( "No se ha encontrado Experiencias Laborales", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No se han encontrado Experiencias Laborales en la papelera", "custom-post-type-ui" ),
		"parent" => __( "Experiencia Laboral superior:", "custom-post-type-ui" ),
		"featured_image" => __( "Imagen destacada para Experiencia Laboral", "custom-post-type-ui" ),
		"set_featured_image" => __( "Establece una imagen destacada para Experiencia Laboral", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Eliminar la imagen destacada de Experiencia Laboral", "custom-post-type-ui" ),
		"use_featured_image" => __( "Usar como imagen destacada de Experiencia Laboral", "custom-post-type-ui" ),
		"archives" => __( "Archivos de Experiencia Laboral", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insertar en Experiencia Laboral", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Subir a Experiencia Laboral", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filtrar la lista de Experiencias Laborales", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Navegación de la lista de Experiencias Laborales", "custom-post-type-ui" ),
		"items_list" => __( "Lista de Experiencias Laborales", "custom-post-type-ui" ),
		"attributes" => __( "Atributos de Experiencias Laborales", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Experiencia Laboral", "custom-post-type-ui" ),
		"item_published" => __( "Experiencia Laboral publicado", "custom-post-type-ui" ),
		"item_published_privately" => __( "Experiencia Laboral publicado como privado.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Experiencia Laboral devuelto a borrador.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Experiencia Laboral programado", "custom-post-type-ui" ),
		"item_updated" => __( "Experiencia Laboral actualizado.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Experiencia Laboral superior:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Experiencias Laborales", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => true,
		"rewrite" => [ "slug" => "experiencia_laboral", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-linkedin",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "experiencia_laboral", $args );

	/**
	 * Post Type: Certificaciones.
	 */

	$labels = [
		"name" => __( "Certificaciones", "custom-post-type-ui" ),
		"singular_name" => __( "Certificacion", "custom-post-type-ui" ),
		"menu_name" => __( "Mis Certificaciones", "custom-post-type-ui" ),
		"all_items" => __( "Todos los Certificaciones", "custom-post-type-ui" ),
		"add_new" => __( "Añadir nuevo", "custom-post-type-ui" ),
		"add_new_item" => __( "Añadir nuevo Certificacion", "custom-post-type-ui" ),
		"edit_item" => __( "Editar Certificacion", "custom-post-type-ui" ),
		"new_item" => __( "Nuevo Certificacion", "custom-post-type-ui" ),
		"view_item" => __( "Ver Certificacion", "custom-post-type-ui" ),
		"view_items" => __( "Ver Certificaciones", "custom-post-type-ui" ),
		"search_items" => __( "Buscar Certificaciones", "custom-post-type-ui" ),
		"not_found" => __( "No se ha encontrado Certificaciones", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No se han encontrado Certificaciones en la papelera", "custom-post-type-ui" ),
		"parent" => __( "Certificacion superior:", "custom-post-type-ui" ),
		"featured_image" => __( "Imagen destacada para Certificacion", "custom-post-type-ui" ),
		"set_featured_image" => __( "Establece una imagen destacada para Certificacion", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Eliminar la imagen destacada de Certificacion", "custom-post-type-ui" ),
		"use_featured_image" => __( "Usar como imagen destacada de Certificacion", "custom-post-type-ui" ),
		"archives" => __( "Archivos de Certificacion", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insertar en Certificacion", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Subir a Certificacion", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filtrar la lista de Certificaciones", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Navegación de la lista de Certificaciones", "custom-post-type-ui" ),
		"items_list" => __( "Lista de Certificaciones", "custom-post-type-ui" ),
		"attributes" => __( "Atributos de Certificaciones", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Certificacion", "custom-post-type-ui" ),
		"item_published" => __( "Certificacion publicado", "custom-post-type-ui" ),
		"item_published_privately" => __( "Certificacion publicado como privado.", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Certificacion devuelto a borrador.", "custom-post-type-ui" ),
		"item_scheduled" => __( "Certificacion programado", "custom-post-type-ui" ),
		"item_updated" => __( "Certificacion actualizado.", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Certificacion superior:", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Certificaciones", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => false,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => true,
		"can_export" => true,
		"rewrite" => [ "slug" => "certificaciones", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-awards",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "certificaciones", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
