<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Initiate the metabox
 */
$cmb = new_cmb2_box(array(
    'id' => 'certificados_metabox',
    'title' => __('Certificados', 'cmb2'),
    'object_types' => array('certificados'), // Post type
    'context' => 'normal',
    'priority' => 'high',
    'show_names' => true, // Show field names on the left
    'cmb_styles' => false, // false to disable the CMB stylesheet
    'closed' => false, // Keep the metabox closed by default
));

// Place to add the CMB2 Field Types
$prefix = "certificado_";

$cmb->add_field(array(
    'name' => 'Nombre del Certificado',
    'desc' => 'Inserta el nombre del Certificado.',
    'default' => '',
    'id' => $prefix . 'nombre',
    'type' => 'text',
));

$cmb->add_field(array(
    'name' => 'Nombre de la Institucion',
    'desc' => 'Inserta el nombre de la Institucion.',
    'default' => '',
    'id' => $prefix . 'institucion',
    'type' => 'text',
));

$cmb->add_field(array(
    'name' => 'Descripción del Certificado',
    'desc' => 'Inserta una pequeña descripcion del certificado.',
    'default' => '',
    'id' => $prefix . 'descripcion',
    'type' => 'textarea_small',
));

$cmb->add_field(array(
    'name' => 'Tipo de Certificado',
    'desc' => 'Selecciona una opción de Certificado.',
    'id' => $prefix . 'tipo',
    'type' => 'select',
    'show_option_none' => true,
    'default' => 'custom',
    'options' => array(
        'Presencial' => __('Presencial', 'cmb2'),
        'Online' => __('Online', 'cmb2'),
        'Otro' => __('Otro', 'cmb2'),
    ),
));

$cmb->add_field(array(
    'name' => 'Certificado',
    'desc' => 'Sube tu certificado o ingresa una URL.',
    'id' => $prefix . 'archivo',
    'type' => 'file',
    // Optional:
    'options' => array(
        'url' => false, // Hide the text input for the url
    ),
    'text' => array(
        'add_upload_file_text' => 'Añadir Archivo', // Change upload button text. Default: "Add or Upload File"
    ),
    // query_args are passed to wp.media's library query.
    'query_args' => array(
        'type' => 'application/pdf', // Make library only display PDFs.
        // Or only allow gif, jpg, or png images
        // 'type' => array(
        //     'image/gif',
        //     'image/jpeg',
        //     'image/png',
        // ),
    ),
    'preview_size' => 'large', // Image size to use when previewing in the admin.
));
