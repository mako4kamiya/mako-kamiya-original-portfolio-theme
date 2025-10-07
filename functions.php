<?php
if (!function_exists('mkopt_block_assets')) :
    function mkopt_block_assets () {
        wp_enqueue_style (
            'mkopt-custom',
            get_theme_file_uri('assets/css/custom.css')
        );
        wp_enqueue_script (
            'mkopt-custom',
            get_theme_file_uri('assets/js/custom.js')
        );
    }
endif;
add_action('enqueue_block_assets', 'mkopt_block_assets');

