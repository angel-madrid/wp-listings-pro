<?php
/**
 * Page for listing details
 *
 * @package WP-Listings-Pro
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit;
}

wp_nonce_field( 'wp_listings_metabox_save', 'wp_listings_metabox_nonce' );

global $post;

	echo '<div style="width: 45%; float: left">';

	echo '<h3>'. __( 'Pricing', 'wp-listings-pro') .'</h3>';
	echo '<hr>';

	// Listing Price.
	echo '<label><strong>' . __('Price:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_price]" id="wp_listings[_listing_price]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_price', true ) ) . '"></p>';
	echo '<p class="description">'. __( 'Listing Price.', 'wp-listings-pro') .'</p>';


	// Sold Price.
	echo '<label><strong>' . __('Sold Price:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_sold_price]" id="wp_listings[_listing_sold_price]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_sold_price', true ) ) . '"></p>';
	echo '<p class="description">'. __( 'Sold Price.', 'wp-listings-pro') .'</p>';

	// Sold Date
	echo '<label><strong>' . __('Sold Date:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_sold_date]" id="wp_listings[_listing_sold_date]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_sold_date', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Rent Price.
	echo '<label><strong>' . __('Rent Price:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_rent_price]" id="wp_listings[_listing_rent_price]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_rent_price', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

		// Hide Price from Visitors?
	echo '<label><strong>' . __('Hide Price:','wp-listings-pro') . '</strong></label>';
	wp_nonce_field( 'wp-hide-price-action', 'wp-hide-price-name' );
	echo '<p><input type="checkbox" name="wp_listings[_listing_hide_price]" value="1" '. checked( get_post_meta( $post->ID, '_listing_hide_price', true ), 1, 0 ) .' /></p>';
	echo '<p class="description">'. __( 'Hide the price from visitors?', 'wp-listings-pro') .'</p>';

	// Alt Text for Price.
	echo '<label><strong>' . __('Alternate Text to Display:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_price_alt]" style="width: 80%" value="'. htmlentities( get_post_meta( $post->ID, '_listing_price_alt', true ) ) .'" /></p>';
	echo '<p class="description">'. __( 'Text to display instead of price (or leave blank)', 'wp-listings-pro') .'</p>';

	echo '</div>';

	echo '<div style="width: 45%; float: left;">';

	echo '<h3>'. __( 'Location', 'wp-listings-pro') .'</h3>';
	echo '<hr>';

	// Address.
	echo '<label><strong>' . __('Address:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_address]" id="wp_listings[_listing_address]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_address', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// City.
	echo '<label><strong>' . __('City:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_city]" id="wp_listings[_listing_city]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_city', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// County.
	echo '<label><strong>' . __('County:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_county]" id="wp_listings[_listing_county]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_county', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// State.
	echo '<label><strong>' . __('State:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_state]" id="wp_listings[_listing_state]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_state', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Country.
	echo '<label><strong>' . __('Country:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_country]" id="wp_listings[_listing_country]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_country', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Zip.
	echo '<label><strong>' . __('Zip:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_zip]" id="wp_listings[_listing_zip]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_zip', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Location.
	echo '<label><strong>' . __('Location:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_location]" id="wp_listings[_listing_location]" style="width:80%" class="" value="' . htmlentities( get_post_meta( $post->ID, '_listing_location', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	echo '</div>';

	echo '<div style="width: 90%; float: left;">';

	echo '<h3>'. __( 'Extended Details', 'wp-listings-pro') .'</h3>';
	echo '<hr>';


	// MLS.
	echo '<label><strong>' . __('MLS:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_mls]" id="wp_listings[_listing_mls]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_mls', true ) ) . '">';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Open House.
	echo '<label><strong>' . __('Open House:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_open_house]" id="wp_listings[_listing_open_house]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_open_house', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Year Built.
	echo '<label><strong>' . __('Year Built:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_year_built]" id="wp_listings[_listing_year_built]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_year_built', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Floors
	echo '<label><strong>' . __('Floors:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_floors]" id="wp_listings[_listing_floors]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_floors', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// SQFT
	echo '<label><strong>' . __('SqFt:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_sqft]" id="wp_listings[_listing_sqft]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_sqft', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Lot SqFT
	echo '<label><strong>' . __('Lot SqFT:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_lot_sqft]" id="wp_listings[_listing_lot_sqft]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_lot_sqft', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Bedrooms.
	echo '<label><strong>' . __('Bedrooms:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_bedrooms]" id="wp_listings[_listing_bedrooms]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_bedrooms', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Bathrooms.
	echo '<label><strong>' . __('Bathrooms:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_bathrooms]" id="wp_listings[_listing_bathrooms]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_bathrooms', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Half Bath.
	echo '<label><strong>' . __('Half Bath:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_half_bath]" id="wp_listings[_listing_half_bath]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_half_bath', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Garage.
	echo '<label><strong>' . __('Garage:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_garage]" id="wp_listings[_listing_garage]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_garage', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// Pool.
	echo '<label><strong>' . __('Pool:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_pool]" id="wp_listings[_listing_pool]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_pool', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// Living Space.
	echo '<label><strong>' . __('Living Space:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_living_space]" id="wp_listings[_listing_living_space]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_living_space', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Land Size.
	echo '<label><strong>' . __('Land Size:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_land_size]" id="wp_listings[_listing_land_size]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_land_size', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Currency.
	echo '<label><strong>' . __('Currency:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_list_currency]" id="wp_listings[_listing_list_currency]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_list_currency', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// Lot Size.
	echo '<label><strong>' . __('Lot Size:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_lotsize]" id="wp_listings[_listing_lotsize]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_lotsize', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// Scenery.
	echo '<label><strong>' . __('Scenery:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_scenery]" id="wp_listings[_listing_scenery]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_scenery', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Community.
	echo '<label><strong>' . __('Community:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_community]" id="wp_listings[_listing_community]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_community', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Recreation.
	echo '<label><strong>' . __('Recreation:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_recreation]" id="wp_listings[_listing_recreation]" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_recreation', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// General.
	echo '<label><strong>' . __('General:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_general]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_general', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Inclusions.
	echo '<label><strong>' . __('Inclusions:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_inclusions]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_inclusions', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// Parking
	echo '<label><strong>' . __('Parking:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_parking]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_parking', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Rooms.
	echo '<label><strong>' . __('Rooms:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_rooms]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_rooms', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Laundry
	echo '<label><strong>' . __('Laundry:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_laundry]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_laundry', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Utilities
	echo '<label><strong>' . __('Utilities:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_utilities]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_utilities', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';


	// Virtual Tour
	echo '<label><strong>' . __('Virtual Tour:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_virtualtour]" id="" class="" style="width:80%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_virtualtour', true ) ) . '"></p>';
	echo '<p class="description">'. __( '', 'wp-listings-pro') .'</p>';

	// Custom Overlay Text.
	echo '<label><strong>' . __('Custom Overlay Text:','wp-listings-pro') . '</strong></label>';
	echo '<p><input type="text" name="wp_listings[_listing_text]" style="width: 80%" value="' . htmlentities( get_post_meta( $post->ID, '_listing_text', true ) ) .'" /></p>';
	echo '<p class="description">'. __( 'Custom text to display as overlay on featured listings.', 'wp-listings-pro') .'</p>';

	echo '<label><strong>' . __('Video Embed:','wp-listings-pro') . '</strong></label>';

	echo '</div>';

	// Video Embed.
	echo '<p><input type="text" name="wp_listings[_listing_video]" style="width:72%;" value="' . htmlentities( get_post_meta( $post->ID, '_listing_video', true ) ) . '"></p>'; // 0.8 * 0.9 = 0.72. Also, so for some really annoying reason, I cannot get this fricking element to move into the div above. I have no idea why.

	echo '<p class="description">'. __( 'Enter Video or Virtual Tour Embed Code.', 'wp-listings-pro') .'</p>';
