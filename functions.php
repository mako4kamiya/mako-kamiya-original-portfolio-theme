<?php
if (!function_exists('mkopt_enqueue_scripts')) :
    function mkopt_enqueue_scripts () {
        wp_enqueue_style (
            'mkopt-custom',
            get_theme_file_uri('assets/css/custom.css')
        );
        // wp_enqueue_script (
        //     'mkopt-custom',
        //     get_theme_file_uri('assets/js/custom.js')
        // );
    }
endif;
// add_action('enqueue_block_assets', 'mkopt_block_assets');
add_action('wp_enqueue_scripts', 'mkopt_enqueue_scripts');

// GSAPの読み込み
function theme_gsap_script(){
    // The core GSAP library
    wp_enqueue_script( 'gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), false, true );
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap-js'), false, true );
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script( 'gsap-js2', get_template_directory_uri() . '/assets/js/app.js', array('gsap-js'), false, true );
}

add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );