<?php
/** Get the Global Options Settings */
$options = get_option('storefront_main_options');
?>
<!-- ======= Certificactes Section ======= -->
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Certificados</h2>
            </div>
        </div>
        <div class="row">
            <p><?php _e('Estos son algunos de mis mas recientes certificados.'); ?></p>
            <?php
                /**
                * Setup query to show the ‘experiencia_laboral’ post type.
                * Output the post meta values.
                */
                $args = array(  
                    'post_type' => 'certificados',
                    'post_status' => 'publish',
                    'posts_per_page' => '6',
                    'orderby' => 'date',
                    'order'   => 'DESC',
                    
                );
                $loop = new WP_Query( $args ); 
                    
                foreach ($loop->posts as $key => $data) {
                    # code...
                    $nombre_certificaciones = get_post_meta( $data->ID, 'certificado_nombre', true );
                    $nombre_institucion = get_post_meta( $data->ID, 'certificado_institucion', true );
                    $tipo_certificado = get_post_meta( $data->ID, 'certificado_tipo', true );
                    $descripcion_certificado = get_post_meta( $data->ID, 'certificado_descripcion', true);
                    $archivo_certificado = get_post_meta( $data->ID, 'certificado_archivo', true);
                ?>
            <div class="col-lg-4 mt-4 mb-4 scroll">
                <div class="card text-white bg-transparent border" style="width:100%">
                    <div class="card-body">
                        <h5 class="card-title text-white" style="color: #25ff00 !important;"><i class="bi bi-award"></i>
                            <?php _e($nombre_certificaciones);?></h5>
                        <p class="text-left"><?php _e($nombre_institucion . ' - ' . $tipo_certificado);?></p>
                        <?php if(isset($descripcion_certificado)): ?>
                        <p class="card-text"><?php _e($descripcion_certificado);?></p>
                        <?php endif; ?>
                        <div class="d-grid gap-2">
                            <a class="button btn" type="button" href="<?php echo $archivo_certificado; ?>"> <i
                                    class="bi bi-download"></i> Descargar</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
                }
                ?>
        </div>
        <div class="col">
            <div class="d-grid gap-2">
                <a class="button btn" type="button" href="<?php echo home_url( '/certificados' ); ?>"> <i class="bi bi-folder-plus"></i> Ver mas...</a>
            </div>
        </div>
    </div>
</section>
<!-- ======= End of Certificates Section ======= -->