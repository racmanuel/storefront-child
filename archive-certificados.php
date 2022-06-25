<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package storefront
 */

get_header();

$nombre_certificaciones = get_post_meta(get_the_ID(), 'certificado_nombre', true);
$nombre_institucion = get_post_meta(get_the_ID(), 'certificado_institucion', true);
$tipo_certificado = get_post_meta(get_the_ID(), 'certificado_tipo', true);
$descripcion_certificado = get_post_meta(get_the_ID(), 'certificado_descripcion', true);
$archivo_certificado = get_post_meta(get_the_ID(), 'certificado_archivo', true);
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php if (have_posts()): ?>
			<header class="page-header">
				<h1><?php _e('Certificados', 'wp')?></h1>
				<p>Bienvenido a mis Certificados</p>
			</header><!-- .page-header -->
			<div class="row">
		<?php
// Start the Loop.
while (have_posts()):
    // You can list your posts here
    the_post();
    ?>
		<div class="col-xl-4 col-lg-4 col-md-3 col-sm-1 pt-5">
			<div class="card text-white bg-transparent border" style="width:100%">
				<div class="card-body">
					<h3 class="card-title text-white" style="color: #25ff00 !important;"><i class="bi bi-award"></i>
						<a href="<?php the_permalink();?>"> 
						<?php _e($nombre_certificaciones);?></a>
					</h3>
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
	endwhile;
	the_posts_pagination();
else:
// No Post Found
endif;
?>
</div>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
do_action('storefront_sidebar');
get_footer();