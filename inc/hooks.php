<?php
/**
 * Custom hooks.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! function_exists( 'understrap_site_info' ) ) {
	/**
	 * Add site info hook to WP hook library.
	 */
	function understrap_site_info() {
		do_action( 'understrap_site_info' );
	}
}

if ( ! function_exists( 'understrap_add_site_info' ) ) {
	add_action( 'understrap_site_info', 'understrap_add_site_info' );

	/**
	 * Add site info content.
	 */
	function understrap_add_site_info() {
		$the_theme = wp_get_theme();

		$site_info = sprintf(
			'%1$s | %2$s',
			sprintf(
				/* translators:*/
				esc_html__( '&copy;2019 Previser.com.co - %s', 'understrap' ),
				'Todos los derechos reservados'
			),
			sprintf( 
				esc_html__( 'Desarrollado por: %1$s', 'understrap' ), 
				'<a style="color: orange;" href="'.esc_url( __('http://www.colombiaweb.co', 'understrap')).'" target="_blank">ColombiaWeb</a>'
			)
		);

		echo apply_filters( 'understrap_site_info_content', $site_info ); // WPCS: XSS ok.
	}
}
