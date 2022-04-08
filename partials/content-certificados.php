<?php
/**
 * Template used to display post content on single pages.
 *
 * @package storefront
 */

$nombre_certificaciones = get_post_meta( get_the_ID(  ), 'certificado_nombre', true );
$nombre_institucion = get_post_meta( get_the_ID(  ), 'certificado_institucion', true );
$tipo_certificado = get_post_meta( get_the_ID(  ), 'certificado_tipo', true );
$descripcion_certificado = get_post_meta( get_the_ID(  ), 'certificado_descripcion', true);
$archivo_certificado = get_post_meta( get_the_ID(  ), 'certificado_archivo', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="col mt-4 mb-4 scroll">
		<div class="card text-white bg-transparent border" style="width:100%">
			<div class="card-body">
				<h1 class="card-title text-white" style="color: #25ff00 !important;"><i class="bi bi-award"></i>
					<?php _e($nombre_certificaciones);?></h1>
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
</article><!-- #post-## -->

<div>
</div>