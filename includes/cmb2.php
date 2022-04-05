<?php
add_action('cmb2_admin_init', 'cmb2_for_experiencia_laboral');
/**
 * Define the metabox and field configurations.
 */
function cmb2_for_experiencia_laboral()
{

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id' => 'experiencia_laboral_metabox',
        'title' => __('Experiencia Laboral', 'cmb2'),
        'object_types' => array('experiencia_laboral'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed' => false, // Keep the metabox closed by default
    ));

    // Place to add the CMB2 Field Types
    $prefix = "experiencia_laboral_";

    $cmb->add_field(array(
        'name' => 'Nombre de la Empresa',
        'desc' => 'Inserta el nombre de la empresa donde laboraste.',
        'default' => '',
        'id' => $prefix . 'nombre_empresa',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Puesto en la Empresa',
        'desc' => 'Inserta el nombre del puesto que tenias en la empresa donde laboraste.',
        'default' => '',
        'id' => $prefix . 'puesto_empresa',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Fecha de Inicio',
        'id' => $prefix . 'fecha_inicio',
        'type' => 'text_date',
        'date_format' => 'd/m/Y',
    ));

    $cmb->add_field(array(
        'name' => 'Fecha de Fin',
        'id' => $prefix . 'fecha_fin',
        'type' => 'text_date',
        'date_format' => 'd/m/Y',
    ));

    $cmb->add_field(array(
        'name' => 'Descripción del Puesto',
        'desc' => 'Inserta las actividades o descripción del puesto que desempeñaste.',
        'default' => '',
        'id' => $prefix . 'descripcion_puesto',
        'type' => 'textarea_small',
    ));

    $cmb->add_field(array(
        'name' => 'Tipo de Puesto',
        'desc' => 'Selecciona una opción de Puesto.',
        'id' => $prefix . 'tipo_puesto',
        'type' => 'select',
        'show_option_none' => true,
        'default' => 'custom',
        'options' => array(
            'Jornada Completa' => __('Jornada Completa', 'cmb2'),
            'Jornada Parcial' => __('Jornada Parcial', 'cmb2'),
            'Autonomo' => __('Autonomo', 'cmb2'),
            'Profesional Independiente' => __('Profesional Independiente', 'cmb2'),
            'Contrato Temporal' => __('Contrato Temporal', 'cmb2'),
            'Contrato de Practicas' => __('Contrato de Practicas', 'cmb2'),
            'Contrato de Formación' => __('Contrato de Formación', 'cmb2'),
            'Seasonal' => __('Seasonal', 'cmb2'),
        ),
    ));
}

add_action('cmb2_admin_init', 'cmb2_for_educacion');
/**
 * Define the metabox and field configurations.
 */
function cmb2_for_educacion()
{

    /**
     * Initiate the metabox
     */
    $cmb = new_cmb2_box(array(
        'id' => 'educacion_metabox',
        'title' => __('Educación', 'cmb2'),
        'object_types' => array('educacion'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        'cmb_styles' => false, // false to disable the CMB stylesheet
        'closed' => false, // Keep the metabox closed by default
    ));

    // Place to add the CMB2 Field Types
    $prefix = "educacion_";

    $cmb->add_field(array(
        'name' => 'Nombre de la Escuela',
        'desc' => 'Inserta el nombre de la escuela.',
        'default' => '',
        'id' => $prefix . 'nombre_escuela',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Nombre de la Carrera',
        'desc' => 'Inserta el nombre de la carrera.',
        'default' => '',
        'id' => $prefix . 'nombre_carrera',
        'type' => 'text',
    ));

    $cmb->add_field(array(
        'name' => 'Fecha de Inicio',
        'id' => $prefix . 'fecha_inicio',
        'type' => 'text_date',
        'date_format' => 'd/m/Y',
    ));

    $cmb->add_field(array(
        'name' => 'Fecha de Fin',
        'id' => $prefix . 'fecha_fin',
        'type' => 'text_date',
        'date_format' => 'd/m/Y',
    ));

    $cmb->add_field(array(
        'name' => 'Descripción de la Educación',
        'desc' => 'Inserta algo a destacar de tu educacion.',
        'default' => '',
        'id' => $prefix . 'descripcion_educacion',
        'type' => 'textarea_small',
    ));

    $cmb->add_field(array(
        'name' => 'Tipo de Educación',
        'desc' => 'Selecciona una opción de Educación.',
        'id' => $prefix . 'tipo_educacion',
        'type' => 'select',
        'show_option_none' => true,
        'default' => 'custom',
        'options' => array(
            'Universidad' => __('Universidad', 'cmb2'),
            'Preparatoria' => __('Preparatoria', 'cmb2'),
            'Secundaria' => __('Secundaria', 'cmb2'),
            'Curso' => __('Curso', 'cmb2'),
            'BootCamp' => __('BootCamp', 'cmb2'),
            'Academia' => __('Academia', 'cmb2'),
            'Otro' => __('Otro', 'cmb2'),
        ),
    ));

    $cmb->add_field(array(
        'name' => 'Calificaciones',
        'desc' => 'Inserta tu promedio de calificación.',
        'default' => '',
        'id' => $prefix . 'calificacion',
        'type' => 'text',
        'attributes' => array(
            'type' => 'number',
            'pattern' => '\d*',
        ),
    ));
}
