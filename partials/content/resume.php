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
<!-- ======= End of Resume Section ======= -->