<?php
/**
 * This is a class for registering a listing's meta
 *
 * @package wp-listings-pro
 */

register_meta( 'listing', '_listing_sync_update', array(
		'sanitize_callback' => 'sanitize_listing_sync_update',
		'auth_callback' => 'authorize_listing_sync_update',
		'type' => 'string',
		'description' => __( 'My registered meta key', 'wp-listings-pro' ),
		'single' => true,
		'show_in_rest' => true,
	)
);

/**
 * This function is to authorize Sync updates
 */
function authorize_listing_sync_update() {

}

/**
 * This function is to sanitize listing sync updates
 */
function sanitize_listing_sync_update() {

}
