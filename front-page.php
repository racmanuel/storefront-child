<?php
get_header();

$options = get_option('storefront_main_options');
?>
<!-- Boostrap CSS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col d-flex align-items-center scroll">
                <?php if (wp_is_mobile()): ?>
                <div class="text-left">
                    <?php else: ?>
                    <div>
                        <?php endif;?>
                        <h1>¡Hola! Soy Manuel</h1>
                        <span id="typed-cool" style="color: #25ff00 !important;"></span>
                    </div>
                </div>
                <?php
if (!wp_is_mobile()):
?>
                <div class="col scroll">
                    <img src="<?php echo $options['storefront_options_profile']; ?>"
                        class="img-fluid rounded-circle rounded mx-auto d-block" alt="..." width="420px">
                </div>
                <?php
endif;
?>
            </div>
        </div>
</section>

<!-- ======= Resume Section ======= -->
<section id="resume" class="resume mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col scroll">
                <div class="section-title">
                    <h2><?php _e('Acerca de mi', 'wp'); ?></h2>
                    <p><?php echo $options['storefront_options_textarea']; ?></p>
                </diV>
                <?php
                    if (wp_is_mobile()):
                ?>
                <div class="col scroll">
                    <img src="<?php echo $options['storefront_options_profile']; ?>" class="img-fluid mx-auto d-block"
                        alt="..." width="420px">
                </div>
                <?php
                    endif;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mt-5">
                <h2><?php _e('Mi Educación' , 'wp'); ?></h2>
                <?php
                /**
                * Setup query to show the ‘experiencia_laboral’ post type.
                * Output the post meta values.
                */
                $args = array(  
                    'post_type' => 'educacion',
                    'post_status' => 'publish',
                );
                $loop = new WP_Query( $args ); 
                    
                foreach ($loop->posts as $key => $data) {
                    # code...
                    $nombre_escuela = get_post_meta( $data->ID, 'educacion_nombre_escuela', true );
                    $nombre_carrera = get_post_meta( $data->ID, 'educacion_nombre_carrera', true );
                    $fecha_inicio = get_post_meta( $data->ID, 'educacion_fecha_inicio', true );
                    $fecha_fin = get_post_meta( $data->ID, 'educacion_fecha_fin', true );
                    if($fecha_fin == null){
                        $fecha_fin = "Actualidad";
                    }
                    $descripcion_educacion = get_post_meta( $data->ID, 'educacion_descripcion_educacion', true );
                    $tipo_educacion = get_post_meta( $data->ID, 'educacion_tipo_educacion', true );
                    $calificacion = get_post_meta( $data->ID, 'educacion_calificacion', true );
                ?>
                <div class="resume-item scroll">
                    <h4><?php echo $nombre_carrera; ?></h4>
                    <h5><?php echo $fecha_inicio . ' - ' . $fecha_fin;  ?></h5>
                    <p><em><?php echo $nombre_escuela . ' - ' . ' Calificación ' . $calificacion; ?></em></p>
                    <p><?php echo $descripcion_educacion; ?></p>
                </div>
                <?php
                    }
                    wp_reset_postdata(); 
                ?>
            </div>
            <div class="col-lg-6 mt-5">
                <h2><?php _e('Mi Experiencia Laboral' , 'wp'); ?></h2>
                <?php
                /**
                * Setup query to show the ‘experiencia_laboral’ post type.
                * Output the post meta values.
                */
                $args = array(  
                    'post_type' => 'experiencia_laboral',
                    'post_status' => 'publish',
                );
                $loop = new WP_Query( $args ); 
                    
                foreach ($loop->posts as $key => $data) {
                    # code...
                    $nombre_empresa = get_post_meta( $data->ID, 'experiencia_laboral_nombre_empresa', true );
                    $puesto_empresa = get_post_meta( $data->ID, 'experiencia_laboral_puesto_empresa', true );
                    $fecha_inicio = get_post_meta( $data->ID, 'experiencia_laboral_fecha_inicio', true );
                    $fecha_fin = get_post_meta( $data->ID, 'experiencia_laboral_fecha_fin', true );
                    if($fecha_fin == null){
                        $fecha_fin = "Actualidad";
                    }
                    $descripcion_puesto = get_post_meta( $data->ID, 'experiencia_laboral_descripcion_puesto', true );
                    $tipo_puesto = get_post_meta( $data->ID, 'experiencia_laboral_tipo_puesto', true );
                ?>
                <div class="resume-item scroll">
                    <h4><?php echo $nombre_empresa; ?></h4>
                    <h5><?php echo $fecha_inicio . ' - ' . $fecha_fin;  ?></h5>
                    <p><em><?php echo $puesto_empresa. ' - ' . $tipo_puesto; ?></em></p>
                    <p><?php echo $descripcion_puesto; ?></p>
                </div>
                <?php
                    }
                    wp_reset_postdata(); 
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End Resume Section -->

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Servicios</h2>
            </div>
        </div>
        <div class="row">
            <?php
$entries = $options['storefront_options_repeat_group'];
foreach ((array) $entries as $key => $entry) {
    if (isset($entry['title'])) {
        $title = esc_html($entry['title']);
    }
    if (isset($entry['description'])) {
        $desc = wpautop($entry['description']);
    }
    // Do something with the data
    ?>
            <div class="col-lg-6 mt-4 mb-4 scroll">
                <div class="card text-white bg-transparent border" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #25ff00 !important;"><?php _e($title);?></h5>
                        <p class="card-text"><?php _e($desc);?></p>
                    </div>
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>

<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Certificados y Cursos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 mt-4 mb-4 scroll">
                <div class="card text-white bg-transparent border" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #25ff00 !important;"><i class="bi bi-award"></i>
                            <?php _e($title);?></h5>
                        <p class="card-text"><?php _e($desc);?></p>
                        <div class="d-grid gap-2">
                            <button class="button btn" type="button">Button</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col mb-5">
                <h2>Mis Skills</h2>
                <?php
                    $skills = $options['storefront_options_repeat_group_2'];
                    foreach ((array) $skills as $key => $skill) {
                        if (isset($skill['title_skill'])) {
                            $title_skill = esc_html($skill['title_skill']);
                        }
                        if (isset($skill['storefront_options_number'])) {
                            $number = esc_html($skill['storefront_options_number']);
                        }
                        // Do something with the data
                ?>
                <div class="row">
                    <div>
                        <span><?php echo $title_skill; ?></span>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="<?php echo 'width:' . $number . '%'; ?>"
                                aria-valuenow="<?php echo $number; ?>" aria-valuemin="0" aria-valuemax="100">
                                <?php echo $number . '%'; ?></div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <h2>¿Eres reclutador?</h2>
                <p>
                    Te invito a qeu visites mis Redes Sociales y te des una vuelta por ellas para que veas mi perfil
                    completo.
                </p>
                <div class="d-grid gap-2 mx-auto">
                    <a href="<?php echo $options['storefront_options_url']; ?>" class="button"><i
                            class="bi bi-file-earmark-arrow-down-fill"></i> Curriculum Vitae</a>
                    <a class="button"><i class="bi bi-linkedin"></i> Linkedin</a>
                    <a class="button"><i class="bi bi-github"></i> Github</a>
                    <a class="button"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
            <div class="col mt-5">
                <h2>¿Quieres Contactarme?</h2>
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- Boostrap CSS -->
<?php
get_footer();
?>