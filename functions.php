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

        }

    }
    add_action('after_setup_theme', 'setup');
