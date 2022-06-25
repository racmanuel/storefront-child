<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}
/**
 * Options of the Theme with CMB2
 * Hook in and register a metabox to handle a theme options page and adds a menu item.
 */
function storefront_register_main_options_metabox()
{

    /**
     * Registers main options page menu item and form.
     */
    $cmb = new_cmb2_box(array(
        'id' => 'storefront_main_options_page',
        'title' => esc_html__('Ajustes del Tema', 'cmb2'),
        'object_types' => array('options-page'),

        /*
         * The following parameters are specific to the options-page box
         * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
         */

        'option_key' => 'storefront_main_options', // The option key and admin menu page slug.
        // 'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
        // 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
        // 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
        // 'capability'      => 'manage_options', // Cap required to view options-page.
        // 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
        // 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
        // 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
        // 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
        // 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
        // 'message_cb'      => 'storefront_options_page_message_callback',
    ));

    /**
     * Options fields ids only need
     * to be unique within this box.
     * Prefix is not needed.
     */
    $prefix = 'storefront_options_';

    $cmb->add_field( array(
        'name'    => 'Imagen Principal',
        'desc'    => 'Upload an image or enter an URL.',
        'id'      => $prefix . 'profile',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'Añadir Imagen' // Change upload button text. Default: "Add or Upload File"
        ),
        // query_args are passed to wp.media's library query.
        'query_args' => array(
            'type' => 'application/pdf', // Make library only display PDFs.
            // Or only allow gif, jpg, or png images
            'type' => array(
                    'image/gif',
                    'image/jpeg',
                    'image/png',
            ),
        ),
        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );


    $cmb->add_field(array(
        'name' => 'Acerca de Mi',
        'desc' => '',
        'type' => 'title',
        'id' => $prefix . 'title',
    ));
    $cmb->add_field(array(
        'name' => 'Texto',
        'desc' => 'Texto principal para la sección de acerca de mi.',
        'default' => '',
        'id' => $prefix . 'textarea',
        'type' => 'textarea',
    ));

    $cmb->add_field(array(
        'name' => '¿Eres un reclutador?',
        'desc' => '',
        'type' => 'title',
        'id' => $prefix . 'title_2',
    ));
    $cmb->add_field( array(
        'name' => __( 'URL de CV', 'cmb2' ),
        'id'   => $prefix . 'url_cv',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ));
    $cmb->add_field( array(
        'name' => __( 'URL de Linkedin', 'cmb2' ),
        'id'   => $prefix . 'url_linkedin',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ));
    $cmb->add_field( array(
        'name' => __( 'URL de GitHub', 'cmb2' ),
        'id'   => $prefix . 'url_github',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ));
    $cmb->add_field( array(
        'name' => __( 'URL de WordPress', 'cmb2' ),
        'id'   => $prefix . 'url_wordpress',
        'type' => 'text_url',
        // 'protocols' => array( 'http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet' ), // Array of allowed protocols
    ));

    $cmb->add_field(array(
        'name' => 'Servicios',
        'desc' => '',
        'type' => 'title',
        'id' => $prefix . 'title_3',
    ));
    $group_field_id = $cmb->add_field( array(
        'id'          => $prefix . 'repeat_group',
        'type'        => 'group',
        'description' => __( 'Servicios ofrecidos en Pagina Web.', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Servicio {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Añadir otro Servicio', 'cmb2' ),
            'remove_button'     => __( 'Eliminar Servicio', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Estas seguro que quieres eliminarlo?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Nombre del Servicio',
        'id'   => 'title',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );
    
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Descripción del Servicio',
        'description' => 'Escribe en pocas palabras el servicio a mostrar.',
        'id'   => 'description',
        'type' => 'textarea_small',
    ) );

    $cmb->add_field(array(
        'name' => 'Skills',
        'desc' => '',
        'type' => 'title',
        'id' => $prefix . 'title_3',
    ));
    $group_field_id = $cmb->add_field( array(
        'id'          => $prefix . 'repeat_group_2',
        'type'        => 'group',
        'description' => __( 'Skills personales.', 'cmb2' ),
        // 'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'Skill {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'        => __( 'Añadir Skill', 'cmb2' ),
            'remove_button'     => __( 'Eliminar Skill', 'cmb2' ),
            'sortable'          => true,
            'closed'         => true, // true to have the groups closed by default
            'remove_confirm' => esc_html__( 'Estas seguro que quieres eliminarlo?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    
    // Id's for group's fields only need to be unique for the group. Prefix is not needed.
    $cmb->add_group_field( $group_field_id, array(
        'name' => 'Nombre de la Skill',
        'id'   => 'title_skill',
        'type' => 'text',
        // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
    ) );

    $cmb->add_group_field( $group_field_id, array(
        'name' => __( 'Porcentaje', 'theme-domain' ),
        'desc' => __( 'Numbers only', 'msft-newscenter' ),
        'id'   => $prefix . 'number',
        'type' => 'text',
        'attributes' => array(
            'type' => 'number',
            'pattern' => '\d*',
        ),
        'sanitization_cb' => 'absint',
        'escape_cb'       => 'absint',
    ) );
    
}
add_action('cmb2_admin_init', 'storefront_register_main_options_metabox');

