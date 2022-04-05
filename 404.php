<?php
get_header();

$text_404 = '
    d8888   .d8888b.      d8888
   d8P888  d88P  Y88b    d8P888
  d8P 888  888    888   d8P 888
 d8P  888  888    888  d8P  888
d88   888  888    888 d88   888
8888888888 888    888 8888888888
      888  Y88b  d88P       888
      888   "Y8888P"        888
                                ';

?>
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <pre style='color:#25ff00 !important;'>
                    <?php echo $text_404; ?>
                </pre>
                <h4>Oops! No encontramos la pagina que buscas.</h4>
                <a class="button" href="<?php echo home_url(); ?>">Regresar</a>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();