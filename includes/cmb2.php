<?php
add_action('cmb2_admin_init', 'cmb2_fields');

/**
 * Load all the CMB2 Fields
 */
function cmb2_fields()
{
    /** CMB2 Fields for Custom Post Type: Experiencia Laboral */
    require_once 'cmb2-for-experiencia-laboral.php';
    /** CMB2 Fields for Custom Post Type: Educacion */
    require_once 'cmb2-for-educacion.php';
    /** CMB2 Fields for Custom Post Type: Certificaciones */
    require_once 'cmb2-for-certificaciones.php';
}

add_filter('manage_certificaciones_posts_columns', 'cmb2_columns_for_certificaciones');

/**
 * Make a CMB2 Columns for Custom Post Type: Certificaciones
 */
function cmb2_columns_for_certificaciones($columns)
{
    $columns['nombre'] = __('Nombre de la Certificacion', 'wp');
    $columns['insititucion'] = __('Nombre de la Institucion', 'wp');
    $columns['descripcion'] = __('Descripción de la Certificacion', 'wp');
    $columns['tipo'] = __('Tipo de Certificacion', 'wp');
    $columns['archivo'] = __('Archivo de Certificacion', 'wp');
    return $columns;
}

add_action('manage_certificaciones_posts_custom_column', 'cmb2_columns_populate_for_certificaciones', 10, 2);

/**
 * Populate the Colums of Custom Post Type
 */
function cmb2_columns_populate_for_certificaciones($column, $post_id)
{
    // Nombre de la Certificacion
    if ('nombre' === $column) {
        $nombre = get_post_meta(get_the_ID(), 'certificaciones_nombre', true);
        if (isset($nombre)) {
            echo $nombre;
        }
    }
    // Nombre de la Institucion
    if ('insititucion' === $column) {
        $insititucion = get_post_meta(get_the_ID(), 'certificaciones_institucion', true);
        if (isset($insititucion)) {
            echo $insititucion;
        }
    }
    // Descirpcion de la Certificacion
    if ('descripcion' === $column) {
        $descripcion = get_post_meta(get_the_ID(), 'certificaciones_descripcion', true);
        if (isset($descripcion)) {
            echo $descripcion;
        }
    }
    // Tipo de Certificacion
    if ('tipo' === $column) {
        $tipo = get_post_meta(get_the_ID(), 'certificaciones_tipo', true);
        if (isset($tipo)) {
            echo $tipo;
        }
    }
    // Tipo de Certificacion
    if ('archivo' === $column) {
        $archivo = get_post_meta(get_the_ID(), 'certificaciones_archivo', true);
        if (isset($archivo)) {
            echo $archivo;
        }
    }
}

add_filter('wp_insert_post_data', 'modify_post_title');

/**
 * Rename a Post Title with CMB2 Custom Fileds Values
 */
function modify_post_title($data)
{
    if ($data['post_type'] == 'certificaciones' && isset($_POST['certificaciones_nombre'])) { // If the actual field name of the rating date is different, you'll have to update this.
        $nombre = get_post_meta(get_the_ID(), 'certificaciones_nombre', true);
        $insititucion = get_post_meta(get_the_ID(), 'certificaciones_institucion', true);
        $title = 'Certificacion de ' . $nombre . ' de ' . $insititucion;
        $data['post_title'] = $title; //Updates the post title to your new title.
    }
    return $data; // Returns the modified data.
}
