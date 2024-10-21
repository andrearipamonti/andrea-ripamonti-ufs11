<?php

	/**
	 * Registers the `portfolio` post type.
	 */
	function portfolio_init() {
		register_post_type('portfolio', array(
			'labels'                => array(
				'name'                  => __( 'Portfolio', 'ufs11' ),
				'singular_name'         => __( 'Portfolio', 'ufs11' ),
				'all_items'             => __( 'Tutte le Portfolio', 'ufs11' ),
				'archives'              => __( 'Portfolio Archivi', 'ufs11' ),
				'attributes'            => __( 'Portfolio Attributi', 'ufs11' ),
				'insert_into_item'      => __( 'Inserisci nei Portfolio', 'ufs11' ),
				'uploaded_to_this_item' => __( 'Carica in questo Portfolio', 'ufs11' ),
				'featured_image'        => _x( 'Immagine di evidenza', 'Portfolio', 'ufs11' ),
				'set_featured_image'    => _x( 'Imposta immagine di evidenza', 'Portfolio', 'ufs11' ),
				'remove_featured_image' => _x( 'Rimuovi immagine di evidenza', 'Portfolio', 'ufs11' ),
				'use_featured_image'    => _x( 'Usa come immagine di evidenza', 'Portfolio', 'ufs11' ),
				'filter_items_list'     => __( 'Filtra la lista dei Portfolio', 'ufs11' ),
				'items_list_navigation' => __( 'Portfolio lista di navigazione', 'ufs11' ),
				'items_list'            => __( 'Portfolio lista', 'ufs11' ),
				'new_item'              => __( 'Nuovo Portfolio', 'ufs11' ),
				'add_new'               => __( 'Aggiungi nuovo', 'ufs11' ),
				'add_new_item'          => __( 'Aggiungi nuovo Portfolio', 'ufs11' ),
				'edit_item'             => __( 'Modifica Portfolio', 'ufs11' ),
				'view_item'             => __( 'Guarda Portfolio', 'ufs11' ),
				'view_items'            => __( 'Guarda Portfolio', 'ufs11' ),
				'search_items'          => __( 'Cerca Portfolio', 'ufs11' ),
				'not_found'             => __( 'Nessuna Portfolio trovata', 'ufs11' ),
				'not_found_in_trash'    => __( 'Nessuna Portfolio trovata nel cestino', 'ufs11' ),
				'parent_item_colon'     => __( 'Portfolio superiori:', 'ufs11' ),
				'menu_name'             => __( 'Portfolio', 'ufs11' ),
			),
			'public'                => true,
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_nav_menus'     => true,
			'supports'              => array(
				'title',
				'editor',
				'thumbnail', 
				'excerpt'
			),
			'has_archive'           => true,
			'rewrite'               => true,
			'query_var'             => true,
			'menu_position'         => null,
			'menu_icon'             => 'dashicons-media-text',
			'show_in_rest'          => true,
			'rest_base'             => 'portfolio_rest',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		) );
	}
	add_action( 'init', 'portfolio_init' );

	// /**
	//  * Sets the post updated messages for the `portfolio` post type.
	//  *
	//  * @param  array $messages Post updated messages.
	//  * @return array Messages for the `portfolio` post type.
	//  */
	// function portfolio_updated_messages( $messages ) {
	// 	global $post;

	// 	$permalink = get_permalink( $post );

	// 	$messages['portfolio'] = array(
	// 		0  => '', // Unused. Messages start at index 1.
	// 		/* translators: %s: post permalink */
	// 		1  => sprintf( __( 'Portfolio aggiornata. <a target="_blank" href="%s">Guarda portfolio</a>', 'ufs11' ), esc_url( $permalink ) ),
	// 		2  => __( 'Campo personalizzato aggiornato.', 'ufs11' ),
	// 		3  => __( 'Campo personalizzato cancellato.', 'ufs11' ),
	// 		4  => __( 'Portfolio aggiornata.', 'ufs11' ),
	// 		/* translators: %s: date and time of the revision */
	// 		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Portfolio ripristinato %s', 'ufs11' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	// 		/* translators: %s: post permalink */
	// 		6  => sprintf( __( 'Portfolio published. <a href="%s">Guarda Portfolio</a>', 'ufs11' ), esc_url( $permalink ) ),
	// 		7  => __( 'Portfolio salvato.', 'ufs11' ),
	// 		/* translators: %s: post permalink */
	// 		8  => sprintf( __( 'Portfolio inviato. <a target="_blank" href="%s">Anteprima Portfolio</a>', 'ufs11' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	// 		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
	// 		9  => sprintf( __( 'Portfolio programmato per: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Anteprima Portfolio</a>', 'ufs11' ),
	// 		date_i18n( __( 'M j, Y @ G:i', 'ufs11' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
	// 		/* translators: %s: post permalink */
	// 		10 => sprintf( __( 'Bozza della Portfolio aggiornata. <a target="_blank" href="%s">Anteprima Portfolio</a>', 'ufs11' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	// 	);

	// 	return $messages;
	// }
	// add_filter( 'post_updated_messages', 'portfolio_updated_messages' );
