<?php

    // commento singola riga
    
    /**
     * 
     * commento 
     * riga
     * multipla
     * 
     */

    
    if ( ! function_exists('setup') ) {

        function setup() {

            // Importo il file php che registra e mette in coda i file CSS e JS
            require get_template_directory() . '/inc/assets.php';

            // Importo i custom post types
            require get_template_directory() . '/custom-post-types/custom-post-type-portfolio.php';

            // Import le custom taxonomies
            require get_template_directory() . '/custom-post-taxonomies/taxonomy-portfolio.php';
        }

    }
    add_action('after_setup_theme', 'setup');

    if( class_exists('acf') ) {
        function register_acf_blocks() {
            register_block_type( __DIR__ . '/acf-blocks/accordion');
            register_block_type( __DIR__ . '/acf-blocks/carousel');
            register_block_type( __DIR__ . '/acf-blocks/modal');
        }
        add_action('init', 'register_acf_blocks');
    }
