<?php

/**
 * 
 * CMB2 for Experiencia Laboral
 * 
 * 
 */

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
