<!-- ======= Services Section ======= -->
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
<!-- ======= End of Services Section ======= -->