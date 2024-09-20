<?php

    /**
     * 
     * Link utili 
     * https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     * https://developer.wordpress.org/reference/functions/wp_enqueue_script/
     * 
     * 
     */
    function main_assets() {

        wp_enqueue_style( 
            'style-settings', 
            get_template_directory_uri() . '/style.css',
            array(), 
            '1.0.0',
            'all' 
        );

        wp_enqueue_style( 
            'style-elements', 
            get_template_directory_uri() . '/assets/css/elements.css',
            array('style-settings'), 
            '1.0.0',
            'all' 
        );

        wp_enqueue_script( 
            'main', 
            get_template_directory_uri() . '/assets/js/main.js',
            array(), 
            '1.0.0', 
            true
        );

    }
    add_action('wp_enqueue_scripts', 'main_assets');