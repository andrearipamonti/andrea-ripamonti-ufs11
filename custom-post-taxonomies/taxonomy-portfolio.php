<?php

	function register_portfolio_type_taxonomy() {
		register_taxonomy( 'portfolio-type',
			'portfolio-type', array(
				'label'        => __( 'Tipo elemento del portfolio', 'ufs11' ),
				'hierarchical'      => true,
				'public'            => true,
				'show_in_nav_menus' => true,
				'show_ui'           => true,
				'show_admin_column' => true,
				'query_var'         => true,
				'rewrite'           => true,
				'capabilities'      => array(
					'manage_terms'  => 'edit_posts',
					'edit_terms'    => 'edit_posts',
					'delete_terms'  => 'edit_posts',
					'assign_terms'  => 'edit_posts',
				),
				'labels'            => array(
					'name'                       => __( 'Tipo elemento del portfolio', 'ufs11' ),
					'singular_name'              => _x( 'Tipo elemento del portfolio', 'taxonomy general name', 'ufs11' ),
					'search_items'               => __( 'Cerca Tipo elemento del portfolio', 'ufs11' ),
					'popular_items'              => __( 'Tipo elemento del portfolio popolari', 'ufs11' ),
					'all_items'                  => __( 'Tutte le tipologie del prodotto', 'ufs11' ),
					'parent_item'                => __( 'Tipo elemento del portfolio superiore', 'ufs11' ),
					'parent_item_colon'          => __( 'Tipo elemento del portfolio superiore:', 'ufs11' ),
					'edit_item'                  => __( 'Modifica Tipo elemento del portfolio', 'ufs11' ),
					'update_item'                => __( 'Aggiorna Tipo elemento del portfolio', 'ufs11' ),
					'view_item'                  => __( 'Guarda Tipo elemento del portfolio', 'ufs11' ),
					'add_new_item'               => __( 'Aggiungi nuovo Tipo elemento del portfolio', 'ufs11' ),
					'new_item_name'              => __( 'Nuovo Tipo elemento del portfolio', 'ufs11' ),
					'separate_items_with_commas' => __( 'Sepeara tipologie del prodotto con la virgola', 'ufs11' ),
					'add_or_remove_items'        => __( 'Aggiungi o rimuovi tipologie del prodotto', 'ufs11' ),
					'choose_from_most_used'      => __( 'Scegli tra le tipologie del prodotto più usate', 'ufs11' ),
					'not_found'                  => __( 'Nessua Tipo elemento del portfolio trovata.', 'ufs11' ),
					'no_terms'                   => __( 'Nessua Tipo elemento del portfolio', 'ufs11' ),
					'menu_name'                  => __( 'Tipo elemento del portfolio', 'ufs11' ),
					'items_list_navigation'      => __( 'Tipo elemento del portfolio lista di navigazione', 'ufs11' ),
					'items_list'                 => __( 'Tipo elemento del portfolio lista', 'ufs11' ),
					'most_used'                  => _x( 'Più usate', 'portfolio-type', 'ufs11' ),
					'back_to_items'              => __( '&larr; Ritorna alla Tipo elemento del portfolio', 'ufs11' ),
				),
				'show_in_rest'      => true,
				'rest_base'         => 'portfolio-type',
				'rest_controller_class' => 'WP_REST_Terms_Controller',
			)
		);
	}
	add_action( 'init', 'register_portfolio_type_taxonomy', 0 );


	/**
	 * Sets the post updated messages for the `portfolio_type` taxonomy.
	 *
	 * @param  array $messages Post updated messages.
	 * @return array Messages for the `portfolio_type` taxonomy.
	 */
	function portfolio_type_messages( $messages ) {

		$messages['portfolio_type'] = array(
			0 => '', // Unused. Messages start at index 1.
			1 => __( 'Tipo elemento del portfolio aggiunto.', 'ufs11' ),
			2 => __( 'Tipo elemento del portfolio eliminato.', 'ufs11' ),
			3 => __( 'Tipo elemento del portfolio aggiornato.', 'ufs11' ),
			4 => __( 'Tipo elemento del portfolio non aggiunto.', 'ufs11' ),
			5 => __( 'Tipo elemento del portfolio non aggiornato.', 'ufs11' ),
			6 => __( 'Tipo elemento del portfolio eliminato.', 'ufs11' ),
		);

		return $messages;
	}
	add_filter( 'term_updated_messages', 'portfolio_type_messages' );
