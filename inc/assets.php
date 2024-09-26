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
            array('jquery'), 
            '1.0.0', 
            true
        );

        wp_register_script(
            'slick', 
            get_template_directory_uri() . '/assets/vendors/slick-1.8.1/slick/slick.min.js', 
            array(
                'jquery', 
                'main'
            ), 
            '1.0.0', 
            true
        );

        wp_register_script(
            'carousel', 
            get_template_directory_uri() . '/assets/js/carousel.js', 
            array('slick'), 
            '1.0.0', 
            true
        );
        
		wp_register_style(
            'slick', 
            get_template_directory_uri() . '/assets/vendors/slick-1.8.1/slick/slick.css', 
            array(), 
            '1.0.0', 
            'all'
        );

        wp_register_style(
            'carousel', 
            get_template_directory_uri() . '/assets/css/carousel.css', 
            array('slick'), 
            '1.0.0', 
            'all'
        );

    }
    add_action('wp_enqueue_scripts', 'main_assets');