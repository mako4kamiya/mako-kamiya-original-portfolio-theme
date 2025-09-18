<?php
if (!function_exists('mkopt_enqueue_styles')) :
    function mkopt_enqueue_styles() {
        wp_enqueue_style(
            'mkopt-custom',
            get_theme_file_uri('assets/css/custom.css')
        );
    }
endif;
add_action('enqueue_block_assets', 'mkopt_enqueue_styles');