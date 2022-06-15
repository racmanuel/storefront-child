<?php
/** Get the Global Options Settings */
$options = get_option('storefront_main_options');
?>
<!-- ======= Contact Section ======= -->
<section>
    <div class="container">
        <div class="row">
            <div class="col mt-5 scroll">
                <h2>Redes Sociales</h2>
                <p>
                    Te invito a qeu visites mis Redes Sociales y te des una vuelta por ellas para que veas mi perfil
                    completo.
                </p>
                <div class="d-grid gap-2 mx-auto">
                    <a href="<?php echo $options['storefront_options_url_cv']; ?>" class="button"><i
                            class="bi bi-file-earmark-arrow-down-fill"></i> Curriculum Vitae</a>
                    <a href="<?php echo $options['storefront_options_url_linkedin']; ?>" class="button"><i class="bi bi-linkedin"></i> Linkedin</a>
                    <a href="<?php echo $options['storefront_options_url_github']; ?>" class="button"><i class="bi bi-github"></i> Github</a>
                    <a href="<?php echo $options['storefront_options_url_whatsapp']; ?>" class="button"><i class="bi bi-whatsapp"></i> WhatsApp</a>
                </div>
            </div>
            <div class="col mt-5 scroll">
                <h2>¿Quieres Contactarme?</h2>
                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
            </div>
        </div>
    </div>
</section>
<!-- ======= End of Contact Section ======= -->