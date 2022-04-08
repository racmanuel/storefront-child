<?php
/** Get the Global Options Settings */
$options = get_option('storefront_main_options');
?>
<!-- ======= Skills Section ======= -->
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
<!-- ======= End of Skills Section ======= -->