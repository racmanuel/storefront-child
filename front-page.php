<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

/** Get the Header */
get_header();

/** Hero Section */
get_template_part('partials/content/hero');
/** Resueme Section */
get_template_part('partials/content/resume');
/** Services Section */
get_template_part('partials/content/services');
/** Certificates Section */
get_template_part('partials/content/certificates');
/** Skills Section */
get_template_part('partials/content/skills');
/** Contact Section */
get_template_part('partials/content/contact');

/** Get the Footer */
get_footer();
