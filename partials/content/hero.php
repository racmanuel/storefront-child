<!-- ======= Hero Section ======= -->
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
<!-- ======= End of Hero Section ======= -->